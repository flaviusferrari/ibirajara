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
    
    // ---------------------------------------------------------
    
    // Localiza o Boletim desejado pelo título
    $('#titulo').autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: "indexCode.php/administrator/boletim/LocalizaBoletim",
                type: 'post',
                dataType: "json",
                data: {
                    'termo': request.term
                },
                success: function( data ) {                    
                    response( data );
                }
            });
        },
        minLength: 3,
        select: function( event, ui ) {
            var novaURL = 'indexCode.php/administrator/boletim/exibeBoletim/'+ui.item.valor;
            $(window.document.location).attr('href',novaURL);        
        }
    });
    
    // ---------------------------------------------------------
    
    /**
     * BOTÃO NOVO
     * 
     *  Carrega o formulário vazio
     */
    $('#btnNovo').click(function() {
        $(window.document.location).attr('href', 'indexCode.php/administrator/boletim');
    });    
    
    // ---------------------------------------------------------
    
    /**
     * BOTÃO ATUALIZAR
     * 
     *  Atualiza os dados do Boletim
     */
    $('#btnAtualizar').click(function(e) {
        e.preventDefault();
        
        $('#formulario').attr('action', 'indexCode.php/administrator/boletim/atualizar');
        $('#formulario').submit();
    });
    
    // ---------------------------------------------------------
    
    // BOTÃO LOCALIZAR
    $('#btnLocalizar').click(function() {
        $(window.document.location).attr('href', 'indexCode.php/administrator/boletim/localizar/');         
    });
    
    // ---------------------------------------------------------
    
    // BOTÃO LOCALIZAR BOLETIM
    $('#localizaBoletim').click(function(e) {
        e.preventDefault();
        
        var formdata = $("#formulario").serialize();
        
        $.ajax({
            url: "indexCode.php/administrator/boletim/localizar",
            type: 'post',
            data: formdata,
            success: function( data ) {                    
                $('#listagem').html(data);
            }
        });
    });
    
    // ----------------------------------------------------------
    
    /**
     * BOTÃO CADASTRO
     * 
     *  Retorna para o formulário de Cadastro
     */
    $('#btnCadastraBoletim').click(function(e) {
        e.preventDefault();
        
        $(window.document.location).attr('href', 'indexCode.php/administrator/boletim/');
    });
    
    // ----------------------------------------------------------
    
    /**
     * BOTÃO ADICIONA BOLETIM
     * 
     *  Exibe uma janela Modal para efetuar o Upload do Boletim 
     */
    $('#btnAddBoletim').click(function(e) {
        e.preventDefault();
        
        $.ajax({
           url : 'indexCode.php/administrator/boletim/formAddBoletim',
           type : 'POST',
           data : {
               
           },
           success: function(data){               
               // Mensagem de Sucesso
               $('#btnSaveModal').html('Insere Boletim').show();
               $('#contentModal').html(data);
               $('#myModal').modal('show');            
               return false;
           }           
        });
    });
    
    // ----------------------------------------------------------
    
    /**
     * SIDEBAR
     * 
     *  Exibe o Conteúdo da Sidebar
     */
    // Coloca o título
    $('#tituloSidebar').html('Próximos Boletins');
    $('#conteudoSidebar').load('indexCode.php/administrator/sidebar/proximosBoletins');
    
    // -----------------------------------------------------------
    
    /**
     * CLASS IDBOLETIM
     * 
     *  Exibe o boletim 
     */
    $('#listagem').on('click', '.idBoletim', function(e) {
        e.preventDefault();
        
        // Exibe o Boletim 
        var novaURL = 'indexCode.php/administrator/boletim/exibeBoletim/'+ $(this).attr('data-idboletim');
        $(window.document.location).attr('href',novaURL);
    });
    
});

