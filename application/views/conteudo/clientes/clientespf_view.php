
<!-- TÍTULO DA SESSÃO -->
<div class="panel panel-default sessao">
    <div class="panel-body">
        <span>Cadastro de Clientes</span>
    </div>
</div>


<!-- ABAS -->
<ul class="nav nav-tabs nav-justified">
    <li role="presentation" class="active"><a href="clientespf"><b>Clientes</b></a></li>
    <li role="presentation"><a href="clientespj">Empresas</a></li>
</ul>    

<div id="cxConteudo" class="padding">
    
    <!-- BOTÕES -->
    <div class="">
        <a class="btn btn-primary" id="btnSalvar" data-toggle="modal" data-target="#myModal">Salvar</a>
        <a class="btn btn-primary" id="btnNovo">Novo</a>
        <a class="btn btn-primary" id="btnAtualizar">Atualizar</a>
        <a class="btn btn-primary" id="btnLocalizar">Localizar</a>
        <a class="btn btn-primary" id="btnExcluir">Excluir</a>       
    </div>
    
    <br>
     
    <!-- FORMULÁRIO -->    
    <form id="formulario" method="POST" autocomplete="off" action="">
        
        <!-- NOME -->
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input name="nomeCliente" type="text" class="form-control" id="nomeCliente" value="<?php echo set_value('nomeCliente'); ?>">
            <?php echo form_error('nomeCliente', '<div class="label label-danger">', '</div>'); ?>
            <input name="idCliente" id="idCliente" type="hidden" value="">
        </div>
        
        <!-- ENDEREÇO, NÚMERO E COMPLEMTO -->
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="exampleInputName2">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="">
            </div>
            <div class="col-md-2 form-group">
                <label for="exampleInputEmail2">Nº</label>
                <input type="text" class="form-control" name="numero" id="numero" value="">
            </div>
            <div class="col-md-4 form-group">
                <label for="exampleInputEmail2">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento" value="">
            </div>
        </div>
        
        <!-- BAIRRO, CIDADE , ESTADO -->
        <div class="row">
            <div class="col-md-5 form-group">
                <label for="exampleInputName2">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" value="">
            </div>
            <div class="col-md-5 form-group">
                <label for="exampleInputEmail2">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Buscar" value="">
                <input name="idCidade" type="hidden" id="idCidade" value="">
            </div>
            <div class="col-md-2 form-group">
                <label for="exampleInputEmail2">Estado</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        
        <!-- CONTATO -->
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="exampleInputName2">Contato</label>
                <div class="input-group">
                    
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Tipo <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Celular</a></li>
                            <li><a href="#">Residência</a></li>
                            <li><a href="#">Trabalho</a></li>
                            <li><a href="#">E-mail</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar</button>
                    </span>
                </div>
            </div>
        </div>
</div>