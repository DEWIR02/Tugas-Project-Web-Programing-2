<?php
class buka extends CI_Controller{

	public function index(){
		$data['konten']="buka";
		$this->load->view("buka");

		
	}

}