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

		$data['article'] = $query->row();

		$this->load->view('article', $data);
		
	}
}
