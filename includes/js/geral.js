/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
        
    // Campo DATA
    $( ".dtForm" ).datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
    
    // --------------------------------------------------------------
    
    /**
     *   SIDEBAR AVISOS
     *  
     *   exibe o aviso salvo
     */
    $('#aviso_txt').load('indexCode.php/administrator/avisos/exibeAviso');
    
    // ---------------------------------------------------------------
    
    /**
     *  SIDEBAR ÚLTIMO VÍDEO
     *  
     *    Exibe o útltimo vídeo 
     */
    $('#lastVideo').load('indexCode.php/videos/lastVideo');
    
    
});
