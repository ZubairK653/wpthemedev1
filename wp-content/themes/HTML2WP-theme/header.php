<!DOCTYPE html>
<html  >

<head>
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="New DinerM4 HTML Template - Download Now!">
  
  <title>DinerM4 Pizza Bar Demo</title>
 
  
  <?php wp_head();?>
  
</head>

<body>


<section class="menu cid-rKYPNHqRuO" once="menu" id="menu1-l">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">

        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php bloginfo('url');?>">

                      <?php  if ( function_exists( 'the_custom_logo' ) ) {
                                 the_custom_logo();
                            }?>
                        <!---<img src="<?php bloginfo('template_directory')?>/assets/images/logo2.png" alt="abc" style="height: 3.8rem;">--->
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption mbr-light text-white display-5" href="#">
                        <?php bloginfo('title');?></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

             <?php wp_nav_menu( array( 
                    'theme_location' => 'top-menu',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarSupportedContent',
                    'menu_class' => 'navbar-nav nav-dropdown',
                     'add_li_class'  => 'nav-item',
                     'a_class' => 'nav-link link text-white display-4'

                     ) ); ?>
 
        </div>
    </nav>

</section>