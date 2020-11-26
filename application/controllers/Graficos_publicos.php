<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Graficos_publicos extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('relatorio_model');
         $this->template->set("menu", "Relatório");
        $this->template->set("submenu", "Desperdicio");
    }

    public function graficos() {
        $dados3 = $this->consultaInicial2();
        $this->template->load("template/graficos/graficos", "relatorio/grafico_publico", $dados3);
    }
         
    public function consultaInicial2(){
        $dataInicial = implode("-", array_reverse(explode("/", $this->input->post('data_inicio'))));
        $dataFinal = implode("-", array_reverse(explode("/", $this->input->post('data_final'))));

        $resultado = $this->relatorio_model->getDesperdicioByDate('', '');
        $dados1 = $this->_getDataGrafico2($resultado, 'labels_bar1', 'data_bar1');

        $resultado2 = $this->relatorio_model->getDesperdicioValor('', '');
        $dados2 = $this->_getDataGrafico2($resultado2, 'labels_bar2', 'data_bar2');
//        
        $dias["dias"] = $this->relatorio_model->getDias();

        $porcentagens["dados"] = $this->relatorio_model->getPorcetagemDesperdicio($dataInicial, $dataFinal);
        
        return array_merge($dados1, $dados2, $dias, $porcentagens);

     }
    
    public function grafico_slide() {
        $dados3 = $this->consultaInicial2();
        $this->template->load("template/graficos/graficos", "relatorio/slide_grafico", $dados3);
    }
    
    public function _getDataGrafico2($resultado, $name_label, $name_data) {
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
    
    public function getRelatorioDesperdicio(){
        $this->db->join("desperdicio", "refeicao.idrefeicao = desperdicio.refeicao_idrefeicao");
        $this->db->join("cardapio", "refeicao.cardapio_idcardapio = cardapio.idcardapio");
        return $this->db->get("refeicao")->result();
    }
    
    public function desperdicios() {
        $dados["dados"] = $this->getRelatorioDesperdicio();
        $this->template->load("template/graficos/graficos", "relatorio/desperdicio", $dados);
    }
    
    function graficos_ajax() {
        $dataInicial = implode("-", array_reverse(explode("/", $this->input->post('data_inicio'))));
        $dataFinal = implode("-", array_reverse(explode("/", $this->input->post('data_final'))));

        if (!empty($dataInicial) && !empty($dataFinal)) {

            //Gráfico que mostra o valor da comida disperdiçada
            $resultado1 = $this->relatorio_model->getDesperdicioValor($dataInicial, $dataFinal);
            $graficos['graph1'] = $this->_getDataGrafico2Ajax($resultado1);

            //Gráfico corrigir
            $resultado2 = $this->relatorio_model->getPorcetagemDesperdicio($dataInicial, $dataFinal);            
            $graficos['graph2'] = $this->_getDataGrafico2Ajax($resultado2);

            //Gráfico que mostra o peso da comida disperdiçada por dia
            $resultado3 = $this->relatorio_model->getDesperdicioByDate($dataInicial, $dataFinal);
            $graficos['graph3'] = $this->_getDataGrafico2Ajax($resultado3);

            //Gráfico que mostra o peso da comida disperdiçada por refeição almoço/jantar
            $resultado4 = $this->relatorio_model->getDesperdicioByTipoRefeicao($dataInicial, $dataFinal);
            $graficos['graph4'] = $this->_getDataGrafico2Ajax($resultado4);

            //Gráfico que mostra quantas pessoas comeram por dia
            $resultado5 = $this->relatorio_model->getPessoasAtendidasPorDia($dataInicial, $dataFinal);
            $graficos['graph5'] = $this->_getDataGrafico2Ajax($resultado5);

            echo json_encode($graficos);
        } else {
            echo "Informe uma data";
        }
//      
    }

    public function _getDataGrafico2Ajax($resultado) {
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
    
    }
?>