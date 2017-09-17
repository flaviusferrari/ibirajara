

<!-- CONTEÚDO -->
<div class="wrapper" role="main">
    <div class="container">
        <div class="row">
            <div id="conteudo" class="col-xs-12 col-sm-8 col-md-9">
                <?php $this->load->view('conteudo/'.$conteudo); ?>
            </div><!-- div conteudo -->	

            <div id="sidebar" class="col-xs-12 col-sm-4 col-md-3">
                <?php $this->load->view('conteudo/sidebar/sidebar_site'); ?>
            </div>
        </div><!-- div row container -->
    </div><!-- div container -->
</div><!-- div wrapper -->	