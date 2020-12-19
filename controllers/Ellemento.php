<?php
class Ellemento extends CI_Controller{

	public function index(){
		$data['konten']="Ellemento";
		$this->load->view("Ellemento");

		
	}

}