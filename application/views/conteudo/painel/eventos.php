<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Cadastro de Eventos</div>
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
            
            <!-- DATA INICIO -->                
            <div class="row">
                <div class="col-md-2 form-group">
                    <label>Data</label>
                    <input name="data" id="data" class="form-control dtForm" value="<?php echo set_value('data'); ?>">  
                    <?php echo form_error('data', '<div class="label label-danger">', '</div>'); ?>
                    <input type="hidden" name="idEvento" id="idEvento" value="">
                </div>  
            </div>   
            
        </form>
        
    </div>
</div><!-- /panel-primary -->

