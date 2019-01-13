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
            <?php 
                $post_user = get_the_author();
                if ( $post_user == 'test1' ){
                    echo '<span>ここに作成者・投稿者が「山田太郎」である時に動作させたいコードを挿入する</span>';
                }else{
                    echo '<span>ここに作成者・投稿者が「山田太郎」以外である時に動作させたいコードを挿入する</span>';
                };
            ?>



        </div>
        <div class="about_author">
        <?php
                $args = array (
                    'post_type' => 'author',
                    'post_per_page' => '2',
                );
                $authors = get_posts($args);  //defined chapters

                foreach($authors as $author): //Loop

                //To get data from chapter
                $author_name = get_field('author_name', $author);
                 
            ?>
            <p><strong><?php echo $author_name?></strong></p>
      
        
            <?php endforeach?> 
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
                <?php the_author_login(); ?>
            </div>

        </div> 

            
    </div>

</section>