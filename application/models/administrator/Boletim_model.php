<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Boletim_model extends CI_Model 
{
    
    public function localizaBoletim()
    {
        // Verifica se foi enciada alguma Data Inicial
        if ($this->input->post('dtInicio'))
        {
            $dtInicio = $this->tdate->setDateBd($this->input->post('dtInicio'));            
        }
        else
        {
            $dtInicio = date('Y-m-d');           
        }
        $this->db->where('dtInicio >= ', $dtInicio);
        
        // Verifica se foi enciada alguma Data Final
        if ($this->input->post('dtFim'))
        {
            $dtFim    = $this->tdate->setDateBd($this->input->post('dtFim')); 
            $this->db->where('dtFim <= ', $dtFim);
        }
        
        $query = $this->db->get('boletim');
        
        return $query->result_array();
    }
    
    
    
    
}

    