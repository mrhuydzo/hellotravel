<div class="section_main" id="section_travel_news">
    <div class="section_header">
        <h2 class="section_title">
            <a href="" title="Tin du lịch">Tin du lịch</a>
        </h2>
    </div>
    <div class="section_body">
        <ul class="sidebar_lst" id="lst_travel_news">
            <?php
                $args = array(
	                'cat' => 3,
                    'posts_per_page'    => 5,
                    'orderby'    => 'rand'
                );
                $the_query = new WP_Query( $args );
                //var_dump( $the_query );
            ?>
	        <?php if ($the_query -> have_posts()){ ?>
		        <?php while ($the_query -> have_posts()){ $the_query -> the_post(); ?>
                    <li class="sidebar_lst_item">
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
                        </div>
                    </li>
		        <?php } ?>
	        <?php }else{ ?>
		        <?php get_template_part('content', 'none'); ?>
	        <?php } ?>
        </ul>
    </div>
</div>