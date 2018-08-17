/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {   
    
    /**
     * Torna o ícone em opções azul
     */
    $('.glyphicon').hover(
        function () {
            $(this).addClass("text-primary");
        }
        , function () {
            $(this).removeClass("text-primary");
        }
    );

    // ---------------------------------------------------------------------
    
    /**
     * 
     */
    $('.vizualizaMensagem').click(function() {
        
        $.ajax({
           url : 'indexCode.php/boletim/exibeMensagem',
           type : 'POST',
           data : {
               'idBoletim': $(this).attr('data-idBoletim')
           },
           success: function(data){               
               $('#btnSaveModal').hide();
               $('.modal-title').html('Mensagem do Boletim');
               $('#contentModal').html(data);
               $('#myModal').modal('show');
               return false;
           }           
        });
        
        
    });
    
    // -------------------------------------------------------------
    
    $('.exibeBoletimPdf').click(function() {
        
        link = './includes/images/boletins/'+$(this).attr('data-numBoletim');
        
        $(window.document.location).attr('href', link);
        
    });


});

