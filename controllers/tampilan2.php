<?php
class tampilan2 extends CI_Controller{

	public function index(){
		$data['konten']="tampilan2";
		$this->load->view("tampilan2");

		
	}

}