<?php 
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="container">
<?php 

$args = array (
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3
);

$loop = new WP_Query($args);

if( $loop->have_posts()  )  :
    while  ( $loop->have_posts()  ) :  $loop->the_post();
    ?>
    <div class="post-content">
        <?php
    the_title();
    the_post_thumbnail();
    the_content();
    ?>
    </div>
    //Display post  content
    <?php
    endwhile;
endif;
?>

</div>
<?php get_footer(); ?>