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
		                //'compare' => 'LIKE'
	                )
                )
            );
            //var_dump($args);die;
            // query
            $the_query = new WP_Query( $args );
        ?>
	    <?php if( $the_query->have_posts() ): ?>
            <ul>
			    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
						    <?php the_title(); ?>
                        </a>
                    </li>
			    <?php endwhile; ?>
            </ul>
	    <?php endif; ?>

	    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    </div>
</div>