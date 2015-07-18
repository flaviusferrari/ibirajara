<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Programacao_model extends CI_Model
{



    /**
        * Métod localizarProgramacao()
        *   localiza a empresa
        * 
        * @param type $nome
        * @return boolean
        */
    public function localizaProgramacao($mes, $ano)
    {
        $dtInicio = $ano.'-'.$mes.'-01';
        $dtFim    = $ano.'-'.$mes.'-31';        
        
        $this->db->where('data >=', $dtInicio);
        $this->db->where('data <=', $dtFim);
        
        $query = $this->db->get('programacao');
        
        return $query->result_array();
    }
    
}