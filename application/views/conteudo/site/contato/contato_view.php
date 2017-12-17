<!-- CONTENT -->
<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Contato</div>
    <!-- Panel Body -->
    <div class="panel-body">
       
        <div class="padding">
        
            <form id="formulario" class="form-horizontal" method="POST" autocomplete="off" action="<?php echo base_url('contato/enviaEmail'); ?>">
                
                <!-- AREA -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Área</label>
                    <div class="col-sm-10">
                        <select name="area" class="form-control">
                            <option value="">-- Selecione a área desejada --</option>
                            <option value="aee" <?php echo  set_select('area', 'aee'); ?>>Área de Estudos Espíritas</option>
                            <option value="pif" <?php echo  set_select('area', 'pif'); ?>>Promoção Integral da Família</option>
                            <option value="divulgacao" <?php echo  set_select('area', 'divulgacao'); ?>>Divulgação</option>
                            <option value="mediunidade" <?php echo  set_select('area', 'mediunidade'); ?>>Mediunidade</option>
                            <option value="evangelizar" <?php echo set_select('area', 'evangelizar'); ?>>Evangelização da Família</option>
                        </select>
                        <?php echo form_error('area', '<div class="label label-danger">', '</div>'); ?>
                    </div>
                </div>   
                
                <!-- NOME -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input name="nome" id="nome" class="form-control" value="<?php echo set_value('nome'); ?>">
                        <?php echo form_error('nome', '<div class="label label-danger">', '</div>'); ?>
                    </div>            
                </div>            

                <!-- ASSUNTO -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Assunto</label>  
                    <div class="col-sm-10">
                        <input name="assunto" id="assunto" class="form-control" value="<?php echo set_value('assunto'); ?>">
                        <?php echo form_error('assunto', '<div class="label label-danger">', '</div>'); ?>
                    </div>   
                </div>

                <!-- E-MAIL -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">E-mail</label>  
                    <div class="col-sm-10">
                        <input name="email" class="form-control" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email', '<div class="label label-danger">', '</div>'); ?>
                    </div>   
                </div>  

                <!-- MENSAGEM -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Mensagem</label>  
                    <div class="col-sm-10">
                        <textarea name="mensagem" class="form-control" rows="16"><?php echo set_value('mensagem'); ?></textarea>
                    </div>   
                </div>  

                <!-- BOTÃO -->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" id="btnEnviar" class="btn btn-default">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- /panel-body -->
</div> <!-- / panel-primary -->