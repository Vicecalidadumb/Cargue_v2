<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Ingreso al Sistema">
        <meta name="author" content="ViceCalidad-UMB">



        <link rel="shortcut icon" href="<?php echo base_url('images/favicon.png'); ?>">
        <title>Ingreso al Sistema</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('dist/css/signin.css'); ?>" rel="stylesheet">


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">

            <?php echo form_open('login/verify', 'class="form-signin" role="form" autocomplete="off"'); ?>
            <img src="<?php echo base_url('/images/marca-umb.png'); ?>" style="width: 280px;">
            <h4>Vicerrector&iacute;a de Calidad</h4>
            <h2 class="form-signin-heading">Aplicativo de Cargue de Documentos</h2>
            <h4 class="form-signin-heading">Para ingresar al aplicativo digite su n&uacute;mero de documento de identidad y 
                su n&uacute;mero de PIN, posteriormente de click en INGRESAR.
            </h4>
            <?php echo form_input('username', '', 'class="form-control" placeholder="Documento" required autofocus') ?>
            <?php echo form_password('password', '', 'class="form-control" placeholder="Pin" required') ?>
            
            <label class="checkbox" style="text-align: right !important;cursor: pointer !important">
                <strong>
                    <a href="<?php echo base_url('login/remember_pin'); ?>">
                        He olvidado mi Pin.
                    </a>
                </strong>
            </label>            
            
            <?php echo form_submit('Ingresar', 'Ingresar', 'class="btn btn-lg btn-success btn-block"') ?>
            
            <hr style="border-top: 1px solid #ccc !important;">
            <a href="<?php echo base_url('register/add'); ?>">
                <button class="btn btn-lg btn-info btn-block" type="button">Registrarse</button>
            </a>            
            <?php echo form_close(); ?> 

            <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-<?php echo $this->session->flashdata('message_type'); ?>">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
            <?php } ?>        

        </div> <!-- /container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <div id="footer">
            <div class="container">
                <p class="text-muted" style="text-align: center;">Copyright © <?php echo date("Y"); ?> Universidad Manuela Beltr&aacute;n.</p>
            </div>
        </div>        
    </body>
</html>