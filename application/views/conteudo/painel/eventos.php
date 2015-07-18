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
        
        <form id="formulario" method="POST" autocomplete="off" enctype="multipart/form-data" action="">

            <!-- DATA INICIO -->                
            <div class="row">
                <div class="col-md-2 form-group">
                    <label>Data</label>
                    <input name="data" id="data" class="form-control dtForm" value="<?php echo set_value('data'); ?>">  
                    <?php echo form_error('data', '<div class="label label-danger">', '</div>'); ?>
                    <input type="hidden" name="idEvento" id="idEvento" value="">
                </div>  
            </div>  
            
            <!-- TÍTULO -->                
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Título:</label>
                    <input name="titulo" id="titulo" class="form-control" value="<?php echo set_value('titulo'); ?>">
                    <?php echo form_error('titulo', '<div class="label label-danger">', '</div>'); ?>
                </div> 
            </div>
            
            <!-- CARTAZ -->
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Cartaz</label>
                    <input type="file" name="cartaz" id="cartaz" value="<?php echo set_value('cartaz'); ?>">
                    <?php echo form_error('cartaz', '<div class="label label-danger">', '</div>'); ?>
                </div> 
            </div>
            
            <!-- DESCRIÇÃO  -->
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" class="form-control" rows="3"><?php echo set_value('descricao'); ?></textarea>
                <?php echo form_error('descricao', '<div class="label label-danger">', '</div>'); ?>
            </div> 
            
            <!-- HORÁRIOS / PROGRAMAÇÃO -->
            <div class="row">
                <!-- Dia -->
                <div class="col-md-4 form-group">
                    <label>Dia</label>
                    <input name="dia" id="dia" class="form-control" value="<?php echo set_value('dia'); ?>">  
                    <?php echo form_error('dia', '<div class="label label-danger">', '</div>'); ?>
                </div>  
                
                <div class="col-md-4 form-group">
                    <label>Horário</label>
                    <textarea id="horario" name="horario" class="form-control"><?php echo set_value('horario'); ?></textarea>
                    <?php echo form_error('horario', '<div class="label label-danger">', '</div>'); ?>
                </div>  
                
                <div class="col-md-4 form-group">
                    <label>Programação</label>
                    <textarea id="programacao" name="programacao" class="form-control"><?php echo set_value('programacao'); ?></textarea>
                    <?php echo form_error('programacao', '<div class="label label-danger">', '</div>'); ?>
                </div>
            </div>    
            
        </form>
        
    </div>
</div><!-- /panel-primary -->

