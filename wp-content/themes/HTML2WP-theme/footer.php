<section class="cid-rKZu04w1ev" id="footer01-y">

    <div class="container">
        <div class="row mbr-white justify-content-center">


            <div class="col-md-12 col-lg-12 pb-5 my-auto md-pb">
                <div class="logo-wrap">
                    <img class="logo" src="<?php bloginfo('template_directory')?>/assets/images/logo2.png" alt="Mobirise">
                </div>
            </div>



            <div class="col-md-6 align-center col-lg-3" id="footer-widget-1">
                <?php
                    if(is_active_sidebar('footer-Widget-1')){
                    dynamic_sidebar('footer-Widget-1');
                }
                ?>
               


            </div>

            <div class="col-md-6 col-lg-3 align-center">
                 <?php
                    if(is_active_sidebar('footer-Widget-1')){
                    dynamic_sidebar('footer-Widget-2');
                }
                ?>
               
            </div>

            <div class="col-md-6 col-lg-3 align-center">
                
                <?php
                    if(is_active_sidebar('footer-Widget-1')){
                    dynamic_sidebar('footer-Widget-3');
                }
                ?>
               
            </div>


            <div class="col-md-6 col-lg-3 pb-5 align-center">
                 
                <?php
                    if(is_active_sidebar('footer-Widget-1')){
                    dynamic_sidebar('footer-Widget-4');
                }
                ?>
               
            </div>

        </div>
    </div>
</section>

<section class="cid-rKZtWvUGcJ" id="footer02-x">

    <div class="container">
        <div class="row align-center mbr-white">

            <div class="col-lg-8">


                      <?php wp_nav_menu( array( 
                    'theme_location' => 'top-menu',
                    'container_class' => 'row-links',
                    'menu_class' => 'foot-menu',
                     'add_li_class'  => 'foot-menu-item mbr-fonts-style display-4'
                     

                     ) ); ?>
 
               

                <div class="row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-left display-4">
                        © Copyright <?php echo date('Y');?> <?php echo get_theme_mod( 'wpmu_address_setting', 'default_value' ); ?>

                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="row social-row">
                    <div class="social-list align-right">
                                <?php if ( get_the_author_meta('twitter') ) : ?>   
                         <div class="soc-item">
                            <a href="<?php the_author_meta('twitter'); ?>" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <?php endif; ?> 
                         <?php if ( get_the_author_meta('facebook') ) : ?> 
                        <div class="soc-item">
                            <a href="<?php the_author_meta('facebook'); ?>" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <?php endif; ?> 
                         <?php if ( get_the_author_meta('ytube') ) : ?> 
                        <div class="soc-item">
                            <a href="<?php the_author_meta('ytube'); ?>" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <?php endif; ?> 
                         <?php if ( get_the_author_meta('vimeo') ) : ?> 
                        <div class="soc-item">
                            <a href="<?php the_author_meta('vimeo'); ?>" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-vimeo socicon"></span>
                            </a>
                        </div>
                        <?php endif; ?> 
                          
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php wp_footer();?>
 
  
  
</body>


</html>