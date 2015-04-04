<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <base href="/ibirajara/">
        
        <title>Ibirajara - Painel de Controle</title>
        

        <!-- CSS -->        
        <link href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('includes/css/geral.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url("includes/css/$css.css") ?>" rel="stylesheet" type="text/css" />

        <!-- Latest compiled and minified JavaScript -->
        <script src="<?php echo base_url('includes/js/jquery.js') ?>"></script>
        <script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url("includes/js/$js.js") ?>"></script>
        
    </head>
    <body>
        <!-- HEADER -->
        <div id="cabecalho" style="background-color: #ccc;">
            <div class="container">
                <div class="row">
                    <!-- LOGO -->
                    <div id="logo" class="col-md-4">
                        <img src="<?php echo base_url('includes/images/logo.png') ?>" width="150" alt="C. E. Ibirjajara">
                    </div>

                    <!-- USUARIO -->
                    <div id="login" class="col-md-2 col-md-offset-6">
                        <font class="txtBem">
                        Bem Vindo,</font>
                        <br>
                        <a href="index.php?sessao=dados_pessoais" title="Clique para exibir os dados" style="text-decoration: none; color: blueviolet;">
                            <?php echo $this->session->userdata('nome'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        