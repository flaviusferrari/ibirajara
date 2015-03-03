<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contato_Model extends Model
{
    public function enviaEmail($dados)
    {
        $mail = new Mail();
        
        $mail->setAssunto($dados['assunto']);
        $mail->setDestinatario($dados['destinatario']);
        $mail->setResponse($dados['remetente']);
        
        // Preenche a mensagem
        $msn = "
<html>
<head>
 <title>Birthday Reminders for August</title>
</head>
<body>
<p>Here are the birthdays upcoming in August!</p>
<table>
 <tr>
  <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
 </tr>
 <tr>
  <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
 </tr>
 <tr>
  <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
 </tr>
</table>
</body>
</html>
";        
        
        //$msn = 'Enviado por: ' . $dados['nome'];
        
        $mail->setMensagem($msn);
        
        // Envia o email
        $enviou = $mail->sendMail();
        
        return $enviou;
    }
}