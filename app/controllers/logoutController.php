<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Logout extends Controller
{
    public function __construct($controller)
    {
        setcookie('usuario');
        setcookie('idUsuario');
        setcookie('nomeUsuario');
        
        header("Location: administrator");
    }    
   
}