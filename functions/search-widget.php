<?php
/**!
 * Search form in a widget
 */

if ( ! function_exists('m1st_search_form') ) {

  function m1st_search_form( $form ) {
    $form = '<form role="search" method="get" id="widget-search-form" action="' . home_url('/') . '" >
      <input type="text" value="' . get_search_query() . '" placeholder="' . esc_attr_x('Search', 'm1st') . '..." name="s" id="s" />
      <button type="submit" id="searchsubmit" value="'. esc_attr_x('Search', 'm1st') .'" class="waves-effect waves-light btn"><i class="material-icons">search</i></button>
    </form>';
    return $form;
  }
}
add_filter( 'get_search_form', 'm1st_search_form' );