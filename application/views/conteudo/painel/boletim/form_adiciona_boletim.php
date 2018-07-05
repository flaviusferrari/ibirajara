    
<form id="formAddBoletim" enctype="multipart/form-data" method="post" action="">
    <!-- Titulo -->
    <div class="row">
        <div class="col-md-12 form-group">
            <label class="">Título</label>
            <input name="titulo" class="form-control" type="text" readonly="true" value="<?php echo $boletim['titulo']; ?>">
            <input type="hidden" name="idBoletim" id="idBoletim" value="<?php echo $boletim['id']; ?>">
        </div>
    </div>
    
    <!-- ARQUIVO -->
    <div class="row">
        <div class="col-md-12 form-group">
            <label class="txtCampos">Arquivo PDF</label>
            <input type="file" class="" name="foto" >
        </div>
    </div>

    <!-- Botões -->
    <div class="row" id="botoes">
        <div class="col-md-12 form-group">
            <button class="btn btn-sm btn-default" data-dismiss="modal">Fechar</button> 
            <button class="btn btn-sm btn-primary pull-right" id="btnAdicionaBoletim">Adicionar</button>
        </div>        
    </div>
</form>
    