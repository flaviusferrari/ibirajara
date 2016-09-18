<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/* 
 * LIBRARY TIMAGE
 * 
 *  Manipula os dados da Imagem
 */
class Timage
{
    /**
     * MÉTODO __CONSTRUCT()
     * 
     *   Método responsável por buscar o Model
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        
        $this->CI->load->model('apps/image_model', 'ImageModel');        
    }
    
    // ---------------------------------------------------------------
    
    /**
     * MÉTODO LOAD UPLOAD
     * 
     * 
     *   Inicializa a biblioteca UPLOAD
     * 
     * @param type $fileName
     */
    public function loadUpload($fileName)
    {
        $config['upload_path']   = './includes/images/fotos/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite']     = TRUE;
        $config['file_name']     = $fileName;

        $this->CI->load->library('upload', $config);
    }
    
    // ---------------------------------------------------------------
    
    /**
     * MÉTODO UPLOAD IMAGE
     * 
     * 
     *   Faz o upload da imagem
     * 
     * @return boolean
     */
    public function uploadImage($campo)
    {
        return $this->CI->upload->do_upload($campo);
    }
    
    // ----------------------------------------------------------------
    
    /**
     * MÉTODO GET ERROR UPLOAD
     * 
     *   Retorna o erro 
     * 
     * @return array
     */
    public function getErrorUpload()
    {
        return array('error' => $this->CI->upload->display_errors('<span class="text-red">', '</span>'));
        
        //return $error;
    }

    // ------------------------------------------------------------------    
    
    /**
     * MÉTODO SAVE IMAGE
     * 
     *   Salva a imagem no Banco de Dados
     */
    public function saveImage($imgName, $imgType)
    {
        $this->CI->ImageModel->setImage($imgName, $imgType);
    }
    
    // ---------------------------------------------------------------
    
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
        $this->CI->ImageModel->updateTypeImage($idImage, $type);
    }
    
    // ---------------------------------------------------------------
    
    
    public function buscaDadosImagemNome($imgName)
    {
        return $this->CI->ImageModel->getDadosImagem($imgName);
    }
    
    // ---------------------------------------------------------------
    
    public function buscaDadosImagemId($idImage)
    {
        return $this->CI->ImageModel->getDadosImagemId($idImage);
    }
    
    // ---------------------------------------------------------------
    
    /**
     * MÉTODO BUSCA TIPO IMAGEM
     * 
     * 
     *  retorna os dados da tabela TYPE
     * 
     * @param type $tipo = ID ou tipo da imagem
     * @return array
     */
    public function buscaTipoImagem($tipo)
    {
        return $this->CI->ImageModel->getTipoImagem($tipo);
    }
    
    // ---------------------------------------------------------------
    
    /**
     * MÉTODO NOME IMAGEM
     * 
     * 
     *  Retorna o nome da imagem desejada
     * 
     * @param integer $idImg = ID da Imagem desejada
     */
    public function nomeImagem($idImg)
    {
        // Pega os dados da imagem desejada
        $img = $this->CI->ImageModel->getDadosImagemId($idImg);
        
        // Retorna apenas o nome da Imagem
        return $img['imgName'];
    }
    
    // --------------------------------------------------------------
    
    /**
     * MÉTODO TIPO ARQUIVO
     * 
     * 
     *  Retorna o tipo do arquivo desejado
     * 
     * @param integer $idType = ID do tipo
     */
    public function tipoArquivo($idType)
    {
        // Pega os dados da imagem desejada
        $tipo = $this->CI->ImageModel->getTipoImagem($idType);
        
        // Retorna apenas o nome da Imagem
        return $tipo['type'];        
    }


    // --------------------------------------------------------------
    
    /**
     * MÉTODO DELETA IMAGEM
     * 
     * 
     *  Exclui a imagem do servidor
     */
    public function deletaImagem($img)
    {
        $arquivo = './includes/images/fotos/'.$img;
  
        // Exclui o arquivo
        unlink($arquivo);
    }
    
    // ---------------------------------------------------------------
    
    /**
     * MÉTODO GET IMAGEM
     * 
     *  Retorna o nome da imagem por extenso
     */
    public function getImagem($idImagem)
    {
        $imagem = $this->buscaDadosImagemId($idImagem);
       
        $img = $imagem['imgName'].'.'.$this->tipoArquivo((int)$imagem['idType']);
        
        return $img;
    }
    
    
    
} // ende Class Tcity

