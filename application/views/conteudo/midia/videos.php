
<!-- CONTENT -->
<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Vídeos</div>
    <!-- Panel Body -->
    <div class="panel-body">
        
        <blockquote>
            <p class="lead"><?php echo $lastVideo['nome']; ?> - <?php echo $lastVideo['expositor']; ?></p>
        </blockquote>
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="<?php echo $lastVideo['url']; ?>" frameborder="0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        
        <hr>
        <div id="videos">
            <div class="row" >
            <?php foreach ($videos as $video): ?>
                <div class="col-md-4">
                    <img src="<?php echo base_url('includes/images/videos/'.$video['foto']); ?>" class="img-thumbnail">
                    <p class="lead"><?php echo $video['nome']; ?></p>
                </div>
            <?php endforeach; ?>
            </div>

            <!-- PAGINAÇÃO -->
            <nav>
                <?php echo $pagination; ?>           
            </nav>
        </div>

    </div> <!-- /panel-body -->
</div> <!-- / panel-primary -->




<?php

//echo '<pre>'.print_r($lastVideo).'</pre>';