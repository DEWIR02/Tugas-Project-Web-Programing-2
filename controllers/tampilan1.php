<?php
class tampilan1 extends CI_Controller{

	public function index(){
		$data['konten']="tampilan1";
		$this->load->view("tampilan1");

		
	}

}