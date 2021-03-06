<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

/*if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}*/
?>

<aside id="sidebar">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>

	<?php
        if(is_tax( 'tour-categories' )|| is_post_type_archive('tours') || is_singular('tours') ) {
	        get_template_part('sections/section','category-tour');
        }
	 ?>
	<?php get_template_part('sections/section','start-tour') ?>
	<?php get_template_part('sections/section','lastest-tour') ?>
	<?php get_template_part('sections/section','travel-news') ?>

</aside><!-- #secondary -->
