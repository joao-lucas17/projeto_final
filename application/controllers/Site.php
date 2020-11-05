<?php


class Site extends CI_Controller{
    
    public function index(){
        $this->db->join("desperdicio", "refeicao.idrefeicao = desperdicio.refeicao_idrefeicao");
        $this->db->join("cardapio", "refeicao.cardapio_idcardapio = cardapio.idcardapio");
        $dados["dados"] = $this->db->get("refeicao")->result();
        $this->template->load("template/teste", "relatorio/desperdicio", $dados);
        
        
    }
    
    
}
