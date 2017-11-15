<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ibirajara - Painel de Controle</title>
        <base href="/ibirajara/">

        <!-- CSS -->        
        <link href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('includes/css/geral.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('includes/css/logon.css') ?>" rel="stylesheet" type="text/css" />
        

        <!-- JAVASCRIPT -->
        
        <script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>
        
   </head>
<body>
    
    <div class="container">

        <form class="form-signin bordaLogin" role="form" method="post" action="<?php echo base_url('indexCode.php/login/logar') ?>" autocomplete="off">
            <!-- LOGO -->
            <p>
                <img src="<?php echo base_url('includes/images/logo.png') ?>" class="img-responsive center-block" width="150" alt="Responsive image">
            </p>
            
            <!-- USUÁRIO -->
            <input type="text" class="form-control" placeholder="Login" required autofocus name="usuario">
            <input type="password" class="form-control" placeholder="Password" required name="senha">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Fazer login</button>
            
            <!-- MENSAGEM DE ERRO -->
            <?php if (isset($erro)): ?>
            <div class="alert alert-danger" role="alert" style="margin-top: 10px;"><?php echo $erro; ?></div>
            <?php endif; ?>
        </form>

    </div> <!-- /container -->
</body>
</html>