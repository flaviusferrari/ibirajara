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
                <a href="eventos/exibe/2015/<?php echo $evento['evento']; ?>">
                    <img src="template/images/eventos/2015/<?php echo $evento['evento']; ?>.jpg" class=" img-thumbnail" title="<?php echo $evento['titulo']; ?>">
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
            <div class="col-md-4">
                <a href="eventos/exibe/2015/seminario-autocura">
                    <img src="template/images/eventos/2015/seminario-autocura.jpg" class=" img-thumbnail" title="Clique para ver em tamanho normal">
                </a>
            </div>

            <div class="col-md-4">
                <a href="eventos/exibe/2015/vicente-moretti">
                    <img src="template/images/eventos/2015/vicente-moretti.jpg" class=" img-thumbnail" title="Clique para ver em tamanho normal">
                </a>
            </div>

            <div class="col-md-4">
                <a href="eventos/exibe/2015/conhecendo-a-si-mesmo">
                    <img src="template/images/eventos/2015/conhecendo-a-si-mesmo.jpg" class=" img-thumbnail" title="Clique para ver em tamanho normal">
                </a>
            </div>        
        </div>

        <hr>

        <div class="row">
            <div class="col-md-3">
                <a href="eventos/exibe/2015/enefe-2015">
                    <img src="template/images/eventos/2015/enefe-2015.jpg" class=" img-thumbnail" title="Clique para ver em tamanho normal">
                </a>
            </div>  

            <div class="col-md-3">
                <a href="eventos/exibe/2014/seminario-saude-espiritismo">
                    <img src="template/images/eventos/2014/seminario-saude-espiritismo.jpg" class=" img-thumbnail" title="Clique para ver em tamanho normal">
                </a>
            </div>  

            <div class="col-md-3">
                <a href="eventos/exibe/2014/homenagem-a-kardec">
                    <img src="template/images/eventos/2014/homenagem-a-kardec.jpg" class=" img-thumbnail" title="Clique para ver em tamanho normal">
                </a>
            </div>  

            <div class="col-md-3">
                <a href="eventos/exibe/2014/marcelo-nazare-auto-perdao">
                    <img src="template/images/eventos/2014/marcelo-nazare-auto-perdao_min.jpg" class=" img-thumbnail" title="Clique para ver em tamanho normal">
                </a>
            </div>  

        </div>



    </div> <!-- /panel-body -->
</div> <!-- / panel-primary -->