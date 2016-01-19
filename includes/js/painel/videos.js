/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
   
    $('#btnSalvar').click(function() {
        // Envia o formulário
        $('#formulario').attr("action","indexCode.php/administrator/videos/salvar");
        $('#formulario').submit();
    });
    
});
