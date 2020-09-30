<?php

class Filtros_model extends CI_Model{
        
    public function pesquisar($data_inicio, $data_final){
    if($data_inicio != null){
        $this->db->where('dia >=' ,$data_inicio);
        $this->db->where('dia <=', $data_final);
    }
    return $this->db->get('refeicao')->result();
    }
    
    
    
}
    


