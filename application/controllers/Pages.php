<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __contruct(){
		parent::__construct();
	}

	public function index() {
		$this->load->view('homepage');
	}
}
