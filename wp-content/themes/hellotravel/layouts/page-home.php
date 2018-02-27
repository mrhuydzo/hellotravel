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

/*
	   Template Name: Page Home
*/
?>
<?php get_header(); ?>

	<div id="page_home" class="main_container">
        <main id="main">
	        <?php get_template_part('sections/section','banner') ?>
            <div class="container">
                <div class="row">
                    <section class="col-lg-8">
	                    <?php get_template_part('sections/section','highlight-tour') ?>
                    </section>
                    <section class="col-lg-4">
		                <?php get_sidebar(); ?>
                    </section>
                </div>
            </div>
	        <?php get_template_part('sections/section','customer') ?>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
