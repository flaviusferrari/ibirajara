
<!-- TÍTULO DA SESSÃO -->
<div class="panel panel-primary">
    
    <div class="panel-heading">Cadastro de Slides</div>

    <div class="panel-body" id="adm">     
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
                
                <div class="row">
                    <!-- TÍTULO -->
                    <div class="col-md-8 form-group">
                        <label>Título:</label>
                        <input name="titulo" id="titulo" class="form-control" value="<?php echo set_value('titulo'); ?>">                    
                    </div> 
                    <!-- PRIORIDADE -->
                    <div class="col-md-2 form-group">
                        <label>Prioridade:</label>
                        <select class="form-control" name="prioridade">
                            <option value="1">Alta</option>
                            <option value="2">Média</option>
                            <option value="3">Baixa</option>
                        </select>                            
                    </div> 
                </div>

                <!-- TÍTULO EVENTO -->
                <div class="form-group">
                    <label>Evento:</label>
                    <input name="tituloEvento" id="tituloEvento" class="form-control" value="<?php echo set_value('tituloEvento'); ?>">
                    <?php echo form_error('tituloEvento', '<div class="label label-danger">', '</div>'); ?>
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
</div>