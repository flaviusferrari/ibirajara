<?php

class Administrator extends Controller
{
    private $view;
    private $model;
    private $_user;
    private $program;


    public function __construct()
    {
//        // Inclui as Views
//        require_once (BASEPATH . '/app/modules/administrator/'.ACTION.'/views/Camada_View.php'); 
//        $this->view = new Camada_View();
//        
//        // Instancia o Menu
//        $this->view->setMenu($this->view->getInclude('menu_painel')); 
//        
//        // Inclui os models
//        require_once (BASEPATH . '/app/modules/administrator/'.ACTION.'/models/Camada_Model.php');  
//        $this->model = new Camada_Model();
    }    
    
    
    /** 
        * Metdo index()
        *   Verifica se o Usuário se logou, caso não tenha feito o login,
         *  encaminha para a página de logon
        */
    public function index()
    {   
        header("Location:indexCode.php/administrator");
        
        // Verifica se o usuário fez login no site
//        if(!isset($_COOKIE['usuario']) or empty($_COOKIE['usuario']))
//        {
//            // Redireciona para a página de Logon do Painel
//            $sistema = $this->view->exibeView('logon');       
//            $this->view->setSistema($sistema);
//        }
//        else
//        {
//            // Redireciona para a página de Inicial do Painel
//            $sistema = $this->view->exibeView('programacao');       
//            $this->view->setSistema($sistema);
//        }
//        
//        $this->view->exibePainel();
    }
    
    
    /**
        * Método setProgramParam()
        *  Inclui os parâmetros 
        */
    private function setProgramParam()
    {
        $this->program = new Programacao_Param();
        
        $this->program->id        = $_POST['idProgramacao'];
        // Data
        $dt = new TDate($_POST['data']);
        $this->program->data      = $dt->getDate();
        $this->program->tema      = $_POST['tema'];        
        $this->program->subsidio  = $_POST['subsidio'];
        $this->program->expositor = $_POST['expositor'];
    }
    
    /** 
        * Metdo Programacao()
        *  exibe o formulário de cadastro da programação     
        */
    public function programacao($params)
    {   
        
        // Verifica se foi enviada alguma ação
        if (!empty($params))
        {    
            // Recebe a ação
            $acao = $params[0];

            $this->$acao($params);
        }
        else
        {
            // Insere o formulário pedido        
            $this->view->setSistema($this->view->exibeView('programacao'));
        }
        
        // Exibe o painel
        $this->view->exibePainel();
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
     public function boletim($params)
     {   
        // Verifica se foi enviada alguma ação
        if (!empty($params))
        {    
            // Recebe a ação
            $acao = $params[0];

            $this->$acao($params);
        }
        else
        {
            // Insere o formulário pedido        
            $this->view->setSistema($this->view->exibeView('boletim'));
        }
        
        // Exibe o painel
        $this->view->exibePainel();
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