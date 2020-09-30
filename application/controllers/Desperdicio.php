<?php


class Desperdicio extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }
    
    public function index(){
        
        $crud = new Grocery_CRUD();
        $crud->set_table("desperdicio");
        $crud->set_subject("desperdicio");
            
        $crud->set_relation("refeicao_idrefeicao", "refeicao", "dia");
        $crud->display_as("refeicao_idrefeicao", "Refeição");
        
        $form = $crud->render();
        $this->template->load("template/template_restrito", "crud/index", $form);
    }
    
   
    
}
