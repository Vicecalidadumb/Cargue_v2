<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Pragma: no-cache");
        ?>              
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?php echo base_url('images/favicon.png'); ?>">

        <title><?php echo $title; ?></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('dist/css/theme.css'); ?>" rel="stylesheet">


        <link href="<?php echo base_url('dist/css/sticky-footer.css'); ?>" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

        <script src="<?php echo base_url('dist/js/jquery.validate.min.js'); ?>"></script> 
        <script src="<?php echo base_url('dist/js/messages_es.js'); ?>"></script>

        <link href="<?php echo base_url('dist/css/style.css'); ?>" rel="stylesheet">
        
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('docs-assets/js/holder.js'); ?>"></script>        

        
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/redmond/jquery-ui.css">
               
    </head>
    <body>