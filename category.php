<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col sm8">
      <div id="content" role="main">
        <header class="mb-4 border-bottom">
          <h1>
            <?php _e('Category: ', 'm1st'); echo single_cat_title(); ?>
          </h1>
        </header>
        <?php get_template_part('loops/index-loop'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>