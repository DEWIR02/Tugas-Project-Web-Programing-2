<?php
class pemesanan extends CI_Controller{

	public function index(){
		$data['konten']="pemesanan";
		$this->load->view("pemesanan");

		
	}

}