
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
                        <input name="dtInicio" id="dtInicio" class="form-control dtForm" value="<?php echo $this->tdate->setDateBr($slide['dtInicio']); ?>"> 
                    </div>  
                    <!-- DATA FIM -->
                    <div class="col-md-2 col-md-offset-1 form-group">
                        <label>Data Fim:</label>
                        <input name="dtFim" id="dtFim" class="form-control dtForm" value="<?php echo $this->tdate->setDateBr($slide['dtFinal']); ?>">  
                    </div>
                </div>
                
                <!-- TÍTULO -->
                <div class="form-group">
                    <label>Título:</label>
                    <input name="titulo" id="titulo" class="form-control" value="<?php echo $slide['titulo']; ?>">                    
                </div> 

                <!-- TÍTULO EVENTO -->
                <div class="form-group">
                    <label>Evento:</label>
                    <input name="tituloEvento" id="tituloEvento" class="form-control" value="<?php echo ($slide['evento'] != '0')? $this->Model->retornaNomeEvento($slide['evento']) : ''; ?>">
                    <input type="hidden" name="idEvento" id="idEvento" value="<?php echo ($slide['evento'] != '0')? $slide['evento']: ''; ?>">
                </div> 

                <!-- IMAGEM -->
                 <div class="form-group">
                    <label>Imagem:</label>
                    <input type="file" name="foto" id="foto" value="<?php echo set_value('foto'); ?>">
                 </div>
            </form>
        </div>
    </div>
</div>