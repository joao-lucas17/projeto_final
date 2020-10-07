<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view("filtro/filtro");
    }

    public function desperdicio() {
        $this->db->join("desperdicio", "refeicao.idrefeicao = desperdicio.refeicao_idrefeicao");
        $this->db->join("cardapio", "refeicao.cardapio_idcardapio = cardapio.idcardapio");
        $dados["dados"] = $this->db->get("refeicao")->result();
        $this->load->view("relatorio/desperdicio", $dados);
    }

}
