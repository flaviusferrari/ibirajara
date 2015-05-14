/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    
    $('.week').click(function() {
        $(this).parent().hide();
    });
    
    /**** BOTÃO GRAVA PROGRAMAÇÃO ****/
    $('#btnSalvar').click(function() {
        $('#formulario').attr('action', 'indexCode.php/administrator/programacao/cadastraProgramacao');
        $('#formulario').submit();
    });
    
    
    /**** BOTÃO LOCALIZAR ****/
    $('#btnLocalizar').click(function() {
        $('#formulario').attr('action', 'indexCode.php/administrator/programacao/localizaProgramacao');
        $('#formulario').submit();
    });
    
    
    /**** NOVO ****/
    $('#btnNovo').click(function() {
        $(window.document.location).attr('href', 'indexCode.php/administrator/programacao');
    });
    
});

