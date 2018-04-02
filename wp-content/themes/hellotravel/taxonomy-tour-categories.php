<?php get_header(); ?>

<div id="post_category" class="main_container">
    <div class="container">
        <div class="breadcrums">
			<?php
			if ( function_exists( 'bcn_display' ) ) {
				bcn_display();
			}
			?>
        </div>
        <div class="row">
            <main id="main" class="col-lg-8">
                <h2 class="page_title">Các tin du lịch hấp dẫn và mới nhất</h2>
                <div class="post_list">
					<?php if ( have_posts() ) { ?>
						<?php while ( have_posts() ) {
							the_post(); ?>
                            <article class="container post_item" id="post_item_<?php the_id(); ?>">
                                <div class="row">
                                    <figure class="col-sm-4 post_thumb">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="row post_thumb_link">
											<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail( 'medium' );
											} else { ?>
                                                <img src="http://via.placeholder.com/600x600" alt="<?php the_title(); ?>" class="post_thumb_img"/>
											<?php } ?>
                                        </a>
                                    </figure>
                                    <div class="col-sm-8 post_info">
                                        <div class="post_top">
                                            <h3 class="post_title">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <div class="row post_meta">
                                                <div class="col">
                                                    <strong class="post_tour_place">
                                                        <i class="far fa-clock"></i><?php the_field( 'tour_schedule' ) ?>
                                                    </strong>
                                                </div>
                                                <div class="col">
                                                    <strong class="post_tour_start">
                                                        <i class="far fa-calendar"></i><?php the_field( 'tour_start' ) ?>
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row post_body">
                                            <div class="col-sm-8 post_body-left">
                                                <p class="post_summary"><?php echo word_count( get_the_excerpt(), '35' ) . '...'; ?></p>
                                            </div>
                                            <div class="col-sm-4 post_body-right">
                                                <span class="tour_price_old">
                                                    <?php
                                                        $priceOld = get_field( 'tour_price_old' );
                                                        if ( isset( $priceOld ) && ! empty( $priceOld ) ) {
                                                            echo 'Chỉ từ: ' . number_format( $priceOld, 0, "", "." ) . ' đ';
                                                        }
                                                    ?>
                                                 </span>
                                                <strong class="tour_price_new">
													<?php
                                                        $priceNew = get_field( 'tour_price_new' );
                                                        if ( isset( $priceNew ) && ! empty( $priceNew ) ) {
                                                            echo number_format( $priceNew, 0, "", "." ) . ' đ';
                                                        }
													?>
                                                </strong>
                                                <a class="post_order_tour" href="<?php the_permalink(); ?>" title="Đặt Tour">Đặt Tour</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
						<?php } ?>
					<?php } else { ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php } ?>
                </div>
				<?php if ( function_exists( 'devvn_wp_corenavi' ) ) {
					devvn_wp_corenavi();
				} ?>
            </main><!-- #main -->
            <div class="col-lg-4">
				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div><!-- #primary -->

<?php get_footer(); ?>
