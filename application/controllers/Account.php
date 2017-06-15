<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	
	public function login(){


		$this->load->view('account/login');
		
	}
}
