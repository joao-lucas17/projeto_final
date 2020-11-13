<?php


class Site extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //$this->template->set("titulo", "Relatório de desperdicio");
        $this->load->model('relatorio_model');
    }
    public function index(){
        $this->db->join("desperdicio", "refeicao.idrefeicao = desperdicio.refeicao_idrefeicao");
        $this->db->join("cardapio", "refeicao.cardapio_idcardapio = cardapio.idcardapio");
        $dados["dados"] = $this->db->get("refeicao")->result();
        $this->template->load("template/teste", "relatorio/desperdicio", $dados);
        
              
        
    }
    
    
    
    
}
