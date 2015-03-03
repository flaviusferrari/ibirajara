<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class programa extends Controller
{
    private $view;
    private $model;
    private $program;


    public function __construct()
    {
        // Inclui as Views
        require_once (BASEPATH . '/app/modules/programa/views/Programa_View.php'); 
        $this->view = new Programa_View();
        
        // Instancia o Menu
        //$this->view->setMenu($this->view->getInclude('menu')); 
        
        // Instancia o Sub-Menu
        //$this->view->setSub($this->view->getInclude('sub'));
        
        // Inclui os models
        require_once (BASEPATH . '/app/modules/programa/models/Programa_Model.php');  
        $this->model = new Programa_Model();
    }       
    
    
    
    /**
     *  Método programacaoSemana
     *    busca a programação da semana
     * 
     */
    public function programacaoSemana()
    {
        $dtInicio = date('Y-m-d');
        $dtFinal = date('Y-m-d', strtotime("+6 days", strtotime($dtInicio)));
        
        $semana = $this->model->buscaProgramacao($dtInicio, $dtFinal);
        
        return $semana;
    }
    
    
    
   
}