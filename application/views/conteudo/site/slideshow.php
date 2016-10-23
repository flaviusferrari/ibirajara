
<!-- SLIDESHOW -->
<div class="row">
    <div id="" class="col-md-12">
        <!-- CAROUSEL -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<!--            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" ></li>-->
            <!--<li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              
            <div class="item active wrapper">
                <img src="template/images/slideshow/a-gratidao-como-roteiro.png" alt="..." class="center-block">
                <input type="hidden" name="arquivo" value="a-gratidao-como-roteiro-de-vida">
            </div> 
            
            <?php foreach ($slides as $dado): ?>
            <div class="item wrapper">
                <img src="<?php echo base_url('includes/images/fotos/'. $this->timage->getImagem($dado['idImage'])); ?>" alt="..." class="center-block">
                <input type="hidden" name="arquivo" value="#">
            </div>
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