<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __contruct(){
		parent::__construct();
	}

	public function index() {
		$bullets = json_decode(
			file_get_contents('https://api.auditta.com.br/bullets')
		);
		$page_data['bullets'] = $bullets->bulletList;

		$this->load->view('homepage', $page_data);
	}
	
	public function clients() {
		$this->load->view('clients');
	}

	public function services() {
		$this->load->view('services');
	}

	public function contact() {
		$this->load->view('contact');
	}
}
