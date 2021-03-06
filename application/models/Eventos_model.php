<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Eventos_model extends CI_Model
{
    
    /**
        *  Método buscaProximosEventos()
        *  localiza os próximos eventos
        */
    public function buscaProximosEventos()
    {
        $data = date('Y-m-d');
        
        // Efetua a consulta
        $this->db->where('data >=', $data);
        $query = $this->db->get('eventos');
        
        
        return $query->result_array();
    }
    
    
    /**
        *  Método buscaEventosAnteriores()
        *  localiza os próximos eventos
        */
    public function buscaEventosAnteriores($qtd = 0, $inicio = 0)
    {
        $data = date('Y-m-d');
        
        if($qtd > 0) $this->db->limit($qtd, $inicio);
        
        // Efetua a consulta
        $this->db->where('data <', $data);
        return $this->db->get('eventos');
        
        //return $query->result_array();
    }
    
    
    /**
        *  Método exibeEvento()
        *   retorna os dados do evento a ser exibido
        * 
        * @param $idEvento = Id do Evento
        */
    public function exibeEvento($idEvento)
    {
        // Efetua a consulta
        $this->db->where('id', $idEvento);
        $query = $this->db->get('eventos');
        
        return $query->row_array();
    }
    
    /**
        *  Método buscaDadosEvento()
        *    busca os dados do boletim
        */
    public function buscaDadosEventoNome($nomeEvento)
    {
        // Efetua a consulta
        $this->db->where('evento', $nomeEvento);
        $query = $this->db->get('eventos');
        
        return $query->row_array();
    }
    
}