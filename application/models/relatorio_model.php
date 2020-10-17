<?php

class relatorio_model extends CI_Model{
    
    public function buscarTodos(){
        return $this->db->get("refeicao")->result_array();
    }
    
    public function getDias()
	{
		$query = $this->db->select("idrefeicao, dia")->from("refeicao")->get();
		return $query->result();
	}
}
