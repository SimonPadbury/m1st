<?php
/*
The Single Post
===============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="mb-4">
      <h1>
        <?php the_title()?>
      </h1>
      <div class="header-meta text-muted">
        <?php
          _e('By ', 'm1st');
          the_author_posts_link();
          _e(' on ', 'm1st');
          m1st_post_date();
        ?>
      </div>
    </header>
    <main>
      <?php
        the_post_thumbnail();
        the_content();
        wp_link_pages();
      ?>
    </main>
    <footer class="mt-5 border-top pt-3">
      <p>
        <?php _e('Category: ', 'm1st'); the_category(', ') ?> | <?php if (has_tag()) { the_tags('Tags: ', ', '); ?> | <?php } _e('Comments', 'm1st'); ?>: <?php printf( number_format_i18n( get_comments_number() ) ); ?>
      </p>
      <div class="author-bio media border-top pt-3">
        <?php m1st_author_avatar(); ?>
        <div class="media-body ml-3">
          <p class="h4 author-name"><?php the_author_posts_link(); ?></p>
          <p class="author-description"><?php m1st_author_description(); ?></p>
          <p class="author-other-posts mb-0 border-top pt-3"><?php _e('Other posts by ', 'm1st'); the_author_posts_link(); ?></p>
        </div>
      </div><!-- /.author-bio -->
    </footer>
  </article>
<?php
    if ( comments_open() || get_comments_number() ) :
      //comments_template();
      comments_template('/loops/single-post-comments.php');
		endif;
  endwhile; else:
    wp_redirect(esc_url( home_url() ) . '/404', 404);
    exit;
  endif;
?>
<div class="row mt-5 border-top pt-3">
  <div class="col">
    <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> Previous post: '.'%title'); ?>
  </div>
  <div class="col text-right">
    <?php next_post_link('%link', 'Next post: '.'%title' . ' <i class="fas fa-fw fa-arrow-right"></i>'); ?>
  </div>
</div>
