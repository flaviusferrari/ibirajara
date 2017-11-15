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
    
    
}

