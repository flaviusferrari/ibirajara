<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Tlogger
{
    
    public function setLogger($log)
    {
        // Cria a Mensagem
        $message = ':: ' . $_SESSION['usuario'] . ' :: ' . $log;
        
        
        log_message('INFO', $message);
    }
    
}