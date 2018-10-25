<form id="formModal" method="POST" autocomplete="off" action="">
    <div class="row">
        <!-- Editora -->
        <div class="col-md-12 form-group">
            <label>Nome do Autor</label>
            <input name="nomeAutor" id="nomeAutorModal" class="form-control" value="<?php echo set_value('nomeAutor'); ?>" type="text">
        
            <?php if (isset($msn)): ?>
                <div class="label <?php echo 'label-'.$label; ?>"><?php echo $msn; ?></div>
            <?php endif; ?>
        </div>
    </div>
    
    <hr>
    
    <div class="row">
        <div class="col-md-12 form-group">
            <a class="btn btn-sm btn-primary" id="btnCadAutorModal">Cadastrar</a>
        </div>
    </div>
    
</form>