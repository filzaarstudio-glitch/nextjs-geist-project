<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
  <style>
    /* Basic header styles */
    .site-header {
      background: #fff;
      border-bottom: 1px solid #ddd;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
    }
    .site-logo {
      font-weight: bold;
      font-size: 1.5rem;
      color: #0073e6;
      text-transform: uppercase;
      letter-spacing: 2px;
      cursor: pointer;
    }
    .site-location {
      margin-left: 15px;
      font-size: 0.9rem;
      color: #555;
    }
    .site-search {
      flex-grow: 1;
      margin: 0 20px;
    }
    .site-search input[type="search"] {
      width: 100%;
      padding: 6px 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }
    .open-app-button {
      background-color: #ffcc00;
      border: none;
      padding: 10px 18px;
      font-weight: 600;
      border-radius: 4px;
      cursor: pointer;
      color: #222;
      text-transform: uppercase;
      transition: background-color 0.3s ease;
    }
    .open-app-button:hover {
      background-color: #e6b800;
    }
    nav.site-navigation {
      margin-left: 20px;
    }
    nav.site-navigation ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 15px;
    }
    nav.site-navigation ul li a {
      color: #222;
      font-weight: 600;
      text-decoration: none;
      font-size: 0.95rem;
    }
    nav.site-navigation ul li a:hover {
      color: #0073e6;
    }
  </style>
</head>
<body <?php body_class(); ?>>
  <header class="site-header" role="banner">
    <div class="site-branding" style="display: flex; align-items: center;">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">LOCSIFY</a>
      <div class="site-location">Mumbai, Maharashtra</div>
    </div>

    <div class="site-search">
      <?php get_search_form(); ?>
    </div>

    <nav class="site-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'locsify' ); ?>">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'primary-menu',
          'container'      => false,
          'fallback_cb'    => false,
        ) );
      ?>
    </nav>

    <button class="open-app-button" onclick="window.location.href='#'">Open APP</button>
  </header>
</body>
</html>
