<?php
class kunci extends CI_Controller{

	public function index(){
		$data['konten']="kunci";
		$this->load->view("kunci");

		
	}

}