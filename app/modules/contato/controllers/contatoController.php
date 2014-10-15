<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contato extends Controller
{
    private $view;
    private $model;
    private $program;


    public function __construct()
    {
        // Inclui as Views
        require_once (BASEPATH . '/app/modules/contato/views/Contato_View.php'); 
        $this->view = new Contato_View();
        
        // Instancia o Menu
        $this->view->setMenu($this->view->getInclude('menu')); 
        
        // Inclui os models
        require_once (BASEPATH . '/app/modules/contato/models/Contato_Model.php');  
        $this->model = new Contato_Model();
    }    
    
    
    /** 
    * Metdo index()
    *   Verifica se o Usuário se logou, caso não tenha feito o login,
     *  encaminha para a página de logon
    */
    public function index()
    {   
        // Redireciona para a página de Inicial do Painel
        $sistema = $this->view->exibeView('contato');       
        $this->view->setContent($sistema);
        
        $this->view->setSessao('Formulário de Contato');        
        
        $this->view->exibeLayout();
    }
}