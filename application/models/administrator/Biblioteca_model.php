<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Biblioteca_model extends CI_Model 
{
    
    /**
     * MÉTODO SALVAR
     * 
     *  Efetua a gravação do Livro no Banco de Dados
     * @return type
     */
    public function salvar()
    {        
        $data = array(
            'titulo'     => $this->input->post('titulo'),
            'idAutor'    => $this->input->post('idAutor'),
            'idEspirito' => $this->input->post('idEspirito'),
            'idEditora'  => $this->input->post('idEditora'),
            'resenha'    => $this->input->post('texto')
        );

        return $this->db->insert('livros', $data);
    }
    
    // -----------------------------------------------------------------
    
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
    
    // -------------------------------------------------------------------
    
    /**
     * MÉTODO CADASTRA ESPÍRITO
     * 
     *  Cadastra o Espírito no Banco de Dados
     */
    public function cadastraEspirito()
    {
        $dados = array(
            'nome' => $this->input->post('nomeEspirito')
        );
        
        return $this->db->insert('espirito', $dados);
    }
    
    // -----------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA ESPÍRITO
     * 
     *  Localiza o espírito no Banco de Dados
     */
    public function localizaEspirito($termo)
    {
        $this->db->like('nome', $termo); 
        $query = $this->db->get('espirito');
        return $query->result_array();
    }
    
    // -------------------------------------------------------------------
    
    /**
     * MÉTODO CADASTRA EDITORA
     * 
     *  Cadastra o Editora no Banco de Dados
     */
    public function cadastraEditora()
    {
        $dados = array(
            'nome' => $this->input->post('nomeEditora')
        );
        
        return $this->db->insert('editora', $dados);
    }
    
    // -----------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA EDITORA
     * 
     *  Localiza A Editora no Banco de Dados
     */
    public function localizaEditora($termo)
    {
        $this->db->like('nome', $termo); 
        $query = $this->db->get('editora');
        return $query->result_array();
    }
    
    
}