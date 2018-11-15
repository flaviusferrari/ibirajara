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
    
    <?php if (isset($autor)): ?>
    <table class="table table-condensed table-hover">
        <tbody>
            <?php foreach ($autor as $dado): ?>
            <tr>
                <td><a href="#" class="addAutor" data-autor="<?php echo $dado['id'].';'.$dado['nome']; ?>"><?php echo $dado['nome']; ?></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>    
    
    <hr>
    
    <div class="row">
        <div class="col-md-12 form-group">
            <a class="btn btn-sm btn-primary" id="btnCadAutorModal">Cadastrar</a>
            <a class="btn btn-sm btn-success" id="btnLocAutorModal">Localizar</a>
        </div>
    </div>
    
</form>