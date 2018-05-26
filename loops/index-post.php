<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

<article class="mb-5" role="article" id="post_<?php the_ID()?>" <?php post_class(); ?> >
  <header>
    <h2>
      <a href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h2>
    <p class="grey-text lighten-3">
      <i class="material-icons material-icons-inline">today</i>&nbsp;<?php m1st_post_date(); ?>&nbsp;|
      <i class="material-icons material-icons-inline">person</i>&nbsp; <?php _e('By ', 'm1st'); the_author_posts_link(); ?>&nbsp;|
      <i class="material-icons material-icons-inline">comment</i>&nbsp;<a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), '', 'm1st' ), number_format_i18n( get_comments_number() ) ); ?></a>
    </p>
  </header>
  <div>
    <?php the_post_thumbnail(); ?>

    <?php if ( has_excerpt( $post->ID ) ) {
  	  the_excerpt();
      ?><p><a href="<?php the_permalink(); ?>">
    	<?php _e( '&hellip; ' . __('Continue reading', 'm1st' ) . ' <i class="material-icons material-icons-inline">arrow_forward</i>', 'm1st' ) ?>
      </a></p>
  	<?php } else {
      the_content( __( '&hellip; ' . __('Continue reading', 'm1st' ) . ' <i class="material-icons material-icons-inline">arrow_forward</i>', 'm1st' ) );
	} ?>
  </div>
</article>
