<?php get_header(); ?>

<main id="site-content" role="main" style="padding: 20px; max-width: 1200px; margin: 0 auto;">

  <header class="archive-header" style="margin-bottom: 30px;">
    <h1 class="archive-title" style="font-size: 2rem; margin: 0;">
      <?php
        if ( is_category() ) {
          single_cat_title();
        } elseif ( is_tag() ) {
          single_tag_title();
        } elseif ( is_author() ) {
          echo 'Author: ' . get_the_author();
        } elseif ( is_day() ) {
          echo 'Day: ' . get_the_date();
        } elseif ( is_month() ) {
          echo 'Month: ' . get_the_date( 'F Y' );
        } elseif ( is_year() ) {
          echo 'Year: ' . get_the_date( 'Y' );
        } else {
          _e( 'Archives', 'locsify' );
        }
      ?>
    </h1>
  </header>

  <?php if ( have_posts() ) : ?>
    <div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fit,minmax(280px,1fr)); gap: 20px;">
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?> style="border: 1px solid #ddd; padding: 15px; border-radius: 8px;">
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" style="display: block; margin-bottom: 10px;">
              <?php the_post_thumbnail('medium', ['style' => 'width: 100%; height: auto; border-radius: 6px;']); ?>
            </a>
          <?php endif; ?>
          <h2 style="font-size: 1.25rem; margin: 0 0 10px;">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div class="excerpt" style="font-size: 0.9rem; color: #555;">
            <?php the_excerpt(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>

    <div class="pagination" style="margin-top: 30px; text-align: center;">
      <?php
        the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => __('« Previous', 'locsify'),
          'next_text' => __('Next »', 'locsify'),
        ) );
      ?>
    </div>

  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'locsify' ); ?></p>
  <?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
