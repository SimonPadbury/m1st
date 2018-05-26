<a href="#" data-target="slide-out" class="sidenav-trigger btn-floating waves-effect waves-light red lighten-2" style="margin: 12px;"><i class="material-icons">menu</i></a>

<nav id="slide-out" class="sidenav">

    <?php
        wp_nav_menu( array(
            'menu'              => 'Sidenav',
            'theme_location'    => 'sidenav',
            'menu_class'        => '',
            'walker'            => ''
        ) );
    ?>

    <?php dynamic_sidebar('sidenav-widget-area'); ?>

</nav>

