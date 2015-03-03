<?php

class Index extends Controller
{
    protected $view;
    protected $menu;
    protected $slideshow;
    private   $controller;
    private   $program;



    public function __construct($controller)
    {
        $this->view = new View();
        
        $this->menu = $this->view->getInclude('menu');
        
        $this->slideshow = $this->view->getInclude('slideshow');
        
        $this->controller = $controller;
        
        // exibe a programação do dia
        $this->setPrograma();
        
        $this->exibeHome();
    }    
    
    
    /**
        *  Método setPrograma()
        *   busca a programação do dia
        */
    public function setPrograma()
    {
        require_once (BASEPATH . '/app/modules/programa/controllers/programaController.php'); 
        
        $programa = new programa();
        $semana = $programa->programacaoSemana();
        
        //$this->program = print_r($semana);
        
        $this->program = $this->view->getInclude('programa', $semana);
    }
    
    /**
     *  Método setBoletim()
     *   inclui o boletim da semana
     */
    public function setBoletim()
    {
        require_once (BASEPATH . '/app/modules/boletim/controllers/boletimController.php'); 
        
        $b = new boletim();
        $dados = $b->boletimSemana();
        
        $boletim = $this->view->getInclude('boletim', $dados);
        
        return $boletim;
    }

    

    /**
     * Método exibeHome()
     *  exibe o formulário de cadastro de Clientes
     */
    public function exibeHome()
    {
        //instancia a classe
        $tp = new templateParser('template/home.html');
        
        //define os parâmetros da classe
        $tags = array(
                    'LIBRARIES' => $this->view->setLibraries($this->controller),
                    'SLIDESHOW' => $this->slideshow,
                    'MENU'      => $this->menu,
                    'SUB_MENU'  => $this->view->getInclude('sub'),
                    'PROGRAMA'  => $this->program,
                    'BOLETIM'   => $this->setBoletim()
                );
        
        //faz a substituição
        $tp->parseTemplate($tags);
        
        // Exibe o template
        echo $tp->display();
    }
   
}