/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    
    /**** BOTÃO SALVAR ****/
    $('#btnSalvar').click(function() {
        
        // Verifica se o título foi digitado
        if($('#titulo').val() == '')
        {
            $('#btnSaveModal').hide();
            
            $('#contentModal').html("Digite o título do Evento!");
            
            $('#myModal').modal('show');
            
            return false;
        }
        
        
        $('#formulario').attr('action', 'indexCode.php/administrator/eventos/salvar');
        $('#formulario').submit();
    });
    
    
    // Localiza o Boletim desejado pelo título
    $('#titulo').autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: "indexCode.php/administrator/eventos/LocalizaEvento",
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
            var novaURL = 'indexCode.php/administrator/eventos/exibe/'+ui.item.valor;
            $(window.document.location).attr('href',novaURL);        
        }
    });
    
    
});

