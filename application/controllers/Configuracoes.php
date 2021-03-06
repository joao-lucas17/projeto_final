<?php


class Configuracoes extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
         $this->template->set("menu", "Cadastro");
        $this->template->set("submenu", "Configuração");
    }
    
    public function index(){
        
        $crud = new Grocery_CRUD();
        $crud->set_table("configuracoes");
        $crud->set_subject("configuração");
            
        $form = $crud->render();
        $this->template->load("template/adminlte/admin", "crud/index", $form);
    }
    
   
    
}
