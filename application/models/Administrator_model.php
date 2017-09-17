<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Administrator_model extends CI_Model 
{

    public function __construct()
    {
        
    }
    
    
    
    public function salvar_boletim()
    {
        $dtInicio = str_replace('/', '-', $this->input->post('dtInicio'));
        $dtFim    = str_replace('/', '-', $this->input->post('dtFim'));
        
        $dtInicio = date('Y-m-d', strtotime($dtInicio));
        $dtFim    = date('Y-m-d', strtotime($dtFim));
        
         $data = array(
            'dtInicio' => $dtInicio,
            'dtFim'    => $dtFim,
            'titulo'   => $this->input->post('titulo'),
            'citacao'  => $this->input->post('citacao'),
            'texto'    => $this->input->post('texto'),
            'livro'    => $this->input->post('livro')             
        );

        return $this->db->insert('boletim', $data);
    }
    
    
    /**
        *  Método buscaDadosBoletim()
        *    busca os dados do boletim
        */
    public function buscaDadosBoletim($id)
    {
        // Efetua a consulta
        $this->db->where('id', $id);
        $query = $this->db->get('boletim');
        
        return $query->row_array();
    }

    

    /**
        * Método Localiza_boletim()
        *  localiza o título do boletim 
        * 
        */
    public function localiza_boletim($termo)
    {
        $sql = "SELECT id, titulo FROM boletim WHERE titulo LIKE '%$termo%'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    
}
