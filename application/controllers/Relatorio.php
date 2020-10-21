<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->template->set("titulo", "Relatório de desperdicio");
        $this->template->set("menu", "Relatório");
        $this->template->set("submenu", "Desperdicio");
    }

    public function index() {
        $this->load->view("filtro/filtro");
    }

    public function desperdicio() {
        $this->db->join("desperdicio", "refeicao.idrefeicao = desperdicio.refeicao_idrefeicao");
        $this->db->join("cardapio", "refeicao.cardapio_idcardapio = cardapio.idcardapio");
        $dados["dados"] = $this->db->get("refeicao")->result();
        $this->template->load("template/adminlte/admin", "relatorio/desperdicio", $dados);
    }
    
    public function grafico(){     
        $this->load->model('relatorio_model');
	$dias["dias"] = $this->relatorio_model->getDias();
        $this->template->load("template/adminlte/admin", "relatorio/grafico", $dias);
    }

}
