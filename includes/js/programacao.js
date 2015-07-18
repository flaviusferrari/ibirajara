/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
   
    // BOTÃO MÊS ANTERIOR
    $('#btnMesAnterior').click(function() {
        mes = $('#mes_atual').val() - 1;
        ano = $('#ano_atual').val();
        
        link = 'indexCode.php/programacao/exibe/'+ano+'/'+mes;
        
        $(window.document.location).attr('href', link);
    });
    
    
});

