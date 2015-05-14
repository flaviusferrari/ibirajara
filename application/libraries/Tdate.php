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
    
}