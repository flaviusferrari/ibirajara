<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos_model extends CI_Model
{
    
    /**
     *  MÉTODO GET VIDEOS
     * 
     *    Busca todos os vídeos salvos no Banco de Dados
     */
    public function getVideos()
    {
        $this->db->order_by('dtVideo', 'DESC');
        $query = $this->db->get('videos');
        
        return $query->result_array();
    }
    
    
}