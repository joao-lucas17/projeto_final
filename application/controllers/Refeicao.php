<?php

class Refeicao extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
        $this->template->set("menu", "Cadastro");
        $this->template->set("submenu", "Refeição");
    }
    
    public function index(){
        
        $crud = new Grocery_CRUD();
        $crud->set_table("refeicao");
        $crud->set_subject("refeicao");
        $crud->display_as("observacao", 'Observação');
        $crud->unset_texteditor("observacao");
            
        $crud->columns("dia", "tipo", "cardapio_idcardapio", "quantidade_pessoas", "observacao");
        $crud->set_relation("cardapio_idcardapio", "cardapio", "nome");
        $crud->display_as("cardapio_idcardapio", "Cardapio");
        
        $form = $crud->render();
        $this->template->load("template/adminlte/admin", "crud/index", $form);
    }
        
}
