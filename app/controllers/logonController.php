<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Logon extends Controller
{
    public function __construct($controller)
    {
        //instancia a classe
        $tp = new templateParser(VIEWS . 'logon.html');
        
        //define os parâmetros da classe
        $tags = array(
                   'JQUERY' => $controller,
                   'CSS' => $controller,
                );
        
        //faz a substituição
        $tp->parseTemplate($tags);
        
        // Exibe o template
        echo $tp->display();
    }        
   
}