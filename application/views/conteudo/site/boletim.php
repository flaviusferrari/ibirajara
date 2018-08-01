<div class="panel panel-primary">
    
    <div class="panel-heading">Boletim Informativo</div>
    <!-- BODY -->
    <div class="panel-body">       
        <div class="row">
            <div class="col-md-12">
                <p>Nosso Boletim Informativo Esperança </p>                
                
                <table class="table table-condensed table-hover"> 
                    <thead> 
                        <tr> 
                            <th>Data</th>                             
                            <th>Número</th> 
                            <th>Título</th> 
                            <th>Opções</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php foreach ($boletins as $campo): ?>
                        <tr> 
                            <td><?php echo $this->tdate->setDateBr($campo['dtInicio']); ?></td> 
                            <td><?php echo $campo['numero']; ?></td> 
                            <td><?php echo $campo['titulo']; ?></td>                             
                            <td>
                                <span class="glyphicon glyphicon-file vizualizaMensagem" aria-hidden="true" data-idBoletim="<?php echo $campo['id']; ?>" title="Visualizar Mensagem"></span>
                                <span class="glyphicon glyphicon-print" aria-hidden="true" title="Imprimir Boletim"></span>
                            </td> 
                        </tr> 
                        <?php endforeach; ?>
                    </tbody> 
                </table> 
                
            </div>
        </div>
    </div>
    
</div>