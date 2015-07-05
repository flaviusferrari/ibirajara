<!-- CONTENT -->
<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Eventos</div>
    <!-- Panel Body -->
    <div class="panel-body">

        <div class="panel panel-default sessao">
            <div class="panel-body">
                <span class="title_evento"><?php echo $evento['titulo']; ?></span>
            </div>
        </div>

        <div class="row">    
            <!--CARTAZ--> 
            <div class="col-md-5">
                <a href="includes/images/eventos/<?php echo $evento['evento']; ?>.jpg" target="img">
                    <img src="includes/images/eventos/<?php echo $evento['evento']; ?>.jpg" class=" img-thumbnail" title="<?php echo $evento['titulo']; ?>">
                </a>
            </div>

            <!--TEXTO--> 
            <div class="col-md-7">
                <p class="lead"><?php echo $evento['descricao']; ?></p>
            </div>
        </div> <!-- /div row--> 

        <br>

        <div class="row">
            <!-- DATA -->
            <div class="col-md-4">
                <div class="panel panel-info">
                    <!-- Panel heading -->
                    <div class="panel-heading">Data</div>
                    <!-- Panel Body -->
                    <div class="panel-body">
                        <?php echo $evento['dia']; ?>
                    </div> <!-- /panel-body -->
                </div>        
            </div>

            <!-- EXPOSITOR -->
            <div class="col-md-4">
                <div class="panel panel-info">
                    <!-- Panel heading -->
                    <div class="panel-heading">Horários</div>
                    <!-- Panel Body -->
                    <div class="panel-body">
                        <?php echo $evento['horarios']; ?>
                    </div> <!-- /panel-body -->
                </div>        
            </div>        
        
        <?php if($evento['programacao']): ?>
        <!-- PROGRAMAÇÃO -->
            <div class="col-md-4">
                <div class="panel panel-info">
                    <!-- Panel heading -->
                    <div class="panel-heading">Programação</div>
                    <!-- Panel Body -->
                    <div class="panel-body">
                        <?php echo $evento['programacao']; ?>
                    </div> <!-- /panel-body -->
                </div>        
            </div>                                          
            
        <?php endif; ?>
        
        </div> <!-- /row -->
    </div> <!-- /panel-body -->
</div> <!-- / panel-primary -->        