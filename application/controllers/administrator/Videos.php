<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends MY_Controller
{
    // DADOS
    private $dados;

    // ------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css']      = 'videos';      
        $this->dados['js']       = 'painel/videos';
        $this->dados['conteudo'] = 'painel/videos';
        
        // BIBLIOTECAS
        $this->load->library('form_validation');
        $this->load->library('tdate');
        
        // Carrega o Model
        $this->load->model('administrator/videos_model', 'Model');
    }    
    
    // ----------------------------------------------------------------
    
    /** 
     * Metdo index()
     * 
     *   Verifica se o Usuário se logou, caso não tenha feito o login,
     *  encaminha para a página de logon
     */
    public function index()
    {   
        // Exibe o painel
        $this->load->view('layout', $this->dados);           
    }
    
    // -----------------------------------------------------------------
    
    /**
     * MÉTODO SALVAR
     * 
     * 
     *   Salva o vídeo no Banco de Dados
     */
    public function salvar()
    {
        // Efetua a validação dos dados
        $this->form_validation->set_rules('data', 'Data', 'required');


        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout', $this->dados);
        }
        else
        {
            //$titulo = convert_accented_characters($this->input->post('titulo'));
            $config['upload_path']   = './includes/images/videos/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite']     = TRUE;
            $config['file_name']     = url_title($this->input->post('titulo'), 'dash', TRUE);

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('cartaz'))
            {
                $this->dados['conteudo'] = 'sucess';

                $error = array('error' => $this->upload->display_errors());
                $this->dados['msn_content'] = $error['error'];
                $this->dados['msn_link']    = 'indexCode.php/administrator/videos';

                $this->load->view('layout', $this->dados);
            } 
            else
            {
                $this->Model->salvar();

                $this->dados['conteudo']    = 'sucess';
                $this->dados['msn_content'] = 'Vídeo salvo com sucesso!!!';
                $this->dados['msn_link']    = 'indexCode.php/administrator/videos';

                $this->load->view('layout', $this->dados);
            }
        }
    }

}