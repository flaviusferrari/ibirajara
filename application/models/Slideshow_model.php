<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow_model extends CI_Model
{
    
    /**
     * Busca os Slides cadastrados
     */
    public function getSlides()
    {
        $this->db->where('dtFinal >=', date('Y-m-d'));
        $this->db->where('dtInicio <=', date('Y-m-d'));
        
        $this->db->order_by('dtFinal');
        
        $query = $this->db->get('slides');
        
        return $query->result_array();
    }
    
    // ------------------------------------------------------------
    
    /**
     * Verifica o nome do evento
     */
    public function getEvento($idEvento)
    {
        $this->db->select('evento');
        $this->db->where('id', $idEvento);
        
        $query = $this->db->get('eventos');
        
        $evento = $query->row_array();
        
        return $evento['evento'];
    }
    
    
    
} // end class