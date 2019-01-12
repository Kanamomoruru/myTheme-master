<?php get_header(); ?>
<?php get_template_part('navbar'); ?>

<main>
   <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <?php 
        if(function_exists('get_field')) :
            $author_id = get_the_author_id();
            $member_nickname= get_field('member-nickname', 'user_'. $author_id );
            $author_image= get_field('user_avatar', 'user_'. $author_id );
            $size= 'thumbnail'; // (thumbnail, medium, large, full or custom size)
        endif;
?>
    
    
    <?php
    endwhile;
    endif;
    ?>
</main>


<?php get_footer(); ?>