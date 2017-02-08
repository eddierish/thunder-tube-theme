<?

/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );

function ttt_register_menu() {
  register_nav_menu('primary-menu', __( 'Primary Menu') );
  register_nav_menu('secondary-menu', __( 'Secondary Menu') );
}
add_action('init', 'ttt_register_menu');

/*=============================
=            Load CSS            =
=============================*/
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/css/jumbo.css' );
    wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

/*=============================
=            Load JavaScript            =
=============================*/
function theme_js() {
  wp_enqueue_script( 'tether_js', get_template_directory_uri() . '/js/tether.min.js', '', '', true );
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

/*=============================
=            Google Fonts           =
=============================*/
function ttt_add_google_fonts() {
  wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'ttt_add_google_fonts' );

/*-------------------------------------
||
|| Widgets
||
-------------------------------------*/
function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));
}
function create_sidebar_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the hompage');
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the hompage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the hompage');

// create sidebar
create_sidebar_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar');
?>








