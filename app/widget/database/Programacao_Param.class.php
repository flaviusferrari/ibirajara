<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Programacao_Param extends TRecord
{
    const TABLENAME = 'programacao';    
    
    public $id;
    public $data;
    public $tema;
    public $subsidio;
    public $expositor;
}