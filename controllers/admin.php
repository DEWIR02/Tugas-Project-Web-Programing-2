<?php
class admin extends CI_Controller{

	public function index(){
		$data['konten']="admin";
		$this->load->view("admin");

		
	}

}