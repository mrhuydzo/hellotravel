<div class="section_main" id="section_lastest_tour">
	<div class="section_header">
		<h2 class="section_title">Danh mục tour</h2>
	</div>
	<div class="section_body">
		<?php
            echo '<ul class="categories_tours">';
            $args_list = array(
                'taxonomy' => 'tour-categories',
                'hierarchical' => true,
                'title_li' => ''
            );
            echo wp_list_categories($args_list);
            echo '</ul>';
		?>

	</div>
</div>