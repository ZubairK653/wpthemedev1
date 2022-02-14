<?php get_header();?>

  <?php $hero = get_field('hero');
        if( $hero ): ?>

<section class="header02 cid-rKZ09lxuAL" id="header02-s">

    <div class="container">
        <div class="row jc-sb">

            <div class="col-md-12 col-lg-6 md-pb">
                <div class="media-content">
                    <div class="title-align">
                        <p class="mbr-section-subtitle mbr-exbold align-left mbr-light mbr-fonts-style display-7"><?php echo $hero['subtitle']; ?></p>
                    </div>
                    <h1 class="mbr-section-title pb-4 mbr-white align-left mbr-exbold mbr-fonts-style display-1"><?php echo $hero['main_title']; ?></h1>

                    <p class="mbr-text align-left pb-3 mbr-white mbr-fonts-style display-4"><?php echo $hero['hero_description']; ?></p>
                    <div class="mbr-section-btn align-left"><a class="btn btn-md btn-secondary display-4" href="<?php echo esc_url( $hero['button_link']); ?>"><span class="mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span><?php echo $hero['button_text']; ?></a></div>

                </div>
            </div>

            <div class="col-md-12 img-col col-lg-6 my-auto">

                <div class="pricebox">
                    <div class="price-wrap">
                        <h4 class="pricetitle mbr-bold align-left mbr-fonts-style display-7"><?php echo $hero['price_text']; ?></h4>
                        <h3 class="price mbr-exbold align-left mbr-fonts-style display-2"><?php echo $hero['price_value']; ?></h3>
                    </div>
                </div>

                <div class="mbr-figure">
                    <img src="<?php echo esc_url( $hero['hero_image']['url'] ); ?>" alt="Mobirise">
                </div>
            </div>

        </div>
    </div>

</section>

<?php endif; ?>
<?php $best_seller = get_field('best_seller_section');
       
    if($best_seller) :
?>
<section class="pricing02 cid-rKZuj2eVgJ" id="pricing02-12">
    
    <div class="container">
        <div class="row">

            <div class="col-md-12 pb-5 col-lg-12 align-center">
                <h2 class="mbr-section-subtitle mbr-exbold mbr-light mbr-fonts-style display-5"><?php echo $best_seller['sub_title'];?></h2>
                <h1 class="mbr-section-title pb-3 mbr-exbold mbr-fonts-style display-2"><?php echo $best_seller['main_title'];?></h1>
            </div>
 
            <?php  

                $args = array(
                    'post_type' => 'bestseller',
                    'posts_per_page' => 4,
                    'order' => 'ASC'
                );
                
                $loop = new WP_Query($args);
               if(have_posts()) :
                while ( $loop->have_posts() ) : $loop->the_post();
                 ?>
            <div class="card item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper align-center">
                    <?php if (has_post_thumbnail()) : ?>

                    <div class="card-img">
                        <?php the_post_thumbnail();?>
                    </div>

                <?php endif;?>

                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 254.99 483.96" class="product-shape-hover-img" src="http://demo.themewinter.com/wp/gloreya/wp-content/themes/gloreya/<?php bloginfo('template_directory')?>/assets/images/menu_shape_hover.svg" alt="Quarter Onion">
                        <path stroke="lightgray" d="M235.35,0H19.64A19.61,19.61,0,0,0,0,19.59V423.24a19.62,19.62,0,0,0,19.64,19.6H53.4l-1,.09a45.89,45.89,0,0,1,32,12.15c6.73,6.28,11.46,14.52,18.55,20.4,13.23,11,34.19,11.33,47.78.79,7.07-5.49,12-13.26,18.32-19.56,8.81-8.75,21-14.67,33.42-13.73l-1.43-.14h34.23A19.62,19.62,0,0,0,255,423.24V19.59A19.61,19.61,0,0,0,235.35,0Z">
                        </path>
                    </svg>

                    <div class="card-box pt-4">




                        <h4 class="card-title pb-3 mbr-bold mbr-fonts-style display-7"><?php the_title();?></h4>
                        <p class="mbr-text mbr-semibold mbr-fonts-style display-4">
                            <?php the_excerpt();?></p>

                        <h5 class="price pb-4 mbr-bold mbr-fonts-style display-7">$ <?php the_field('price');?></h5>


                        <span class="icon mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>


                    </div>
                </div>
            </div>
            
             <?php   endwhile; else :

                 _e( 'Sorry, no posts were found.', 'textdomain' );

              endif;?>

        </div>
    </div>

