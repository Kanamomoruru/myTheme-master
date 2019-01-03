<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widget_title">',
		'after_title' => '</h2>',
	));
}

// move jquery to the bottom of the page
if (!function_exists('pt_jquery_bottom')):
    function pt_jquery_bottom() {
        wp_dequeue_script('jquery');
        wp_dequeue_script('jquery-core');
        wp_dequeue_script('jquery-migrate');
        wp_enqueue_script('jquery', false, array(), false, true);
        wp_enqueue_script('jquery-core', false, array(), false, true);
wp_enqueue_script('jquery-migrate', false, array(), false, true);
wp_enqueue_script('scrollify', 'https://cdn.jsdelivr.net/npm/jquery-scrollify@1.0.17/jquery.scrollify.min.js', array(), false, true);
wp_enqueue_script('tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js', array(), false, true);
wp_enqueue_script('flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js');


}
endif;
add_action('wp_enqueue_scripts', 'pt_jquery_bottom');




