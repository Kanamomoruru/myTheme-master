<?php get_header(); ?>

<main>
   <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    
        <article class="content">
            <h2><?php the_title(); ?></h2>
            <div class="story"><?php the_field('story'); ?></div>
            <div class="offspring_pic">
            <?php 
                $image = get_field('off_spring_pic');

                if( !empty($image) ): 
            ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
            </div>
            <?php the_content(); ?>
        </article>
    
    <?php
    endwhile;
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>