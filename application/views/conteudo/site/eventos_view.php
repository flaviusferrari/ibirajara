<!-- CONTENT -->
<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Eventos</div>
    <!-- Panel Body -->
    <div class="panel-body">

        <!-- PRÓXIMOS EVENTOS -->
        <blockquote>
            <p class="lead">Próximos Eventos</p>
        </blockquote>

        <div class="row">
            
        <?php foreach ($proximosEventos as $evento): ?>
            <div class="col-md-4">
                <a href="indexCode.php/eventos/exibe/<?php echo $evento['id']; ?>">
                    <img src="includes/images/eventos/<?php echo $evento['evento']; ?>.jpg" class=" img-thumbnail" title="<?php echo $evento['titulo']; ?>">
                </a>
            </div>
        <?php endforeach; ?>

        </div>


        <br>

        <!-- EVENTOS ANTERIORES -->
        <blockquote>
            <p class="lead">Eventos Anteriores</p>
        </blockquote>
        
        <div class="row">
        
        <?php foreach ($eventosAnteriores as $evento): ?>
            <div class="col-md-4">
                <a href="indexCode.php/eventos/exibe/<?php echo $evento['id']; ?>">
                    <img src="includes/images/eventos/<?php echo $evento['evento']; ?>.jpg" class=" img-thumbnail" title="<?php echo $evento['titulo']; ?>">
                </a>
            </div>
        <?php endforeach; ?>
            
        </div>
        
        
        
        <!-- PAGINAÇÃO -->
        <nav>
            <?php echo $pagination; ?>           
        </nav>

    </div> <!-- /panel-body -->
</div> <!-- / panel-primary -->