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