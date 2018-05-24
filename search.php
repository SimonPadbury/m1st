<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col sm8">
      <div id="content" role="main">
        <header class="mb-4 border-bottom">
          <h1><?php _e('Search Results for', 'm1st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
        </header>
        <?php get_template_part('loops/search-results'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>
