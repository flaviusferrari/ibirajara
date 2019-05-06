<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudos extends CI_Controller
{
    
    // DADOS
    private $dados;
    
    // ---------------------------------------------------------------
    
    /**
     * METODO __CONSTRUCT
     * 
     * 
     */
    public function __construct()
    {
        parent::__construct();
        
        // DADOS
        $this->dados['css'] = '';
        $this->dados['js']  = '';        
    }
    
    // --------------------------------------------------------------
    
    /**
     * MÉTODO ESDE
     * 
     * 
     */
    public function esde()
    {
        $this->dados['conteudo'] = 'site/estudos/esde';
        
        $this->load->view('site', $this->dados);
    }
    
    
    // --------------------------------------------------------------
    
    /**
     * MÉTODO MEDIUNIDADE
     * 
     * 
     */
    public function mediunidade()
    {
        $this->dados['conteudo'] = 'site/estudos/mediunidade';
        
        $this->load->view('site', $this->dados);
    }
    
    // --------------------------------------------------------------
    
    /**
     * MÉTODO COMPLEMENTARES
     * 
     * 
     */
    public function complementares()
    {
        $this->dados['conteudo'] = 'site/estudos/complementares';
        
        $this->load->view('site', $this->dados);
    }
    
}