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
        
        $query = $this->db->get('slides');
        
        return $query->result_array();
    }
    
    
    
    
} // end class