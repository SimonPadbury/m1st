<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true);
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav>
  <div class="nav-wrapper">

    <a class="brand-logo" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>

    <?php
      wp_nav_menu( array(
        'theme_location'  => 'navbar',
        'container'       => false,
        'menu_class'      => '',
        'fallback_cb'     => '__return_false',
        'items_wrap'      => '<ul id="nav-mobile %1$s" class="right hide-on-med-and-down %2$s">%3$s</ul>',
        'depth'           => 2,
        'walker'          => new m1st_walker_nav_menu()
      ) );
    ?>

    <?php /* <form class="form-inline ml-auto pt-2 pt-md-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input class="form-control mr-sm-1" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
      <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'm1st') ?>" class="btn btn-outline-secondary my-2 my-sm-0">
        <i class="fas fa-search"></i>
      </button>
    </form> */ ?>

  </div>
</nav>
