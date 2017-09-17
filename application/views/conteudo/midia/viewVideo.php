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