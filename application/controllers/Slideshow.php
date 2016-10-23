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
        
        
        // MODEL
        //$this->load->model('slideshow_model', 'Model');
        
    }
    
    // ---------------------------------------------------------------

    /**
     *  MÉTODO INDEX
     * 
     *   Exibe a página de Vídeos
     */
    public function index()
    {    
        // Exibe a página
        $this->load->view('conteudo/site/slideshow');
    }
    
    
    
} // end Class