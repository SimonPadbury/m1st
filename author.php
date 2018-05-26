<?php
$userInfo = get_userdata( get_query_var('author'));
$isAuthor = true;
if (
    !in_array('contributor', $userInfo -> roles) &&
    !in_array('administrator', $userInfo -> roles) &&
    !in_array('author', $userInfo -> roles) &&
    !in_array('editor', $userInfo -> roles)
) {
    $isAuthor = false;
    wp_redirect(esc_url( home_url() ) . '/404', 404);
}
?>
<?php get_header(); ?>

<main class="container">
  <div class="row">

    <div class="col s8">
      <div id="content" role="main">
        <header class="mb-4 border-bottom">
          <?php if ($isAuthor === true): ?>
          <h1>
            <?php _e('Posts by: ', 'm1st'); echo get_the_author_meta( 'display_name' ); ?>
          </h1>
          <?php endif; ?>
        </header>
        <?php if(have_posts()): ?>
          <?php get_template_part('loops/index-loop'); ?>
        <?php else: ?>
          <?php get_template_part('loops/index-none'); ?>
        <?php endif; ?>

      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
