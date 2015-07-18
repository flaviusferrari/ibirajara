<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacao extends CI_Controller
{
    private $dados;
    
    
    /**
        * Método __construct()
        *  método construtor da classe
        */
    public function __construct()
    {
        parent::__construct();
        
        // DADOS
        $this->dados['css'] = 'videos';
        $this->dados['js']  = 'programacao';
        $this->dados['conteudo'] = 'site/programacao_view';
        
    }

    public function index()
    {        
        $this->load->view('site', $this->dados);
    }
    
    
    /**
        *  Método exibe()
        *   exibe a programação do mês escolhido
        */
    public function exibe()
    {
        $this->load->view('site', $this->dados);
    }

    
}
