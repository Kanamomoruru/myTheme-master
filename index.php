<?php get_header(); ?>
<?php get_template_part('navbar'); ?>
	<main>
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>

		<section class="post">
			<!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->
			<!-- <?php the_excerpt(); ?> -->
		</section>

		<?php
		endwhile;
		endif;
		?>
	</main>

<?php get_template_part('intro'); ?>
<br>
<br>
<br>
<br>
<?php ?>
<?php get_template_part('page-chapterintro'); ?>
<?php get_template_part('chaptersIntro'); ?>
<?php get_single_event(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>