</section>

<?php endif; ?>

<?php

                if(have_posts()) :
                while ( have_posts() ) : the_post();

                $section3 = get_field('3rd_section_fields');

                endwhile; endif;
  
    if($section3):
?>
<section class="info01 cid-rKZubpJEcF mbr-parallax-background" id="info01-10"   style="background: url('<?php echo esc_url( $section3['background_image']['url'] ); ?>');">

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row jc-sb">

            <div class="col-md-12 col-lg-12 md-pb">
                <div class="span-row align-left mbr-white pb-3">
                    <span class="align-left span mbr-fonts-style display-7">
                        <?php echo $section3['subtitle_text'];?>      
                    </span>
                    
                </div>
                <h1 class="mbr-section-title align-left pb-3 mbr-exbold mbr-fonts-style display-1"> <?php echo $section3['title_text'];?> </h1>


                <?php if($section3['button_url']): ?>
                <div class="mbr-section-btn align-left"><a class="btn btn-md btn-success display-4" href="<?php echo esc_url($section3['button_url']);?>"><span class="mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span> <?php echo $section3['button_text'];?> </a>
                </div>
                    <?php endif; ?>
            </div>
        </div>




    </div>

</section>
<?php endif;?>

<?php $section4 = get_field('4th_section_fields');

    if($section4):
?>
<section class="features01 cid-rKZusPbXEW" id="features01-15">

    <div class="container">
        <div class="row jc-sb">

            <div class="col-md-12 col-lg-5 md-pb">
                <div class="media-content">
                    <h2 class="mbr-section-subtitle mbr-semibold align-left mbr-light mbr-fonts-style display-5"><?php echo $section4['subtitle'];?></h2>
                    <h1 class="mbr-section-title pb-3 align-left mbr-exbold mbr-fonts-style display-2"><?php echo $section4['main_title'];?></h1>

                    <h3 class="mbr-section-title pb-3 align-left mbr-fonts-style display-4"><strong><?php echo $section4['description_1'];?></strong></h3>


                    <p class="mbr-text align-left pb-3 mbr-fonts-style display-4"><?php echo $section4['description_2'];?><br></p>

                    <?php if($section4['button_link']) : ?>

                    <div class="mbr-section-btn align-left"><a class="btn btn-md btn-primary display-4" href="<?php echo esc_url($section4['button_url']);?>"><span class="mobi-mbri mobi-mbri-share mbr-iconfont mbr-iconfont-btn"></span><?php echo $section4['button_text'];?></a>
                    </div>

                     <?php endif; ?>

                </div>
            </div>

            <div class="col-md-12 col-lg-2 icon-col">


                <div class="icon-wrap align-left">
                    <span class="mbr-iconfont mobi-mbri-apple mobi-mbri"></span>
                    <h4 class="icon-text align-left mbr-fonts-style display-4"><strong><?php echo $section4['icon1_text'];?></strong></h4>
                </div>

                <div class="icon-wrap align-left">
                    <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri"></span>
                    <h4 class="icon-text align-left mbr-fonts-style display-4"><strong><?php echo $section4['icon2_text'];?></strong></h4>
                </div>

                <div class="icon-wrap align-left">
                    <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
                    <h4 class="icon-text align-left mbr-fonts-style display-4"><strong><?php echo $section4['icon3_text'];?></strong></h4>
                </div>


            </div>

            <div class="col-md-12 col-lg-5 img-col icon-col ">
                <div class="mbr-figure">
                    <img src="<?php echo esc_url( $section4['right_image']['url'] ); ?>" alt="Mobirise">
                </div>

                <div class="icon-wrap align-left md-pb">
                    <span class="mbr-iconfont mobi-mbri-delivery mobi-mbri"></span>
                    <h4 class="icon-text align-left mbr-fonts-style display-4"><strong><?php echo $section4['icon4_text'];?></strong></h4>
                </div>

            </div>

        </div>
    </div>

</section>
<?php endif;?>
 
