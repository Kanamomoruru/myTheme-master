<?php
/*
Template Name: story
*/
get_header();
 ?>

<div id="main">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
          $age = get_field('age', $post);
          $story = get_field('story', $post); 
          $picture = get_field('off_spring_pic', $post);
          $firstName = get_field('firstname', $post);
          $lastName = get_field('lastname', $post);
          $location = get_field('location', $post); 
     
     ?>
      <article class="container">
               <div class="author row">
                    <div class="col span_3 author-img"><?php the_post_thumbnail(); ?></div>
                    <div class="col span_9">
                         <h2><span class="team-title"><?php //echo get_post_meta($post->ID,'chapter',true); ?></span></h2>
                         <h3 class="chapter_name_age"><?php echo $firstName ;?>, <?php echo $age ;?></h3>
                         <p class="chapter_location"><?php echo $location ;?></p>
                         <p class="author-meta">
                        
                         </p>
                    </div>
               </div>
               <!-- /.row -->
               
               <div class="row team-content">
                    <?php //the_content(); ?>
               </div>
               <!-- /.row -->
          </article>
          <!-- /.container -->
          <?php endwhile; endif; ?>
</div>
<?php 
get_footer();