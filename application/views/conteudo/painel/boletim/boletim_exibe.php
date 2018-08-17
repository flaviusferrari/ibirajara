<!-- TÍTULO DA SESSÃO -->
<div class="panel panel-primary">
    
    <div class="panel-heading">Cadastra Boletim</div>

    <div class="panel-body" id="adm">    
        <div class="padding">

            <!-- BOTÕES -->
            <div class="row" id="menuBotoes">
                <div class="col-md-12 form-group">
                    <a class="btn btn-primary disabled" id="btnSalvar">Salvar</a>
                    <a class="btn btn-primary" id="btnNovo">Novo</a>
                    <a class="btn btn-primary" id="btnAtualizar">Atualizar</a>
                    <a class="btn btn-primary" id="btnLocalizar">Localizar</a>
                    <a class="btn btn-primary" id="btnExcluir">Excluir</a>    
                </div>       
            </div>

            <form id="formulario" method="POST" autocomplete="off" action="">

                <div class="row">
                    <!-- DATA INICIO -->
                    <div class="col-md-2 form-group">
                        <label>Data Inicio:</label>
                        <input name="dtInicio" id="dtInicio" class="form-control dtForm" value="<?php echo $dtInicio; ?>">                          
                    </div>  
                    <!-- DATA FIM -->
                    <div class="col-md-2 col-md-offset-1 form-group">
                        <label>Data Fim:</label>
                        <input name="dtFim" id="dtFim" class="form-control dtForm" value="<?php echo $dtFim; ?>">  
                        <?php echo form_error('dtFim', '<div class="label label-danger">', '</div>'); ?>
                    </div>
                    <!-- NÚMERO -->
                    <div class="col-md-2 col-md-offset-1 form-group">
                        <label>Número:</label>
                        <input name="numero" id="numero" class="form-control" value="<?php echo $numero; ?>">  
                        <?php echo form_error('numero', '<div class="label label-danger">', '</div>'); ?>
                    </div>
                </div>            

                <!-- TÍTULO -->
                <div class="form-group">
                    <label>Título:</label>
                    <input name="titulo" id="titulo" class="form-control" value="<?php echo $titulo; ?>">   
                    <input type="hidden" name="idBoletim" id="idBoletim" value="<?php echo $id; ?>">
                </div> 

                <!-- CITAÇÃO -->
                 <div class="form-group">
                    <label>Citação:</label>
                    <input name="citacao" class="form-control" value="<?php echo $citacao; ?>" type="text">
                 </div>

                <!-- TEXTO -->
                <div class="form-group">
                    <label>Texto:</label>
                    <textarea name="texto" class="form-control" rows="15"><?php echo $texto; ?></textarea>
                </div>  

                <!-- LIVRO -->
                <div class="form-group">
                    <label>Livro:</label>
                    <input name="livro" class="form-control"  value="<?php echo $livro; ?>">
                </div>  
            </form>
            
            <div class="row">
                <div class="col-md-2 form-group">
                    <?php if (empty($arquivo)): ?>
                        <a class="btn btn-primary" id="btnAddBoletim">Adiciona Boletim</a>
                    <?php else: ?>
                        <a class="btn btn-danger" id="btnAddBoletim">Modifica Boletim</a>
                    <?php endif; ?>
                    
                </div>                
            </div>
        </div>
    </div>
</div>