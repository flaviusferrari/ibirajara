<div class="row" >
<?php foreach ($videos as $video): ?>
    <div class="col-md-4">
        <a class="idVideo" href="<?php echo base_url('indexCode.php/videos/viewVideo/'.$video['id']); ?>">
            <img src="<?php echo base_url('includes/images/videos/'.$video['foto']); ?>" class="img-thumbnail">
        </a>
        <p class="lead"><?php echo $video['nome']; ?></p>
    </div>
<?php endforeach; ?>
</div>

<!-- PAGINAÇÃO -->
<nav>
    <?php echo $pagination; ?>           
</nav>