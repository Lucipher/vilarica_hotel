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

       <div class='preHeader'>
           <img src="<?php echo get_bloginfo('template_url') ?>/imagens/logos/logohoteis.png">
           <div class='conhecaContainer'>
               <p class='pConheca'>CONHEÇA TAMBÉM:</p>
               <a href="#" target="_blank" alt='Logo Park Hotel' title="Logo Park Hotel" class='logoConheca'><img src="<?php echo get_bloginfo('template_url') ?>/imagens/logos/park-hotel-logo.png"></a>
               <a href="#" target="_blank" alt='Logo Praia Hotel' title="Logo Praia Hotel" class='logoConheca'><img src="<?php echo get_bloginfo('template_url') ?>/imagens/logos/praia-hotel-logo.png"></a>
               <span></span>
               <i class="material-icons">phone</i>
               <p class='prefixoPais'>+55</p><h3 class='numeroPreHeader'>81 21215101</h3>
               <span></span>
               <a href="#" title='Entre em Contato' alt='Entre em Contato botão'>ENTRE EM CONTATO</a>
           </div>
       </div>
       <header>
        <a href="/" title='Logo Vila Rica Hotel' alt='Logo Vila Rica Hotel'><img src="<?php echo get_bloginfo('template_url') ?>/imagens/logos/logo.png"></a>

        <nav>
            <?php wp_nav_menu( array('menu' => 'Menu horizontal', )); ?>
        </nav>

    </header>