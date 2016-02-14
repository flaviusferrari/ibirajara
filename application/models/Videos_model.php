<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos_model extends CI_Model
{
    
    /**
     *  MÉTODO GET VIDEOS
     * 
     *    Busca todos os vídeos salvos no Banco de Dados
     */
    public function getVideos($qtd = 0, $inicio = 0)
    {
        if($qtd > 0) $this->db->limit($qtd, $inicio);
        
        $this->db->order_by('dtVideo', 'DESC');
        return $this->db->get('videos');
        
        //return $query->result_array();
    }
    
    // ---------------------------------------------------------------
    
    /**
     *  MÉTODO LAST VIDEO
     * 
     *    Obtém o último vídeo salvo
     */
    public function lastVideo()
    {
        $this->db->order_by('dtVideo', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('videos');
        
        return $query->row_array();
    }
    
    // ---------------------------------------------------------------
    
    /**
     *  MÉTODO LAST VIDEO
     * 
     *    Obtém o último vídeo salvo
     */
    public function video($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('videos');
        
        return $query->row_array();
    }
    
    
}