<?php
class admin5 extends CI_Controller{

    public function index(){
        $data['konten']="admin5";
        $this->load->view("admin5");

        
    }

}