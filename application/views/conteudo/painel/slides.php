
<!-- TÍTULO DA SESSÃO -->
<div class="panel panel-default sessao">
    <div class="panel-body">
        <span>Cadastro de Slides</span>
    </div>
</div>

<div id="adm">    
    <div class="padding">
        
        <!-- BOTÕES -->
        <div id="menuBotoes">
            <a class="btn btn-primary" id="btnSalvar">Salvar</a>
            <a class="btn btn-primary" id="btnNovo">Novo</a>
            <a class="btn btn-primary" id="btnAtualizar">Atualizar</a>
            <a class="btn btn-primary" id="btnLocalizar">Localizar</a>
            <a class="btn btn-primary" id="btnExcluir">Excluir</a>                    
        </div>     
        
        <br>
        
        <form id="formulario" method="POST" autocomplete="off" enctype="multipart/form-data" action="">
            
            <div class="row">
                <!-- DATA INICIO -->
                <div class="col-md-2 form-group">
                    <label>Data Inicio:</label>
                    <input name="dtInicio" id="dtInicio" class="form-control dtForm" value="<?php echo set_value('dtInicio'); ?>">  
                    <?php echo form_error('dtInicio', '<div class="label label-danger">', '</div>'); ?>
                </div>  
                <!-- DATA FIM -->
                <div class="col-md-2 col-md-offset-1 form-group">
                    <label>Data Fim:</label>
                    <input name="dtFim" id="dtFim" class="form-control dtForm" value="<?php echo set_value('dtFim'); ?>">  
                    <?php echo form_error('dtFim', '<div class="label label-danger">', '</div>'); ?>
                </div>
            </div>            
            
            <!-- TÍTULO -->
            <div class="form-group">
                <label>Evento:</label>
                <input name="titulo" id="titulo" class="form-control" value="<?php echo set_value('titulo'); ?>">
                <?php echo form_error('titulo', '<div class="label label-danger">', '</div>'); ?>
                <input type="hidden" name="idEvento" id="idEvento" value="">
            </div> 
            
            <!-- IMAGEM -->
             <div class="form-group">
                <label>Imagem:</label>
                <input type="file" name="foto" id="foto" value="<?php echo set_value('foto'); ?>">
                <?php echo form_error('foto', '<div class="label label-danger">', '</div>'); ?>
             </div>
        </form>
    </div>
</div>