<?php


class Teste extends CI_Controller{
    
    public function index(){
        $this->template->load("template/adminlte/admin", "site/home");
    }
    
    
}
