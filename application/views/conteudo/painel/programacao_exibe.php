<!-- TÍTULO DA SESSÃO -->
<div class="panel panel-default sessao">
    <div class="panel-body">
        <span>Cadastra Programação</span>
    </div>
</div>


<div id="adm">    
    <div class="padding">
        
        <!-- BOTÕES -->
        <div id="menuBotoes">
            <a class="btn btn-primary" id="btnSalvar">Salvar</a>
            <a class="btn btn-primary" id="btnNovo">Novo</a>
            <a class="btn btn-primary" id="btnAtualizar">Atualizar</a>
            <a class="btn btn-primary" id="btnLocalizar">Localizar</a>
            <a class="btn btn-primary" id="btnExcluir">Excluir</a>                    
        </div>     
        
        <!-- FORMULÁRIO -->
        <form id="formulario" method="POST" autocomplete="off" action="">
            
            <div class="row">
                <!-- LOGIN -->
                <div class="col-md-2 form-group">
                    <label>Data:</label>
                    <input name="data" id="data" class="form-control dtForm" value="<?php echo $data; ?>">  
                    <input type="hidden" name="idProgramacao" id="idProgramacao" value="<?php echo $id ?>"> 
                </div>   
            </div>
            
           
            <!-- TEMA PALESTRA -->
            <div class="form-group">
                <label>Tema:</label>
                <input name="tema" id="tema" class="form-control" value='<?php echo $tema; ?>' type="text">
            </div>   
           
            
            <!-- SUBSÍDIRO -->
            <div class="form-group">
                <label >Subsídio:</label>
                <input name="subsidio" class="form-control" value="<?php echo $subsidio; ?>">
            </div> 
            
           
            <!-- EXPOSITOR -->
            <div class="form-group">
                <label>Expositor:</label>
                <input name="expositor" class="form-control" value="<?php echo $expositor; ?>">
            </div>
           
        </form>
    </div>
</div>