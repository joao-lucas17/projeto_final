<?php

class relatorio_model extends CI_Model {

    public function buscarTodos() {
        return $this->db->get("refeicao")->result_array();
    }

    public function getDias() {
        $query = $this->db->select("idrefeicao, dia")->from("refeicao")->get();
        return $query->result();
    }

    public function getDiasPeso() {
        return json_encode($this->db->get("refeicao")->result_array());
    }
    
    public function getDesperdicioByDate($inicio, $final){
        $this->db->select("dia, sum(peso) as total");
        $this->db->join("refeicao", "desperdicio.refeicao_idrefeicao = refeicao.idrefeicao");
        $this->db->where( "dia BETWEEN '$inicio' AND '$final'", NULL, FALSE );        
        $this->db->group_by("dia");
        $this->db->order_by('dia');
        return $this->db->get("desperdicio")->result();
    }
    
    public function getDesperdicioValor($inicio, $final){
        $valor = $this->getValorKgComida();
        $dados = $this->getDesperdicioByDate($inicio, $final);
        foreach($dados as $row){
            $row->total = $row->total * $valor;
        }
        return $dados;
    }
    
    public function getValorKgComida(){
        $this->db->limit(1);
        $this->db->order_by('idconfiguracoes', "desc");
        $linha = $this->db->get("configuracoes")->row();
        return $linha->preco_kg;
    }
    
    public function getPorcetagemDesperdicio(){
        $query = "select dia, round(peso / total_desperdicado * 100, 2) as porcem from (
                    select dia, peso, total_desperdicado from desperdicio,  (
                    select sum(peso) as total_desperdicado from desperdicio
                    inner join refeicao on desperdicio.refeicao_idrefeicao = refeicao.idrefeicao
                    where dia between '2020-09-18' and '2020-09-22') t, refeicao
                    where refeicao_idrefeicao = refeicao.idrefeicao and
                    dia between '2020-09-18' and '2020-09-22'
                    group by dia
                    ) t";
        var_dump($this->db->query($query)->result());
    }

}
