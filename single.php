<?php get_header(); ?>
<?php get_template_part('navbar'); ?>

<div id="main" role="main" class="storyPage">
     <div class="page-wrap">
         <div class="storyPage_rightside">
            <div class="storyPage_rightside_video">
                <video class="intro-video" controls width="600" height="500" poster="<?php echo get_template_directory_uri(); ?>/images/demovideo.jpg">
                    <source src="<?php echo get_template_directory_uri(); ?>/images/demovideo.mp4" type="video/mp4" />
                </video>
            </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
              $age = get_field('age', $post);
              $story = get_field('story', $post); 
              $picture = get_field('off_spring_pic', $post);
              $firstName = get_field('firstname', $post);
              $lastName = get_field('lastname', $post);
              $location = get_field('location', $post); 
            ?>
            
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <h3 class="chapter_name_age"><?php echo $firstName ;?>, <?php echo $age ;?></h3>
            <p class="chapter_location"><?php echo $location ;?></p>

         </div>
     
     
          <!-- /.page-title -->
          
          <article class="container">
               <div class="author row">
                    <div class="col span_3 author-img"><?php the_post_thumbnail(); ?></div>
                    <div class="col span_9">
                         <h2><?php the_title(); ?> <span class="team-title"><?php echo get_post_meta($post->ID,'メンバー：職業',true); ?></span></h2>
            
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
     <!-- /.page-wrap -->
</div>
<!-- /#main -->
 


<?php get_footer(); ?>