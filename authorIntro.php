<section class="display-scroll">
    <div class="authorIntro section-content">
        <div class="background_number5">05</div>
        <div class="author_title">
            <p class="author"><span>A</span>UTHOR</p>
            <p class="author_small">Connecting the dots, writing success stories.</p>
            <div class="author_sentence">
                For example, I go to the mountain. 
                <br>
                <br>
                The mountain is a steep cliff, and when you climb up to the top of the mountain, 
                beyond that are sharp and steep mountains, like a knife decorated with snow. Right now, 
                I am there alone. Alone, feeling the wind, I inhale the clear air, and, exhale, along with something there like a breath, 
                pulsing together as one.
                <br>    
                <br>              
                At that moment, I know that I was drawn and guided here. 
                <br>
                <br>
                I felt my own mission by "growing" as a living thing, and to return to the ground with a firm will, to "make use of" myself,
                <br>
                <br>
                I was called HERE.
            </div>

            <!--   test    -->

            

        </div>
        <div class="about_author">
        
        <!-- <p>SPIN FOUNDER</p> -->
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
            
            <div class="authorIntro_rightside_article">
                <div class="authorIntro_articles">ARTICLES</div>
                <?php $userId = get_query_var('author'); ?>
                    <?php $user = get_userdata($userId); ?>
                        <h1><?php echo $user->display_name; ?><span></span></h1>
                    
                    <?php if (!empty($user->description)) { ?>
                        <p><?php echo $user->description; ?></p>
                    <?php } ?>
                    
                    <?php $posts = get_posts("author=$userId&orderby=date&post_type=post&numberposts=1000"); ?>
                    <?php if (!empty($posts)) { ?>
                        <ul> 
                            <?php foreach( $posts as $post ) : setup_postdata($post); ?>
                            <div class="articles_list">
                            <?php echo get_the_date("j.n.Y");?>
                            <?php //the_author_login(); ?>
                            <?php $cat = get_the_category(); ?>
                            <?php $cat = $cat[0]; ?>
                            <?php echo get_cat_name($cat->term_id); ?>
                                <div class="the_excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </ul>
                            
                        <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php } ?>
            
            </div> <!-- authorIntro_rightside_article -->
        </div>  <!-- authorIntro_rihghtside -->

        
    </div>
</section>