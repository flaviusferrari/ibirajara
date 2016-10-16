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
            'evento' => $this->input->post('evento'),
            'dtInicio' => $this->tdate->setDateBd($this->input->post('dtInicio')),
            'dtFinal'  => $this->tdate->setDateBd($this->input->post('dtFim'))
        );

        return $this->db->insert('slides', $data);
    }
    
    
}

