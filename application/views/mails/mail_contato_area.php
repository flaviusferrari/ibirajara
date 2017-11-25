<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="utf-8" />
        <title>FFtech - Ativação do Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <table width="592" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-collapse:collapse;">
            <tr>
                <td align="right">
                    <a href="http://www.ffcsistemas.com/" target="_blank"><font size="6" color="#324f84" face="Arial, Helvetica, sans-serif"><strong>FFtech Gestão</a></strong></font></td>
            </tr>
            <tr><td height="6"></td></tr>
            <tr>
                <td height="5" style="border-top: 2px solid #adadad;"></td>
            </tr>

            <tr>
                <td>
                    <font size="5" color="#324f84" face="Arial, Helvetica, sans-serif"><strong>Ativação do Cadastro</strong></font>
                </td>
            </tr>
            <tr>
                <td height="5" style="border-bottom: 1px solid #adadad;"></td>
            </tr>
            <tr><td height="15"></td></tr>
            <tr>
                <td>
                    <p><font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif">Olá <strong><?php echo $nome; ?></strong>,</font></p>
                </td>
            </tr>
            <tr><td height="15"></td></tr>
            <tr>
                <td>
                    <p><font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif">
                            Você se cadastrou no FFtech Gestão, para que a sua conta seja ativada clique neste link:
                        </font></p>
                </td>
            </tr>
            <tr><td height="15"></td></tr>
            <tr>
                <td>
                    <p><font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif">
                            <strong><a href="<?php echo base_url('users/cadastro/ativar?mail='.$mail); ?>" target="_blank"><font color="#122f64">LINK DE ATIVAÇÃO DO REGISTRO</font></a></strong>
                        </font></p>
                </td>
            </tr>
            <tr><td height="15"></td></tr>
            <tr>
                <td>
                    <p><font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif">
                        Obrigado por usar o FFtech Gestão, a forma prática e segura de gerenciar a sua empresa.</font></p>
                </td>
            </tr>
            <tr><td height="15"></td></tr>
            <tr>
                <td>
                    <p><font size="2" color="#4D4D4D" face="Arial, Helvetica, sans-serif">Atenciosamente,<br />
                            Equipe FFtech<br />
                            <a href="http://www.ffsistemas.com/" target="_blank"><font color="#324f84">www.ffcsistemas.com</font></a><br />
                        </font></p>
                </td>
            </tr>
            <tr><td height="15"></td></tr>
            <tr>
                <td height="20" style="border-bottom: 1px solid #adadad;"></td>
            </tr>            
            <tr>
                <td>&nbsp;</td>
            </tr>

        </table>
    </body>
</html>