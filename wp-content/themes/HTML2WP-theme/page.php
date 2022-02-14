<?php get_header();?>

<?php if(have_posts()): 
	while (have_posts()) : the_post()
		?>

<section class="conten06 cid-rKYYXC1dSU" id="content06-n">


    <div class="container">
        <div class="row justify-content-center">
            <div class="mbr-black col-md-12 col-lg-10">

                <h2 class="mbr-section-title mbr-white align-center mbr-exbold pb-2 mbr-fonts-style display-2"> <?php the_title();?></h2>

            </div>
        </div>
    </div>
</section>
<section class="features05 cid-rL01ot2Cye" id="features05-2b">

    <div class="container">
        <div class="row">

            <div class="col-md-12 pb-5 col-lg-12 align-center">

               <?php the_content();?>
            </div>

        </div>
    </div>

</section>

<?php endwhile; endif; ?>

<?php get_footer();?>