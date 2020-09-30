<?php


class Usuario extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model("usuario_model", "usuario");
    }


    //carrega a página View
    public function adicionar(){
        $this->load->view("usuario/formulario");
    }
    
    //Recupera os dados do formulário
    public function salvar(){
        $this->usuario->inserir();
        redirect(site_url("usuario/index"));
    }
    
    //busca os dados no banco de dados por meio do model
    public function index(){
        $resultado = $this->usuario->obterTodos();
        
        $vetor['usuarios'] = $resultado;
        $vetor['titulo'] = "Usuários cadastrados no banco de dados";
        $this->load->view("usuario/lista", $vetor);
    }
    
    public function excluir($codigo){
        $this->usuario->deletar($codigo);
        // echo $this->db->last_query();   Mostra a última consulta realizada 
        redirect(site_url("usuario/index"));
    }
    
    public function form_edit($codigo){
        $vetor["usuario"] = $this->usuario->pegaUsuarioPorId($codigo);
        $this->load->view("usuario/form_edit", $vetor);
    }
    
    public function atualizar(){
        $this->usuario->update();
        redirect(site_url("usuario/index"));
    }
}

