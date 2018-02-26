<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package travel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?> class="post_detail">
    <header class="post_detail_header">
		<?php the_title( sprintf( '<h2 class="post_detail_title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <time class="post_date" datetime=""><?php the_date(); ?></time>
	</header><!-- .entry-header -->

    <div class="post_detail_content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="post_detail_footer">
		<?php travel_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
