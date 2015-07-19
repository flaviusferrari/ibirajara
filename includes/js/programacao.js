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
        
        // Verifica se o mês é o último do ano
        if (mes == 0)
        {
            mes = 12;
            ano = ano - 1;
        }
        
        link = 'indexCode.php/programacao/exibe/'+ano+'/'+mes;
        
        $(window.document.location).attr('href', link);
    });
    
    // BOTÃO MÊS POSTERIOR
    $('#btnMesPosterior').click(function() {
        mes = parseInt($('#mes_atual').val()) + 1;
        ano = $('#ano_atual').val();
        
        // Verifica o mês
        if (mes == 13)
        {
            mes = 1;
            ano = parseInt(ano) + 1;
        }
        
        link = 'indexCode.php/programacao/exibe/'+ano+'/'+mes;
        
        $(window.document.location).attr('href', link);
    });
    
});

