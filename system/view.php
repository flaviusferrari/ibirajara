<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View
{
    public $result;
    protected $_menu;
    protected $_content;
    public $_controller;
    public $_sessao;


    public function setLibraries($controller) 
    {      
        
        ob_start();        
        
        include_once 'app/include/libraries.phtml';
        
        $this->result = ob_get_contents();
        ob_end_clean();   
        
        return $this->result;
        
    }    
    
    
    
    /**
     *  metodo getInclude( )
     *  retorna o include desejado
     * 
     * @parm $include = nome do include
     */
    public function getInclude($include, $texto = NULL)
    {
        // Inica a gravaçao do retorno
        ob_start();
        
        // inclui o arquivo
        include_once "app/include/{$include}.phtml";
        
        // armazena o include em uma variavel
        $result = ob_get_contents();
        
        // finaliza a gravaçao
        ob_end_clean();
        
        // retorna o resultado
        return $result;
    }
    
    /**
     * Método setMenu()
     *   seta o menu
     * 
     * @param type $name = Menu do sistema
     */
    public function setMenu($menu)
    {
        $this->_menu = $menu;
    }
    
    /**
     * Método setContent()
     *   Inclui o conteúdo
     * 
     * @param type $sys = sistema
     */
    public function setContent($content)
    {
        $this->_content = $content;
    }
    
    
    /**
     * Método exibeLayout()
     *  exibe o layou
     */
    public function exibeLayout()
    {
        //instancia a classe
        $tp = new templateParser('template/layout.html');
        
        //define os parâmetros da classe
        $tags = array(
                    'DIR'       => DIR,
                    'LIBRARIES' => $this->setLibraries($this->_controller),
                    'MENU'      => $this->_menu,
                    'SESSAO'    => $this->_sessao,
                    'CONTENT'   => $this->_content
                );
        
        //faz a substituição
        $tp->parseTemplate($tags);
        
        // Exibe o template
        echo $tp->display();
    }
    
}