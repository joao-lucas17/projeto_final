<?php

class Usuario_model extends CI_Model{
    
    var $nome;
    var $login;
    var $senha;
    
    public function inserir(){
        $this->nome = $this->input->post("nome");
        $this->login = $this->input->post("login");
        $this->senha = $this->input->post("senha");
        
        $this->db->insert("usuario",$this);
    }
    
    public function obterTodos(){
        return $this->db->get("usuario")->result();
    }
    
    public function deletar($codigoUsuario){
        $this->db->where("idusuario",$codigoUsuario);
        $this->db->delete("usuario");
    }
    
    public function pegaUsuarioPorId($id){
        $this->db->where("idusuario",$id);
        return $this->db->get("usuario")->row();
    }
    
    public function update(){
        $this->nome = $this->input->post("nome");
        $this->login = $this->input->post("login");
        $this->senha = $this->input->post("senha");
        
        $idusuario = $this->input->post("codigo");
        $this->db->where("idusuario", $idusuario);
        $this->db->update("usuario", $this);
    }
}

?>
