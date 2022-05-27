<?php 
/*
Template Name: About

*/
?>
<?php get_header(); ?>
<header id="about-us" class="about-us" style="background-image: url(<?php  the_field( 'hero_image' ); ?>);">
    <div class="overlay"></div> 
    <div class="header-content">  
        <h6><?php the_field('title'); ?></h6>
    </div>
</header><!-- End of Page Header -->  

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-sm-6">
            <p><?php the_field('about'); ?></p>
        </div>
        <div class="col-sm-6">
            <img src="<?php the_field('image'); ?>" class="w-100" alt="About Us">
        </div>
    </div>
</div>
<?php get_footer(); ?>