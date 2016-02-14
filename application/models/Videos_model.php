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
    
    // ---------------------------------------------------------------
    
    /**
     *  MÉTODO LAST VIDEO
     * 
     *    Obtém o último vídeo salvo
     */
    public function lastVideo()
    {
        $this->db->select_max('dtVideo');
        $query = $this->db->get('videos');
        
        return $query->row_array();
    }
    
    
}