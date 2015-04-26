<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacao extends MY_Controller
{
    private $view;
    private $model;
    private $_user;
    private $program;


    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css'] = 'administrator';        
        
        // Carrega a validação dos formulários
        $this->load->library('form_validation');
        
        // Carrega o Model
        $this->load->model('administrator/Programacao_Model', 'Model');
    }    
    
    
    /** 
        * Metdo index()
        *   Verifica se o Usuário se logou, caso não tenha feito o login,
         *  encaminha para a página de logon
        */
    public function index()
    {   
        $this->dados['js']       = 'programacao';
        $this->dados['conteudo'] = 'painel/programacao';
        
        // Exibe a página
        $this->load->view('layout', $this->dados);
    }
    
    
    /**
        * Método cadastraProgramacao
        *   cadastra a programação no Banco de Dados
        */
    public function cadastraProgramacao()
    {
        // Efetua a validação dos dados
        $this->form_validation->set_rules('data', 'Data', 'required');
        $this->form_validation->set_rules('tema', 'Tema', 'required');
        $this->form_validation->set_rules('expositor', 'Expositor', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout', $this->dados);
        }
        else
        {
            $this->Model->salvar_programacao();
            
            $this->dados['conteudo'] = 'sucess';
            
            $this->load->view('layout', $this->dados);
        }
    }
    
    
    /**
     *  Métdo localizaProgramacao()
     *   localiza a programação pelo dia escolhido
     */
    public function localizaProgramacao()
    {
        $programacao = $this->Model->localizaProgramacao();
        
        // Insere o arquivo a ser exibido
        $this->dados['conteudo'] = 'painel/programacao_exibe';
        
        // Mescla os arrays
        $dados = array_merge($this->dados, $programacao);
        
        // Exibe a página
        $this->load->view('layout', $dados);
    }
    
}