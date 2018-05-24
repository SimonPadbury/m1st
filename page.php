<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col sm8">
      <div id="content" role="main">
        <?php get_template_part('loops/page-content'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>
