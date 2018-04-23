<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
		/*$user = json_decode(
			file_get_contents('http://example.com/index.php/api/user/id/1/format/json')
		);*/
		 
		/* echo $user->name; */
	}
}
