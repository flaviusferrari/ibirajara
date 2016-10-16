<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Image_model extends CI_Model
{
    
    /**
     * MÉTODO SET IMAGE
     * 
     *   Verifica se a cidade existe e efetua a gravação da mesma
     *   no Banco de Dados
     * 
     * @param type $city =  Nome da cidade
     */   
    public function setImage($imgName, $idType)
    {        
        // Recebe os dados a serem salvos        
        $data = array(
            'imgName' => $imgName,
            'idType'  => $idType
        );
        
        // Efetua a gravação e retorna o resultado
        $this->db->insert('images', $data);
    }
    
    // -----------------------------------------------------------------
    
    public function getDadosImagem($imgName)
    {
        $this->db->select('id, idType');
        $this->db->where('imgName', $imgName);
        
        $query = $this->db->get('images');
        
        return $query->row_array();
    }
    
    // -----------------------------------------------------------------
    
    /**
     * MÉTODO GET DADOS IMAGEM ID
     * 
     * 
     *  Busca os dados pelo ID da imagem
     * 
     * @param integer $idImage = ID da imagem
     * @return array
     */
    public function getDadosImagemId($idImage)
    {
        $this->db->where('id', $idImage);
        
        $query = $this->db->get('images');
        
        return $query->row_array();
    }
    
    // -----------------------------------------------------------------
    
    public function getTipoImagem($tipo)
    {
        // Verifica se foi enviado o ID ou o nome
        if(is_integer($tipo))
        {
            $this->db->where('id', $tipo);
        }
        elseif (is_string($tipo))
        {
            $tipo = str_replace('.', '', $tipo);
            $this->db->where('type', $tipo);
        }
        
        $query = $this->db->get('type');
        
        return $query->row_array();
    }
    
    // -----------------------------------------------------------------
    
    /**
     * MÉTODO UPDATE TYPE IMAGE
     * 
     * 
     *  Atualiza na tabela Images o tipo da imagem (idType) 
     * 
     * @param integer $idImage = ID da imagem a ser modificada
     * @param integer $type    = ID do tipo de imagem a ser atualizada
     */
    public function updateTypeImage($idImage, $type)
    {
        $data = array(
            'idType' => $type
        );
        
        $this->db->where('id', $idImage);
        return $this->db->update('images', $data);
    }
    
}