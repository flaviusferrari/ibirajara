<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller
{
    private $dados;
    
    
    /**
     * MÉTODO __CONSTRUCT
     * 
     *  Método construtor da classe
     */
    public function __construct()
    {
        parent::__construct();
        
        // DADOS
        $this->dados['css'] = 'videos';
        $this->dados['js']  = 'midia/videos';
        $this->dados['conteudo'] = 'midia/videos';
        
        // BIBLIOTECAS
        $this->load->library('pagination');
        
        // MODEL
        $this->load->model('videos_model', 'Model');
        
    }
    
    // ---------------------------------------------------------------

    /**
     *  MÉTODO INDEX
     * 
     *   Exibe a página de Vídeos
     */
    public function index()
    {    
        $this->pageVideos();
        
        $this->dados['lastVideo'] = $this->Model->lastVideo();
        
        $this->load->view('site', $this->dados);
    }
    
    // ---------------------------------------------------------------
    
    /**
     *  MÉTODO PAGINA VIDEOS
     * 
     *    Efetua a paginação dos vídeos
     */
    public function pageVideos()
    {        
        $config['base_url']   = base_url('indexCode.php/videos/newVideos/');
        $config['total_rows'] = $this->Model->getVideos()->num_rows();
        $config['per_page']   = 6;
        
        // Configurando a aparencia
        $config['full_tag_open']  = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['next_link']      = '<span aria-hidden="true">&raquo;</span>';
        $config['next_tag_open']  = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open']  = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['prev_link']      = '<span aria-hidden="true">&laquo;</span>';
        $config['cur_tag_open']   = '<li class="active"><a>';
        $config['cur_tag_close']  = '</a></li>';
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']  = '</li>';
        $config['attributes'] = array('class' => 'linkvideo');
        
        $qtd = $config['per_page'];
        ( $this->uri->segment(3) != '' ) ? $inicio = $this->uri->segment(3) : $inicio = 0;

        $this->pagination->initialize($config);
        $this->dados['pagination'] = $this->pagination->create_links();
        
        // Busca os vídeos e retorna em forma de Array
        $this->dados['videos'] = $this->Model->getVideos($qtd, $inicio)->result_array();     
        
    }
    
    // ----------------------------------------------------------------
    
    /**
     * MÉTODO NOVOS VÍDEOS
     * 
     *   Exibe as miniaturas dos vídeos salvos junto com a paginação
     */
    public function newVideos()
    {
        $this->pageVideos();
        
        $this->load->view('conteudo/midia/newVideos', $this->dados);
    }
    
    // ----------------------------------------------------------------
    
    /**
     *  MÉTODO VIEW VIDEO
     * 
     *   Exibe o vídeo selecionado na DIV principal de Visualização
     */
    public function viewVideo()
    {
        $video['lastVideo'] = $this->Model->video($this->uri->segment(3));
        
        $this->load->view('conteudo/midia/viewVideo', $video);
    }

    
}
