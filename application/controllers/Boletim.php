<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boletim extends CI_Controller
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
        $this->dados['conteudo'] = 'site/boletim';
        
        // MODEL
        $this->load->model('boletins_model', 'Model');
    }
    
    // --------------------------------------------------------------

    public function index()
    {
        $this->dados['boletins'] = $this->Model->localizaBoletim();
        
        // Exibe a página
        $this->load->view('site', $this->dados);
    }
    
}
