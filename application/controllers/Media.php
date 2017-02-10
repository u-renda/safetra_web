<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends MY_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('article_model');
    }
	
	function article_detail()
	{
		if ($this->uri->segment(3) == FALSE)
		{
			redirect($this->config->item('link_article'));
		}
		else
		{
			$query = $this->article_model->info(array('slug' => $this->uri->segment(3)));
			
			if ($query->code == 200)
			{
				$data = array();
				$result = $query->result;
				
				$temp = array();
				$temp['title'] = $result->title;
				$temp['slug'] = $result->slug;
				$temp['content'] = $result->content;
				$temp['media'] = $result->media;
				$temp['day'] = date('d', strtotime($result->created_date));
				$temp['month'] = date('M', strtotime($result->created_date));
				
				$data['article'] = (object) $temp;
				$data['view_content'] = 'media/article_detail';
				$this->display_view('templates/frame', $data);
			}
			else
			{
				redirect($this->config->item('link_article'));
			}
		}
	}
	
	function article_lists()
	{
		$data = array();
		$query = $this->article_model->lists(array('limit' => 5));
		
		$article = array();
		if ($query->code == 200)
		{
			foreach ($query->result as $row)
			{
				$strip = strip_tags($row->content);
				$new_content = substr($strip, 0, 300);
            
				if (strlen($strip) >= 300)
				{
					$new_content = substr($strip, 0, 750).' ...';
				}
				
				$temp = array();
				$temp['content_new'] = $new_content;
				$temp['title'] = $row->title;
				$temp['slug'] = $row->slug;
				$temp['created_date'] = date('d M Y', strtotime($row->created_date));
				$temp['media'] = $row->media;
				$article[] = (object) $temp;
			}
		}
		
		$data['article'] = (object) $article;
		$data['view_content'] = 'media/article_lists';
		$this->display_view('templates/frame', $data);
	}
}
