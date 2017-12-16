<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulário Site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <table width="592" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-collapse:collapse;">            
            <tr><td height="6"></td></tr>
            <tr>
                <td height="5" style="border-top: 2px solid #adadad;"></td>
            </tr>
            <tr>
                <td>
                    <font size="5" color="#324f84" face="Arial, Helvetica, sans-serif"><strong>Formulário do site</strong></font>
                </td>
            </tr>
            <tr>
                <td height="5" style="border-bottom: 1px solid #adadad;"></td>
            </tr>
            <tr><td height="15"></td></tr>
            <tr>
                <td>
                    <p><font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif"><strong>De: </strong><?php echo $nome; ?></font></p>
                    <p><font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif"><strong>E-mail: </strong><?php echo $mail; ?></font></p>
                </td>
            </tr>
            <tr>
                <td height="15"><font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif"><strong>Assunto: </strong><?php echo $assunto; ?></font></td></tr>
            <tr>
                <td>
                    <p>
                        <font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif">
                            <i><?php echo $mensagem; ?></i>
                        </font>
                    </p>
                </td>
            </tr>
            <tr>
                <td height="20" style="border-bottom: 1px solid #adadad;"></td>
            </tr>            
            <tr>
                <td>&nbsp;</td>
            </tr>

        </table>
    </body>
</html>