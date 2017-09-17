<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Eventos extends Controller
{
    private $view;
    private $model;
    private $program;


    public function __construct()
    {
        // Inclui as Views
        require_once (BASEPATH . '/app/modules/eventos/views/Eventos_View.php'); 
        $this->view = new Eventos_View();
        
        // Instancia o Menu
        $this->view->setMenu($this->view->getInclude('menu')); 
        
        // Instancia o Sub-Menu
        $this->view->setSub($this->view->getInclude('sub'));
        
        // Inclui os models
        require_once (BASEPATH . '/app/modules/eventos/models/Eventos_Model.php');  
        $this->model = new Eventos_Model();
    }    
    
    
    /** 
        * Metdo index()
        *   Verifica se o Usuário se logou, caso não tenha feito o login,
         *  encaminha para a página de logon
        */
    public function index()
    {   
        // Redireciona para a página de Inicial do Painel
        $sistema = $this->view->exibeView('eventos');       
        $this->view->setContent($sistema);
        
        $this->view->setSessao('Eventos');        
        
        $this->view->exibeLayout();
    }
    
    
    /**
        * Método exibe
        *   exibe o evento discriminado
        * 
        * @param $id = Id do Evento
        */
    public function exibe($params)
    {
        // recebe os dados da página a ser exibida
        $ano     = $params[0];
        $arquivo = $params[1];
        
        // inclui o evento desejado
        $this->view->setContent($this->view->exibeEvento($ano, $arquivo));
        
        $this->view->setSessao('Eventos');        
        
        // Exibe a página
        $this->view->exibeLayout();
    }
}