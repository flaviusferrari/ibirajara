<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidebar extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('tdate');
        
        // Carrega o Model
        //$this->load->model('administrator_model');
    }
    
    
    /**
     * MÉTODO PROXIMOS BOLETINS
     * 
     *  Retorna os próximos boletins que estão cadastrados no sistema
     *  a partir da data atual
     */
    public function proximosBoletins()
    {
        $this->load->model('administrator/boletim_model', 'boletimModel');
        $dados['boletim'] = $this->boletimModel->localizaBoletim();        
            
        $this->load->view('conteudo/painel/boletim/sidebar_proximos_boletins', $dados);
    }
    
    
}
