<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		

		$data['articles'] = $this->get_articles_by_categories();
		$this->load->view('welcome_message', $data);
	}

	private function get_articles_by_categories(){


		$sql = 'SELECT a.title, a.slug,c.name,c.slug as cslug FROM articles a
		LEFT JOIN categories c ON (c.id = a.category_id)
		WHERE c.show_on_home =1 ORDER BY a.view_count DESC';

		$query = $this->db->query($sql);

		$categories = array();
		$articles = array();

		foreach ($query->result() as $row) {

			if(!in_array($row->cslug, $categories)){
				$categories[] = $row->cslug;
				$articles[$row->cslug] = array('name' => $row->name,'url' => $row->cslug);
			}

			$articles[$row->cslug]['articles'][] = array('title' => $row->title, 'url' => $row->slug);
			
		}


		return $articles;
	}
}
