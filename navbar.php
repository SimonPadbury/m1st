<nav style="padding: 0 10px;">
  <div class="nav-wrapper">

    <a class="brand-logo" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>

    <?php
      wp_nav_menu( array(
        'menu'              => 'Navbar',
        'theme_location'    => 'navbar',
        'menu_class'        => 'right hide-on-med-and-down',
        'walker'            => new wp_materialize_navwalker()
      ) );
    ?>

    <ul class="hide-on-med-and-down right">               
      <li>
        <form class="input-field white-text" id="navbar-search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <i class="white-text material-icons prefix" style="margin-top: -4px;">search</i>
          <input class="red lighten-1 white-text" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_x('Search...', 'm1st'); ?> Search..." name="s" id="s">
        </form>
      </li>
    </ul>

  </div>
</nav>
