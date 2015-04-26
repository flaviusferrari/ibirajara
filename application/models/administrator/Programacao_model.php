<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Programacao_model extends CI_Model 
{
    
    public function salvar_programacao()
    {
        $dia = str_replace('/', '-', $this->input->post('data'));
        $dia = date('Y-m-d', strtotime($dia));
        
         $data = array(
            'data' => $dia,
            'tema' => $this->input->post('tema'),
            'subsidio' => $this->input->post('subsidio'),
            'expositor' => $this->input->post('expositor')
        );

        return $this->db->insert('programacao', $data);
    }
    
    
}