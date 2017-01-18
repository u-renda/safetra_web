<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()
    {
        parent::__construct();
		//$this->load->model('admin_model');
    }
	
	function index()
	{
		$data = array();
		$data['view_content'] = 'login/index';
		$this->display_view('templates/frame', $data);
	}
}
