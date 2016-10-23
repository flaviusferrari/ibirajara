<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow extends CI_Controller
{
    private $dados;
    
    // ---------------------------------------------------------------
    
    /**
     * MÉTODO __CONSTRUCT
     * 
     *  Método construtor da classe
     */
    public function __construct()
    {
        parent::__construct();   
        
        // BIBLIOTECAS
        $this->load->library('timage');        
        
        // MODEL
        $this->load->model('slideshow_model', 'Model');
        
    }
    
    // ---------------------------------------------------------------

    /**
     *  MÉTODO INDEX
     * 
     *   Exibe a página de Vídeos
     */
    public function index()
    {    
        // Busca os Slides cadastrados
        $dados['slides'] = $this->Model->getSlides();
        
        
        // Exibe a página
        $this->load->view('conteudo/site/slideshow', $dados);
    }
    
    
    
} // end Class