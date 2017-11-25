/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {   
    
    /**
     * BOTÃO ENVIAR
     * 
     *  Processa os dados do formulário e envia.
     */
    $('#btnEnviar').click(function(e) {
        e.preventDefault();
        
        $('#formulario').submit();
    });
    
});

