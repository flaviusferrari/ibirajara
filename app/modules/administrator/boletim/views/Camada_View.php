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
        
        include_once 'app/modules/administrator/'.ACTION."/views/{$view}.phtml";
        
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
        * Método verificaGravacao()
        *   verifica se a gravação foi bem sucedida
        */
    public function verificaGravacao($gravacao, $local)
    {
        // Verifica se a gravação foi bem sucedida
        if (is_string($gravacao))
        {
            $msn = new TMessage('erro');
            $msn->setUrl('administrator/'.$local);
            
            parent::setContent($msn->exibeMensagem($gravacao));    
        }        
        else
        {
            // Exibe a mensagem
            switch ($local) {
                case 'programacao':
                    $msn_local = 'MSN_PROGRAM_SAVE_SUCESS';
                    break;
                case 'boletim':
                    $msn_local = 'MSN_BOLETIM_SAVE_SUCESS';
                    break;
            }
            
            
            $msn = new TMessage('ok');
            $msn->setUrl('administrator/'.$local);
            
            $mensagem = parent::setMensagem($msn_local);
            
            $this->setSistema($msn->exibeMensagem($mensagem));  
        }    
    }
    
    
    /**
         * Método exibeBoletins()
         *   retorna o resultado 
         */
    public function exibeBoletins($boletins)
    {
        // Monta a tabela com os dados
        foreach ($boletins as $boletim)
        {
            $data[] = array('value' => $boletim['titulo'], 'valor' => $boletim['id'],);
        }

        echo json_encode($data);
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
