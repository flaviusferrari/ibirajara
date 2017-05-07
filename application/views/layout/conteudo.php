

<!-- CONTEÚDO -->
<div class="wrapper" role="main">
    <div class="container-fluid">
        <div class="row">
            <div id="conteudo" class="col-xs-12 col-sm-8 col-md-9">
                <?php $this->load->view('conteudo/'.$conteudo); ?>
            </div><!-- div conteudo -->	

            <div id="sidebar" class="col-xs-12 col-sm-4 col-md-3">
                <?php 
                $sidebar = (isset($sidebar))? $sidebar : 'sidebar_panel';
                $this->load->view('conteudo/sidebar/'.$sidebar); 
                ?>
            </div>
        </div>
    </div>
</div>

<br>

<!-- MODAL -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Aviso</h4>
      </div>
      <!-- Conteúdo da modal -->
      <div class="modal-body" id="contentModal">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveModal">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->