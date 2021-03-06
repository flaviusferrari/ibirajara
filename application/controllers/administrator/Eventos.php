<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends MY_Controller
{
    private $dados;


    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css']      = 'eventos';      
        $this->dados['js']       = 'painel/eventos';
        $this->dados['conteudo'] = 'painel/eventos';
        
        // BIBLIOTECAS
        $this->load->library('form_validation');
        $this->load->library('tdate');
        // HELPER
        $this->load->helper('text');
        
        // Carrega o Model
        $this->load->model('administrator/eventos_model', 'Model');
    }    
    
    
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
    
    
    /**
        * Métdodo salvar()
        *   salva o evento no Banco de Dados
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
            $config['upload_path']   = './includes/images/eventos/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name']     = url_title(convert_accented_characters($this->input->post('titulo')), 'dash', TRUE);
            
            $this->load->library('upload', $config);
                        
            if ( ! $this->upload->do_upload('cartaz'))
            {
                $this->dados['conteudo'] = 'sucess';

                $error = array('error' => $this->upload->display_errors());
                $this->dados['msn_content'] = $error['error'];
                $this->dados['msn_link']    = 'indexCode.php/administrator/eventos';

                $this->load->view('layout', $this->dados);
            }
            else
            {
                $this->Model->salvar();
            
                $this->dados['conteudo'] = 'sucess';
                $this->dados['msn_content'] = 'Evento salvo com sucesso!!!';
                $this->dados['msn_link']    = 'indexCode.php/administrator/eventos';

                $this->load->view('layout', $this->dados);
            }
        }
     }
    
     
    /**
        * Método atualizar()
        *   atualiza a programação do dia
        */
    public function atualizar()
    {
        // Efetua a validação dos dados
        $this->form_validation->set_rules('data', 'Data', 'required');
        $this->form_validation->set_rules('titulo', 'Título', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout', $this->dados);
        }
        else
        {
            $this->Model->atualizarEvento();
            
            $this->dados['conteudo'] = 'sucess';
            $this->dados['msn_content'] = 'Evento atualizada com sucesso!!!';
            $this->dados['msn_link']    = 'indexCode.php/administrator/eventos/exibe/'.$this->input->post('idEvento');
            
            $this->load->view('layout', $this->dados);
        }
    }
    
    
    /**
        * Método localizaBoletim()
        *   verifica os dados do Boletim que está sendo digitada
        * 
        * @return boolean
        */
    public function LocalizaEvento()
    {
        $eventos = $this->Model->localizaEvento($this->input->post('termo'));
        
        
        foreach ($eventos as $dado)
        {
            $data[] = array('value' => $dado['titulo'], 'valor' => $dado['id'],);
        }        

        echo json_encode($data);
    }
    
    
    /**
        * Método exibe()
        *   exibe a Empresa
        */
    public function exibe()
    {
        // Recebe o ID do Boletim
        $idEvento = $this->uri->segment(4);      
        
        $evento = $this->Model->buscaDadosEvento($idEvento);
        
        // Ajusta as datas do Boletim
        $evento['data'] = date('d/m/Y', strtotime($evento['data']));
        
        // Insere o arquivo a ser exibido
        $this->dados['conteudo'] = 'painel/eventos_exibe';
        
        // Mescla os arrays
        $dados = array_merge($this->dados, $evento);
        
        // Exibe a página
        $this->load->view('layout', $dados);
    }
    
}

