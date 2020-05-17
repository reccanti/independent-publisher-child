<?php
/**
 * Custom template tags for this theme.
 *
 * @package Independent_Publisher_Child
 */

/**
 * OVERRIDING Indpendent Publisher 2's post-thumbnail function. We don't want to dislay the header images
 * on the list page because it looks kinda weird.
 */
if ( ! function_exists( 'independent_publisher_child_post_thumbnail' ) ) :
/**
 * Displays the featured image of the post.
 */
function independent_publisher_child_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! independent_publisher_2_has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) {
		the_post_thumbnail( 'independent-publisher-2-full-width' );
	} 
}
endif;

?>