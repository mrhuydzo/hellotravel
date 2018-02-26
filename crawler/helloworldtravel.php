<?php
$page = $_GET['page'] ? (int) $_GET['page'] : 1;
if(!$page){
	die('Page khong ton tai');
}
require_once('../wp-load.php');
require_once('simple_html_dom.php');
set_time_limit(0);
ob_start();
$configCrawler['url_source'] = 'http://helloworldtravel.vn';
$configCrawler['url'] = $page == 1 ? 'http://helloworldtravel.vn/index.php/tour-trong-nuoc/tay-nguyen' : 'http://helloworldtravel.vn/index.php/tour-trong-nuoc/tay-nguyen?start='.$page;
$html = str_get_html(get_curl($configCrawler['url']));
$html = $html->find('#system .grid-box article');

foreach($html as $k => $e){
	$tmp = $e->find('.title a',0);
	$tmpLink = (stripos($tmp->href,"http")===false) ? $configCrawler['url_source'].$tmp->href : $tmp->href;
	$title = trim(html_entity_decode($tmp->plaintext, ENT_NOQUOTES, "UTF-8"));
	echo '<h3>'.$title,'</h3>';
	echo $tmpLink,'<br>';
	$link_images = $e->find('.content img',0)->src;
	$link_images = (stripos($link_images,"http")===false) ? $configCrawler['url_source'].$link_images : $link_images;
	echo $link_images,'<br>';
	global $wpdb;
	
	$isExits = $wpdb->get_var("SELECT COUNT(ID) FROM ".$wpdb->prefix."posts WHERE post_title='".$title."'"); 
	
	if($isExits){
		echo 'Da ton tai';
		echo '<hr>';
		continue;
	}else{
		$subHTML = str_get_html(get_curl($tmpLink));
		$subHTML->find('.wk-gallery-showcasebox', 0)->outertext = '';
		foreach($subHTML->find('.content img') as $element){
			$element->src = (stripos($element->src,"http")===false) ? $configCrawler['url_source'].$element->src : $element->src;
		}
		$postItem['post_title'] = $title;
		$postItem['post_content'] = $subHTML->find('.content', 0)->innertext;
		if($postItem['post_title'] && $postItem['post_content'] && strlen($postItem['post_content']) > 100){
			$postItem['post_name'] = seoname($postItem['post_title']);
			$postItem['post_status'] = 'publish';
			$postItem['post_author'] = 1;
			$postItem['post_type'] = 'tours';//kieu portfolio
			$postItem['post_category'] =  array(36,24);
			$postItem['tags_input'] =  '';
			$postItem['post_thumbnail'] = $link_images;
			echo '<pre>';
			var_dump($postItem);
			
			$id = wp_insert_post($postItem);
			
			if($postItem['post_thumbnail']){
				$wp_upload_dir = wp_upload_dir();
				$baseimage = basename($link_images);
				if (!is_file($wp_upload_dir['path'].'/'.$baseimage)){
					$content_img = file_get_contents($link_images);
					if($content_img){
						file_put_contents($wp_upload_dir['path'].'/'.$baseimage, $content_img);
					}
				}
				
				$filetype = wp_check_filetype($baseimage, null );
				// Prepare an array of post data for the attachment.
				$attachment = array(
						'guid'           => $wp_upload_dir['url'].'/'.$baseimage, 
						'post_mime_type' => $filetype['type'],
						'post_title'     => preg_replace( '/\.[^.]+$/','',$baseimage),
						'post_content'   => '',
						'post_status'    => 'inherit'
				);

				// Insert the attachment.
				$attach_id = wp_insert_attachment($attachment,$wp_upload_dir['url'].'/'.$baseimage,$id );
				// Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
				require_once('../wp-admin/includes/image.php' );
				// Generate the metadata for the attachment, and update the database record.
				$attach_data = wp_generate_attachment_metadata($attach_id,$wp_upload_dir['url'].'/'.$baseimage);
				wp_update_attachment_metadata($attach_id,$attach_data);
				set_post_thumbnail($id,$attach_id);
				
				var_dump($attachment);
				var_dump($attach_id);
				var_dump($attach_data);
				var_dump($wp_upload_dir['path'].'/'.$baseimage);
				var_dump($wp_upload_dir['url'].'/'.$baseimage);
			}
			//die;
		}
		//unset($postItem,$tmpLink,$title,$subHTML);
	}
}
//die;
$page = $page-5;
if($page < 0){
	die('Chay xong');
}
?>
<script>
	window.location.href = "<?php echo 'http://dev.hellotravel.vn/crawler/helloworldtravel.php?page='.$page;?>";
</script>

