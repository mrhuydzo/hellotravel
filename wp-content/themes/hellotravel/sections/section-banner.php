<div class="banner_slide">
    <div class="banner_slide_home">
		<?php
		// check if the repeater field has rows of data
		if( have_rows('slide_image_home') ):
			// loop through the rows of data
			while ( have_rows('slide_image_home') ) : the_row();
				$image = get_sub_field('slide_item_img');
				$link = get_sub_field('slide_link');
				//'<pre>'.var_dump($link);die.'</pre>'

				// display a sub field value
				?>
                <div class="banner_slide_item" style="background-image: url('<?php echo $image['url'] ?>');">
                    <!--<img src="<?php /*echo $image['url']; */?>" alt="<?php /*echo $image['alt'] */?>" class="banner_slide_img" />-->
                    <div class="container banner_slide_item_container">
                        <h2 class="banner_slide_title banner_slide_title-1"><?php the_sub_field('slide_title_1'); ?></h2>
                        <h3 class="banner_slide_title banner_slide_title-2"><?php the_sub_field('slide_title_2'); ?></h3>
                        <h3 class="banner_slide_title banner_slide_title-3"><?php the_sub_field('slide_title_3'); ?></h3>
	                    <?php if( $link ): ?>
		                    <?php $slideLink = $link; setup_postdata( $slideLink ); ?>
                            <a class="banner_slide_btn" href="<?php the_permalink(); ?>" title="<?php the_field('slide_title_2'); ?>">Chi tiết</a>
		                    <?php wp_reset_postdata(); ?>
	                    <?php endif; ?>
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