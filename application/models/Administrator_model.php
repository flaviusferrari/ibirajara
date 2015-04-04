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
    
    
    public function salvar_programacao()
    {
        $dia = date('Y-d-m', strtotime($this->input->post('data')));
        
         $data = array(
            'data' => $dia,
            'tema' => $this->input->post('tema'),
            'subsidio' => $this->input->post('subsidio'),
            'expositor' => $this->input->post('expositor')
        );

        return $this->db->insert('programacao', $data);
    }
}
