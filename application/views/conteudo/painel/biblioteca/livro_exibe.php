
<div class="panel panel-primary">
    <div class="panel-heading">
        Cadastro de Livros
    </div>

    <div class="panel-body"> 
        <!-- BOTÕES -->
        <div class="row">
            <div id="menuBotoes" class="col-md-12 form-group">
                <a class="btn btn-primary" id="btnSalvar">Salvar</a>
                <a class="btn btn-primary" id="btnNovo">Novo</a>
                <a class="btn btn-primary disabled" id="btnAtualizar">Atualizar</a>
                <a class="btn btn-primary" id="btnLocalizar">Localizar</a>
                <a class="btn btn-primary disabled" id="btnExcluir">Excluir</a>                    
            </div>     
        </div>

        <form id="formulario" method="POST" autocomplete="off" action="">

            <!-- TÍTULO -->
            <div class="form-group">
                <label>Título:</label>
                <input name="titulo" id="titulo" class="form-control" value="<?php echo $livro['titulo']; ?>">
            </div> 
            
            <div class="row">
                <!-- Autor -->
                <div class="col-md-6 form-group">
                    <label>Autor:</label>
                    <div class="input-group">
                        <input name="autor" id="autor" class="form-control" value="<?php echo $livro['autor']; ?>" readonly="true">  
                        <input name="idAutor" id="idAutor" type="hidden" value="<?php echo $livro['idAutor']; ?>">
                        <span class="input-group-btn">
                            <button id="btnCadastraAutor" class="btn btn-default" type="button" title="Localiza Autor"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
                    </div>
                </div>  
                
                <!-- Espírito -->
                <div class="col-md-6 form-group">
                    <label>Espírito:</label>
                    <div class="input-group">
                        <input name="espirito" id="espirito" class="form-control" value="<?php echo $livro['espirito']; ?>" readonly="true">  
                        <input type="hidden" name="idEspirito" id="idEspirito" value="<?php echo $livro['idEspirito']; ?>">
                        <span class="input-group-btn">
                            <button type="button" id="btnCadEspirito" class="btn btn-default" title="Localiza Espírito">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div>
                </div>                
            </div>    

            <div class="row">
                <!-- Editora -->
                <div class="col-md-6 form-group">
                    <label>Editora:</label>
                    <div class="input-group">
                        <input type="text" name="editora" id="editora" class="form-control" value="<?php echo $livro['editora']; ?>" readonly="true">
                        <input type="hidden" name="idEditora" id="idEditora" value="<?php echo $livro['idEditora']; ?>">
                        <span class="input-group-btn">
                            <button type="button" id="btnCadEditora" class="btn btn-default" title="Localiza Editora">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- RESENHA -->
                <div class="col-md-12 form-group">
                    <label>Resenha:</label>
                    <textarea name="texto" class="form-control" rows="15"><?php echo $livro['resenha']; ?></textarea>
                </div>  
            </div>
        </form>
    </div>
</div>