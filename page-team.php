<?php
/*
Template Name: team
*/
get_header();
 ?>

<?php get_template_part('navbar'); ?>

<div id="main" role="main">
     <div class="page-wrap">
          <div class="page-title_img">
            <img class="img_chapter" src="<?php echo get_template_directory_uri(); ?>/images/Rectangle.png">
            <div class="img_title">
                <p>Writin success stories chapter by chapter</p>
            </div>
            <div class="chapter_sentence">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
          </div>
          <!-- /.page-title -->
          <?php
               $loop = new WP_Query(array("post_type" => "team"));
               if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
          ?>
          <article class="author container row">
               <div class="col span_3 author-img"><?php the_post_thumbnail(); ?></div>
               <div class="col span_9">
                    <h2><?php the_title(); ?> <span class="team-title"><?php echo get_post_meta($post->ID,'メンバー：職業',true); ?></span></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p class="author-meta">
                    </p>
                    <p class="team-more">
                         <a href="<?php the_permalink(); ?>" class="btn blue">
                              詳しい経歴を見る <span class="lsf">right</span>
                         </a>
                    </p>
               </div>
          </article>
          <!-- /.container -->
          <?php endwhile; endif; ?>
     </div>
     <!-- /.page-wrap -->
</div>
<!-- /#main -->
 



 <?php get_footer(); ?>