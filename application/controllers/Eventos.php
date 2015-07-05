<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller
{
    // DADOS
    private $dados;
    
    /**
        * Método __construct()
        *  método construtor da classe
        */
    public function __construct()
    {
        parent::__construct();
        
        // DADOS
        $this->dados['css'] = 'eventos';
        $this->dados['js']  = '';
        $this->dados['conteudo'] = 'site/eventos_view';
        
        // BIBLIOTECAS
                
        
        // MODEL
        $this->load->model('eventos_model', 'Model');
        
    }

    public function index()
    {
        // Busca os próximos Eventos 
        $this->dados['proximosEventos'] = $this->Model->buscaProximosEventos();
        
                
        $this->load->view('site', $this->dados);
    }
    
}