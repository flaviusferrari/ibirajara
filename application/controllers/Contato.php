<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller
{
    // DADOS
    private $dados;
    
    /**
        * Método __construct()
        *  método construtor da classe
        */
    public function __construct()
    {
        parent::__construct();
        
        // DADOS
        $this->dados['css'] = 'contatos';
        $this->dados['js']  = 'contato';
        $this->dados['conteudo'] = 'site/contato/contato_view';
        
        // BIBLIOTECAS
        $this->load->library('form_validation');
        
        // MODEL
        
        
    }
    
    // --------------------------------------------------------------

    public function index()
    {
        // Exibe a página
        $this->load->view('site', $this->dados);
    }
    
    // --------------------------------------------------------------
    
    /**
     * MÉTODO ENVIA EMAIL
     * 
     * 
     */
    public function enviaEmail()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');  
        $this->form_validation->set_rules('area', 'Área', 'required');
        $this->form_validation->set_rules('assunto', 'Assunto', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('site', $this->dados);
        }
        else
        {
            // Envia o e-mail
            $this->load->library('email');

            $this->email->from($this->input->post('email'), $this->input->post('nome'));
            $mailto =  $this->input->post('area').'@ceibirajara.org.br';
            $this->email->to($mailto);
            $this->email->subject($this->input->post('assunto'));

            // Dados da Mensagem
            $data = array(
                'mail' => $this->input->post('email'),
                'nome' => $this->input->post('nome')
            );

            $msn = $this->load->view('mails/mail_contato_area.php', $data, TRUE);

            $this->email->message($msn);

            if($this->email->send())
            {
                // Exibe Mensagem de Sucesso
                echo 'Email enviado...';
            }
            else
            {
                // Exibe Mensagem de Erro
                echo 'Erro ao enviar email';
            }
        }
    }
    
}