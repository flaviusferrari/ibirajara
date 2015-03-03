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
    
    
    /**
        * Métdo salvaProgramacao
        *   grava a programcação no Banco de Dados
        * 
        * @param Programacao_Param $object
        * @return boolean
        */
    public function salvaProgramacao(Programacao_Param $object)
    {
        $sql = new TSqlInsert;
        
        $sql->setEntity($this->_tablename);
        
        $sql->setRowData('data', $object->data);
        $sql->setRowData('tema', $object->tema);
        $sql->setRowData('subsidio',  $object->subsidio);
        $sql->setRowData('expositor', $object->expositor);
        
        try
        {           
            // executa a instrução SQL
            $result = $this->conn->query($sql->getInstruction());
            
            // grava no Log
            $this->_log->write($sql->getInstruction());

            if ($result)
            {                
                return TRUE;
            }    
        } 
        catch (Exception $e) 
        {
            // exibe a mensagem de erro
            return "Erro: " . $e->getMessage() . "<br><br>\n";
        }        
    }
    
    
    
}