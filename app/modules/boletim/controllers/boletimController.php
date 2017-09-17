<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class boletim extends Controller
{
    private $view;
    private $model;
    private $program;


    public function __construct()
    {
        // Inclui as Views
//        require_once (BASEPATH . '/app/modules/boletim/views/Boletim_View.php'); 
//        $this->view = new Boletim_View();
        
        // Inclui os models
        require_once (BASEPATH . '/app/modules/boletim/models/Boletim_Model.php');  
        $this->model = new Boletim_Model();
    }   
    
    
    /**
        *  Método boletimSemana
        *    busca a programação da semana
        * 
        */
    public function boletimSemana()
    {
        $data = date('Y-m-d'); // '2015-03-03'; 
//        $dtFinal = date('Y-m-d', strtotime("+6 days", strtotime($dtInicio)));
//        
        $semana = $this->model->buscaBoletim($data);
//        
        return $semana;
    }
    
}