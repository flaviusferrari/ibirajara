/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    
    $('#btnSalvar').click(function() {
        
        // Verifica se o cliente já foi salvo
        if($('#idCliente').val() != '')
        {
            $('#btnSaveModal').hide();
            
            $('#contentModal').html("Cliente já foi salvo!!<br>Insira um Cliente válido!!");
            
            $('#myModal').on('shown.bs.modal');
        }
        else
        {
            // Direciona para a ação correta
            $('#formulario').attr("action","clientespf/salvar");

            // Envia o Formulário
            $('#formulario').submit();
        }
        
        
        
    });
    
});
