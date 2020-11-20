<?php


class Cardapio extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
        $this->template->set("menu", "Cadastro");
        $this->template->set("submenu", "Cardápio");
    }
    
    public function index(){
        
        $crud = new Grocery_CRUD();
        $crud->set_table("cardapio");
        $crud->set_subject("cardapio");
        $crud->set_relation_n_n("alimentos", "cardapio_alimento", "alimento", "cardapio_idcardapio", "alimento_idalimento", "nome", "ordem");
            
        $form = $crud->render();
        $this->template->load("template/adminlte/admin", "crud/index", $form);
    }
    
   
    
}
