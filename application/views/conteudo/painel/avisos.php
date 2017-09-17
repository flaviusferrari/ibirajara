<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Cadastro de Avisos</div>
    <!-- Panel Body -->
    <div class="panel-body">
        
        <form id="formulario" method="POST" autocomplete="off" action="">
            
            <!-- TEXTO -->
            <div class="form-group">
                <label>Texto:</label>
                <textarea name="texto" class="form-control" rows="15"><?php echo $aviso; ?></textarea>
            </div>  
            
        </form>
        
        <!-- BOTÕES -->
        <div id="menuBotoes">
            <a class="btn btn-primary" id="btnSalvar">Salvar</a>               
        </div>  
        
    </div>
</div><!-- /panel-primary -->
