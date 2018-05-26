<?php
/**!
 * Enqueues
 */

if ( ! function_exists('m1st_enqueues') ) {
	function m1st_enqueues() {
		
		// Styles

		wp_register_style('materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css', false, '1.0.0-beta', null);
		wp_enqueue_style('materialize-css');

		wp_register_style('material-icons-css', get_template_directory_uri() . '/theme/css/material-icons.css');
		wp_enqueue_style('material-icons-css');

		wp_register_style('m1st-css', get_template_directory_uri() . '/theme/css/m1st.css');
		wp_enqueue_style('m1st-css');

		// Scripts

		wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		wp_register_script('materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js', false, '1.0.0-beta', true);
		wp_enqueue_script('materialize-js');

		wp_register_script('m1st-js', get_template_directory_uri() . '/theme/js/m1st.js', false, null, true);
		wp_enqueue_script('m1st-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'm1st_enqueues', 100);
