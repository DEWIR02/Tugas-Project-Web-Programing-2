<?php
class admin1 extends CI_Controller{

	public function index(){
		$data['konten']="admin1";
		$this->load->view("admin1");

		
	}

}