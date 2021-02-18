<?php
/*
Template Name: FrontPage
*/
 get_header();?>


<div class="content">
    
    


    <?php if(have_posts()) : while(have_posts()) :the_post();?>

    <?php the_content();?>
    <?php endwhile; else: endif;?>



</div>

<?php get_footer();?>