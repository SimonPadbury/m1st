<?php
/**!
 * Widgets
 */

function m1st_widgets_init() {

  // Sidenav (one widget area)
  register_sidebar( array(
    'name'            => __( 'Sidenav', 'm1st' ),
    'id'              => 'sidenav-widget-area',
    'description'     => __( 'The sidenav widget area', 'm1st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h5>',
    'after_title'     => '</h5>',
  ) );

  // Sidebar (one widget area)

  register_sidebar( array(
    'name'            => __( 'Sidebar', 'm1st' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'm1st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h5>',
    'after_title'     => '</h5>',
  ) );

  // Floating Action Button (FAB) (one widget area)

  register_sidebar( array(
    'name'            => __( 'FAB', 'm1st' ),
    'id'              => 'fab-widget-area',
    'description'     => __( 'The Floating Action Button widget area', 'm1st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '',
    'after_title'     => '',
  ) );

  // Footer (three widget areas)

  register_sidebar( array(
    'name'            => __( 'Footer 1', 'm1st' ),
    'id'              => 'footer-1-widget-area',
    'description'     => __( 'The footer 1 widget area', 'm1st' ),
    'before_widget'   => '<div class="%1$s %2$s col s4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h5>',
    'after_title'     => '</h5>',
  ) );

  register_sidebar( array(
    'name'            => __( 'Footer 2', 'm1st' ),
    'id'              => 'footer-2-widget-area',
    'description'     => __( 'The footer 2 widget area', 'm1st' ),
    'before_widget'   => '<div class="%1$s %2$s col s4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h5>',
    'after_title'     => '</h5>',
  ) );

  register_sidebar( array(
    'name'            => __( 'Footer 3', 'm1st' ),
    'id'              => 'footer-3-widget-area',
    'description'     => __( 'The footer 3 widget area', 'm1st' ),
    'before_widget'   => '<div class="%1$s %2$s col s4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h5>',
    'after_title'     => '</h5>',
  ) );

}
add_action( 'widgets_init', 'm1st_widgets_init' );
