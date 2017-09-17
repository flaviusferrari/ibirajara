
$(document).ready(function() {
    
    /**** BOTÃO SALVAR ****/
    $('#btnSalvar').click(function() {
       
        $('#formulario').attr('action', 'indexCode.php/administrator/slides/salvar');
        $('#formulario').submit();
    });
    
    // ----------------------------------------------------
    
    /**
     * Localiza o Evento desejado pelo título
     */ 
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
            $('#idEvento').val(ui.item.valor);
        }
    });
    
});