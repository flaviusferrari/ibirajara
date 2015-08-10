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
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div> <!-- /panel-body -->
</div> <!-- / panel-primary -->