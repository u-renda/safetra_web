<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends MY_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('lowongan_model');
    }
	
	function index()
	{
		$data = array();
		
		$param = array();
		$query = $this->lowongan_model->lists($param);
		
		if ($query->code == 200)
		{
			$result = $query->result;
		}
		
		$data['result'] = $result;
		$data['view_content'] = 'lowongan/index';
		$this->display_view('templates/frame', $data);
	}
}
