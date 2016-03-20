
<!-- CONTENT -->
<div class="panel panel-primary">
    <!-- Panel heading -->
    <div class="panel-heading">Vídeos</div>
    <!-- Panel Body -->
    <div class="panel-body">
        
        <div id="viewVideo">
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
        </div>
        
        <hr>
        
        <div id="videos">
            <div class="row" >
            <?php $i = 1; ?>
            <?php foreach ($videos as $video): 
                if ($i == 4) 
                {
                    echo "</div>";
                    echo '<div class="row">';
                }
            ?>
                <div class="col-md-4">
                    <a class="idVideo" href="<?php echo base_url('indexCode.php/videos/viewVideo/'.$video['id']); ?>">
                        <img src="<?php echo base_url('includes/images/videos/'.$video['foto']); ?>" class="img-thumbnail">
                    </a>
                    <p class="lead"><?php echo $video['nome']; ?></p>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
            </div>
            
            <!-- PAGINAÇÃO -->
            <nav>
                <?php echo $pagination; ?>           
            </nav>
        </div>
        
    </div> <!-- /panel-body -->
</div> <!-- / panel-primary -->