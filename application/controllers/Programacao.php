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
        
        // BIBLIOTECAS
        $this->load->library('tdate');
        
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
        // Recebe os dados a serem pesquisados
        $ano = $this->uri->segment(3);
        $mes = $this->uri->segment(4);
        
        
        
        $this->dados['ano'] = $ano;
        $this->dados['mes'] = $mes;
        $this->dados['nome_mes'] = $this->tdate->getNomeMes($mes);
        
        
        $this->load->view('site', $this->dados);
    }

    
}
