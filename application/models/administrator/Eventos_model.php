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
    
    
    /**
        * Método atualizarEvento()
        *  atualiza o Evento selecionado
        */
    public function atualizarEvento()
    {
        $data = array(
            'data'        => $this->tdate->setDateBd($this->input->post('data')),
            'titulo'      => $this->input->post('titulo'),
            'evento'      => url_title(convert_accented_characters($this->input->post('titulo')), 'dash', TRUE),
            'descricao'   => $this->input->post('descricao'),
            'horarios'    => $this->input->post('horario'),
            'programacao' => $this->input->post('programacao')
        );
        
        $this->db->where('id', $this->input->post('idEvento'));
        
        return $this->db->update('eventos', $data);
    }
    
    
    /**
        * Método locolizaEvento()
        *  localiza o título do boletim 
        * 
        */
    public function localizaEvento($termo)
    {
        $this->db->select('id, titulo');
        $this->db->like('titulo', $termo);
        $query = $this->db->get('eventos');
        
        return $query->result_array();
    }
    
    
    /**
        *  Método buscaDadosEvento()
        *    busca os dados do boletim
        */
    public function buscaDadosEvento($id)
    {
        // Efetua a consulta
        $this->db->where('id', $id);
        $query = $this->db->get('eventos');
        
        return $query->row_array();
    }
    
}
