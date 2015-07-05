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
                    <input name="data" id="data" class="form-control dtForm" value="<?php echo $data; ?>"> 
                    <input type="hidden" name="idEvento" id="idEvento" value="<?php echo $id; ?>">
                </div>  
            </div>  
            
            <!-- TÍTULO -->                
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Título:</label>
                    <input name="titulo" id="titulo" class="form-control" value="<?php echo $titulo; ?>">
                </div> 
            </div>
            
            <!-- CARTAZ -->
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Cartaz</label>
                    <input type="file" name="cartaz" id="cartaz" value="<?php echo $cartaz; ?>">
                </div> 
            </div>
            
            <!-- DESCRIÇÃO  -->
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" class="form-control" rows="3"><?php echo $descricao; ?></textarea>
            </div> 
            
            <!-- HORÁRIOS / PROGRAMAÇÃO -->
            <div class="row">
                <div class="col-md-4 form-group">
                    <label>Horário</label>
                    <input name="horario" id="horario" class="form-control" value="<?php echo $horarios; ?>"> 
                </div>  
                
                <div class="col-md-4 col-md-offset-2 form-group">
                    <label>Programação</label>
                    <input name="programacao" id="programacao" class="form-control" value="<?php echo $programacao; ?>">  
                </div>
            </div>    
            
        </form>
        
    </div>
</div><!-- /panel-primary -->

