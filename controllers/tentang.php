<?php
class tentang extends CI_Controller{

	public function index(){
		$data['konten']="tentang";
		$this->load->view("tentang");

		
	}

}