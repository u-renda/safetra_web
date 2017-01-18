<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('article_model');
		$this->load->model('client_model');
		$this->load->model('media_model');
		$this->load->model('preferences_model');
		$this->load->model('program_model');
		$this->load->model('testimony_model');
    }
	
	function about_us()
	{
		$data = array();
		$query = $this->program_model->lists(array('order' => 'name', 'sort' => 'asc'));
		
		$program = array();
		if ($query->num_rows() > 0)
		{
			$program = $query->result();
		}
		
		$data['admin'] = $this->admin();
		$data['vision'] = $this->vision();
		$data['mision'] = $this->mision();
		$data['program'] = $program;
		$data['view_content'] = 'home/about_us';
		$this->display_view('templates/frame', $data);
	}
	
	function admin()
	{
		$param = array();
		$param['role'] = 2;
		$param['order'] = 'name';
		$param['sort'] = 'asc';
		$query = $this->admin_model->lists($param);
		
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}
	
	function client()
	{
		$param = array();
		$param['limit'] = 8;
		$query = $this->client_model->lists($param);
		
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}
	
	function contact_us()
	{
		$data = array();
		$data['view_content'] = 'home/contact_us';
		$this->display_view('templates/frame', $data);
	}
	
	function index()
	{
		$data = array();
		$data['client'] = $this->client();
		$data['slider'] = $this->slider();
		$data['testimony'] = $this->testimony();
		$data['posts'] = $this->posts();
		$data['view_content'] = 'home/index';
		$this->display_view('templates/frame', $data);
		
		//$this->load->view('coming_soon', $data);
	}
	
	function mision()
	{
		$query = $this->preferences_model->info(array('name' => 'mision'));
		
		if ($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}
	}
	
	function posts()
	{
		$param = array();
		$param['limit'] = 3;
		$query = $this->article_model->lists($param);
		
		if ($query->num_rows() > 0)
		{
			$result = array();
			foreach ($query->result() as $row)
			{
				$strip = strip_tags($row->content);
				$new_content = substr($strip, 0, 300);
            
				if (strlen($strip) >= 300)
				{
					$new_content = substr($strip, 0, 300).' ...';
				}
			
				$temp = array();
				$temp['day'] = date('d', strtotime($row->created_date));
				$temp['month'] = date('M', strtotime($row->created_date));
				$temp['title'] = $row->title;
				$temp['slug'] = $row->slug;
				$temp['new_content'] = $new_content;
				$result[] =  (object) $temp;
			}
			
			return $result;
		}
		else
		{
			return array();
		}
	}
	
	function slider()
	{
		$param = array();
		$param['limit'] = 4;
		$query = $this->article_model->lists($param);
		$query2 = $this->media_model->lists($param);
		
		if ($query->num_rows() > 0)
		{
			$result = array();
			foreach ($query->result() as $row)
			{
				$explode = explode('.', $row->media);
				
				$temp = array();
				$temp['title'] = $row->title;
				$temp['slides'] = $explode[0].'_slides.'.$explode[1];
				$result[] = (object) $temp;
			}
			
			$result2 = array();
			foreach ($query2->result() as $row2)
			{
				$explode2 = explode('.', $row2->media_url);
				
				$temp2 = array();
				$temp2['title'] = $row2->name;
				$temp2['slides'] = $explode2[0].'_slides.'.$explode2[1];
				$result2[] = (object) $temp2;
			}
			
			$result3 = array_merge($result, $result2);
			$slice = array_slice($result3, 0, 4);
			
			return (object) $slice;
		}
		else
		{
			return array();
		}
	}
	
	function testimony()
	{
		$param = array();
		$param['limit'] = 2;
		$query = $this->testimony_model->lists($param);
		
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}
	
	function vision()
	{
		$query = $this->preferences_model->info(array('name' => 'vision'));
		
		if ($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}
	}
}
