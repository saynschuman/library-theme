<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/media.css">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header -->
    <header class="header">
       <div class="container">
       <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 half">
               <a href="" class="logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt=""></a>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 half">
               <div class="search-button"><img src="<?php echo get_template_directory_uri() ?>/assets/img/search.png" alt=""></div>
               <form id="mobile-search" action=""><input type="search" placeholder="пошук..."></form>
                   <ul>
                       <li><a id="tel" href="tel:+380967858484">+38096 785 84 84</a></li>
                       <li class="rounded"><a id="whatsapp" href=""></a></li>
                       <li class="rounded"><a id="viber" href=""></a></li>
                       <li class="rounded"><a id="telegram" href=""></a></li>
                       <li><a id="instagram" href=""></a></li>
                       <li><a id="facebook" href=""></a></li>
                   </ul>
                <button class="mob-button"><span></span></button>
           </div>
        </div>
       </div>
    </header>
