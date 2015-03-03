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
        * Métdo salvaBoletim
        *   grava a programcação no Banco de Dados
        * 
        * @param Programacao_Param $object
        * @return boolean
        */
    public function salvaBoletim(Boletim_Param $object)
    {
        $sql = new TSqlInsert;
        
        $sql->setEntity($this->_tablename);
        
        $sql->setRowData('dtInicio', $object->dtInicio);
        $sql->setRowData('dtFim',    $object->dtFim);
        $sql->setRowData('titulo',   $object->titulo);
        $sql->setRowData('citacao',  $object->citacao);
        $sql->setRowData('texto',    $object->texto);
        $sql->setRowData('livro',    $object->livro);
        
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
    
    
    /**
        * Métod localizarBoletim()
        *   localiza a empresa
        * 
        * @param type $nome
        * @return boolean
        */
    public function localizarBoletim($boletim)
    {
        $sql = new TSqlSelect;
        
        $sql->setEntity('boletim');
        
        $sql->addColumn('*');
        
        // Critéria
        $criteria = new TCriteria;
        $criteria->add(new TFilter('titulo', 'like', '%'.$boletim.'%'));
        $criteria->setProperty('order', 'titulo');
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
                $boletins = $result->fetchAll(PDO::FETCH_ASSOC);
                
                               
                return $boletins;
            }
        } 
        catch (Exception $ex) 
        {
            // exibe a mensagem de erro
            echo "Erro: " . $ex->getMessage(); 
        }
    }
    
    
    /**
        * Método atualizaBoletim()
        *   atualiza os dados Da Empresa no Banco de Dados
        * 
        * @param Empresa_Param $object
        * @return boolean
        */
    public function atualizaBoletim(Boletim_Param $object)
    {
        $sql = new TSqlUpdate;
        
        $sql->setEntity($this->_tablename);
        
        $sql->setRowData('dtInicio', $object->dtInicio);
        $sql->setRowData('dtFim',    $object->dtFim);
        $sql->setRowData('titulo',   $object->titulo);
        $sql->setRowData('citacao',  $object->citacao);
        $sql->setRowData('texto',    $object->texto);
        $sql->setRowData('livro',    $object->livro);
        
        // Criteria
        $criteria = new TCriteria;
        $criteria->add(new TFilter('id', '=', $object->id));
        $sql->setCriteria($criteria);
        
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
            return "Erro!: " . $e->getMessage() . "<br><br>\n";
        }          
    }
    
    
    
}