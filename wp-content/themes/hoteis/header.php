<!DOCTYPE html>
<html style="margin:0 !important;">
<head>
    <!--<title></title>-->
    <title>Vila Rica Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url') ?>/imagens/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url') ?>/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">


    <?php wp_head(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">

        $(function() {
            var url = window.location;
                // Will only work if string n href matches with location
                $('ul.nav a[href="' + url + '"]').parent().addClass('active');

                // Will also work for relative and absolute hrefs
                $('ul.nav a').filter(function () {
                    return this.href == url;
                }).parent().addClass('active').parent().parent().addClass('active');
            });
        </script>
    </head>
    <body>
   
    <?php require_once('pre-header.php') ?>
     
       <header>
        <a href="/" title='Logo Vila Rica Hotel' alt='Logo Vila Rica Hotel'><img src="<?php echo get_bloginfo('template_url') ?>/imagens/logos/logo.png"></a>

        <nav>
            <?php wp_nav_menu( array('menu' => 'Menu horizontal', )); ?>
        </nav>

    </header>
