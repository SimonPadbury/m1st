<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col s8">
      <div id="content" role="main">
        <?php get_template_part('loops/index-loop'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>
