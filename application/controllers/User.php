<?php


class User extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
        $this->template->set("menu", "Castrato");
        $this->template->set("submenu", "Usuário");
    }
    
    public function index(){
        
        $crud = new Grocery_CRUD();
        $crud->set_table("usuario");
        $crud->set_subject("Usuário");
        
        
        $crud->fields("nome", "login", "senha", "confirma", "tipo", "email");
        
        $crud->required_fields("nome", "login", "senha", "tipo");
        $crud->unique_fields();
        
        $crud->set_rules("confirma", "Confirma senha","matches[senha]|min_length[6]");
        $crud->set_rules("nome","Nome","min_length[5]");
        
        $crud->callback_before_insert(array($this, "remove_confirma"));
        
        $crud->field_type("senha", "password");
        $crud->field_type("confirma", "password");
        
        $crud->display_as("confirma", "Confirma senha");
        
        $crud->columns("nome", "tipo");
        
        //$crud->unset_delete();
        
        $form = $crud->render();
        $this->template->load("template/adminlte/admin", "crud/index", $form);
    }
    
    public function remove_confirma($post_array){
        unset($post_array['confirma']);
        $post_array["senha"] = md5($post_array["senha"]);
        return $post_array;
    }
    
}
