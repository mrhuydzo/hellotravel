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
	   Template Name: Page Category
*/
?>
<?php get_header(); ?>

<div id="post_category" class="main_container">
	<div class="container">
        <div class="breadcrumsb">
			<?php
                if(function_exists('bcn_display')) {
                    bcn_display();
                }
			?>
        </div>
		<div class="row">
			<main id="main" class="col-lg-8">
                <h2 class="page_title">Các tin du lịch hấp dẫn và mới nhất</h2>
                <div class="post_list">
					<?php if (have_posts()){ ?>
						<?php while (have_posts()){ the_post(); ?>
							<article class="container post_item" id="post_item_<?php the_id();?>">
                                <div class="row">
                                    <figure class="col-sm-4 post_thumb">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="row post_thumb_link">
			                                <?php if ( has_post_thumbnail()){
				                                the_post_thumbnail('thumbnail');
			                                } else { ?>
                                                <img src="http://via.placeholder.com/200x200" alt="<?php the_title();?>" class="post_thumb_img" />
			                                <?php } ?>
                                        </a>
                                    </figure>
                                    <div class="col-sm-8 post_info">
                                        <div class="post_top">
                                            <h3 class="post_title"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <p class="post_summary"><?php echo word_count(get_the_excerpt(), '35'); ?></p>
                                        <div class="post_bottom row">
                                            <div class="col">
                                                <time class="post_date" datetime=""><i class="far fa-calendar"></i><?php the_date(); ?></time>
                                            </div>
                                            <div class="col text-right">
                                                <a class="post_readmore" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">[ Xem chi tiết ]</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</article>
						<?php } ?>
					<?php }else{ ?>
						<?php get_template_part('content', 'none'); ?>
					<?php } ?>
				</div>
				<?php if (function_exists('devvn_wp_corenavi')) devvn_wp_corenavi(); ?>
			</main><!-- #main -->
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div><!-- #primary -->

<?php get_footer();?>
