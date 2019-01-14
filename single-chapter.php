<div id="main" role="main">
     <div class="page-wrap">
     
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="page-title">
               <h1>メンバー紹介 - <?php the_title(); ?></h1>
          </div>
          <!-- /.page-title -->
          
          <article class="container">
               <div class="author row">
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
                    </div>
               </div>
               <!-- /.row -->
               
               <div class="row team-content">
                    <?php the_content(); ?>
               </div>
               <!-- /.row -->
          </article>
          <!-- /.container -->
          <?php endwhile; endif; ?>
     </div>
     <!-- /.page-wrap -->
</div>
<!-- /#main -->
 