<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Biblioteca_model extends CI_Model 
{
    
    /**
     * 
     */
    public function cadastraAutor()
    {
        $dados = array(
            'nome' => $this->input->post('nomeAutor')
        );
        
        return $this->db->insert('autor', $dados);
    }
    
    // -----------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA AUTOR
     * 
     *  Localiza o autor no Banco de Dados
     */
    public function localizaAutor($termo)
    {
        $this->db->like('nome', $termo); 
        $query = $this->db->get('autor');
        return $query->result_array();
    }
    
    
}