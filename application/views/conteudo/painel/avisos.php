<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Cadastro de Avisos</div>
    <!-- Panel Body -->
    <div class="panel-body">
        
        <!-- BOTÕES -->
        <div id="menuBotoes">
            <a class="btn btn-primary" id="btnSalvar">Salvar</a>
            <a class="btn btn-primary" id="btnNovo">Novo</a>
            <a class="btn btn-primary" id="btnAtualizar">Atualizar</a>
            <a class="btn btn-primary" id="btnLocalizar">Localizar</a>
            <a class="btn btn-primary" id="btnExcluir">Excluir</a>                    
        </div>  
        
        <br>
        
        <form id="formulario" method="POST" autocomplete="off" action="">
            
            <!-- TEXTO -->
            <div class="form-group">
                <label>Texto:</label>
                <textarea name="texto" class="form-control" rows="15"><?php echo $aviso; ?></textarea>
            </div>  
            
        </form>
        
    </div>
</div><!-- /panel-primary -->
