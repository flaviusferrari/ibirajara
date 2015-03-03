<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Biblioteca_View extends View
{
    
    
    public function exibeView($view, $dados = NULL)
    {
        ob_start();  
        
        include_once "app/modules/biblioteca/views/{$view}.phtml";
        
        $result = ob_get_contents();
        ob_end_clean();   
        
        return $result;
    }   
}