<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biblioteca extends MY_Controller
{
    
    /**
     * MÉTODO CONSTRUCT
     * 
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css'] = 'administrator';        
        
        // Carrega a validação dos formulários
        $this->load->library('form_validation');
        
        // Carrega o Model
        $this->load->model('administrator_model');
    }    
    
    // --------------------------------------------------------------------
    
    /**
     * MÉTODO CADASTRO
     * 
     */
    public function cadastro()
    {
        $this->dados['js']  = '';
        $this->dados['conteudo'] = 'painel/biblioteca/cadastro_view';
        
        $this->load->view('layout', $this->dados);   
    }
    
    
    
}