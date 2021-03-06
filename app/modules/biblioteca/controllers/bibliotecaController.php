<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Biblioteca extends Controller
{
    private $view;
    private $model;
    private $program;


    public function __construct()
    {
        // Inclui as Views
        require_once (BASEPATH . '/app/modules/biblioteca/views/Biblioteca_View.php'); 
        $this->view = new Biblioteca_View();
        
        // Instancia o Menu
        $this->view->setMenu($this->view->getInclude('menu')); 
        
        // Instancia o Sub-Menu
        $this->view->setSub($this->view->getInclude('sub'));
        
        // Inclui os models
//        require_once (BASEPATH . '/app/modules/biblioteca/models/Biblioteca_Model.php');  
//        $this->model = new Biblioteca_Model();
    }    
    
    
    /** 
    * Metdo index()
    *   Verifica se o Usuário se logou, caso não tenha feito o login,
     *  encaminha para a página de logon
    */
    public function index()
    {   
        // Redireciona para a página de Inicial do Painel
        $sistema = $this->view->exibeView('biblioteca');       
        $this->view->setContent($sistema);
        
        $this->view->setSessao('Biblioteca');        
        
        $this->view->exibeLayout();
    }
}