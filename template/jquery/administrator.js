/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    
    /*** BOTÃO ENTRAR ****/
    $('#btnEntrar').click(function() {
        // Exibindo os dados da tabela
       $.ajax({
           url : 'ajax.php',
           type : 'POST',
           data : 'controller=login&action=logar&usuario=' + $('#usuario').val() + '&senha=' + $('#senha').val(),
           success: function(data){ 
               if (!data) {
                   window.location.href = 'administrator';
               } else {
                   $('#resposta').html(data);   
               }
               
           }           
       });    
    });
     
    /**** BOTÃO GRAVA PROGRAMAÇÃO ****/
    $('#btnGravaProgramacao').click(function() {
        $('#formulario').submit();
    });
    
});