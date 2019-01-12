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
        </div>
        <div class="about_author">
            <img class="authorImg" src="<?php echo get_template_directory_uri(); ?>/images/author.png">  
            <p><strong>T.ASABA</strong></p>
            <p>SPIN FOUNDER</p>
            
        </div>

        <div class="authorIntro_rightside">
            <?php
                $args = array (
                    'post_type' => 'chapter',
                    'post_per_page' => '6',
                );
                $chapters = get_posts($args);  //defined chapters
                foreach($chapters as $chapter): //Loop
                //To get data from chapter
                $age = get_field('age', $chapter);
                $story = get_field('story', $chapter); 
                $picture = get_field('off_spring_pic', $chapter);
                $firstName = get_field('firstname', $chapter);
                $lastName = get_field('lastname', $chapter);
                $location = get_field('location', $chapter); 
            ?>
            <?php 
                if( !empty($picture) ): ?>
                <figure class="author_chapter_pics">
                    <img src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; 
                        ?>" class="author_chapter_img" />
                </figure>
            <?php endif; ?>  

            <div class="author_chapter_info">
                <div class="author_chapter_overlay">
                    <p class="author_chapter_fname_age"><?php echo $firstName ;?>, <?php echo $age ;?></p>
                    <p class="author_chapter_lname"><?php echo $lastName ;?></p>
                    <small class="author_chapter_location"><?php echo $location ;?></small>
                    <h3 class="author_chapter_story"><?php echo $story ;?></h3>
                </div>
            </div>
                
             
            <?php endforeach?> 

            <!-- <div class="nameData">
                <p>がんばっペ！Wake Up, Girls！</p>
                <img class="testImg" src="">
                <p class="testName"></p> 
            </div> -->
        </div>
    </div>

</section>