<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends MY_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('program_model');
		$this->load->model('program_sub_model');
    }
	
	function index()
	{
		$data = array();
		$program_sub = '';
		$query2 = $this->program_model->info(array('slug' => $this->uri->segment(2)));
		
		if ($query2->code == 200)
		{
			$program = $query2->result;
			
			$query = $this->program_sub_model->lists(array('id_program' => $program->id_program));
			
			if ($query->code == 200)
			{
				$temp = $query->result;
				$program_sub = (object) $temp;
			}
		}
		else
		{
			$query3 = $this->program_sub_model->info(array('slug' => $this->uri->segment(2)));
			
			if ($query3->code == 200)
			{
				$program = $query3->result;
			}
		}
	
		$data['program'] = (object) $program;
		$data['program_sub'] = $program_sub;
		$data['view_content'] = 'program/index';
		$this->display_view('templates/frame', $data);
	}
}
