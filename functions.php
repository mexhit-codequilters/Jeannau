<?php
/**
 * Theme setup and assets
 */

if ( ! defined( 'JEANNEAU_LITE_VERSION' ) ) {
    define( 'JEANNEAU_LITE_VERSION', '1.0.0' );
}

add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'jeanneau-lite-theme' ),
    ) );
});

add_action( 'wp_enqueue_scripts', function() {
    // Theme stylesheet
    wp_enqueue_style( 'jeanneau-lite-style', get_stylesheet_uri(), array(), JEANNEAU_LITE_VERSION );
    // No external CSS detected from uploaded files
    // UI layer
/* BEGIN: User build assets */
// Ensure jQuery is present for the vendor bundles
wp_enqueue_script( 'jquery' );

// Public path expected by the bundles is "/build/"
$build_uri = get_template_directory_uri() . '/build';

// CSS (load base/app first, then chunk styles)
if ( file_exists( get_template_directory() . '/build/app.d0b73c3c.css' ) ) {
    wp_enqueue_style( 'bundle-app-css', $build_uri . '/app.d0b73c3c.css', array(), null );
}
if ( file_exists( get_template_directory() . '/build/691.ff3cfb14.css' ) ) {
    wp_enqueue_style( 'bundle-691-css', $build_uri . '/691.ff3cfb14.css', array('bundle-app-css'), null );
}
if ( file_exists( get_template_directory() . '/build/268.be368f8d.css' ) ) {
    wp_enqueue_style( 'bundle-268-css', $build_uri . '/268.be368f8d.css', array('bundle-app-css'), null );
}

// JS (runtime first, then chunks, then app)
if ( file_exists( get_template_directory() . '/build/runtime.32cc791b.js' ) ) {
    wp_enqueue_script( 'bundle-runtime', $build_uri . '/runtime.32cc791b.js', array('jquery'), null, true );
}
if ( file_exists( get_template_directory() . '/build/268.9a434bd2.js' ) ) {
    wp_enqueue_script( 'bundle-268', $build_uri . '/268.9a434bd2.js', array('bundle-runtime','jquery'), null, true );
}
if ( file_exists( get_template_directory() . '/build/691.570663c4.js' ) ) {
    wp_enqueue_script( 'bundle-691', $build_uri . '/691.570663c4.js', array('bundle-runtime','jquery'), null, true );
}
if ( file_exists( get_template_directory() . '/build/732.a73f4830.js' ) ) {
    wp_enqueue_script( 'bundle-732', $build_uri . '/732.a73f4830.js', array('bundle-runtime','jquery'), null, true );
}
if ( file_exists( get_template_directory() . '/build/app.bab1e4dd.js' ) ) {
    wp_enqueue_script( 'bundle-app', $build_uri . '/app.bab1e4dd.js', array('bundle-runtime','jquery','bundle-268','bundle-691'), null, true );
}
/* END: User build assets */

wp_enqueue_style( 'jeanneau-lite-ui', get_template_directory_uri() . '/assets/css/ui.css', array('jeanneau-lite-style'), JEANNEAU_LITE_VERSION );
wp_enqueue_script( 'jeanneau-lite-ui', get_template_directory_uri() . '/assets/js/ui.js', array(), JEANNEAU_LITE_VERSION, true );

    // Small script to handle menu toggle
    wp_enqueue_script( 'jeanneau-lite-js', get_template_directory_uri() . '/theme.js', array(), JEANNEAU_LITE_VERSION, true );
});

/**
 * Helper to render the content from static HTML files.
 * We keep the <body> innerHTML only; header/footer are handled by WordPress.
 */
function jeanneau_lite_render_static( $slug ) {
    $file = get_template_directory() . '/static/' . $slug . '.html';
    if ( file_exists( $file ) ) {
        $html = file_get_contents( $file );
        // Print as-is. Consider sanitizing if mixing with user input.
        echo $html;
    } else {
        echo '<div class="container"><p>Static file not found: ' . esc_html( $slug ) . '</p></div>';
    }
}
add_action('after_switch_theme', function () {
    $slugs = [
        'about-us' => 'About us',
        'powerboats' => 'Powerboats',
        'sailboats' => 'Sailboats',
        'cap-camarat' => 'Cap Camarat',
        'db-yachts' => 'DB Yachts',
        'merry-fisher' => 'Merry Fisher',
        'merry-fisher-sport' => 'Merry Fisher Sport',
        'sun-odyssey' => 'Sun Odyssey',
        'jeanneau-yachts' => 'Jeanneau Yachts',
        'sun-fast' => 'Sun Fast',
    ];
    foreach ($slugs as $slug => $title) {
        if (!get_page_by_path($slug, OBJECT, 'page')) {
            wp_insert_post([
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ]);
        }
    }
});

\\<?php
// Handle Contact Us (Simple) form submit
add_action('admin_post_nopriv_submit_contact_simple', 'handle_contact_simple');
add_action('admin_post_submit_contact_simple', 'handle_contact_simple');

function handle_contact_simple() {
  if ( ! isset($_POST['contact_simple_nonce']) || ! wp_verify_nonce($_POST['contact_simple_nonce'], 'contact_simple_nonce') ) {
    wp_safe_redirect( add_query_arg('contact_status', 'nonce_fail', wp_get_referer() ?: home_url('/')) );
    exit;
  }

  $f = isset($_POST['model_contact']) ? (array) $_POST['model_contact'] : array();

  // Minimal sanitization
  $civility = sanitize_text_field($f['civility'] ?? '');
  $first    = sanitize_text_field($f['first_name'] ?? '');
  $last     = sanitize_text_field($f['last_name'] ?? '');
  $email    = sanitize_email($f['email'] ?? '');
  $phone    = sanitize_text_field($f['phone'] ?? '');
  $addr     = sanitize_text_field($f['address_street'] ?? '');
  $zip      = sanitize_text_field($f['address_code'] ?? '');
  $city     = sanitize_text_field($f['address_locality'] ?? '');
  $country  = sanitize_text_field($f['address_country'] ?? '');
  $state    = sanitize_text_field($f['address_state'] ?? '');
  $message  = wp_kses_post($f['message'] ?? '');
  $agencyId = sanitize_text_field($f['agency_id'] ?? '');
  $newsletter = !empty($f['receive_newsletter']) ? 1 : 0;

  // Example: email it to admin
  $to = get_option('admin_email');
  $subject = 'New Dealer Contact Request';
  $body = "Title: $civility\nName: $first $last\nEmail: $email\nPhone: $phone\nAddress: $addr, $city $zip, $state, $country\nAgency: $agencyId\nNewsletter: $newsletter\n\nMessage:\n$message";
  $headers = array('Content-Type: text/plain; charset=UTF-8');

  if ( is_email($to) ) {
    wp_mail($to, $subject, $body, $headers);
  }

  // Redirect back with success
  $redirect = wp_get_referer() ?: home_url('/');
  wp_safe_redirect( add_query_arg('contact_status', 'ok', $redirect) );
  exit;
}
