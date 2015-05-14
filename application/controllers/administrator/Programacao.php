<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacao extends MY_Controller
{
    private $dados;


    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css'] = 'administrator';    
        $this->dados['js']  = 'programacao';
        
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
        $this->form_validation->set_rules('data', 'Data', 'required|callback_data_check');
        $this->form_validation->set_rules('tema', 'Tema', 'required');
        $this->form_validation->set_rules('expositor', 'Expositor', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->dados['conteudo'] = 'painel/programacao';
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
    
    public function data_check($str)
    {
        $dia = str_replace('/', '-', $str);
        $dia = date('Y-m-d', strtotime($dia));
        
        $this->db->where('data', $dia);
        $query = $this->db->get('programacao');
        //$data = $query->row_array();
        
            if ($query->num_rows() > 0)
            {
                    $this->form_validation->set_message('data_check', 'A {field} já foi cadastrada!!');
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }
    
}