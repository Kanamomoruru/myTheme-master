<section class="display-scroll">
    <div class="authorIntro section-content">
    <!-- author 取得 -->
    <?php $userId = get_query_var('author'); ?>
    <?php $user = get_userdata($userId); ?>
        <h1><?php echo $user->display_name; ?><span></span></h1>
    <?php if (!empty($user->description)) { ?>
        <p><?php echo $user->description; ?></p>
    <?php } ?>
    <?php foreach( $posts as $post ) : setup_postdata($post); ?>
    <?php endforeach; ?>
        <div class="background_number5">05</div>
        <div class="author_title">
            <p class="author"><span>A</span>UTHOR</p>
            <p class="author_small">Connecting the dots, writing success stories.</p>
            <div class="authorIntro_description">
                <p><?php echo esc_html(get_the_author_meta('user_description', 2)); ?></p>
            </div>
        </div>    
        <div class="about_author">
            <div class="author_pic">
                <?php //echo get_avatar( get_the_author_id(), 85 ); ?> 
                <?php echo get_avatar(get_the_author_meta('ID')); ?>
            </div>
            <div class="author_name_position">
                <?php //echo the_author_login(); ?> 
                 <?php //the_author_meta('user_description', 2); ?> 
                <p class="author_name"><?php the_author_meta( 'display_name', 2 );  ?></p>
                <p class="author_position"><?php the_author_meta( 'position', 2 ); ?></p>
            </div>
        </div>

        <div class="authorIntro_rightside">
        <div class="rightside_title">STORIES FROM TOSHI</div>
            <div class="nameData">
                <img class="testImg" src="">
                <div class="test_name_location">
                    <p class="testName"></p> 
                    <p class="testLocation"></p> 
                </div>
            </div>



            <?php $args = array(
                'numberposts' => 9,                //表示（取得）する記事の数
                'post_type' => 'chapter'    //投稿タイプの指定
        );
            //foreach($chapters as $chapter):
            $posts = get_posts( $args );
        
            if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); 
    
            $age = get_field('age', $post);
            $story = get_field('story', $post); 
            $picture = get_field('off_spring_pic', $post);
            $firstName = get_field('firstname', $post);
            $lastName = get_field('lastname', $post);
            $location = get_field('location', $post); 
            $author = get_field('author', $post); 
            ?>
            <?php
            $post_field = get_field('kanren_chapter');
            ?>
            <?php echo get_the_permalink($post_field->ID); ?>

            <?php endforeach; ?>
            <?php else : //記事が無い場合 ?>
            <?php endif;
               wp_reset_postdata(); //クエリのリセット ?>
            



            <!-- articles 取得 -->
            <div class="authorIntro_rightside_article">
                <div class="authorIntro_articles">ARTICLES</div>
                    
                    <?php $posts = get_posts("author=$userId&orderby=date&post_type=post&numberposts=1000"); ?>
                    <?php if (!empty($posts)) { ?>
                       
                            <?php foreach( $posts as $post ) : setup_postdata($post); ?>
                            <div class="articles_list">
                            <?php echo get_the_date("j.n.Y");?>
                            <?php //the_author_login(); ?>
                            <?php $cat = get_the_category(); ?>
                            <?php $cat = $cat[0]; ?>
                            <?php echo get_cat_name($cat->term_id); ?>
                                <div class="the_excerpt" style="white-space: nowrap">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                    
                            
                        <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php } ?>
            
            </div> <!-- authorIntro_rightside_article -->
        </div>  <!-- authorIntro_rihghtside -->

        
    </div>
</section>