<?php

class Slide_model extends CI_Model 
{
   
    /**
     * MÉTODO SALVAR
     * 
     */
    public function salvar($idImagem)
    {
        $data = array(
            'idImage'    => $idImagem,
            'titulo'     => $this->input->post('titulo'),
            'evento'     => (empty($this->input->post('idEvento')))? '0': $this->input->post('idEvento'),
            'prioridade' => $this->input->post('prioridade'),
            'dtInicio'   => $this->tdate->setDateBd($this->input->post('dtInicio')),
            'dtFinal'    => $this->tdate->setDateBd($this->input->post('dtFim'))
        );

        return $this->db->insert('slides', $data);
    }
    
    // ------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZAR
     * 
     *  Localiza os Slides desejados
     */
    public function localizar()
    {
        // Verifica se foi enviada alguma Data Inicial
        if ($this->input->post('dtInicio'))
        {
            $this->db->where('dtInicio >= ', $this->tdate->setDateBd($this->input->post('dtInicio')));            
        }
        
        // Verifica se foi enciada alguma Data Final
        if ($this->input->post('dtFim'))
        {
            $this->db->where('dtFinal <= ', $this->tdate->setDateBd($this->input->post('dtFim')));
        }
        
        // Verifica se foi enviado parte do Título
        if (!empty($this->input->post('titulo')))
        {
            $this->db->like('titulo', $this->input->post('titulo'));
        }
        
        $query = $this->db->get('slides');
        
        return $query->result_array();
    }
    
    // ----------------------------------------------------------------
    
    /**
     * MÉTODO EXIBIR
     * 
     *  Busca os dados do Slide desejado para poder exibir na tela
     */
    public function exibir($idSlide)
    {
        // Efetua a consulta
        $this->db->select(
                'slides.*,'
                . 'images.imgName,'
                . 'type.type'                
            );
        
        $this->db->where('slides.id', $idSlide);
        
        $this->db->from('slides');
        $this->db->join('images', 'images.id = slides.idImage', 'inner');
        $this->db->join('type', 'type.id = images.idType', 'inner');        
        
        $query = $this->db->get();
        
        return $query->row_array();
    }
    
    // -----------------------------------------------------------------
    
    /**
     * MÉTODO ATUALIZAR
     * 
     * 
     */
    public function atualizar()
    {
        $data = array(
            'titulo'     => $this->input->post('titulo'),
            'evento'     => (empty($this->input->post('idEvento')))? '0': $this->input->post('idEvento'),
            'prioridade' => $this->input->post('prioridade'),
            'dtInicio'   => $this->tdate->setDateBd($this->input->post('dtInicio')),
            'dtFinal'    => $this->tdate->setDateBd($this->input->post('dtFim'))
        );
        
        $this->db->where('id', $this->input->post('idSlide'));

        return $this->db->update('slides', $data);
    }

    // -----------------------------------------------------------------
    
    /**
     * MÉTODO RETORNA NOME EVENTO
     * 
     */
    public function retornaNomeEvento($idEvento)
    {
        $this->db->select('titulo');
        $this->db->where('id', $idEvento);
        $query = $this->db->get('eventos');
        
        $result = $query->row_array();
        
        return $result['titulo'];
    }
    
}

