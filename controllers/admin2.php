<?php
class admin2 extends CI_Controller{

	public function index(){
		$data['konten']="admin2";
		$this->load->view("admin2");

		
	}

}