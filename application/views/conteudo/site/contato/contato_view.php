<!-- CONTENT -->
<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Eventos</div>
    <!-- Panel Body -->
    <div class="panel-body">
       
        <div class="padding">
        
            <form id="formulario" class="form-horizontal" method="POST" autocomplete="off" action="<?php echo base_url('contato/enviaEmail'); ?>">
                
                <!-- AREA -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Área</label>
                    <div class="col-sm-10">
                        <select name="area" class="form-control">
                            <option value="">-- Selecione uma área --</option>
                            <option value="aad">Assuntos Doutrinários</option>
                            <option value="apse">Apse</option>
                            <option value="divulgacao">Divulgação</option>
                        </select>
                    </div>
                </div>   
                
                <!-- NOME -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input name="nome" id="nome" class="form-control" value="">
                    </div>            
                </div>            

                <!-- ASSUNTO -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Assunto</label>  
                    <div class="col-sm-10">
                        <input name="assunto" id="assunto" class="form-control" value="">
                    </div>   
                </div>

                <!-- E-MAIL -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">E-mail</label>  
                    <div class="col-sm-10">
                        <input name="email" class="form-control" value="">
                    </div>   
                </div>  

                <!-- MENSAGEM -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Mensagem</label>  
                    <div class="col-sm-10">
                        <textarea name="msnMail" class="form-control"> </textarea>
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