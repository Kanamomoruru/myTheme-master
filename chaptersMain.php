<?php
/*
Template Name: chaptersMain
*/
get_header();
 ?>


<?php get_template_part('navbar'); ?>

<section class="display-scroll">
<div class="chapterMain section-content">
    <div class="background-number4">04</div>
        <div class="chapterMain-leftside">
            <!-- <div class="chapterMain-h1">Chapters</div> -->
            <div class="big-title">
                <div id="box7">
                    <div class="colorLayer4"></div>
                    <div class="chapterMain-h1">Chapters</div>
                </div>
            </div>
            <div class="chapterMain-contents">
            <div class="chapterMain-small">The media where you can read about social issues.</div>
                <div class="chapterMain-explenation">
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
<!-- 
        <ul class="categories">
        <?php 
            wp_list_categories('title_li');
        ?>
        </ul> -->

<!-- 投稿ページの出力　-->



<!-- 全カテゴリ　-->
<div class="tabmenu tabactive mr01">News</div>
<div class="tabcontent">
<dl>
<?php
    $wp_query = new WP_Query();
    $param = array(
        'category_name' => 'news',
        'posts_per_page' => '5', //表示件数。-1なら全件表示
        'post_type' => 'chaptermain', //カスタム投稿タイプの名称を入れる
    );
    $wp_query->query($param);
    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();

    //chaptersmain呼び出し
    $cm_pic = get_field('cm_pic', $chaptermain);
    $cm_title = get_field('cm_title', $chaptermain); 
    $cm_author_name = get_field('cm_author_name', $chaptermain);
    $cm_sentence = get_field('cm_sentence', $chaptermain);
?>

<dt>
<div class="post_side">
    <!-- <ul class="post_content"> -->
        <!-- <li> -->
        <?php 
            if( !empty($cm_pic) ): ?>
            <div class="post_img">
                <img src="<?php echo $cm_pic['url']; ?>" alt="<?php echo $cm_pic['alt']; 
                ?>" />
            </div>
        <?php endif; ?> 
        <div class="post_title"><?php echo $cm_title; ?></div>
        <div class="post_author_name">By <?php echo $cm_author_name; ?></div>
        <div class="post_sentence"><p><?php echo $cm_sentence; ?></p></div>

        <!-- </li> -->
       
    <!-- </ul> -->
</div>
</dt>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>

</dl>
</div>





<!-- カテゴリ１　-->
<div class="tabmenu mr01">Test1</div>
<div class="tabcontent">
<dl>
<?php
    $wp_query = new WP_Query();
    $param = array(
        'category_name' => 'test1',
        'posts_per_page' => '3', //表示件数。-1なら全件表示
        'post_type' => 'chaptermain', //カスタム投稿タイプの名称を入れる
    );
    $wp_query->query($param);
    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();

    //chaptersmain呼び出し
    $cm_pic = get_field('cm_pic', $chaptermain);
    $cm_title = get_field('cm_title', $chaptermain); 
    $cm_author_name = get_field('cm_author_name', $chaptermain);
    $cm_sentence = get_field('cm_sentence', $chaptermain);
?>

<dt>
<div class="post_side category1">
    <!-- <ul class="post_content"> -->
        <!-- <li> -->
        <?php 
            if( !empty($cm_pic) ): ?>
            <div class="post_img">
                <img src="<?php echo $cm_pic['url']; ?>" alt="<?php echo $cm_pic['alt']; 
                ?>" />
            </div>
        <?php endif; ?> 
        <div class="post_title"><?php echo $cm_title; ?></div>
        <div class="post_author_name">By <?php echo $cm_author_name; ?></div>
        <div class="post_sentence"><p><?php echo $cm_sentence; ?></p></div>

        <!-- </li> -->
       
    <!-- </ul> -->
</div>
</dt>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>

</dl>
</div>


<!-- カテゴリ２　-->
<div class="tabmenu mr01">Test２</div>
<div class="tabcontent">
<dl>
<?php
    $wp_query = new WP_Query();
    $param = array(
        'category_name' => 'test2',
        'posts_per_page' => '3', //表示件数。-1なら全件表示
        'post_type' => 'chaptermain', //カスタム投稿タイプの名称を入れる
    );
    $wp_query->query($param);
    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();

    //chaptersmain呼び出し
    $cm_pic = get_field('cm_pic', $chaptermain);
    $cm_title = get_field('cm_title', $chaptermain); 
    $cm_author_name = get_field('cm_author_name', $chaptermain);
    $cm_sentence = get_field('cm_sentence', $chaptermain);
?>

<dt>
<div class="post_side category2">
        <?php 
            if( !empty($cm_pic) ): ?>
            <div class="post_img">
                <img src="<?php echo $cm_pic['url']; ?>" alt="<?php echo $cm_pic['alt']; 
                ?>" />
            </div>
        <?php endif; ?> 
        <div class="post_title"><?php echo $cm_title; ?></div>
        <div class="post_author_name">By <?php echo $cm_author_name; ?></div>
        <div class="post_sentence"><p><?php echo $cm_sentence; ?></p></div>
</div>
</dt>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>

</dl>
</div>


<!-- カテゴリ3　-->
<div class="tabmenu">Test3</div>
<div class="tabcontent">
<dl>
<?php
    $wp_query = new WP_Query();
    $param = array(
        'category_name' => 'test3',
        'posts_per_page' => '3', //表示件数。-1なら全件表示
        'post_type' => 'chaptermain', //カスタム投稿タイプの名称を入れる
    );
    $wp_query->query($param);
    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();

    //chaptersmain呼び出し
    $cm_pic = get_field('cm_pic', $chaptermain);
    $cm_title = get_field('cm_title', $chaptermain); 
    $cm_author_name = get_field('cm_author_name', $chaptermain);
    $cm_sentence = get_field('cm_sentence', $chaptermain);
?>

<dt>
<div class="post_side category3">
        <?php 
            if( !empty($cm_pic) ): ?>
            <div class="post_img">
                <img src="<?php echo $cm_pic['url']; ?>" alt="<?php echo $cm_pic['alt']; 
                ?>" />
            </div>
        <?php endif; ?> 
        <div class="post_title"><?php echo $cm_title; ?></div>
        <div class="post_author_name">By <?php echo $cm_author_name; ?></div>
        <div class="post_sentence"><p><?php echo $cm_sentence; ?></p></div>
</div>
</dt>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>

</dl>
</div>




</div> <!-- chapterMain -->
</section>

<?php 
get_footer();