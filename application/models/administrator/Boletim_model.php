<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Boletim_model extends CI_Model 
{
    /**
     * 
     * @return type
     */
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
    
    // ------------------------------------------------------------------------
    
    /**
     * MÉTODO SALVAR BOLETIM
     * 
     *  Efetua a gravação do Boletim no Banco de Dados
     * @return type
     */
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
            'livro'    => $this->input->post('livro'),
            'numero'   => $this->input->post('numero')
        );

        return $this->db->insert('boletim', $data);
    }
    
    // -------------------------------------------------------------------------
    
    /**
     *  MÉTODO BUSCA DADOS BOLETIM 
     * 
     *  Busca os dados do boletim
     */
    public function buscaDadosBoletim($id)
    {
        // Efetua a consulta
        $this->db->where('id', $id);
        $query = $this->db->get('boletim');
        
        return $query->row_array();
    }
    
    // -------------------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA BOLETM 
     * 
     *  Localiza o título do boletim 
     */
    public function localiza_boletim($termo)
    {
        $sql = "SELECT id, titulo FROM boletim WHERE titulo LIKE '%$termo%'";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    // ----------------------------------------------------------------
    
    /**
     * MÉTODO ATUALIZAR
     * 
     *  Atualiza os dados do boletim
     */
    public function atualizar()
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
            'livro'    => $this->input->post('livro'),
            'numero'   => $this->input->post('numero')
        );
         
        $this->db->where('id', $this->input->post('idBoletim'));

        return $this->db->update('boletim', $data);
    }
    
    // ------------------------------------------------------------------------
    
    /**
     * MÉTODO UPDATE BOLETIM PDF
     * 
     * 
     */
    public function updateBoletimPdf($idBoletim, $arquivo)
    {
        $data = array(
            'arquivo' => $arquivo             
        );
         
        $this->db->where('id', $idBoletim);

        return $this->db->update('boletim', $data);        
    }
    
}

    