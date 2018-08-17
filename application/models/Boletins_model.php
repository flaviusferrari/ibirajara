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
        $this->db->select('id, dtInicio, titulo, numero');
        $this->db->order_by('dtInicio', 'DESC');
        
        $query = $this->db->get('boletim');
        
        return $query->result_array();
    }
    
    // ---------------------------------------------------------------
    
    /**
     * MÉTODO BUSCA DADOS BOLETIM
     * 
     *  Busca os dados do Boletim desejado
     */
    public function buscaDadosBoletim($idBoletim)
    {
        $this->db->select('titulo, citacao, texto, livro');
        
        $this->db->where('id', $idBoletim);
        
        $query = $this->db->get('boletim');
        
        return $query->row_array();
    }
    
}