<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atendimento extends CI_Controller
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
        $this->dados['css'] = 'contatos';
        $this->dados['js']  = 'contato';
        $this->dados['conteudo'] = 'site/atendimento_espiritual';
        
        // BIBLIOTECAS
        //$this->load->library('form_validation');
        
        // MODEL
        
        
    }
    
    // --------------------------------------------------------------

    public function index()
    {
        // Exibe a página
        $this->load->view('site', $this->dados);
    }
    
    
    
}