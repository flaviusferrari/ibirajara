
<div class="panel panel-primary">
    <div class="panel-heading">
        Cadastro de Livros
    </div>

    <div class="panel-body"> 
        <!-- BOTÕES -->
        <div class="row">
            <div id="menuBotoes" class="col-md-12 form-group">
                <a class="btn btn-primary" id="btnSalvar">Salvar</a>
                <a class="btn btn-primary" id="btnNovo">Novo</a>
                <a class="btn btn-primary disabled" id="btnAtualizar">Atualizar</a>
                <a class="btn btn-primary" id="btnLocalizar">Localizar</a>
                <a class="btn btn-primary disabled" id="btnExcluir">Excluir</a>                    
            </div>     
        </div>

        <form id="formulario" method="POST" autocomplete="off" action="">

            <!-- TÍTULO -->
            <div class="form-group">
                <label>Título:</label>
                <input name="titulo" id="titulo" class="form-control" value="<?php echo set_value('titulo'); ?>">
                <?php echo form_error('titulo', '<div class="label label-danger">', '</div>'); ?>
            </div> 
            
            <div class="row">
                <!-- Autor -->
                <div class="col-md-6 form-group">
                    <label>Autor:</label>
                    <div class="input-group">
                        <input name="autor" id="autor" class="form-control" value="<?php echo set_value('autor'); ?>" readonly="true">  
                        <input name="idAutor" id="idAutor" type="hidden" value="">
                        <span class="input-group-btn">
                            <button id="btnCadastraAutor" class="btn btn-default" type="button" title="Localiza Autor"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
                    </div>
                    <?php echo form_error('dtInicio', '<div class="label label-danger">', '</div>'); ?>
                </div>  
                <!-- Espírito -->
                <div class="col-md-6 form-group">
                    <label>Espírito:</label>
                    <input name="dtFim" id="dtFim" class="form-control" value="<?php echo set_value('dtFim'); ?>">  
                    <?php echo form_error('dtFim', '<div class="label label-danger">', '</div>'); ?>
                </div>                
            </div>    

            <div class="row">
                <!-- Editora -->
                <div class="col-md-6 form-group">
                    <label>Editora:</label>
                    <input name="citacao" class="form-control" value="<?php echo set_value('citacao'); ?>" type="text">
                    <?php echo form_error('citacao', '<div class="label label-danger">', '</div>'); ?>
                </div>
            </div>

            <div class="row">
                <!-- RESENHA -->
                <div class="col-md-12 form-group">
                    <label>Resenha:</label>
                    <textarea name="texto" class="form-control" rows="15"><?php echo set_value('texto'); ?></textarea>
                    <?php echo form_error('texto', '<div class="label label-danger">', '</div>'); ?>
                </div>  
            </div>
        </form>
    </div>
</div>