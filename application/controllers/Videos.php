<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller
{
    private $dados;
    
    
    /**
     * MÉTODO __CONSTRUCT
     * 
     *  Método construtor da classe
     */
    public function __construct()
    {
        parent::__construct();
        
        // DADOS
        $this->dados['css'] = 'videos';
        $this->dados['js']  = '';
        $this->dados['conteudo'] = 'midia/videos';
        
        // MODEL
        $this->load->model('videos_model', 'Model');
        
    }
    
    // ---------------------------------------------------------------

    public function index()
    {        
        $this->load->view('site', $this->dados);
    }

    
}