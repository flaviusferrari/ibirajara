<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Esde extends Controller
{
    private $VIEW;
    private $MODEL;
    
    public function __construct()
    {
        // Inclui as Views
        require_once (BASEPATH . '/app/views/Esde_View.php'); 
        $this->VIEW = new Esde_View;
        
        $this->VIEW->_sessao = 'ESDE';
        
        // Inclui os models
        //require_once (BASEPATH . '/app/models/Clientes_Model.php');  
    }
    
    
    public function index()
    {
        $this->VIEW->setMenu($this->VIEW->getInclude('menu'));
        
        $this->VIEW->exibeLayout();
    }
}