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
    
    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA AUTOR
     * 
     *  Busca no banco de Dados o autor
     */
    public function localizaAutor() 
    {
        $dados['autor'] = $this->Model->localizaAutor($this->input->post('nomeAutor'));
        
        $this->load->view('conteudo/painel/biblioteca/formCadastraAutor', $dados);
    }
    
    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO EXIBE FORM CAD ESPIRITO
     * 
     *  Exibe o Formulário para cadastrar o Autor
     */
    public function exibeFormCadEspirito()
    {
        $this->load->view('conteudo/painel/biblioteca/formCadastraEspirito');
    }
    
    // --------------------------------------------------------------------
    
    /**
     * MÉTODO CADASTRA ESPIRITO
     * 
     *  Cadastra o Espírito no Banco de Dados
     */
    public function cadastraEspirito()
    {
        if ($this->Model->cadastraEspirito())
        {
            $dados['label'] = 'success';
            $dados['msn'] = 'Espírito cadastrado com Sucesso!';
        }
        else
        {
            $dados['label'] = 'danger';
            $dados['msn'] = 'Espírito não encontrado.';
        }
        
        // Exibe o Formulário
        $this->load->view('conteudo/painel/biblioteca/formCadastraEspirito', $dados);
    }
    
    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA ESPÍRITO
     * 
     *  Busca no banco de Dados o espírito
     */
    public function localizaEspirito() 
    {
        $dados['espirito'] = $this->Model->localizaEspirito($this->input->post('nomeEspirito'));
        
        $this->load->view('conteudo/painel/biblioteca/formCadastraEspirito', $dados);
    }
    
    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO EXIBE FORM CAD EDITORA
     * 
     *  Exibe o Formulário para cadastrar o Autor
     */
    public function exibeFormCadEditora()
    {
        $this->load->view('conteudo/painel/biblioteca/formCadastraEditora');
    }
    
    // --------------------------------------------------------------------
    
    /**
     * MÉTODO CADASTRA EDITORA
     * 
     *  Cadastra o Editora no Banco de Dados
     */
    public function cadastraEditora()
    {
        if ($this->Model->cadastraEditora())
        {
            $dados['label'] = 'success';
            $dados['msn'] = 'Editora cadastrada com Sucesso!';
        }
        else
        {
            $dados['label'] = 'danger';
            $dados['msn'] = 'Editora não encontrada.';
        }
        
        // Exibe o Formulário
        $this->load->view('conteudo/painel/biblioteca/formCadastraEditora', $dados);
    }
    
    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA EDITORA
     * 
     *  Busca no banco de Dados a Editora
     */
    public function localizaEditora() 
    {
        $dados['editora'] = $this->Model->localizaEditora($this->input->post('nomeEditora'));
        
        $this->load->view('conteudo/painel/biblioteca/formCadastraEditora', $dados);
    }
    
    
    
}