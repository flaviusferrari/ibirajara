/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    
   /**
    * BOTÃO CADASTRA AUTOR
    * 
    *  Exibe uma janela Modal para cadastrar o autor
    */ 
   $('#btnCadastraAutor').click(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: "indexCode.php/administrator/biblioteca/exibeFormCadAutor",
            type: 'post',
            success: function( data ) {                    
                // Exibe a Modal
                $('.modal-title').html('Cadastra Autor');
                $('.modal-footer').hide();
                $('#contentModal').html(data);
                $('#myModal').modal('show');
                return false;
            }
        });
   });
   
   // --------------------------------------------------------------------
   
   /**
    *  Efetua o cadastro do Autor no Banco
    */
   $('#myModal').on('click', '#btnCadAutorModal', function(e) {
       e.preventDefault();
       
       $.ajax({
            url: "indexCode.php/administrator/biblioteca/cadastraAutor",
            type: 'post',
            data: {
                'nomeAutor': $('#nomeAutorModal').val()
            },
            success: function( data ) {                    
                // Exibe a Modal
                $('#contentModal').html(data);
            }
        });
   });
   
   // ---------------------------------------------------------------------
   
   /**
    * MÉTODO LOCALIZA AUTOR
    * 
    *  Busca o Autor que está sendo digitado 
    */
   $('#myModal').on('click', '#btnLocAutorModal', function(e) {
       e.preventDefault();
       
       $.ajax({
            url: "indexCode.php/administrator/biblioteca/localizaAutor",
            type: 'post',
            data: {
                'nomeAutor': $('#nomeAutorModal').val()
            },
            success: function( data ) {                    
                // Exibe a Modal
                $('#contentModal').html(data);
            }
        });
   });
    
    
});
