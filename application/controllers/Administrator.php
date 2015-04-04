<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends MY_Controller
{
    private $view;
    private $model;
    private $_user;
    private $program;


    public function __construct()
    {
        parent::__construct();
        
        $this->dados['css'] = 'administrator';        
    }    
    
    
    /** 
        * Metdo index()
        *   Verifica se o Usuário se logou, caso não tenha feito o login,
         *  encaminha para a página de logon
        */
    public function index()
    {   
        $this->dados['js']  = '';
        $this->dados['conteudo'] = 'principal_view';
        
        $this->load->view('layout', $this->dados);        
    }
    
    
       
    /** 
        * Metdo Programacao()
        *  exibe o formulário de cadastro da programação     
        */
    public function programacao()
    {   
        $this->dados['js']       = 'programacao';
        $this->dados['conteudo'] = 'painel/programacao';
        
        // Exibe o formulário
        $this->load->view('layout', $this->dados);
        
        // Verifica se foi enviada alguma ação
//        if (!empty($params))
//        {    
//            // Recebe a ação
//            $acao = $params[0];
//
//            $this->$acao($params);
//        }
//        else
//        {
//            // Insere o formulário pedido        
//            $this->view->setSistema($this->view->exibeView('programacao'));
//        }
//        
//        // Exibe o painel
//        $this->view->exibePainel();
    }
    
    
    /**
        * Método cadastraProgramacao
        *   cadastra a programação no Banco de Dados
        */
    public function cadastraProgramacao()
    {
        // Salva os parâmetros no objeto
        $this->setProgramParam();
        
        $this->model->setTablename('programacao');
        
        $salvaProgramacao = $this->model->salvaProgramacao($this->program);
        
        // Verifica o Resultado da gravação
        // e imprime a resposta
        $this->view->verificaGravacao($salvaProgramacao, 'programacao'); 
    }
    
    
    /***********************************
        *****  BOLETIM   *******
        **************************************/
     public function boletim()
     {  
        $this->dados['js']       = 'boletim';
        $this->dados['conteudo'] = 'painel/boletim';

        // Exibe o formulário
        $this->load->view('layout', $this->dados);
         
         
//        // Verifica se foi enviada alguma ação
//        if (!empty($params))
//        {    
//            // Recebe a ação
//            $acao = $params[0];
//
//            $this->$acao($params);
//        }
//        else
//        {
//            // Insere o formulário pedido        
//            $this->view->setSistema($this->view->exibeView('boletim'));
//        }
//        
//        // Exibe o painel
//        $this->view->exibePainel();
     }
     
    /**
        * Método setBoletimParam()
        *  Inclui os parâmetros 
        */
    private function setBoletimParam()
    {
        $this->program = new Boletim_Param();
        
        $this->program->id        = $_POST['idBoletim'];
        // Data
        $dtInicio = new TDate($_POST['dtInicio']);
        $dtFim = new TDate($_POST['dtFim']);
        
        $this->program->dtInicio  = $dtInicio->getDate();
        $this->program->dtFim     = $dtFim->getDate();
        $this->program->titulo    = $_POST['titulo'];        
        $this->program->citacao   = $_POST['citacao'];
        $this->program->texto     = $_POST['texto'];
        $this->program->livro     = $_POST['livro'];
    }
     
     public function salvarBoletim()
     {
         // Salva os parâmetros no objeto
        $this->setBoletimParam();
        
        $this->model->setTablename('boletim');
        
        $salvaBoletim = $this->model->salvaBoletim($this->program);
        
        // Verifica o Resultado da gravação
        // e imprime a resposta
        $this->view->verificaGravacao($salvaBoletim, 'boletim'); 
     }
     
     
    /**
        * Método localizaBoletim()
        *   verifica os dados do Boletim que está sendo digitada
        * 
        * @return boolean
        */
    public function LocalizaBoletim()
    {
        $boletim = $this->model->localizarBoletim($_POST['termo']);
        
        if ($boletim)
        {
           $this->view->exibeBoletins($boletim);
        }
        else
        {
            return FALSE;
        }
    }
    
    
    /**
        * Método exibeBoletim()
        *   exibe a Empresa
        */
    public function exibeBoletim($params)
    {
        $boletim = $this->model->buscaDadosTabela($params[1], 'boletim');
        
        if (is_string($boletim))
        {
            $this->view->mensagem($boletim);
        }        
        else
        {
            // Data
            $dtInicio = new TDate($boletim['dtInicio']);
            $dtFim = new TDate($boletim['dtFim']);

            $boletim['dtInicio']  = $dtInicio->getDate();
            $boletim['dtFim']     = $dtFim->getDate();
        
        
            // Exibe a Ordem
            $this->view->setSistema($this->view->exibeView('boletim', $boletim));
        } 
    }
    
    
    /**
        *  Método atualizarBoletim()
        *   atualiza os dados do Boletim
        * 
        * 
        * 
        */
    public function atualizarBoletim()
     {
        // Salva os parâmetros no objeto
        $this->setBoletimParam();
        
        $this->model->setTablename('boletim');
        
        $atualizaBoletim = $this->model->atualizaBoletim($this->program);
        
        // Verifica o Resultado da gravação
        // e imprime a resposta
        $this->view->verificaGravacao($atualizaBoletim, 'boletim'); 
     }
   
}