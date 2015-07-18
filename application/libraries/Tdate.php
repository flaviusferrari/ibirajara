<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Tdate 
{
    public function __construct()
    {
        
    }
    
    
    public function setDateBr($date)
    {
        return date('d/m/Y', strtotime($date));
    }
    
    
    public function setDateBd($date)
    {
        $dt = explode('/',$date);
        
        $data = $dt[2].'-'.$dt[1].'-'.$dt[0];  
        
        return $data;
    }
    
    
    /**
     * Método getNomeMes()
     *   retorna o nome do Mês por extenso
     * 
     * @param $mes = valor do Mês
     */
    public function getNomeMes($mes)
    {
        // Verifica qual o mes corrente
        switch ($mes)
        {
            case 01:
                $mes = "JANEIRO";
                break;
            case 02:
                $mes = 'FEVEREIRO';
                break;
            case 03:
                $mes = 'MARÇO';
                break;
            case 04:
                $mes = 'ABRIL';
                break;
            case 05:
                $mes = 'MAIO';
                break;
            case 06:
                $mes = 'JUNHO';
                break;
            case 07:
                $mes = 'JULHO';
                break;
            case 08:
                $mes = 'AGOSTO';
                break;
            case 09:
                $mes = 'SETEMBRO';
                break;
            case 10:
                $mes = 'OUTUBRO';
                break;
            case 11:
                $mes = 'NOVEMBRO';
                break;
            case 12:
                $mes = 'DEZEMBRO';
                break;
        }
        
        return $mes;
    }
    
}