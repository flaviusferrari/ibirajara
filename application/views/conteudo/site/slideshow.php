
<!-- SLIDESHOW -->
<div class="row">
    <div id="" class="col-md-12">
        <!-- CAROUSEL -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" ></li>-->
            <!--<li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              
            <?php $i = 0; ?>
            <?php foreach ($slides as $dado): ?>
            <div class="item wrapper <?php echo ($i == 0)? 'active' : ''; ?>">
                <img src="<?php echo base_url('includes/images/fotos/'. $this->timage->getImagem($dado['idImage'])); ?>" alt="..." class="center-block">
                <input type="hidden" name="arquivo" value="<?php echo ( $dado['evento'] != 0 )? $this->Model->getEvento($dado['evento']): '#' ?>">
            </div>
            <?php $i++; ?>
            <?php endforeach;  ?>
              
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>  
</div>