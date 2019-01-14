<?php
/*
Template Name: chapter
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
          <ul>
               <?php $args = array(
                    'numberposts' => 9,                //表示（取得）する記事の数
                    'post_type' => 'chapter'    //投稿タイプの指定
               );
               $posts = get_posts( $args );

               $age = get_field('age', $chapter);
               $story = get_field('story', $chapter); 
               $picture = get_field('off_spring_pic', $chapter);
               $firstName = get_field('firstname', $chapter);
               $lastName = get_field('lastname', $chapter);
               $location = get_field('location', $chapter); 

               if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
               
                    
                         <?php the_author_meta( 'display_name' ); ?>
                         
                         <?php if ( has_post_thumbnail() ) : ?>
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                         <?php endif; ?>
               
                         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    
               <?php endforeach; ?>
               <?php else : //記事が無い場合 ?>
               <?php endif;
               wp_reset_postdata(); //クエリのリセット ?>
          </ul>
     </div>
     <!-- /.page-wrap -->
</div>
<!-- /#main -->
 



 <?php get_footer(); ?>