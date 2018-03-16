<div class="section_main" id="section_highlight_tour">
    <div class="section_header">
        <h2 class="section_title">
            <a href="" title="Các tour nổi bật">Các tour nổi bật</a>
        </h2>
    </div>
    <div class="section_body">
	    <?php
            // args
            $args = array(
                'posts_per_page'	=> 10,
                'post_type'		=> 'tours',
                'meta_query'    => array(
	                array(
		                'key' => 'tour_highlight', // name of custom field
		                'value' => 'Yes', // matches exactly "red"
		                'compare' => 'LIKE'
	                )
                )
            );
            //var_dump($args);die;
            // query
            $the_query = new WP_Query( $args );
        ?>
	    <?php if( $the_query->have_posts() ): ?>
            <div class="row">
	            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article class="col-sm-6 post_item" id="post_item_<?php the_id();?>">
                        <div class="post_item_inner">
                            <figure class="post_thumb">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post_thumb_link">
			                        <?php if ( has_post_thumbnail()){
				                        the_post_thumbnail('thumbnail');
			                        } else { ?>
                                        <img src="http://via.placeholder.com/200x200" alt="<?php the_title();?>" class="post_thumb_img" />
			                        <?php } ?>
                                </a>
                            </figure>
                            <div class="post_info">
                                <div class="post_top">
                                    <h3 class="post_title"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a></h3>
                                    <div class="row post_meta">
                                        <div class="col">
                                            <strong class="post_tour_place">
                                                <i class="far fa-clock"></i><?php the_field('tour_schedule') ?>
                                            </strong>
                                        </div>
                                        <div class="col">
                                            <strong class="post_tour_start">
                                                <i class="far fa-calendar"></i><?php the_field('tour_start') ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_body">
                                    <p class="post_summary"><?php echo word_count(get_the_excerpt(), '35').'...'; ?></p>
                                    <div class="row d-flex align-items-center">
                                        <div class="col">
                                             <span class="tour_price_old">
                                                <?php
                                                    $priceOld = get_field( 'tour_price_old' );
                                                    if(isset($priceOld) && !empty($priceOld)) {
	                                                    echo 'Chỉ từ: '.number_format( $priceOld, 0, "", "." ).' đ';
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                        <div class="col">
                                            <strong class="tour_price_new">
		                                        <?php
		                                            $priceNew = get_field('tour_price_new');
		                                            if(isset($priceNew) && !empty($priceNew)){
			                                            echo number_format($priceNew,0,"",".").' đ';
                                                    }
		                                        ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
	            <?php endwhile; ?>
            </div>
	    <?php endif; ?>

	    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    </div>
</div>