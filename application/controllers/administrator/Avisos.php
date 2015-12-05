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
        $this->dados['aviso'] = file_get_contents('./aviso.txt');
        
        // Exibe o painel
        $this->load->view('layout', $this->dados);           
    }
    
    
    // ----------------------------------------------------------------
    
    public function gravaAviso()
    {
        $data = $this->input->post('texto');
        if ( ! write_file('./aviso.txt', $data))
        {
            $this->dados['conteudo'] = 'erro';

            $this->dados['msn_content'] = 'Erro ao gravar arquivo!!';
            $this->dados['msn_link']    = 'indexCode.php/administrator/avisos';

            $this->load->view('layout', $this->dados);
        }
        else
        {
            $this->dados['conteudo'] = 'sucess';

            $this->dados['msn_content'] = 'Aviso salvo com sucesso!!';
            $this->dados['msn_link']    = 'indexCode.php/administrator/avisos';

            $this->load->view('layout', $this->dados);
        }
    }
    
    // --------------------------------------------------------------------
    
    /**
        *  MÉTODO exibeAviso()
        * 
        *  Exibe o aviso salvo
        */
    public function exibeAviso()
    {
        echo file_get_contents('./aviso.txt');
    }
    
    
    
}
