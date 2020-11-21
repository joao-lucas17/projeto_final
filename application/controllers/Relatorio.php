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


    public function desperdicio() {
        $this->db->join("desperdicio", "refeicao.idrefeicao = desperdicio.refeicao_idrefeicao");
        $this->db->join("cardapio", "refeicao.cardapio_idcardapio = cardapio.idcardapio");
        $dados["dados"] = $this->db->get("refeicao")->result();        
        $this->template->load("template/adminlte/admin", "relatorio/desperdicio", $dados);
    }
    
    public function grafico(){
     
        $dataInicial = implode("-", array_reverse(explode("/", $this->input->post('data_inicio'))));
        $dataFinal = implode("-", array_reverse(explode("/", $this->input->post('data_final'))));
        
        $resultado = $this->relatorio_model->getDesperdicioByDate('','');     
        $dados1 = $this->_getDataGrafico1($resultado, 'labels_bar1', 'data_bar1');        
        
        $resultado2 = $this->relatorio_model->getDesperdicioValor('','');
        $dados2 = $this->_getDataGrafico1($resultado2, 'labels_bar2', 'data_bar2');        
//        
	$dias["dias"] = $this->relatorio_model->getDias();   
               
        $porcentagens["dados"] = $this->relatorio_model->getPorcetagemDesperdicio($dataInicial, $dataFinal);

        $dados3 = array_merge($dados1, $dados2, $dias, $porcentagens);
        $this->template->load("template/adminlte/admin", "relatorio/grafico", $dados3);
    }
    
    function grafico_ajax(){
        $dataInicial = implode("-", array_reverse(explode("/", $this->input->post('data_inicio'))));
        $dataFinal = implode("-", array_reverse(explode("/", $this->input->post('data_final'))));
        
        
        $resultado = $this->relatorio_model->getDesperdicioByDate($dataInicial,$dataFinal);
        $graficos['graph1'] = $this->_getDataGrafico1Ajax($resultado);
        
        $resultado2 = $this->relatorio_model->getDesperdicioValor($dataInicial,$dataFinal);
        $graficos['graph2'] = $this->_getDataGrafico1Ajax($resultado2);
        
        $resultado3 = $this->relatorio_model->getDesperdicioByTipoRefeicao($dataInicial,$dataFinal);
        $graficos['graph4'] = $this->_getDataGrafico1Ajax($resultado3);
        
        $resultado4 = $this->relatorio_model->getPessoasAtendidasPorDia($dataInicial,$dataFinal);
        $graficos['graph5'] = $this->_getDataGrafico1Ajax($resultado4);
                                              
        echo json_encode($graficos);        
//      
    }
    public function _getDataGrafico1Ajax($resultado){        
        $labels = [];
        $data = [];
        foreach($resultado as $row){
            $labels[] =  $row->dia;
            $data[] = floatval($row->total);
        }
       $result['label'] = $labels;
       $result['data'] = $data;
       return $result;
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
        $data_inicial = implode('-', array_reverse(explode('/', "18/09/2020")));
        $data_final = implode('-', array_reverse(explode('/', "22/09/2020")));
        
        $porcentagens["dados"] = $this->relatorio_model->getPorcetagemDesperdicio($data_inicial, $data_final);
        return var_dump($porcentagens);
    }
    

}
