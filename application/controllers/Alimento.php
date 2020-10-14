<?php


class Alimento extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }
    
    public function index(){
        
        $crud = new Grocery_CRUD();
        $crud->set_table("alimento");
        $crud->set_subject("alimento");
            
        $form = $crud->render();
        $this->template->load("template/adminlte/admin", "crud/index", $form);
    }
    
   
    
}
