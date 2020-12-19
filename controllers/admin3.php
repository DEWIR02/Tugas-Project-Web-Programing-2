<?php
class admin3 extends CI_Controller{

	public function index(){
		$data['konten']="admin3";
		$this->load->view("admin3");

		
	}

}