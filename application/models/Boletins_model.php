<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Boletins_model extends CI_Model
{
    /**
     * LOCALIZA BOLETINS
     * 
     * @return type
     */
    public function localizaBoletim()
    {
        //$this->db->orderby('');
        
        $query = $this->db->get('boletim');
        
        return $query->result_array();
    }
    
}