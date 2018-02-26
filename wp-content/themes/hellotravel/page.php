<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package travel
 */

get_header(); ?>

    <div id="page_main" class="main_container">
        <div class="container">
            <div class="row">
                <main id="main" class="col-md-8">
                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        /*   if ( comments_open() || get_comments_number() ) :
                               comments_template();
                           endif;*/

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
                <div class="col-md-4 sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
	</div><!-- #primary -->

<?php

get_footer();
