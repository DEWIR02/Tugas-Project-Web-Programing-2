<?php
class login extends CI_Controller{

	public function index(){
		$data['konten']="login";
		$this->load->view("login");

		
	}

}