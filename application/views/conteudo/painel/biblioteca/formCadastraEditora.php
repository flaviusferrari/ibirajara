<form id="formModal" method="POST" autocomplete="off" action="">
    <div class="row">
        <!-- Editora -->
        <div class="col-md-12 form-group">
            <label>Editora</label>
            <input name="nomeEditora" id="nomeEditoraModal" class="form-control" value="<?php echo set_value('nomeEditora'); ?>" type="text">
        
            <?php if (isset($msn)): ?>
                <div class="label <?php echo 'label-'.$label; ?>"><?php echo $msn; ?></div>
            <?php endif; ?>
        </div>
    </div>
    
    <?php if (isset($editora)): ?>
    <table class="table table-condensed table-hover">
        <tbody>
            <?php foreach ($editora as $dado): ?>
            <tr>
                <td><a href="#" class="addEditora" data-editora="<?php echo $dado['id'].';'.$dado['nome']; ?>"><?php echo $dado['nome']; ?></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>    
    
    <hr>
    
    <div class="row">
        <div class="col-md-12 form-group">            
            <a class="btn btn-sm btn-primary" id="btnCadEditoraModal">Cadastrar</a>
            <a class="btn btn-sm btn-success" id="btnLocEditoraModal">Localizar</a>
        </div>
    </div>
    
</form>