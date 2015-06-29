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
    
    
});

