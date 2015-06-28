<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends MY_Controller
{
    private $dados;


    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css']      = 'eventos';      
        $this->dados['js']       = 'eventos';
        $this->dados['conteudo'] = 'painel/eventos';
        
        // Carrega as Bibliotecas necessárias
        $this->load->library('form_validation');
        
        // Carrega o Model
        //$this->load->model('administrator_model');
    }    
    
    
    /** 
        * Metdo index()
        *   Verifica se o Usuário se logou, caso não tenha feito o login,
         *  encaminha para a página de logon
        */
    public function index()
    {   
        // Exibe o painel
        $this->load->view('layout', $this->dados);           
    }
    
    
    
}

