<?php get_header(); ?>

<main id="site-content" role="main" style="max-width: 900px; margin: 20px auto; padding: 0 20px;">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header" style="margin-bottom: 20px;">
          <h1 class="entry-title" style="font-size: 2rem; margin: 0;"><?php the_title(); ?></h1>
        </header>

        <div class="entry-content" style="font-size: 1rem; line-height: 1.6;">
          <?php the_content(); ?>
        </div>
      </article>
    <?php
    endwhile;
  else :
    echo '<p>' . __( 'Sorry, no pages found.', 'locsify' ) . '</p>';
  endif;
  ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
