
<div class="panel panel-primary">
    <div class="panel-heading">Cadastra Boletim</div>

<div class="panel-body" id="adm"> 
        
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
            
            <div class="row">
                <!-- DATA INICIO -->
                <div class="col-md-2 form-group">
                    <label>Data Inicio:</label>
                    <input name="dtInicio" id="dtInicio" class="form-control dtForm" value="<?php echo set_value('dtInicio'); ?>">  
                    <?php echo form_error('dtInicio', '<div class="label label-danger">', '</div>'); ?>
                    <input type="hidden" name="idBoletim" id="idBoletim" value="">
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
                <label>Título:</label>
                <input name="titulo" id="titulo" class="form-control" value="<?php echo set_value('titulo'); ?>">
                <?php echo form_error('titulo', '<div class="label label-danger">', '</div>'); ?>
            </div> 
            
            <!-- CITAÇÃO -->
             <div class="form-group">
                <label>Citação:</label>
                <input name="citacao" class="form-control" value="<?php echo set_value('citacao'); ?>" type="text">
                <?php echo form_error('citacao', '<div class="label label-danger">', '</div>'); ?>
             </div>
           
            <!-- TEXTO -->
            <div class="form-group">
                <label>Texto:</label>
                <textarea name="texto" class="form-control" rows="5"><?php echo set_value('texto'); ?></textarea>
                <?php echo form_error('texto', '<div class="label label-danger">', '</div>'); ?>
            </div>  
            
            <!-- LIVRO -->
            <div class="form-group">
                <label>Livro:</label>
                <input name="livro" class="form-control"  value="<?php echo set_value('livro'); ?>">
                <?php echo form_error('livro', '<div class="label label-danger">', '</div>'); ?>
            </div>  
        </form>
    </div>
</div>