<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package travel
 */
?>
<?php get_header(); ?>
    <div id="page_posts" class="main_container">
        <div class="container">
            <div class="row">
		        <?php if (function_exists('show_bread')) {show_bread();} ?>
            </div>
            <div class="row">
                <main id="main" class="col-lg-8">
		            <?php
                        while ( have_posts() ) : the_post();

                            //Get template content detail
                            get_template_part( 'template-parts/content', get_post_type() );

                            //Pagination
                            //the_post_navigation();

                            // If comments are open or we have at least one comment, load up the comment template.
                            /*if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;*/

                        endwhile; // End of the loop.
		            ?>
                </main><!-- #main -->
                <div class="col-lg-4">
		            <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
	</div>
<?php get_footer(); ?>
