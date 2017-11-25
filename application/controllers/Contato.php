<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller
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
        $this->dados['js']  = '';
        $this->dados['conteudo'] = 'site/contato/contato_view';
        
        // BIBLIOTECAS
        
        
        // MODEL
        
        
    }

    public function index()
    {
        // Exibe a página
        $this->load->view('site', $this->dados);
    }
    
}