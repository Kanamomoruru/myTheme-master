<!-- <?php get_header(); ?> -->

<main>
   <?php
    
    ?>
    
        <article class="content">
            <h2><?php //the_title(); ?></h2>
            <p>hi it is test</p>
            
            <?php
                 $args = array (
                    'post_type' => 'chapter',
                    'post_per_page' => '6',
                    // 'meta_key' => 'name',
                    // 'type' => 'post',
                    // 'name' => 'chapter'
            );
            $chapters = get_posts($args);  //defined chapters

            foreach($chapters as $chapter): //Loop

            //To get data from chapter
            $age = get_field('age', $chapter);
            $story = get_field('story', $chapter); 
            $picture = get_field('off_spring_pic', $chapter);
            $firstName = get_field('firstname', $chapter);
            $LastName = get_field('lastname', $chapter);
            $location = get_field('location', $chapter);

            ?>

        <a href="#">
            <div>
                <p><?php echo $age?></p>
                <p><?php echo $story?></p>
                <?php if( !empty($picture) ): ?>
                <img src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; ?>" />
                <?php endif; ?>
                <p><?php echo $firstName?></p>
                <p><?php echo $LastName?></p>
                <p><?php echo $location?></p>
            </div>
            
        </a>
        
            <?php endforeach?>
            
            <?php //the_content(); ?>      
        </article>
    <?php
    ?>
</main>

<?php //get_sidebar(); ?> 
<?php //get_footer(); ?> 