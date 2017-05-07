<div class="panel panel-primary">
    <div class="panel-heading">Localizar Boletins</div>
    
    <div class="panel-body">
        <!-- FORMULÁRIO LOCALIZAR -->
        <form id="formulario" name="formulario" method="post" action=""> 
            
            <div class="row">
                <!-- Data Início -->
                <div class="col-md-2 form-group">
                    <label>Data Inicio:</label>
                    <input name="dtInicio" id="dtInicio" class="form-control dtForm" value="<?php echo set_value('dtInicio'); ?>">  
                    <?php echo form_error('dtInicio', '<div class="label label-danger">', '</div>'); ?>
                    <input type="hidden" name="idBoletim" id="idBoletim" value="">
                </div>  
                <!-- Data Fim -->
                <div class="col-md-2 col-md-offset-1 form-group">
                    <label>Data Fim:</label>
                    <input name="dtFim" id="dtFim" class="form-control dtForm" value="<?php echo set_value('dtFim'); ?>">  
                    <?php echo form_error('dtFim', '<div class="label label-danger">', '</div>'); ?>
                </div>
            </div>   
            
            <!-- Titulo -->
            <div class="row">
                <div class="col-md-12 form-group">
                    <label class="txtCampos">Título</label>
                    <input name="produto" class="form-control" type="text" value="">
                </div>
            </div>
            
            <!-- Botões -->
            <div class="row" id="botoes">
                <div class="col-md-12">
                    <button class="btn btn-default" id="localizaBoletim">Localizar</button>
                </div>
            </div>

        </form> 
    </div>
</div>
    
<div class="padding" id="listagem"></div>