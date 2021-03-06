<div class="panel panel-primary">
    
    <div class="panel-heading">Boletim Informativo</div>
    <!-- BODY -->
    <div class="panel-body">       
        <div class="row">
            <div class="col-md-12 form-group">                
                <img src="<?php echo base_url('includes/images/capa_boletim.png'); ?>" class=" img img-responsive" title="Boletim Informativo Esperança">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 table-responsive form-group">
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
                                <?php if (!empty($campo['arquivo'])): ?>
                                    <span class="glyphicon glyphicon-print exibeBoletimPdf" data-numBoletim="<?php echo $campo['arquivo']; ?>" aria-hidden="true" title="Imprimir Boletim"></span>
                                <?php endif; ?>                                
                            </td> 
                        </tr> 
                        <?php endforeach; ?>
                    </tbody> 
                </table> 
                
            </div>
        </div>
    </div>
    
</div>