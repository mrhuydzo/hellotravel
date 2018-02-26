<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package travel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?> class="post_detail" >
    <header class="post_detail_header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="post_detail_title">', '</h1>' );
		else :
			the_title( '<h2 class="post_detail_title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		/* if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php travel_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
		endif; */
		?>
        <time class="post_date" datetime=""><?php the_date(); ?></time>
    </header><!-- .entry-header -->

    <div class="post_detail_content">
		<?php
		the_content( sprintf(
			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'travel' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travel' ),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .entry-content -->

    <footer class="post_detail_footer">
		<?php travel_entry_footer(); ?>
    </footer><!-- .entry-footer -->

</article>
<!-- #post-<?php the_ID(); ?> -->
