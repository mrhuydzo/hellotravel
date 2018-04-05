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
	   Template Name: Page Tour
*/
?>
<?php get_header(); ?>
	<div id="page_tour" class="main_container">
        <main id="main">
            <div class="container">
                <div class="row">
                    <section class="col-lg-8">
	                    <?php
	                    $args = array(
		                    'post_type' => 'tour',
		                    'posts_per_page'    => 5,
		                    'orderby'    => 'rand'
	                    );
	                    $the_query = new WP_Query( $args );
	                    //var_dump( $the_query );
	                    ?>
	                    <?php if ($the_query -> have_posts()){ ?>
		                    <?php while ($the_query -> have_posts()){ $the_query -> the_post(); ?>
                                <article class="sidebar_lst_item">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="sidebar_lst_thumb">
					                    <?php if ( has_post_thumbnail()){
						                    the_post_thumbnail();
					                    } else { ?>
                                            <img src="http://via.placeholder.com/100x100" alt="<?php the_title();?>" class="sidebar_lst_img" />
					                    <?php } ?>
                                    </a>
                                    <div class="sidebar_lst_content">
                                        <h3 class="sidebar_lst_title"><a href=""<?php the_permalink(); ?> title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        <a href="<?php the_permalink(); ?>" class="sidebar_lst_btn" title="<?php the_title(); ?>">Chi tiết</a>
					                    <?php the_field('tour_start') ?>
                                    </div>
                                </article>
		                    <?php } ?>
	                    <?php }else{ ?>
		                    <?php get_template_part('content', 'none'); ?>
	                    <?php } ?>
                    </section>
                    <section class="col-lg-4">
		                <?php get_sidebar(); ?>
                    </section>
                </div>
            </div>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>