<section class="content04 cid-rKZuefV2Z9" id="content04-11">

    <div class="container">
        <h4 class="mbr-section-subtitle mbr-semibold align-center mbr-fonts-style display-5">Menu</h4>
        <h2 class="mbr-section-title align-center mbr-exbold mbr-fonts-style mbr-black display-2">Choose your dish</h2>

        <div class="row pt-5">
             <?php  

                      $args = array(
                    'post_type' => 'food-menu',
                    'posts_per_page' => 6,
                    'order' => 'ASC'
                );
                
                $loop = new WP_Query($args);
               if(have_posts()) :
                while ( $loop->have_posts() ) : $loop->the_post();
                 ?>
            <div class="col-md-12 col-lg-6">
                <div class="menu-group">

                    <div class="row menu-row">
                        
                        
                    <div class="col-md-12 menu-item">

                            <div class="wrapper">
                                <h5 class="item-tag mbr-white mbr-bold mbr-fonts-style display-4"><?php 
                                 $cat = get_the_category($post->ID);
    
                                  if ( ! empty( $cat ) ) {
                               echo esc_html( $cat [0]->cat_name );}?></h5>
                                <div class="menu-box">

                                    <p class="box-text mbr-black mbr-bold mbr-fonts-style display-7"><?php the_title();?></p>
                                    <div class="line"></div>
                                    <span class="mbr-fonts-style mbr-bold box-price mbr-black display-7">
                                       $<?php the_field('price');?></span>
                                </div>
                                <h3 class="item-title mbr-fonts-style display-4"><?php 
                                the_excerpt();?></h3>
                            </div>
                    </div>
                

                    </div>
                </div>

            </div>
            <?php endwhile; endif;?>
 
        </div>
    </div>
</section>

<?php 

                if(have_posts()) :
                while ( have_posts() ) : the_post();

        $testimonial = get_field('testimonial_section');
    endwhile; endif;
        if($testimonial){
?>
<section class="carouse3 slide testimonials-slider cid-rKZBKzILXD" data-interval="false" id="testimonials03-20">

    <div class="container text-center">

        <div class="row">
            <div class="col-12  col-md-12 pb-5 col-lg-12">
                <h3 class="mbr-section-subtitle mbr-semibold align-center mbr-fonts-style display-5"><?php echo $testimonial['subtitle'];?></h3>
                <h2 class="mbr-section-title align-center mbr-exbold mbr-fonts-style mbr-black display-2">
                    <?php echo $testimonial['main_title'];?></h2>

            </div>
        </div>

        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
            <div class="carousel-inner">
              <?php  

                    $args = array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => 3,
                    'order' => 'ASC'
                );
                
                $loop = new WP_Query($args);
               if(have_posts()) :
                while ( $loop->have_posts() ) : $loop->the_post();
                 ?>  
            <div class="carousel-item">

                    <div class="row">
                        <div class="col-lg-6">
                                <?php if(has_post_thumbnail()):?>
                            <div class="user_image">
                                 <?php the_post_thumbnail();?>
                            </div>
                                <?php endif; ?>
                        </div>
                        <div class="user align-left col-lg-6">

                            <div class="user_text pb-3">
                                <span class="mbr-iconfont mobi-mbri-quote-left mobi-mbri"></span>

                                <p class="mbr-fonts-style mbr-bold display-7"><em>
                                        <?php the_excerpt();?></em></p>
                            </div>

                            <div class="align">
                                <h4 class="user_name pb-1 mbr-bold mbr-fonts-style display-7"><?php the_title();?></h4>
                            </div>
                            <p class="user_status mbr-fonts-style display-4"><?php the_field('designation');?></p>
                        </div>
                    </div>

                </div>

            <?php endwhile; endif;?>
              
            </div>

            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider1" class=" active" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#slider1" data-slide-to="1">
                </li>
                <li data-app-prevent-settings="" data-target="#slider1" data-slide-to="2">
                </li>
                
            </ol>       
        </div>
    </div>
</section>
<?php   } ?>
 

<section class="form01 cid-rKZBPrHeRE" id="form01-21">
      
    <div class="container">
        <div class="row">


            <div class="col-lg-6 my-auto md-pb mbr-form" data-form-type="formoid">
                <!--Formbuilder Form-->
             
                    
                        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1" html_class="mbr-form form-with-styler"]');?>
                      
            </div>


            <div class="col-lg-6 col-md-12">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>

        </div>

    </div>
</section>
 

<?php get_footer();?>