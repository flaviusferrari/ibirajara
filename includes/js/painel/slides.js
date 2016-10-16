
$(document).ready(function() {
    
    /**** BOTÃO SALVAR ****/
    $('#btnSalvar').click(function() {
       
        $('#formulario').attr('action', 'indexCode.php/administrator/slides/salvar');
        $('#formulario').submit();
    });
    
});