<?php
/*
Template Name: store
*/
get_header();
 ?>
<?php get_template_part('navbar'); ?>

<div class="store_page">
    <div class="store_store">store.</div>
    <div class="store_comingsoon">coming soon</div>
    <div class="store_img">
        <img class="authorImg" src="<?php echo get_template_directory_uri(); ?>/images/store.png"> 
    </div>
</div>


<?php 
get_footer();