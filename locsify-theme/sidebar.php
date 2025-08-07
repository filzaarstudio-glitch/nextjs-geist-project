<aside id="secondary" class="widget-area" role="complementary" style="padding: 20px; background: #f5f5f5; border: 1px solid #ddd; border-radius: 6px; max-width: 300px;">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <?php else : ?>
    <section class="widget">
      <h2 class="widget-title"><?php _e( 'No Widgets Added', 'locsify' ); ?></h2>
      <p><?php _e( 'Add widgets to the sidebar from the WordPress admin.', 'locsify' ); ?></p>
    </section>
  <?php endif; ?>
</aside>
