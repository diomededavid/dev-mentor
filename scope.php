<?php
/**
 * Scope Example
 * User: daviddiomede
 * Date: 5/4/18
 * Time: 10:49 AM
 */

/*//Scopes
global $wpdb;

//the use tells us what we want to use from the scope
$blog_ids = array_filter( $blog_ids, function( $blog_id ) use ( $inactive_ids ) {
			return ! in_array( $blog_id, $inactive_ids );
		} );


/**
	 * Guts of the main render function, includes all templates allows everything inside the required files is accessible
	 *
	 * @param $post_id
	 */
	public function fs_app_render_post( $post_id ) {
		global $fs_app_post, $post;
		$fs_app_post = get_post( $post_id );
		if ( ! $fs_app_post ) {
			return;
		}
		setup_postdata( $fs_app_post );
		require_once( trailingslashit( __DIR__ ) . 'templates/globals.php' );
		require_once( trailingslashit( __DIR__ ) . 'templates/header.php' );
		require_once( trailingslashit( __DIR__ ) . 'templates/body.php' );
		require_once( trailingslashit( __DIR__ ) . 'templates/footer.php' );
	}*/
