<?php
/**!
 * Widgets
 */

function m1st_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'm1st' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'm1st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );

  /*
  Footer
  */

  register_sidebar( array(
    'name'            => __( 'Footer', 'm1st' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'm1st' ),
    'before_widget'   => '<div class="%1$s %2$s col s4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h5>',
    'after_title'     => '</h5>',
  ) );

}
add_action( 'widgets_init', 'm1st_widgets_init' );
