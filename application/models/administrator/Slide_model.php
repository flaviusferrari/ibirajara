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
            'idImage'  => $idImagem,
            'evento'   => (empty($this->input->post('idEvento')))? '0': $this->input->post('idEvento'),
            'dtInicio' => $this->tdate->setDateBd($this->input->post('dtInicio')),
            'dtFinal'  => $this->tdate->setDateBd($this->input->post('dtFim'))
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
        
        $query = $this->db->get('slides');
        
        return $query->result_array();
    }
    
    
}

