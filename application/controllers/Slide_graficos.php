<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_graficos extends CI_Controller {
    
    public function consultaInicial2(){
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
    
    public function graficos_slide() {
        $dados3 = $this->consultaInicial2();
        $this->template->load("template/graficos/graficos", "relatorio/slide_grafico", $dados3);
    }
    
    }
?>