<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->template->set("titulo", "Relatório de desperdicio");
        $this->load->model('relatorio_model');
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
        $resultado = $this->relatorio_model->getDesperdicioByDate('2020-09-18','2020-09-22');
        $dados1 = $this->_getDataGrafico1($resultado, 'labels_bar1', 'data_bar1');        
        
        $resultado2 = $this->relatorio_model->getDesperdicioValor('2020-09-18','2020-09-22');
        $dados2 = $this->_getDataGrafico1($resultado2, 'labels_bar2', 'data_bar2');        
//        
	$dias["dias"] = $this->relatorio_model->getDias();   
        
        $dados3 = array_merge($dados1, $dados2, $dias );
        $this->template->load("template/adminlte/admin", "relatorio/grafico", $dados3);
    }
    
    public function _getDataGrafico1($resultado, $name_label, $name_data){        
        $labels = [];
        $data = [];
        foreach($resultado as $row){
            $labels[] =  $row->dia;
            $data[] = floatval($row->total);
        }
       $result[$name_label] = json_encode($labels);
       $result[$name_data] = json_encode($data);
       return $result;
    }
    
    public function teste(){
        $this->relatorio_model->getPorcetagemDesperdicio();
    }
    

}
