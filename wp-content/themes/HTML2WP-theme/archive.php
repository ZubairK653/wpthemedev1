<?php get_header();?>

<section class="conten06 cid-rKYYXC1dSU" id="content06-n">

    <div class="container">
        <div class="row justify-content-center">
            <div class="mbr-black col-md-12 col-lg-10">

                <h2 class="mbr-section-title mbr-white align-center mbr-exbold pb-2 mbr-fonts-style display-2"><?php the_archive_title(); ?></h2>
                



            </div>
        </div>
    </div>
</section>
<section class="features05 cid-rL01ot2Cye" id="features05-2b">

    

    
    <div class="container">
        <div class="row">


            <div class="col-md-12 pb-5 col-lg-12 align-center">

                <h2 class="mbr-section-subtitle mbr-exbold mbr-light mbr-fonts-style display-5">news</h2>
                <h1 class="mbr-section-title pb-3 mbr-exbold mbr-fonts-style display-2">This is all about food</h1>
            </div>



            <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
            <div class="card item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                	<?php if(has_post_thumbnail()):?>
                    <div class="card-img">
                        <img src="<?php the_post_thumbnail(); ?>" alt="Mobirise">
                    </div>
                <?php endif;?>
                    <div class="card-box pt-4">

                        <div class="wrapper">
                            <div class="icon-wrap">
                                <span class="mbr-iconfont mobi-mbri-map-pin mobi-mbri"></span>
                                <h6 class="location mbr-regular mbr-fonts-style display-4"><?php 
							$cat = get_the_category($post->ID);
	
						if ( ! empty( $cat ) ) {
    				   echo esc_html( $cat [0]->cat_name );}?></h6>
                            </div>

                            <div class="icon-wrap icon-padding">
                                <span class="mbr-iconfont mobi-mbri-map-pin mobi-mbri"></span>
                                <h6 class="location mbr-regular mbr-fonts-style display-4"><?php echo get_the_date(); ?></h6>
                            </div>
                        </div>

                        <h4 class="card-title pb-3 mbr-bold mbr-fonts-style display-7"><?php echo get_the_title(); ?></h4>
                        <p class="mbr-text mbr-fonts-style display-4">
                          <?php the_excerpt(); ?></p>

                        <a class="link-align" href="<?php the_permalink();?>">
                            <div class="link-inline">
                                <div class="link-wrap">
                                    <h5 class="link mbr-bold mbr-fonts-style display-4">READ MORE</h5>
                                    <span class="mbr-iconfont mbr-bold mobi-mbri-right mobi-mbri"></span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
       		 <?php endwhile; else: ?>

       			 <p> There are no posts to show</p>

    		<?php endif;?>
           
 

        </div>
    </div>

</section>

<?php get_footer();?>