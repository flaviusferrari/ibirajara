<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends MY_Controller
{
    // DADOS
    private $dados;

    // ------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css']      = 'videos';      
        $this->dados['js']       = 'painel/videos';
        $this->dados['conteudo'] = 'painel/videos';
        
        // BIBLIOTECAS
        $this->load->library('form_validation');
        $this->load->library('tdate');
        
        // Carrega o Model
        //$this->load->model('administrator/eventos_model', 'Model');
    }    
    
    // ----------------------------------------------------------------
    
    /** 
        * Metdo index()
        * 
        *   Verifica se o Usuário se logou, caso não tenha feito o login,
        *  encaminha para a página de logon
        */
    public function index()
    {   
        // Exibe o painel
        $this->load->view('layout', $this->dados);           
    }
    
    
}