<?php

class Index extends Controller
{
    public function __construct($controller)
    {
        $view = new View();
        
        $menu = $view->getInclude('menu');
        
        $slideshow = $view->getInclude('slideshow');
        
        $sistema = ' ';
        
        //instancia a classe
        $tp = new templateParser('template/home.html');
        
        //define os parâmetros da classe
        $tags = array(
                    'LIBRARIES' => $view->setLibraries($controller),
                    'SLIDESHOW' => $slideshow,
                    'MENU'      => $menu,
                    'PROGRAMA'  => $view->getInclude('programa'),
                    'BOLETIM'   => $view->getInclude('boletim')
                );
        
        //faz a substituição
        $tp->parseTemplate($tags);
        
        // Exibe o template
        echo $tp->display();
    }    
   
}