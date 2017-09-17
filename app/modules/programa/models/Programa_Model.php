<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Programa_Model extends Model
{
    protected $conn;
    protected $_log;


    public function __construct() 
    {
        // abre conexão com a base my_livro (mysql)
        $this->conn = TConnection::open('mysql');

        // define o arquivo de LOG
        $this->_log = new TLoggerTXT('LOG.txt');
        
        //$this->_tablename = 'empresa';
    }    
    
    
    
    /**
     *  Método buscaProgramacao()
     *    busca a programação declarada
     */
    public function buscaProgramacao($dtInicio, $dtFim)
    {
        $sql = new TSqlSelect;
        
        $sql->setEntity('programacao');
        
        $sql->addColumn('*');
        
        // Critéria
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
            //$this->_log->write($sql->getInstruction());

            // Verifica se retornou algum Cliente
            if ($result)
            {                
                $palestras = $result->fetchAll(PDO::FETCH_ASSOC);
                
                               
                return $palestras;
            }
        } 
        catch (Exception $ex) 
        {
            // exibe a mensagem de erro
            echo "Erro: " . $ex->getMessage(); 
        }
    }
}