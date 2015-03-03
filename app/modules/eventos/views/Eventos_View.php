<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Eventos_View extends View
{
    
    
    public function exibeView($view, $dados = NULL)
    {
        ob_start();  
        
        include_once "app/modules/eventos/views/{$view}.phtml";
        
        $result = ob_get_contents();
        ob_end_clean();   
        
        return $result;
    }   
    
    
    /**
     * Método exibeEvento
     * 
     * @param $ano = Ano do Evento
     * @patam $evento = nome do evento
     */
    public function exibeEvento($ano, $evento)
    {
        ob_start();  
        
        include_once "app/eventos/{$ano}/{$evento}.phtml";
        
        $result = ob_get_contents();
        ob_end_clean();   
        
        return $result;
    }   
}