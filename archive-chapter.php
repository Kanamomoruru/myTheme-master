<?php get_header(); ?>
<?php get_template_part('navbar'); ?>

<div id="main" role="main">
     <div class="page-wrap">
          <div class="page-title">
               <h1>メンバー紹介</h1>
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
                    <?php
                         if(get_post_meta($post->ID,'メンバー：Webサイト',true)){
                              echo '<a href="'.get_post_meta($post->ID,'メンバー：Webサイト',true).'"><span class="lsf">web</span></a> ';
                         }
                         if(get_post_meta($post->ID,'メンバー：Twitter',true)){
                              echo '<a href="'.get_post_meta($post->ID,'メンバー：Twitter',true).'"><span class="lsf">twitter</span></a> ';
                         }
                         if(get_post_meta($post->ID,'メンバー：Facebook',true)){
                              echo '<a href="'.get_post_meta($post->ID,'メンバー：Facebook',true).'"><span class="lsf">facebook</span></a>';
                         }
                    ?>
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