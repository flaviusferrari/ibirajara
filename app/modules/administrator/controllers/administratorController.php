<?php

class Administrator extends Controller
{
    private $view;
    private $model;
    private $_user;
    private $program;


    public function __construct()
    {
        // Inclui as Views
        require_once (BASEPATH . '/app/modules/administrator/views/Administrator_View.php'); 
        $this->view = new Administrator_View();
        
        // Instancia o Menu
        $this->view->setMenu($this->view->getInclude('menu_painel')); 
        
        // Inclui os models
        require_once (BASEPATH . '/app/modules/administrator/models/Administrator_Model.php');  
        $this->model = new Administrator_Model();
    }    
    
    
    /** 
    * Metdo index()
    *   Verifica se o Usuário se logou, caso não tenha feito o login,
     *  encaminha para a página de logon
    */
    public function index()
    {   
        // Verifica se o usuário fez login no site
        if(!isset($_COOKIE['usuario']) or empty($_COOKIE['usuario']))
        {
            // Redireciona para a página de Logon do Painel
            $sistema = $this->view->exibeView('logon');       
            $this->view->setSistema($sistema);
        }
        else
        {
            // Redireciona para a página de Inicial do Painel
            $sistema = $this->view->exibeView('programacao');       
            $this->view->setSistema($sistema);
        }
        
        $this->view->exibePainel();
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
    public function programacao()
    {   
        
        // Redireciona para a página de Logon do Painel
        $sistema = $this->view->exibeView('programacao');       
        $this->view->setSistema($sistema);
        
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
        $this->view->verificaGravacao($salvaProgramacao);                 
        
        // Exibe o resultado
        $this->view->exibePainel();
    }
   
}