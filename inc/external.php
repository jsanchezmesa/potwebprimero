<?php

/* Get the first image from a post */
/* http://www.wprecipes.com/how-to-get-the-first-image-from-the-post-and-display-it/ */
function potwebprimero_catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];

	if(empty($first_img)) { //Defines a default image
		$first_img = "/images/default.jpg";
	}

	return $first_img;
}

/* Get the first video from a post */
/* http://wordpress.stackexchange.com/questions/175793/get-first-video-from-the-post-both-embed-and-video-shortcodes */
function potwebprimero_get_first_embed_media($post_id) {
	$post = get_post($post_id);
	$content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );

	$embeds = get_media_embedded_in_content( $content );

	if( !empty($embeds) ) {
		//check what is the first embed containg video tag, youtube or vimeo
		foreach( $embeds as $embed ) {
			if( strpos( $embed, 'video') || strpos( $embed, 'youtube') || strpos( $embed, 'vimeo') ) {
				return $embed;
			}
		}
	} else {
		// no video embedded found
		return false;
	}
}

/* Responsive video embeds (full-width) */
function potwebprimero_responsive_wrap_oembeds( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html);
	return '<div class="video-wrapper">'.$html.'</div>';
}
add_filter('embed_oembed_html', 'potwebprimero_responsive_wrap_oembeds');