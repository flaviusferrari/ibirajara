<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Boletim_Param extends TRecord
{
    const TABLENAME = 'boletim';    
    
    public $id;
    public $dtInicio;
    public $dtFim;
    public $titulo;
    public $citacao;
    public $texto;
    public $livro;
}