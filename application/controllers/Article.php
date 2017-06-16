<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	
	public function index($slug = null){


		if(is_null($slug)){
			show_error("dasd ddadasd adas");
		}


		$query = $this->db->get_where('articles', array('slug' => $slug));

		if($query->num_rows() == 0){
			show_error("no article found");
		}

		$article = $query->row();

		//update view count
		$this->db->where('id', $article->id);
		$this->db->set('view_count', 'view_count+1', FALSE);
		$this->db->update('articles');

		$data['article'] = $article;

		$this->load->view('article', $data);
		
	}


	public function search(){


		
	}


	public function save(){

		log_message('error',json_encode($this->input->post()));

		$data = array();

		if($this->input->post('title')){
			$data['title'] = $this->input->post('title');
		}

		if($this->input->post('content')){
			$data['content'] = $this->input->post('content');
		}


		


		$this->db->where('id' , 1);
		$this->db->update('articles', $data );


	}
}
