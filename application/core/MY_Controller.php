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
        if ($query->code == 200)
        {
            $about_us = substr($query->result->content, 0, 200);
        }
        
        $query2 = $this->program_model->lists(array('order' => 'name', 'sort' => 'asc'));
        
        if ($query2->code == 200)
        {
            foreach ($query2->result as $key => $val)
            {
                $program[$key] = $val;
                $query3 = $this->program_sub_model->lists(array('id_program' => $val->id_program));
                
                if ($query3->code == 200)
                {
                    $program[$key]->program_sub = $query3->result;
                }
            }
        }
        
        $this->global_data['about_us'] = $about_us;
        $this->global_data['program_nav'] = $program;
        $data = array_merge($this->global_data, $local_data);
        
        return $this->load->view($view, $data);
    }
}
