<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contato_View extends View
{
    
    
    public function exibeView($view, $dados = NULL)
    {
        ob_start();  
        
        include_once "app/modules/contato/views/{$view}.phtml";
        
        $result = ob_get_contents();
        ob_end_clean();   
        
        return $result;
    }   
    
    
    /**
     * Método enviandoEmail()
     */
    public function enviandoEmail()
    {
        ob_start();  
        
        include_once "app/modules/contato/views/Envmail.php";
        
        $result = ob_get_contents();
        ob_end_clean();   
        
        return $result;
    }
}