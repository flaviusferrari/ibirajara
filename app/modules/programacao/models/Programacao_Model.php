<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Programacao_Model extends Model
{
    protected $conn;
    private $_tablename;   
    protected $_log;


    public function __construct() 
    {
        // abre conexão com a base my_livro (mysql)
        $this->conn = TConnection::open('mysql');

        // define o arquivo de LOG
        $this->_log = new TLoggerTXT('LOG.txt');
        
        $this->_tablename = 'programacao';
    }    
    
    
    /**
        * Métod localizarProgramacao()
        *   localiza a empresa
        * 
        * @param type $nome
        * @return boolean
        */
    public function localizarProgramacao($mes, $ano)
    {
        $dtInicio = $ano.'-'.$mes.'-01';
        $dtFim    = $ano.'-'.$mes.'-31';        
        
        $sql = new TSqlSelect;
        
        $sql->setEntity($this->_tablename);
        
        $sql->addColumn('*');
        
        $criteria = new TCriteria;
        $criteria->add(new TFilter('data', '>=', $dtInicio));
        $criteria->add(new TFilter('data', '<=', $dtFim));
        $criteria->setProperty('order', 'data');
        $sql->setCriteria($criteria);
        
        
        try 
        {
            // executa a instrução SQL
            $result = $this->conn->query($sql->getInstruction());
            
            // grava no Log
            $this->_log->write($sql->getInstruction());
            
            // Verifica se retornou algum Cliente
            if ($result)
            {                
                $dados = $result->fetchAll(PDO::FETCH_ASSOC);
                               
                return $dados;
            }
        } 
        catch (Exception $ex) 
        {
            // exibe a mensagem de erro
            echo "Erro: " . $ex->getMessage(); 
        }
    }
    
    
}