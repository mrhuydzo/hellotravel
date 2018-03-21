<?php
/**
 * Template part for displaying posts
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package travel
 */

?>
<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?> class="post_detail">
    <header class="post_detail_header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="post_detail_title">', '</h1>' );
		else :
			the_title( '<h2 class="post_detail_title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
				<?php travel_posted_on(); ?>
            </div><!-- .entry-meta -->
		<?php
		endif;
		?>
    </header><!-- .entry-header -->

    <div class="post_detail_data">
        <div class="post_detail_top">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail( '' );
			} else { ?>
                <img src="http://via.placeholder.com/200x200" alt="<?php the_title(); ?>" class="post_thumb_img"/>
			<?php } ?>
            <div class="row post_detail_summary">
                <div class="left col-md-8">
                    <div class="post_tour_place"><i class="fas fa-map-marker-alt"></i>Điểm đến:
                        <strong><?php the_field( 'tour_place' ) ?></strong></div>
                    <div class="post_tour_schedule"><i class="far fa-clock"></i>Lịch trình:
                        <strong><?php the_field( 'tour_schedule' ) ?></strong></div>
                    <div class="post_tour_start"><i class="fas fa-calendar-alt"></i>Ngày khởi hành:
                        <strong><?php the_field( 'tour_start' ) ?></strong></div>
                </div>
                <div class="right col-md-4">
                    <div class="post_tour_price-old">
						<?php
						$priceOld = get_field( 'tour_price_old' );
						if ( isset( $priceOld ) && ! empty( $priceOld ) ) {
							echo 'Chỉ từ: ' . number_format( $priceOld, 0, "", "." ) . ' đ';
						}
						?>
                    </div>
                    <div class="post_tour_price-new">
						<?php
						$priceNew = get_field( 'tour_price_new' );
						if ( isset( $priceNew ) && ! empty( $priceNew ) ) {
							echo number_format( $priceNew, 0, "", "." ) . ' đ';
						}
						?>
                    </div>
                    <a class="post_tour_order" href="<?php the_permalink(); ?>" title="Đặt Tour">Đặt Tour</a>
                </div>

            </div>
        </div>
        <div class="post_detail_content">
            <div class="post_scroll">
                <div class="post_scroll_item">
                    <a href="#post_detail_info" rel="nofollow" title="Thông tin" class="active">Thông tin</a>
                </div>
                <div class="post_scroll_item">
                    <a href="#post_detail_schedule" rel="nofollow" title="Lịch trình">Lịch trình</a>
                </div>
                <div class="post_scroll_item">
                    <a href="#post_detail_map" rel="nofollow" title="Bản đồ">Bản đồ</a>
                </div>
                <div class="post_scroll_item">
                    <a href="#post_detail_picture" rel="nofollow" title="Ảnh">Ảnh</a>
                </div>
                <!--<a href="javascript:void(0)" rel="nofollow" title="Đánh giá">Đánh giá</a>-->
            </div>

            <div class="post_scroll_content" id="post_detail_info">
                <h3 class="post_detail_subtitle">Thông tin</h3>
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
            </div>
            <div class="post_scroll_content" id="post_detail_schedule">
                <h3 class="post_detail_subtitle">Lịch trình</h3>
                <div class="post_scroll_body">
					<?php
					// check if the repeater field has rows of data
					if ( have_rows( 'tour_schedule_detail' ) ):
						// loop through the rows of data
						while ( have_rows( 'tour_schedule_detail' ) ) : the_row();
							// display a sub field value
							?>
                            <div class="post_toggle">
                                <h4 class="post_toggle_header">
                                    <a class="post_toggle_title" href="javascript:void(0)" rel="nofollow" title="<?php the_sub_field( 'tour_date_label' ); ?>"><?php the_sub_field( 'tour_date_label' ); ?></a>
                                </h4>
                                <div class="post_toggle_body">
									<?php the_sub_field( 'tour_date_detail' ); ?>
                                </div>
                            </div>

						<?php
						endwhile;
					else :
						// no rows found
					endif;
					?>
                </div>
            </div>
            <div class="post_scroll_content" id="post_detail_map">
                <h3 class="post_detail_subtitle">Bản đồ</h3>
                <div class="post_scroll_body">
					<?php
					$image = get_field( 'map' );
					if ( ! empty( $image ) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
					<?php endif; ?>
                </div>
            </div>
            <div class="post_scroll_content" id="post_detail_picture">
                <h3 class="post_detail_subtitle">Ảnh</h3>
                <div class="post_scroll_body">
                    <div class="post_gallery_slide">
						<?php
						// check if the repeater field has rows of data
						if ( have_rows( 'gallery_slide' ) ):
							// loop through the rows of data
							while ( have_rows( 'gallery_slide' ) ) : the_row();
								$image = get_sub_field( 'gallery_slide_img' );
								// display a sub field value
								?>
                                <div class="post_gallery_item">
                                    <a href="" title="<?php echo $image['alt'] ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="post_gallery_img"/></a>
                                </div>
							<?php
							endwhile;
						else :
							// no rows found
						endif;
						?>
                    </div>
                </div>
            </div>
            <!--<div class="post_scroll_item id="post_detail_review">
                <h3 class="post_detail_subtitle">Review</h3>
                <div class="post_scroll_body">

                </div>
            </div>-->
            <div class="share_link">
                <h5 class="share_title">Chia sẻ với: </h5>
                <div class="socializer a sr-32px sr-opacity sr-icon-white sr-pad">
                    <span class="sr-facebook">
                        <a href="https://www.facebook.com/share.php?u=https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F&amp;t=Free%20social%20buttons%20sharebar%20generator%20-%20Aakash%20Web" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </span>
                    <span class="sr-googleplus">
                        <a href="https://plus.google.com/share?url=https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F" target="_blank" title="Google Plus">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </span>
                    <span class="sr-email">
                        <a href="mailto:?to=&amp;subject=Free%20social%20buttons%20sharebar%20generator%20-%20Aakash%20Web&amp;body=%20-%20https%3A%2F%2Fwww.aakashweb.com%2Fapps%2Fsocial-buttons-generator%2F" target="_blank" title="Email">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </span>
                    <span class="sr-rss">
                        <a href="" target="_blank" title="RSS">
                            <i class="fa fa-rss"></i>
                        </a>
                    </span>
                </div>
            </div>

            <div class="fb-comments" data-href="<?php echo esc_url( get_permalink() )?>" data-numposts="5"></div>
        </div><!-- .entry-content -->

        <footer class="post_detail_footer">
			<?php travel_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>

</article>
<!-- #post-<?php the_ID(); ?> -->
