<?php


class Cardapio extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }
    
    public function index(){
        
        $crud = new Grocery_CRUD();
        $crud->set_table("cardapio");
        $crud->set_subject("cardapio");
            
        $form = $crud->render();
        $this->template->load("template/template_restrito", "crud/index", $form);
    }
    
   
    
}