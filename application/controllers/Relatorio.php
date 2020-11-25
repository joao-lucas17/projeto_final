<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
        //$this->template->set("titulo", "Relatório de desperdicio");
        $this->load->model('relatorio_model');
        $this->template->set("menu", "Relatório");
        $this->template->set("submenu", "Desperdicio");
    }

    function getDadosRelatorioDesperdicio(){
        $this->db->join("desperdicio", "refeicao.idrefeicao = desperdicio.refeicao_idrefeicao");
        $this->db->join("cardapio", "refeicao.cardapio_idcardapio = cardapio.idcardapio");
        return $this->db->get("refeicao")->result();
    }
    public function desperdicio() {
        $dados["dados"] = $this->getDadosRelatorioDesperdicio();
        $this->template->load("template/adminlte/admin", "relatorio/desperdicio", $dados);
    }
    
    public function desperdicios() {
        $dados["dados"] = $this->getDadosRelatorioDesperdicio();
        $this->template->load("template/graficos/graficos", "relatorio/desperdicio", $dados);
    }

     public function graficos() {
         $dados3 = $this->consultaInicial();
        $this->template->load("template/graficos/graficos", "relatorio/grafico", $dados3);
     }
     
     public function consultaInicial(){
         $dataInicial = implode("-", array_reverse(explode("/", $this->input->post('data_inicio'))));
        $dataFinal = implode("-", array_reverse(explode("/", $this->input->post('data_final'))));

        $resultado = $this->relatorio_model->getDesperdicioByDate('', '');
        $dados1 = $this->_getDataGrafico1($resultado, 'labels_bar1', 'data_bar1');

        $resultado2 = $this->relatorio_model->getDesperdicioValor('', '');
        $dados2 = $this->_getDataGrafico1($resultado2, 'labels_bar2', 'data_bar2');
//        
        $dias["dias"] = $this->relatorio_model->getDias();

        $porcentagens["dados"] = $this->relatorio_model->getPorcetagemDesperdicio($dataInicial, $dataFinal);
        
        return array_merge($dados1, $dados2, $dias, $porcentagens);

     }
    
    public function grafico() {
        $dados3 = $this->consultaInicial();
        $this->template->load("template/adminlte/admin", "relatorio/grafico", $dados3);
    }

    function grafico_ajax() {
        $dataInicial = implode("-", array_reverse(explode("/", $this->input->post('data_inicio'))));
        $dataFinal = implode("-", array_reverse(explode("/", $this->input->post('data_final'))));

        if (!empty($dataInicial) && !empty($dataFinal)) {

            //Gráfico que mostra o valor da comida disperdiçada
            $resultado1 = $this->relatorio_model->getDesperdicioValor($dataInicial, $dataFinal);
            $graficos['graph1'] = $this->_getDataGrafico1Ajax($resultado1);

            //Gráfico corrigir
            $resultado2 = $this->relatorio_model->getPorcetagemDesperdicio($dataInicial, $dataFinal);            
            $graficos['graph2'] = $this->_getDataGrafico1Ajax($resultado2);

            //Gráfico que mostra o peso da comida disperdiçada por dia
            $resultado3 = $this->relatorio_model->getDesperdicioByDate($dataInicial, $dataFinal);
            $graficos['graph3'] = $this->_getDataGrafico1Ajax($resultado3);

            //Gráfico que mostra o peso da comida disperdiçada por refeição almoço/jantar
            $resultado4 = $this->relatorio_model->getDesperdicioByTipoRefeicao($dataInicial, $dataFinal);
            $graficos['graph4'] = $this->_getDataGrafico1Ajax($resultado4);

            //Gráfico que mostra quantas pessoas comeram por dia
            $resultado5 = $this->relatorio_model->getPessoasAtendidasPorDia($dataInicial, $dataFinal);
            $graficos['graph5'] = $this->_getDataGrafico1Ajax($resultado5);

            echo json_encode($graficos);
        } else {
            echo "Informe uma data";
        }
//      
    }

    public function _getDataGrafico1Ajax($resultado) {
        $labels = [];
        $data = [];
        foreach ($resultado as $row) {
            $labels[] = $row->dia;
            $data[] = floatval($row->total);
        }
        $result['label'] = $labels;
        $result['data'] = $data;
        return $result;
    }

    public function _getDataGrafico1($resultado, $name_label, $name_data) {
        $labels = [];
        $data = [];
        foreach ($resultado as $row) {
            $labels[] = $row->dia;
            $data[] = floatval($row->total);
        }
        $result[$name_label] = json_encode($labels);
        $result[$name_data] = json_encode($data);
        return $result;
    }

    public function teste() {
        $data_inicial = implode('-', array_reverse(explode('/', "18/09/2020")));
        $data_final = implode('-', array_reverse(explode('/', "22/09/2020")));

        $porcentagens["dados"] = $this->relatorio_model->getPorcetagemDesperdicio($data_inicial, $data_final);
        return var_dump($porcentagens);
    }

    public function teste2() {
        $dataInicial = '2020-09-01';
        $dataFinal = '2020-09-07';

        $data = $this->relatorio_model->getDesperdicioByTipoRefeicao($dataInicial, $dataFinal);
        $data1 = $this->_getDataGrafico1Ajax($data);
        echo $this->db->last_query();
        var_dump($data1);
    }

}
