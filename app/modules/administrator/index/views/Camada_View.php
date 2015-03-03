<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Camada_View extends View
{    
    public $sistema;


    public function exibeView($view, $dados = NULL)
    {
        ob_start();  
        
        include_once "app/modules/administrator/index/views/{$view}.phtml";
        
        $result = ob_get_contents();
        ob_end_clean();   
        
        return $result;
    }   
    
    
    /**
        * Métod setSistema()
        *   
        * @param $sys = Sistema
        */
    public function setSistema($sys)
    {
        $this->sistema = $sys;
    }

    

    /**
        * Método exibePainel()
        *  exibe o formulário de cadastro de Clientes
        */
    public function exibePainel()
    {
        //instancia a classe
        $tp = new templateParser('template/painel.html');
        
        //define os parâmetros da classe
        $tags = array(
                    'DIR'       => DIR,
                    'LIBRARIES' => $this->setLibraries(CONTROLL),
                    'MENU'      => $this->_menu,
                    'SISTEMA'   => $this->sistema
                );
        
        //faz a substituição
        $tp->parseTemplate($tags);
        
        // Exibe o template
        echo $tp->display();
    }
   
}