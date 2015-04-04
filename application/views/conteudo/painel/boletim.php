<div id="tit_painel" class="sessao">
    <span class="">
        Cadastra Boletim
    </span>
</div>


<div id="adm">    
    <div class="padding">
        
        <!-- BOTÕES -->
        <div id="menuBotoes">
            <a class="btn btn-primary" id="btnSalvarBoletim">Salvar</a>
            <a class="btn btn-primary" id="btnNovoBoletim">Novo</a>
            <a class="btn btn-primary" id="btnAtualizarBoletim">Atualizar</a>
            <a class="btn btn-primary" id="btnLocalizarBoletim">Localizar</a>
            <a class="btn btn-primary" id="btnExcluirBoletim">Excluir</a>                    
        </div>       
        
        <form id="formulario" method="POST" autocomplete="off" action="">
            <div class="tableBlock">
                <!-- DATA INICIO -->
                <span class="tableCell" style="width: 130px;">
                    <label class="txtCampos">
                        Data Inicio:
                    </label>
                    <br>
                    <input name="dtInicio" id="dtInicio" class="dtForm" style="width: 100px;" value="">                      
                    <input type="hidden" name="idBoletim" id="idBoletim" value="">
                </span>  
                <!-- DATA FIM -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Data Fim:
                    </label>
                    <br>
                    <input name="dtFim" id="dtFim" class="dtForm" style="width: 100px;" value="">                      
                </span>  
            </div>
            
            <div class="tableBlock">
                <!-- TÍTULO -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Título:
                    </label>
                    <br>
                    <input name="titulo" id="titulo" style="width: 300px;" value="">
                </span>   
            </div>
            
            <div class="tableBlock">
                <!-- CITAÇÃO -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Citação:
                    </label>
                    <br>
                    <input name="citacao" style="width: 300px;" value="" type="text">
                </span>   
            </div>  
            
            <div class="tableBlock">
                <!-- TEXTO -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Texto:
                    </label>
                    <br>
                    <textarea name="texto" class="msnBox" rows="5"></textarea>
                </span>   
            </div>
            
            <div class="tableBlock">
                <!-- LIVRO -->
                <span class="tableCell">
                    <label class="txtCampos">
                        Livro:
                    </label>
                    <br>
                    <input name="livro" style="width: 300px;" value="">
                </span>   
            </div>  
        </form>
    </div>
</div>