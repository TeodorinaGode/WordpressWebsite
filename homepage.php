<?php 
/*
Template Name: Home

*/
?>
<?php get_header(); ?>
<!-- Page Header -->
<header id="home" class="header" style="background-image: url(<?php  the_field( 'background' ); ?>);">
    <div class="overlay"></div>
    <div class="header-content" >
        <h6><?php  the_field('title'); ?></h6> 
        <p><?php  the_field('subtitle'); ?></p>
        <button class="aboutPage">
            <a href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
        </button>
    </div>      
</header><!-- End of Page Header -->   

<section id="about">

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <div class="img-wrapper">
                <div class="after"></div>
                <img src="<?php the_field('about_us_image'); ?>" class="w-100" alt="About Us">
                </div>
            </div>

            <div class="col-md-5">
                <div class="img-wrapper">
                <p><?php  the_field('about_us_text'); ?></p>
                </div>
            </div>
        </div>
    </div>

</section>
<?php get_footer(); ?>

    