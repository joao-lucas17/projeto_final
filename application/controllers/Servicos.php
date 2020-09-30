<?php


class Servicos extends CI_Controller{
    
    public function index(){
        $this->template->load("servico/servicos", "servico/servico");
    }
    
    
}
