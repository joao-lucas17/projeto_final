<?php

class relatorio_model extends CI_Model {

    public function buscarTodos() {
        return $this->db->get("refeicao")->result_array();
    }

    public function getDias() {
        $this->db->select("idrefeicao, dia");
        $this->db->order_by("dia");
        $this->db->group_by("dia");
        return $this->db->get("refeicao")->result();
    }

    public function getDiasPeso() {
        return json_encode($this->db->get("refeicao")->result_array());
    }
    
    public function getDesperdicioByDate($inicio, $final){
        $this->db->select("date_format(dia, '%d/%m/%Y') as dia, sum(peso) as total");
        $this->db->join("refeicao", "desperdicio.refeicao_idrefeicao = refeicao.idrefeicao");
        $this->db->where( "dia BETWEEN '$inicio' AND '$final'", NULL, FALSE );        
        $this->db->group_by("refeicao.dia");
        $this->db->order_by('refeicao.dia', 'ASC');
        return $this->db->get("desperdicio")->result();
    }
    
    public function getDesperdicioByTipoRefeicao($inicio, $final){
        $this->db->select("tipo as dia, sum(peso) as total");
        $this->db->join("refeicao", "desperdicio.refeicao_idrefeicao = refeicao.idrefeicao");
        $this->db->where( "dia BETWEEN '$inicio' AND '$final'", NULL, FALSE );        
        $this->db->group_by("tipo");
        $this->db->order_by('refeicao.dia');
        return $this->db->get("desperdicio")->result();
    }
    
    public function getPessoasAtendidasPorDia($inicio, $final){
        $this->db->select("date_format(dia, '%d/%m/%Y') as dia, sum(quantidade_pessoas) as total");
        $this->db->join("refeicao", "desperdicio.refeicao_idrefeicao = refeicao.idrefeicao");
        $this->db->where( "dia BETWEEN '$inicio' AND '$final'", NULL, FALSE );        
        $this->db->group_by("refeicao.dia");
        $this->db->order_by('refeicao.dia');
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
    
    public function getPorcetagemDesperdicio($dataInicial, $dataFinal){
        $query = $this->db->query("
        select date_format(dia, '%d/%m/%Y') as dia, round(desperdicio_dia / total_desperdicado * 100, 2) as total from 
            ((select sum(peso) as total_desperdicado from desperdicio
             inner join refeicao on desperdicio.refeicao_idrefeicao = refeicao.idrefeicao
             where dia between '$dataInicial' and '$dataFinal') desperdicio_total),
    
            ((select sum(peso) as desperdicio_dia, dia from desperdicio
            inner join refeicao on desperdicio.refeicao_idrefeicao = refeicao.idrefeicao
            where dia between '$dataInicial' and '$dataFinal' group by dia order by dia) desperdicio_dia)	         
        ");
        return $query->result();
    }

}
