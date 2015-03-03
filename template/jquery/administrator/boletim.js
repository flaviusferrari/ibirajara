/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    
    // BOTÃO SALVAR 
    $('#btnSalvarBoletim').click(function() {        
        $('#formulario').attr("action","administrator/boletim/salvarBoletim");
        // Envia o Formulário
        $('#formulario').submit();
    });
    
    
    // BOTÃO ATUALIZAR
    $('#btnAtualizarBoletim').click(function() {
        
       $('#formulario').attr("action","administrator/boletim/atualizarBoletim");
        // Envia o Formulário
        $('#formulario').submit();
    });
    
    // BOLETIM
    //  localiza o Boletim desejado pelo título
    $('#titulo').autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: "ajax.php",
                type: 'post',
                dataType: "json",
                data: {
                    'termo': request.term,
                    'controller': 'administrator',
                    'action': 'LocalizaBoletim',
                    'sessao': 'boletim'
                },
                success: function( data ) {                    
                    response( data );
                }
            });
        },
        minLength: 3,
        select: function( event, ui ) {
            var novaURL = 'administrator/boletim/exibeBoletim/'+ui.item.valor;
            $(window.document.location).attr('href',novaURL);        
        }
    });
    
    // BOTÃO LOCALIZAR
    $('#btnLocalizarBoletim').click(function() {
        $('#txtMensagem').html("Digite o título do Boletim para Localizar!");
            $('#mess').dialog({  
                autoOpen: true,  
                width: 400,  
                //height: 250,  
                modal: true,  
                buttons: {  
                    "OK": function () 
                    { 
                        $(this).dialog("close"); 
                    }
                }  
            });
            return false;
    });
    
});
