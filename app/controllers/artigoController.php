<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Artigo extends Controller
{
    private $VIEW;
    private $MODEL;
    
    public function __construct()
    {
        // Inclui as Views
        require_once (BASEPATH . '/app/views/Artigo_View.php'); 
        $this->VIEW = new Artigo_View();
        
        //$this->VIEW->_sessao = 'ARTIGO';
        
        // Inclui os models
        //require_once (BASEPATH . '/app/models/Clientes_Model.php');  
    }
    
    
    public function exibe($param)
    {
        $this->VIEW->setMenu($this->VIEW->getInclude('menu'));
        
        $this->VIEW->_sessao = strtoupper($param['sessao']);
        $this->VIEW->_controller = $param['sessao'];
        
        $this->VIEW->setContent($this->VIEW->getInclude($param['sessao']));
        
        $this->VIEW->exibeLayout();
    }
}