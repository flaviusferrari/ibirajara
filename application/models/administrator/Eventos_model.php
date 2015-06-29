<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Eventos_model extends CI_Model
{
    
    public function salvar()
    {
        $data = array(
            'data'        => $this->tdate->setDateBd($this->input->post('data')),
            'titulo'      => $this->input->post('titulo'),
            'evento'      => url_title(convert_accented_characters($this->input->post('titulo')), 'dash', TRUE),
            'cartaz'      => url_title(convert_accented_characters($this->input->post('titulo')), 'dash', TRUE),
            'descricao'   => $this->input->post('descricao'),
            'horarios'    => $this->input->post('horario'),
            'programacao' => $this->input->post('programacao')
        );

        return $this->db->insert('eventos', $data);
    }
    
}
