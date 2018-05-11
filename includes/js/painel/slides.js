
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
    $('#tituloEvento').autocomplete({
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
    
    // ------------------------------------------------------------
    
    /**
     * BOTÃO LOCALIZAR
     * 
     *  Localiza e exibe o Slide
     */
    $('#btnLocalizar').click(function() {
        
        if($('#dtInicio').val() == '' && $('#dtFim').val() == '' && $('#titulo').val() == '')
        {
            $('#btnSaveModal').hide();            
            $('#contentModal').html("Selecione uma data ou parte do título!");            
            $('#myModal').modal('show');
            return false;
        }
        
        var formdata = $("#formulario").serialize();

        $.ajax({
            url: 'indexCode.php/administrator/slides/localizaSlide',
            type: 'POST',
            data: formdata,
            success: function (data) {
                // Exibe os dados
                $('#contentModal').html(data);
                $('#myModal').modal('show');
            }
        });
    });
    
    // -------------------------------------------------------
    
    $('#myModal').on('click', '.addEvento', function (e) {
        e.preventDefault();
        
        var data = $(this).attr('data-idslide');
        
        var novaURL = 'indexCode.php/administrator/slides/exibe/'+data;
        $(window.document.location).attr('href',novaURL);    
    });
    
    // -----------------------------------------------------------
    
    /**
     * BOTÃO NOVO
     * 
     *  Exibe o formulário para cadastro
     */
    $('#btnNovo').click(function() {
        $(window.document.location).attr('href', 'indexCode.php/administrator/slides');    
    });
    
});