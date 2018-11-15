<form id="formModal" method="POST" autocomplete="off" action="">
    <div class="row">
        <!-- Editora -->
        <div class="col-md-12 form-group">
            <label>Espírito</label>
            <input name="nomeEspirito" id="nomeEspiritoModal" class="form-control" value="<?php echo set_value('nomeEspirito'); ?>" type="text">
        
            <?php if (isset($msn)): ?>
                <div class="label <?php echo 'label-'.$label; ?>"><?php echo $msn; ?></div>
            <?php endif; ?>
        </div>
    </div>
    
    <?php if (isset($espirito)): ?>
    <table class="table table-condensed table-hover">
        <tbody>
            <?php foreach ($espirito as $dado): ?>
            <tr>
                <td><a href="#" class="addEspirito" data-espirito="<?php echo $dado['id'].';'.$dado['nome']; ?>"><?php echo $dado['nome']; ?></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>    
    
    <hr>
    
    <div class="row">
        <div class="col-md-12 form-group">
            <a class="btn btn-sm btn-success" id="btnLocEspiritoModal">Localizar</a>
            <a class="btn btn-sm btn-primary" id="btnCadEspiritoModal">Cadastrar</a>
        </div>
    </div>
    
</form>