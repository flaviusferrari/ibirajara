<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Camada_Model extends Model
{
    protected $conn;
    protected $_tablename;   
    protected $_log;


    public function __construct() 
    {
        // abre conexão com a base my_livro (mysql)
        $this->conn = TConnection::open('mysql');

        // define o arquivo de LOG
        $this->_log = new TLoggerTXT('LOG.txt');
    }    
    
    
    /**
        * Métod setTablename()
        *   inclui o nome da tabela a ser trabalhada
        * 
        * 
        */
    public function setTablename($tabela)
    {
        $this->_tablename = $tabela;
    }

}