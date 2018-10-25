<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biblioteca extends MY_Controller
{
    
    /**
     * MÉTODO CONSTRUCT
     * 
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css'] = 'administrator';  
        $this->dados['js']  = 'painel/biblioteca';
        
        // Carrega a validação dos formulários
        $this->load->library('form_validation');
        
        // Carrega o Model
        $this->load->model('administrator/biblioteca_model', 'Model');
    }    
    
    // --------------------------------------------------------------------
    
    /**
     * MÉTODO CADASTRO
     * 
     */
    public function cadastro()
    {        
        $this->dados['conteudo'] = 'painel/biblioteca/cadastro_view';
        
        $this->load->view('layout', $this->dados);   
    }
    
    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO EXIBE FORM CAD AUTOR
     * 
     *  Exibe o Formulário para cadastrar o Autor
     */
    public function exibeFormCadAutor()
    {
        $this->load->view('conteudo/painel/biblioteca/formCadastraAutor');
    }
    
    // --------------------------------------------------------------------
    
    /**
     * MÉTODO CADASTRA AUTOR
     * 
     * 
     */
    public function cadastraAutor()
    {
        if ($this->Model->cadastraAutor())
        {
            $dados['label'] = 'success';
            $dados['msn'] = 'Autor cadastrado com Sucesso!';
        }
        else
        {
            $dados['label'] = 'danger';
            $dados['msn'] = 'Autor não encontrado.';
        }
        
        // Exibe o Formulário
        $this->load->view('conteudo/painel/biblioteca/formCadastraAutor', $dados);
    }
    
    
    
}