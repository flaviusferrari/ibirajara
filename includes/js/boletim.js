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
    
});

