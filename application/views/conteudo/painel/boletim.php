<div id="tit_painel" class="sessao">
    <span class="">
        Cadastra Boletim
    </span>
</div>


<div id="adm">    
    <div class="padding">
        
        <!-- BOTÕES -->
        <div id="menuBotoes">
            <a class="btn btn-primary" id="btnSalvarBoletim">Salvar</a>
            <a class="btn btn-primary" id="btnNovoBoletim">Novo</a>
            <a class="btn btn-primary" id="btnAtualizarBoletim">Atualizar</a>
            <a class="btn btn-primary" id="btnLocalizarBoletim">Localizar</a>
            <a class="btn btn-primary" id="btnExcluirBoletim">Excluir</a>                    
        </div>     
        
        <br>
        
        <form id="formulario" method="POST" autocomplete="off" action="">
            
            <div class="row">
                <!-- DATA INICIO -->
                <div class="col-md-2 form-group">
                    <label>Data Inicio:</label>
                    <input name="dtInicio" id="dtInicio" class="form-control dtForm" value="">                      
                    <input type="hidden" name="idBoletim" id="idBoletim" value="">
                </div>  
                <!-- DATA FIM -->
                <div class="col-md-2 col-md-offset-1 form-group">
                    <label>Data Fim:</label>
                    <input name="dtFim" id="dtFim" class="form-control dtForm" value="">                      
                </div>
            </div>            
            
            <!-- TÍTULO -->
            <div class="form-group">
                <label>Título:</label>
                <input name="titulo" id="titulo" class="form-control" value="">
            </div> 
            
            <!-- CITAÇÃO -->
             <div class="form-group">
                <label>Citação:</label>
                <input name="citacao" class="form-control" value="" type="text">
             </div>
           
            <!-- TEXTO -->
            <div class="form-group">
                <label>Texto:</label>
                <textarea name="texto" class="form-control" rows="5"></textarea>
            </div>  
            
            <!-- LIVRO -->
            <div class="form-group">
                <label>Livro:</label>
                <input name="livro" class="form-control"  value="">
            </div>  
        </form>
    </div>
</div>