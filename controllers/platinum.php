<?php
class platinum extends CI_Controller{

	public function index(){
		$data['konten']="platinum";
		$this->load->view("platinum");

		
	}

}