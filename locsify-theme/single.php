<?php get_header(); ?>

<main id="site-content" role="main" style="max-width: 900px; margin: 20px auto; padding: 0 20px;">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header" style="margin-bottom: 20px;">
          <h1 class="entry-title" style="font-size: 2rem; margin: 0;"><?php the_title(); ?></h1>
          <div class="entry-meta" style="color: #777; font-size: 0.9rem; margin-top: 5px;">
            <?php echo get_the_date(); ?> by <?php the_author(); ?>
          </div>
        </header>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumbnail" style="margin-bottom: 20px;">
            <?php the_post_thumbnail('large', ['style' => 'width: 100%; height: auto; border-radius: 8px;']); ?>
          </div>
        <?php endif; ?>

        <div class="entry-content" style="font-size: 1rem; line-height: 1.6;">
          <?php the_content(); ?>
        </div>
      </article>

      <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile;
  else :
    echo '<p>' . __( 'Sorry, no posts matched your criteria.', 'locsify' ) . '</p>';
  endif;
  ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
