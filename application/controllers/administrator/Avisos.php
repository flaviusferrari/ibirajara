<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avisos extends MY_Controller
{
    private $dados;


    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css']      = '';      
        $this->dados['js']       = 'painel/aviso';
        $this->dados['conteudo'] = 'painel/avisos';
        
        // Carrega as Bibliotecas necessárias
        $this->load->library('form_validation');
        $this->load->helper('file');
        
        // Carrega o Model
        //$this->load->model('administrator_model');
    }    
    
    // --------------------------------------------------------------------------
        
    /** 
        * Metdo index()
        *   Verifica se o Usuário se logou, caso não tenha feito o login,
         *  encaminha para a página de logon
        */
    public function index()
    {   
        $this->dados['aviso'] = file_get_contents('./aviso.php');
        
        // Exibe o painel
        $this->load->view('layout', $this->dados);           
    }
    
    
    // ----------------------------------------------------------------
    
    public function gravaAviso()
    {
        $data = $this->input->post('texto');
        if ( ! write_file('./aviso.php', $data))
        {
                echo 'Unable to write the file';
        }
        else
        {
                echo 'File written!';
        }
    }
    
    
}