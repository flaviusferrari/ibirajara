<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mail 
{
    private $mensagem;
    private $headers;
    private $too;
    private $assunto;




    /**
     *  Método setHeader()
     *   Configura o cabeçalho do email
     */
    public function setHeaders()
    {
        $this->headers  =  "Content-Type:text/html; charset=UTF-8\n";
        $this->headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
        $this->headers .= "X-Sender:  <sistema@dominio.com.br>\n"; //email do servidor //que enviou
        $this->headers .= "X-Mailer: PHP  v".phpversion()."\n";
        $this->headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
        $this->headers .= "Return-Path:  <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para  este email.
        $this->headers .= "MIME-Version: 1.0\n";
    }
    
    
    /**
     *  Método setMensagem()
     *    Mensagem do email
     */
    public function setMensagem($msn)
    {
        $this->mensagem = $msn;
    }
    
    
    /**
     *  Método setDestinatario()
     * 
     * @param $too = Email do destinatário
     */
    public function setDestinatario($too)
    {
        $this->too = $too;
    }
    
    
    /**
     * Método setAssunto()
     *   insere o assunto
     * 
     * @param $assunto = Assunto do Email
     */
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;
    }

    
    /**
     *  Método sendMail()
     *   Envia o e-mail
     */
    public function sendMail()
    {
        // Insere o cabeçalho
        $this->setHeaders();
        
        // envia o Email
        mail($this->too, $this->assunto, $this->mensagem, $this->headers); // envia o email
    }
    
    
}
 
