/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {    
    
    /**** BOTÃO SALVA BOLETIM ****/
    $('#btnSalvar').click(function() {
        $('#formulario').attr('action', 'indexCode.php/administrator/boletim/salvarBoletim');
        $('#formulario').submit();
    });
    
    
    // Localiza o Boletim desejado pelo título
    $('#titulo').autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: "indexCode.php/administrator/boletim/LocalizaBoletim",
                type: 'post',
                dataType: "json",
                data: {
                    'termo': request.term
                },
                success: function( data ) {                    
                    response( data );
                }
            });
        },
        minLength: 3,
        select: function( event, ui ) {
            var novaURL = 'indexCode.php/administrator/boletim/exibeBoletim/'+ui.item.valor;
            $(window.document.location).attr('href',novaURL);        
        }
    });
    
});

