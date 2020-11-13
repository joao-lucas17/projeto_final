<?php

class Login extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model("login_model", "login");
    }
    
    public function index(){
        $this->load->view("login/form");
    }
    
    public function recuperarSenha(){
        $this->load->view("login/recuperar");
    }
    
    public function entrar(){
        $login = $this->input->post("login1");
        $senha = $this->input->post("senha1");
        
        $this->db->where("login", $login);
        $this->db->where("senha", md5($senha));
        $query = $this->db->get("usuario");
       
        if($query->num_rows() == 1){
            $usuario = $query->row();
            $this->session->set_userdata("usuario", $usuario->nome);
            redirect("user/index");
        }else{     
            $this->session->set_flashdata("danger", "CPF ou senha inválidos!");
            
        }
        redirect("login/index");
    }
    
    public function sair(){
       $this->session->set_userdata("usuario", "");
       redirect("login/index");
    }


    
    
    
}
