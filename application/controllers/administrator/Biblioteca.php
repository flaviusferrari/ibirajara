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
     * MÉTODO SALVAR
     * 
     *  Salva os dados do Livro no Banco de Dados
     */
    public function salvar()
    {
        // Efetua a validação dos dados
        $this->form_validation->set_rules('titulo', 'Título', 'required');
        $this->form_validation->set_rules('idAutor', 'Autor', 'required');
        $this->form_validation->set_rules('idEditora', 'Editora', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->dados['conteudo'] = 'painel/biblioteca/cadastro_view';
            $this->load->view('layout', $this->dados);
        } 
        else 
        {
            $this->Model->salvar();
            
            // Pega o ID 
            $idLivro = $this->Model->getUltimoLivro();

            $this->dados['conteudo']    = 'sucess';
            $this->dados['msn_content'] = "Livro <b>{$this->input->post('titulo')}</b> cadastrado com sucesso!!!";
            $this->dados['msn_link']    = 'indexCode.php/administrator/biblioteca/exibe/' . $idLivro;

            $this->load->view('layout', $this->dados);
        }
    }

    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO EXIBE
     * 
     *  Exibe os dados do Livro
     */
    public function exibe() {
        // Recebe o ID do Boletim
        $idLivro = $this->uri->segment(4);

        $this->dados['livro'] = $this->Model->buscaDadosLivro($idLivro);

        // Insere o arquivo a ser exibido
        $this->dados['conteudo'] = 'painel/biblioteca/livro_exibe';

        // Exibe a página
        $this->load->view('layout', $this->dados);
    }
    
    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO ATUALIZAR
     * 
     *  Atualiza os dados do Livro no Banco de Dados
     */
    public function atualizar()
    {
        // Efetua a validação dos dados
//        $this->form_validation->set_rules('titulo', 'Título', 'required');
//        $this->form_validation->set_rules('idAutor', 'Autor', 'required');
//        $this->form_validation->set_rules('idEditora', 'Editora', 'required');
//
//        if ($this->form_validation->run() === FALSE)
//        {
//            $this->dados['conteudo'] = 'painel/biblioteca/cadastro_view';
//            $this->load->view('layout', $this->dados);
//        } 
//        else 
//        {
            $this->Model->atualizar();

            $this->dados['conteudo']    = 'sucess';
            $this->dados['msn_content'] = "Livro <b>{$this->input->post('titulo')}</b> atualizado com sucesso!!!";
            $this->dados['msn_link']    = 'indexCode.php/administrator/biblioteca/exibe/' . $this->input->post('idLivro');

            $this->load->view('layout', $this->dados);
//        }
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
        
        // Verifica se retornou algum dado
        if (empty($dados['autor']))
        {
            $dados['cadastra'] = 'TRUE';
            $dados['label']    = 'danger';
            $dados['msn']      = 'Autor não encontrado.';
        }
        
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
        
        // Verifica se retornou algum dado
        if (empty($dados['espirito']))
        {
            $dados['cadastra'] = 'TRUE';
            $dados['label']    = 'danger';
            $dados['msn']      = 'Espírito não encontrado.';
        }
        
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
        
        // Verifica se retornou algum dado
        if (empty($dados['editora']))
        {
            $dados['cadastra'] = 'TRUE';
            $dados['label']    = 'danger';
            $dados['msn']      = 'Editora não encontrada.';
        }
        
        $this->load->view('conteudo/painel/biblioteca/formCadastraEditora', $dados);
    }
    
    // ---------------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA LIVRO TITULO
     * 
     *  Busca o livro pelo título digitado
     */
    public function localizaLivroTitulo() 
    {
        $livros = $this->Model->localizaLivroTitulo($this->input->post('termo'));

        foreach ($livros as $campo) 
        {
            $data[] = array('value' => $campo['titulo'], 'valor' => $campo['id'],);
        }

        echo json_encode($data);
    }
    
    
    
}