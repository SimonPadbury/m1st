<?php
/**!
 * Pagination for index, category, tag and author, pages
 */

if ( ! function_exists( 'm1st_pagination' ) ) {
	function m1st_pagination() {
		global $wp_query;
		$big = 999999999; // This needs to be an unlikely integer
		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => True,
			'prev_text' => __('<i class="material-icons">chevron_left</i>', 'm1st'),
			'next_text' => __('<i class="material-icons">chevron_right</i>', 'm1st'),
			'type' => 'list'
		) );
		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
    $paginate_links = str_replace( "<li>", "<li class='waves-effect'>", $paginate_links );
    $paginate_links = str_replace( "<li class='waves-effect'><span aria-current='page' class='page-numbers current'>", "<li class='active'><a class='page-link' href='#'>", $paginate_links );
		//$paginate_links = str_replace( "<a", "<a class='page-link' ", $paginate_links );

		$paginate_links = str_replace( "</span>", "</a>", $paginate_links );
		$paginate_links = preg_replace( "/\s*page-numbers/", "", $paginate_links );
		// Display the pagination if more than one page is found
		if ( $paginate_links ) {
			echo $paginate_links;
		}
	}
}
