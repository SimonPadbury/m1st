<?php dynamic_sidebar('fab-widget-area'); ?>

<footer class="page-footer" id="footer" role="navigation">
  <div class="container">
    <div class="row">

      <?php if(is_active_sidebar('footer-1-widget-area')): ?>
        <?php dynamic_sidebar('footer-1-widget-area'); ?>
      <?php endif; ?>

      <?php if(is_active_sidebar('footer-2-widget-area')): ?>
        <?php dynamic_sidebar('footer-2-widget-area'); ?>
      <?php endif; ?>

      <?php if(is_active_sidebar('footer-3-widget-area')): ?>
        <?php dynamic_sidebar('footer-3-widget-area'); ?>
      <?php endif; ?>

    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center-align">
    &copy; <?php echo date('Y'); ?> <a class="grey-text text-lighten-4" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
