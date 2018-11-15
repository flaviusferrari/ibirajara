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
   
   // ----------------------------------------------------------------------
   
   /**
    * MÉTODO ADICIONA AUTOR
    * 
    *  Adiciona o autor escolhido ao formulário de cadastro.
    */
   $('#myModal').on('click', '.addAutor', function (e) {
        e.preventDefault();
        
        var data = $(this).attr('data-autor');
        var res = data.split(';'); 
        
        $('#autor').val(res[1]);
        $('#idAutor').val(res[0]);
        
        $('#myModal').modal('hide');
    });
    
    // --------------------------------------------------------------------
    
    /**
    * BOTÃO CADASTRA ESPÍRITO
    * 
    *  Exibe uma janela Modal para cadastrar o espírito
    */ 
   $('#btnCadEspirito').click(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: "indexCode.php/administrator/biblioteca/exibeFormCadEspirito",
            type: 'post',
            success: function( data ) {                    
                // Exibe a Modal
                $('.modal-title').html('Localizar Espírito');
                $('.modal-footer').hide();
                $('#contentModal').html(data);
                $('#myModal').modal('show');
                return false;
            }
        });
   });
   
   // ----------------------------------------------------------------------
   
   /**
    * BOTÃO CAD ESPIRITO MODAL
    * 
    *  Efetua o cadastro do Espírito no Banco
    */
   $('#myModal').on('click', '#btnCadEspiritoModal', function(e) {
       e.preventDefault();
       
       $.ajax({
            url: "indexCode.php/administrator/biblioteca/cadastraEspirito",
            type: 'post',
            data: {
                'nomeEspirito': $('#nomeEspiritoModal').val()
            },
            success: function( data ) {                    
                // Exibe a Modal
                $('#contentModal').html(data);
            }
        });
   });
   
   // ---------------------------------------------------------------------
   
   /**
    * MÉTODO LOCALIZA ESPIRITO
    * 
    *  Busca o Espírito que está sendo digitado 
    */
   $('#myModal').on('click', '#btnLocEspiritoModal', function(e) {
       e.preventDefault();
       
       $.ajax({
            url: "indexCode.php/administrator/biblioteca/localizaEspirito",
            type: 'post',
            data: {
                'nomeEspirito': $('#nomeEspiritoModal').val()
            },
            success: function( data ) {                    
                // Exibe a Modal
                $('#contentModal').html(data);
            }
        });
   });
   
   // ----------------------------------------------------------------------
   
   /**
    * MÉTODO ADICIONA ESPÍRITO
    * 
    *  Adiciona o espirito escolhido ao formulário de cadastro.
    */
   $('#myModal').on('click', '.addEspirito', function (e) {
        e.preventDefault();
        
        var data = $(this).attr('data-espirito');
        var res = data.split(';'); 
        
        $('#espirito').val(res[1]);
        $('#idEspirito').val(res[0]);
        
        $('#myModal').modal('hide');
    });
    
    // --------------------------------------------------------------------
    
    /**
    * BOTÃO CADASTRA EDITORA
    * 
    *  Exibe uma janela Modal para cadastrar a editora
    */ 
   $('#btnCadEditora').click(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: "indexCode.php/administrator/biblioteca/exibeFormCadEditora",
            type: 'post',
            success: function( data ) {                    
                // Exibe a Modal
                $('.modal-title').html('Localizar Editora');
                $('.modal-footer').hide();
                $('#contentModal').html(data);
                $('#myModal').modal('show');
                return false;
            }
        });
   });
   
   // ----------------------------------------------------------------------
   
   /**
    * BOTÃO CAD EDITORA MODAL
    * 
    *  Efetua o cadastro do Espírito no Banco
    */
   $('#myModal').on('click', '#btnCadEditoraModal', function(e) {
       e.preventDefault();
       
       $.ajax({
            url: "indexCode.php/administrator/biblioteca/cadastraEditora",
            type: 'post',
            data: {
                'nomeEditora': $('#nomeEditoraModal').val()
            },
            success: function( data ) {                    
                // Exibe a Modal
                $('#contentModal').html(data);
            }
        });
   });
   
   // ---------------------------------------------------------------------
   
   /**
    * MÉTODO LOCALIZA EDITORA
    * 
    *  Busca o Editora que está sendo digitado 
    */
   $('#myModal').on('click', '#btnLocEditoraModal', function(e) {
       e.preventDefault();
       
       $.ajax({
            url: "indexCode.php/administrator/biblioteca/localizaEditora",
            type: 'post',
            data: {
                'nomeEditora': $('#nomeEditoraModal').val()
            },
            success: function( data ) {                    
                // Exibe a Modal
                $('#contentModal').html(data);
            }
        });
   });
   
   // ----------------------------------------------------------------------
   
   /**
    * MÉTODO ADICIONA EDITORA
    * 
    *  Adiciona o Editora escolhido ao formulário de cadastro.
    */
   $('#myModal').on('click', '.addEditora', function (e) {
        e.preventDefault();
        
        var data = $(this).attr('data-editora');
        var res = data.split(';'); 
        
        $('#editora').val(res[1]);
        $('#idEditora').val(res[0]);
        
        $('#myModal').modal('hide');
    });
    
    // --------------------------------------------------------------------
    
    /**
     * BOTÃO SALVAR
     * 
     *  Envia os dados do Formulário para serem salvos no Banco de Dados
     */
    $('#btnSalvar').click(function () {
        $('#formulario').attr('action', 'indexCode.php/administrator/biblioteca/salvar');
        $('#formulario').submit();
    });
    
    
});
