<?php get_header(); ?>
<?php get_template_part('navbar'); ?>

<div id="main" role="main" class="storyPage">
     <div class="page-wrap">
         <div class="storyPage_rightside">
            <div class="storyPage_rightside_video">
                <video class="story-video" controls width="600" height="500" poster="<?php echo get_template_directory_uri(); ?>/images/demovideo.jpg">
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
              $author = get_field('kanren_user', $post); 
            ?>
            
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <h3 class="chapter_name_age"><?php echo $firstName ;?>, <?php echo $age ;?></h3>
            <p class="chapter_location"><?php echo $location ;?></p>
            <?php
                //$kannren_mentor = get_field('kannren_mentor') -> ID;
            ?>
            <?php //echo get_permalink($kannren_mentor); ?><br />
            <?php //echo get_the_title($kannren_mentor); ?>
            <p>ユーザー：<?php echo $author['nickname']; ?></p>
            <?php $author = get_field( 'kanren_user', "user_{$value['ID']}" );?>


            <?php
            if( get_field('kanren_user') ):
                $author = get_field('kanren_user'); 
            ?>
             <?php foreach((array)$author as $value):?>
             <h3><?php //echo $value->post_title; ?></h3>
          <?php endforeach; ?>
          <?php endif; ?>
            

       <?php
        if ( have_rows ( 'chapter_stats' ) ) :
        while ( have_rows ( 'chapter_stats' ) ) :
            the_row();
            $from = get_sub_field ( 'from' );
            echo $from . " ";
            $to = get_sub_field ( 'to' );
            echo $to . " ";
            $amount = get_sub_field ( 'amount' );
            echo $amount . " ";
            $commision = get_sub_field ( 'commision' );
            echo $commision . " ";
            $date = get_sub_field ( 'date' );
            echo $date . " " ;
          

        endwhile;
        else :
        echo "no repeat field";
        endif;
        ?>

<?php $userId = get_query_var('author'); ?>
    <?php $user = get_userdata($userId); ?>
        <h1><?php echo $user->display_name; ?><span></span></h1>
   
       



         </div>
     
     
          <!-- /.page-title -->
          
          <article class="container">
               <div class="author row">
                    <div class="col span_3 author-img"><?php //the_post_thumbnail(); ?></div>
                    <div class="col span_9">
                         <h2><?php //the_title(); ?> <span class="team-title"><?php echo get_post_meta($post->ID,'メンバー：職業',true); ?></span></h2>
            
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