<?php
/*
Template Name: Woocommerce
*/
?>
 
<?php get_header(); ?>
  <?php woocommerce_breadcrumb(); ?>
  <article>
    <header>
      ここに必要な関数を追加
    </header>
 
    <div id="the-content" class="entry-content">
      <?php woocommerce_content(); ?>
    </div>
 
    <footer>
      ここに必要な関数を追加
    </footer>
  </article><!-- .article -->
<?php get_footer(); ?>