<?php get_header(); ?>

<main class="container">
  <div class="row">

    <div class="col s8">
      <div id="content" role="main">
        <header class="mb-4 border-bottom">
          <h1><?php _e('Search Results for', 'm1st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
        </header>
        <?php get_template_part('loops/search-results'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
