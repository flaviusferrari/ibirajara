<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Programacao extends Controller
{
    private $view;
    private $model;
    private $program;


    public function __construct()
    {
        // Inclui as Views
        require_once (BASEPATH . '/app/modules/programacao/views/Programacao_View.php'); 
        $this->view = new Programacao_View();
        
        // Instancia o Menu
        $this->view->setMenu($this->view->getInclude('menu')); 
        
        // Instancia o Sub-Menu
        $this->view->setSub($this->view->getInclude('sub'));
        
        // Inclui os models
        require_once (BASEPATH . '/app/modules/programacao/models/Programacao_Model.php');  
        $this->model = new Programacao_Model();
    }    
    
    
    /** 
        * Metdo index()
        *   Verifica se o Usuário se logou, caso não tenha feito o login,
        *  encaminha para a página de logon
        */
    public function index()
    {   
        // Verifica o Mes e o Ano corrente
        $mes = date('m');
        $ano = date('Y');
        
        // Busca a programação do mes e ano correspondente
        $dados = $this->model->localizarProgramacao($mes, $ano);
        // Verifica o Mes e o Ano corrente
        $dados['mes'] = $mes;
        $dados['ano'] = $ano;
        
        // Redireciona para a página de Inicial do Painel
        $sistema = $this->view->exibeView('programacao', $dados);       
        $this->view->setContent($sistema);
        
        $this->view->setSessao('Programação do Mês');        
        
        $this->view->exibeLayout();
    }
}