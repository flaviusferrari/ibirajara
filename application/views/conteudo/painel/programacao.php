<div id="tit_painel" class="sessao">
    <span class="">
        Cadastra Programação
    </span>
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
            <div class="tableBlock">
                <!-- LOGIN -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Data:
                    </label>
                    <br>
                    <input name="data" id="data" class="dtForm" style="width: 100px;" value="">  
                    <input type="hidden" name="idProgramacao" id="idProgramacao" value=""> 
                </span>                
            </div>
            
            <div class="tableBlock">
                <!-- TEMA PALESTRA -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Tema:
                    </label>
                    <br>
                    <input name="tema" id="tema" style="width: 300px;" value="">
                </span>   
            </div>
            
            <div class="tableBlock">
                <!-- SUBSÍDIRO -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Subsídio:
                    </label>
                    <br>
                    <input name="subsidio" style="width: 300px;" value="">
                </span>   
            </div>  
            
            <div class="tableBlock">
                <!-- EXPOSITOR -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Expositor:
                    </label>
                    <br>
                    <input name="expositor" style="width: 300px;" value="">
                </span>   
            </div>  
        </form>
    </div>
</div>