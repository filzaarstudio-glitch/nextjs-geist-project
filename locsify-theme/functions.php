<?php
function locsify_theme_setup() {
    // Add support for title tag
    add_theme_support( 'title-tag' );

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register primary menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'locsify' ),
    ) );
}
add_action( 'after_setup_theme', 'locsify_theme_setup' );

function locsify_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'locsify-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'locsify_theme_scripts' );

// Custom search form markup
function locsify_search_form( $form ) {
    $form = '
    <form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '">
        <label>
            <span class="screen-reader-text">' . __( 'Search for:', 'locsify' ) . '</span>
            <input type="search" class="search-field" placeholder="' . esc_attr__( 'Search …', 'locsify' ) . '" value="' . get_search_query() . '" name="s" />
        </label>
        <button type="submit" class="search-submit">' . esc_html__( 'Search', 'locsify' ) . '</button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'locsify_search_form' );
?>
