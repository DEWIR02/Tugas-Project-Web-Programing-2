<?php
class destra extends CI_Controller{

	public function index(){
		$data['konten']="destra";
		$this->load->view("destra");

		
	}

}