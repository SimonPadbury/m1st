<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col s12">

        <?php if(is_active_sidebar('footer-widget-area')): ?>
        <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
          <?php dynamic_sidebar('footer-widget-area'); ?>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    &copy; <?php echo date('Y'); ?> <a class="grey-text text-lighten-4" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
