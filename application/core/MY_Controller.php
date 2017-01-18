<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    var $global_data = array();

    function __construct()
    {
        parent::__construct();
    }

    function display_view($view, $local_data = array())
    {
        $this->load->model('preferences_model');
        $this->load->model('program_model');
        $this->load->model('program_sub_model');
        
        $query = $this->preferences_model->info(array('name' => 'about us'));
        
        $about_us = '';
        if ($query->num_rows() > 0)
        {
            $about_us = substr($query->row()->content, 0, 200);
        }
        
        $query2 = $this->program_model->lists(array('order' => 'name', 'sort' => 'asc'));
        
        if ($query2->num_rows() > 0)
        {
            $program = $query2->result_array();
            foreach ($program as $key => $val)
            {
                $query3 = $this->program_sub_model->lists(array('id_program' => $val['id_program']));
                
                if ($query3->num_rows() > 0)
                {
                    $program[$key]['program_sub'] = $query3->result();
                }
            }
        }
        
        $this->global_data['about_us'] = $about_us;
        $this->global_data['program_nav'] = $program;
        //print_r($this->global_data['program']);die();
        $data = array_merge($this->global_data, $local_data);
        
        return $this->load->view($view, $data);
    }
}
