<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('company_model');
		$this->load->model('member_course_model');
		$this->load->model('member_model');
    }
	
	function index()
	{
		$data = array();
		$data['view_content'] = 'login/index';
		$this->display_view('templates/frame', $data);
	}
	
	function register()
	{
		if ($this->input->post('submit') == TRUE)
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_perusahaan', 'nama perusahaan', 'required');
			$this->form_validation->set_rules('name', 'nama Anda', 'required');
			$this->form_validation->set_rules('phone_number', 'telp Anda', 'required');
			$this->form_validation->set_rules('course_type', 'tipe pelatihan', 'required');
			$this->form_validation->set_rules('course_name', 'nama pelatihan', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$response =  array('msg' => validation_errors(), 'type' => 'error');
				echo json_encode($response);
				exit();
			}
			else
			{
				// save data2 yang udah diisi
				$param = array();
				$param2 = array();
				$param3 = array();
				$param4 = array();
				
				$param4['name'] = $this->input->post('nama_perusahaan');
				$query5 = $this->company_model->create($param4);
				
				if ($query5->code == 200)
				{
					$id_company = $query5->result->id_company;
				}
				else
				{
					$param['slug'] = strtolower($this->input->post('nama_perusahaan'));
					$query = $this->company_model->info($param);
					$id_company = $query->result->id_company;
				}
				
				$param2['id_company'] = $id_company;
				$param2['name'] = $this->input->post('name');
				$param2['email'] = $this->input->post('email');
				$param2['phone_number'] = $this->input->post('phone_number');
				$param2['status'] = 1;
				$query2 = $this->member_model->create($param2);
				
				if ($query2->code == 200)
				{
					$promo_code = $this->input->post('promo_code');
					
					if ($promo_code != '')
					{
						$query4 = $this->promo_code_model->info(array('code' => $promo_code));
					
						if ($query4->code == 200)
						{
							$param3['id_promo_code'] = $query4->result->id_promo_code;
						}
					}
					
					$param3['id_member'] = $query2->result->id_member;
					$param3['course_type'] = $this->input->post('course_type');
					$param3['course_name'] = $this->input->post('course_name');
					$query3 = $this->member_course_model->create($param3);
					
					redirect($this->config->item('link_register_success'));
				}
			}
		}
		else
		{
			redirect($this->config->item('link_login'));
		}
	}
	
	function register_success()
	{
		$data = array();
		$data['view_content'] = 'login/register_success';
		$this->display_view('templates/frame', $data);
	}
}
