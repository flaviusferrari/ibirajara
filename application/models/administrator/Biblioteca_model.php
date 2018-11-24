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
    
    // -------------------------------------------------------
    
    /**
     *  MÉTODO GET ULTIMO LIVRO
     * 
     *  Recupera o número do último livro salvo
     */
    public function getUltimoLivro()
    {
        $this->db->select_max('id');
        
        $query = $this->db->get('livros');
        
        // Recebe o último ID cadastrado
        $id = $query->row_array();
        
        // Retorna a consulta
        return $id['id'];
    }
    
    // -----------------------------------------------------------------
    
    /**
     *  MÉTODO BUSCA DADOS LIVRO
     * 
     *  Busca os dados do livro
     */
    public function buscaDadosLivro($id)
    {
        $this->db->select(
                  'livros.id, '
                . 'livros.titulo, '
                . 'livros.idAutor, '
                . 'livros.resenha, '
                . 'autor.nome as autor, '
                . 'espirito.nome as espirito, '
                . 'espirito.id as idEspirito, '
                . 'editora.id as idEditora, '
                . 'editora.nome as editora'
            );
        
        // Efetua a consulta
        $this->db->where('livros.id', $id);
        
        $this->db->from('livros');
        $this->db->join('autor', 'autor.id = livros.idAutor', 'inner');
        $this->db->join('espirito', 'espirito.id = livros.idEspirito', 'inner');
        $this->db->join('editora', 'editora.id = livros.idEditora', 'inner');
        
        $query = $this->db->get();
        
        return $query->row_array();
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
    
    // -----------------------------------------------------------------
    
    /**
     * MÉTODO VERIFICA AUTOR
     * 
     *  Localiza o autor no Banco de Dados
     */
    public function verificaAutor($termo)
    {
        $this->db->where('nome', $termo); 
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
    
    // -------------------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA LIVRO TITULO 
     * 
     *  Localiza o título do boletim 
     */
    public function localizaLivroTitulo($termo)
    {
        $this->db->select('id, titulo');
        $this->db->like('titulo', $termo);
        
        $query = $this->db->get('livros');
        
        return $query->result_array();
    }
    
    
}