<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides extends MY_Controller
{
    private $dados;


    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css'] = '';      
        $this->dados['js']       = 'painel/slides';
        $this->dados['conteudo'] = 'painel/slides';
        
        // Carrega as Bibliotecas necessárias
        $this->load->library('form_validation');
        $this->load->library('tdate');
        
        // Carrega o Model
        $this->load->model('administrator/slide_model', 'Model');
    }  
    
    // ---------------------------------------------------------------    
    
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
    
    // -------------------------------------------------------------
    
    /**
     * MÉTODO SALVAR
     * 
     */
    public function salvar()
    {
        // Efetua a validação dos dados
        $this->form_validation->set_rules('dtInicio', 'Data Inicio', 'required');
        $this->form_validation->set_rules('dtFim', 'Data Fim', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout', $this->dados);
        }
        else
        {
            // Inicia a biblioteca
            $this->load->library('timage');

            // Pega o tipo do arquivo
            $type = $this->timage->buscaTipoImagem(strrchr($_FILES['foto']['name'], '.'));
            
            // Gera o nome da imagem
            $fileName = time();

            // Inicializa a biblioteca de envio 
            $this->timage->loadUpload($fileName);

            // Verifica se a imagem foi enviada
            if ( ! $this->timage->uploadImage('foto'))
            {
                $error = $this->timage->getErrorUpload();

                echo $error['error'];
            }
            else
            {     
                // Redimensiona a imagem
                $config_lib['image_library'] = 'gd2';
                $config_lib['source_image'] = './includes/images/fotos/'.$fileName.'.'.$type['type'] ;            

                $this->load->library('image_lib', $config_lib);
                
                // Salva os dados da imagem no Banco
                $this->timage->saveImage($fileName, $type['id']);

                $image = $this->timage->buscaDadosImagemNome($fileName);
                
                $this->Model->salvar($image['id']);
            
                $this->dados['conteudo'] = 'sucess';
                $this->dados['msn_content'] = 'Slide salvo com sucesso!!!';
                $this->dados['msn_link']    = 'indexCode.php/administrator/slides';

                $this->load->view('layout', $this->dados);
            }            
        }
    }
    
    // --------------------------------------------------------------
    
    /**
     * MÉTODO LOCALIZA SLIDES
     * 
     *  Localiza os Slides que estão em vigor
     */
    public function localizaSlide()
    {
        $dados['slides'] = $this->Model->localizar();
        
        if (!empty($dados['slides']))
        {
            echo $this->load->view('conteudo/painel/slides/lista_slides', $dados, TRUE);
        }
        else
        {
            echo 'Não foi encontrado nenhum Slide!!';
        }
    }
    
    // ------------------------------------------------------------
    
    /**
     * MÉTODO EXIBE
     * 
     *  Exibe os dados do Slide
     */
    public function exibe()
    {
        $this->dados['slide'] = $this->Model->exibir($this->uri->segment(4));
        
        $this->dados['conteudo'] = 'painel/slides/slides_form_exibe';
        
        $this->load->view('layout', $this->dados);
    }
    
    
}