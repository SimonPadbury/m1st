<?php get_header(); ?>

<main class="container">
  <div class="row">

    <div class="col s8">
      <div id="content" role="main">
        <div class="alert alert-warning">
          <h1>
            <i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'm1st'); ?> 404
          </h1>
          <p><?php _e('The page you were looking for does not exist.', 'm1st'); ?></p>
        </div>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
