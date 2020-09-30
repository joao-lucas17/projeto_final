<?php

class login_model extends CI_Model{
    
    var $nome;
    var $login;
    var $senha;
    var $tipo;
    
    public function inserirDados(){
        $this->nome = $this->input->post("campo_cadastro");
        $this->login = $this->input->post("campo_login");
        $this->senha = md5($this->input->post("campo_senha"));
        $this->tipo = $this->input->post("campo_tipo");
        
       
        
        $this->db->insert("usuario",$this);
    }
}
