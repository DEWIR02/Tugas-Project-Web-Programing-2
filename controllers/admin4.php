<?php
class admin4 extends CI_Controller{

    public function index(){
        $data['konten']="admin4";
        $this->load->view("admin4");

        
    }

}