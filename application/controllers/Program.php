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
		$query = $this->program_sub_model->info(array('slug' => $this->uri->segment(2)));
		
		if ($query->code == 200)
		{
			$program = $query->result; 
		}
		else
		{
			$query2 = $this->program_model->info(array('slug' => $this->uri->segment(2)));
			
			if ($query2->code == 200)
			{
				$program = $query2->result; 
			}
		}
		
		$data['program'] = (object) $program;
		$data['view_content'] = 'program/index';
		$this->display_view('templates/frame', $data);
	}
}
