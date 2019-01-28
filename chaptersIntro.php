

<section class="display-scroll">
<div class="chapterIntro-header section-content">
    <div class="Slider">
        <div class="chapters_list main-carousel">
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
            <div class="chapter_avatar">
                <div class="chapter_info">
                    <div class="chapter_overlay">
                        <p class="chapter_fname_age"><?php echo $firstName ;?>, <?php echo $age ;?></p>
                        <a href="<?php the_permalink(); ?>" class="btn blue"></a>
                        <p class="chapter_lname"><?php echo $lastName ;?></p>
                        <small class="chapter_location"><?php echo $location ;?></small>
                        <h3 class="chapter_story"><?php echo $story ;?></h3>
                    </div>
                </div>
                <?php 
                    if( !empty($picture) ): ?>
                    <figure class="the-img">
                          <img src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; 
                          ?>" class="chapter_img" />
                    </figure>
                <?php endif; ?> 
            </div>
        
            <?php //endforeach?> 
            <?php endforeach; ?>
            <?php else : //記事が無い場合 ?>
            <?php endif;
               wp_reset_postdata(); //クエリのリセット ?>
        </div>
    </div> <!-- slider -->

    <div class="chapterIntro-rightside">
        <div class="background-number3">03</div>
        <div class="chapterIntro-story">
            <!-- <div class="chapterIntro-h1">Stories</div> -->
            <div class="big-title">
                <div id="box6">
                    <div class="colorLayer3"></div>
                    <div class="chapterIntro-h1">Stories</div>
                </div>
            </div>
                <div class="right_elements">
                    <div class="chapterIntro-small">Writting success stories of unique talents.</div>
                    <div class="chapterIntro-explenation">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a 
                            type specimen book. It has survived not only five centuries, 
                            but also the leap into electronic typesetting, remaining 
                            essentially unchanged. It was popularised in the 1960s with 
                            the release of Letraset sheets containing Lorem Ipsum passages, 
                            and more recently with desktop publishing software like Aldus 
                            PageMaker including versions of Lorem Ipsum.
                            "Sed ut perspiciatis unde omnis iste natus error 
                            sit voluptatem accusantium doloremque laudantium, totam rem 
                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                            sed quia consequuntur magni dolores eos qui ratione voluptatem 
                            sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia 
                            dolor sit amet, consectetur, adipisci velit, sed quia non numquam 
                            eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat 
                            voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem 
                            ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
                            consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
                            velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum 
                            fugiat quo voluptas nulla pariatur?"
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a 
                            type specimen book. It has survived not only five centuries, 
                            but also the leap into electronic typesetting, remaining 
                            essentially unchanged. It was popularised in the 1960s with 
                            the release of Letraset sheets containing Lorem Ipsum passages, 
                            and more recently with desktop publishing software like Aldus 
                            PageMaker including versions of Lorem Ipsum.
                            "Sed ut perspiciatis unde omnis iste natus error 
                            sit voluptatem accusantium doloremque laudantium, totam rem 
                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                            sed quia consequuntur magni dolores eos qui ratione voluptatem 
                            sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia 
                            dolor sit amet, consectetur, adipisci velit, sed quia non numquam 
                            eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat 
                            voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem 
                            ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
                            consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
                            velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum 
                            fugiat quo voluptas nulla pariatur?"
                        <p>
                    </div>
                </div>
                
            </div>
        </div>
</div> <!-- chapterIntro-header-->
</section>








   