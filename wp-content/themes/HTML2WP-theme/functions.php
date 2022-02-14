  <?php 
        // Adding customizer file

      include( get_stylesheet_directory() . '/includes/customizer.php' );

      function load_stylesheets(){

        wp_register_style('mobirise2', get_template_directory_uri().'/assets/web/assets/mobirise-icons2/mobirise2.css', array(), '', 'all');
        wp_enqueue_style('mobirise2');


        wp_register_style('mobirise', get_template_directory_uri().'/assets/web/assets/mobirise-icons/mobirise-icons.css', array(), '', 'all');
        wp_enqueue_style('mobirise');

        wp_register_style('tether', get_template_directory_uri().'/assets/tether/tether.min.css', array(), '', 'all');
        wp_enqueue_style('tether');

        wp_register_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), '', 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('bootstrap-grid', get_template_directory_uri().'/assets/bootstrap/css/bootstrap-grid.min.css', array(), '', 'all');
        wp_enqueue_style('bootstrap-grid');

        wp_register_style('bootstrap-reboot', get_template_directory_uri().'/assets/bootstrap/css/bootstrap-reboot.min.css', array(), '', 'all');
        wp_enqueue_style('bootstrap-reboot');

        wp_register_style('stylesheet', get_template_directory_uri().'/assets/dropdown/css/style.css', array(), '', 'all');
        wp_enqueue_style('stylesheet');

        wp_register_style('socicon-stylesheet', get_template_directory_uri().'/assets/socicon/css/styles.css', array(), '', 'all');
        wp_enqueue_style('socicon-stylesheet');

        wp_register_style('jquery.formstyler', get_template_directory_uri().'/assets/formstyler/jquery.formstyler.css', array(), '', 'all');
        wp_enqueue_style('jquery.formstyler');

        wp_register_style('jquery.formstyler.theme', get_template_directory_uri().'/assets/formstyler/jquery.formstyler.theme.css', array(), '', 'all');
        wp_enqueue_style('jquery.formstyler.theme');

        wp_register_style('jquery-datetimepicker', get_template_directory_uri().'/assets/datepicker/jquery.datetimepicker.min.css', array(), '', 'all');
        wp_enqueue_style('jquery-datetimepicker');

        wp_register_style('stylesheettheme', get_template_directory_uri().'/assets/theme/css/style.css', array(), '', 'all');
        wp_enqueue_style('stylesheettheme');

        wp_register_style('recaptcha', get_template_directory_uri().'/assets/formoid-css/recaptcha.css', array(), '', 'all');
        wp_enqueue_style('recaptcha');

        wp_register_style('mbr-additional', get_template_directory_uri().'/assets/mobirise/css/mbr-additional.css', array(), '1', 'all');
        wp_enqueue_style('mbr-additional');
        
        wp_register_style('custom', get_template_directory_uri().'/custom.css', array(), 1, 'all');
        wp_enqueue_style('custom');

      }
      add_action('wp_enqueue_scripts', 'load_stylesheets');


      // Enqueue js

    function load_javacript(){

    wp_register_script( 'jQuery', get_template_directory_uri() . '/assets/web/assets/jquery/jquery.min.js', array(), 1 , 1, 1 );
    wp_enqueue_script('jQuery');

    wp_register_script( 'popper', get_template_directory_uri() . '/assets/popper/popper.min.js', array(), 1 , 1, 1 );
    wp_enqueue_script('popper');

    wp_register_script( 'tether', get_template_directory_uri() . '/assets/tether/tether.min.js', array(), 1 , 1, 1 );
    wp_enqueue_script('tether');


    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jQuery'), '', true );
    wp_enqueue_script('bootstrap');

    wp_register_script( 'nav-dropdown', get_template_directory_uri() . '/assets/dropdown/js/nav-dropdown.js', array(), 1 , 1, 1 );
    wp_enqueue_script('nav-dropdown');

     wp_register_script( 'navbar-dropdown', get_template_directory_uri() . '/assets/dropdown/js/navbar-dropdown.js', array(), 1 , 1, 1 );
    wp_enqueue_script('navbar-dropdown');

     wp_register_script( 'jquery-touch-swipe', get_template_directory_uri() . '/assets/touchswipe/jquery.touch-swipe.min.js', array(), 1 , 1, 1 );
    wp_enqueue_script('jquery-touch-swipe');

     wp_register_script( 'japarallax', get_template_directory_uri() . '/assets/parallax/jarallax.min.js', array(), 1 , 1, 1 );
    wp_enqueue_script('japarallax');

     wp_register_script( 'vimeo_player', get_template_directory_uri() . '/assets/playervimeo/vimeo_player.js', array(), 1 , 1, 1 );
    wp_enqueue_script('vimeo_player');

    wp_register_script( 'carousel-swipe', get_template_directory_uri() . '/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js', array(), 1 , 1, 1 );
    wp_enqueue_script('carousel-swipe');


    wp_register_script( 'testimonials-slider', get_template_directory_uri() . '/assets/mbr-testimonials-slider/mbr-testimonials-slider.js', array(), 1 , 1, 1 );
    wp_enqueue_script('testimonials-slider');


    wp_register_script( 'jquery-formstyler', get_template_directory_uri() . '/assets/formstyler/jquery.formstyler.js', array(), 1 , 1, 1 );
    wp_enqueue_script('jquery-formstyler');

    wp_register_script( 'datetimepicker', get_template_directory_uri() . '/assets/datepicker/jquery.datetimepicker.full.js', array(), 1 , 1, 1 );
    wp_enqueue_script('datetimepicker');

     wp_register_script( 'smooth-scroll', get_template_directory_uri() . '/assets/smoothscroll/smooth-scroll.js', array(), 1 , 1, 1 );
    wp_enqueue_script('smooth-scroll');

    wp_register_script( 'formoid', get_template_directory_uri() . '/assets/formoid/formoid.min.js', array(), 1 , 1, 1 );
    wp_enqueue_script('formoid');


    }

    add_action('wp_enqueue_scripts', 'load_javacript');


    // Add menu

    add_theme_support('menus');

    function register_theme_menus(){
    register_nav_menus(
      array(
        'top-menu' => __('Top Menu'),
        'footer_menu' => __('Footer Menu')
      )
    );
    }
    
    add_action('init', 'register_theme_menus');

   // Add classes to the menu items
    function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
    
      // Add class to the menu item link
    function add_anchor_class($attr, $item, $args){

      if(isset($args->a_class)){

          $attr['class'] = $args->a_class;
      }
      return $attr;
    }
    add_filter('nav_menu_link_attributes', 'add_anchor_class',10,3);
    // Logo

    add_theme_support( 'custom-logo' );
/*
    function generate_options_css() {
    $ss_dir = get_stylesheet_directory();
    ob_start(); // Capture all output into buffer
    require($ss_dir . '/include/custom-styles.php'); // Grab the custom-style.php file
    $css = ob_get_clean(); // Store output in a variable, then flush the buffer
    file_put_contents($ss_dir . '/layouts/custom-styles.css', $css, LOCK_EX); // Save it as a css file
}
add_action( 'acf/save_post', 'generate_options_css', 20 ); //Parse the output and write the CSS file on post save (thanks Esmail Ebrahimi)

wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/layouts/custom-styles.css' );
*/


// Add image support
add_theme_support('post-thumbnails');


//  custom post type function
function create_posttype() {
 
    register_post_type( 'food-menu',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Food-menu' ),
                'singular_name' => __( 'food-menu' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'food-menus'),
            'show_in_rest' => true,
            'taxonomies'          => array( 'category' ),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function create_post_type() {
  $args = array(
    'labels' => array(
      'name' => __('Testimonials'),
      'singular_name' => __('Testimonials'),
      'all_items' => __('All Testimonials'),
      'add_new_item' => __('Add New Testimonial'),
      'edit_item' => __('Edit Testimonial'),
      'view_item' => __('View Testimonial')
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'testimonials'),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'capability_type' => 'page',
    'supports' => array('title', 'editor', 'thumbnail'),
    'exclude_from_search' => true,
    'menu_position' => 80,
    'has_archive' => true,
    'menu_icon' => 'dashicons-format-status'
    );
  register_post_type('testimonials', $args);
}
add_action( 'init', 'create_post_type');


// Create footer widget area

register_sidebar( array(
'name' => 'Footer Widget 1',
'id' => 'footer-widget-1',
'description' => 'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="widget item-content %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title mbr-section-title pb-2 mbr-bold mbr-fonts-style display-7">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Widget 2',
'id' => 'footer-widget-2',
'description' => 'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="widget item-content %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title mbr-section-title pb-2 mbr-bold mbr-fonts-style display-7">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Widget 3',
'id' => 'footer-widget-3',
'description' => 'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="widget item-content %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title mbr-section-title pb-2 mbr-bold mbr-fonts-style display-7">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Widget 4',
'id' => 'footer-widget-4',
'description' => 'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="widget item-content %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title mbr-section-title pb-2 mbr-bold mbr-fonts-style display-7">',
'after_title' => '</h3>',
) );



// Create custom widget
// Creating the widget 
class wpb_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'wpb_widget', 
  
// Widget name will appear in UI
__('Phone Widget', 'wpb_widget_domain'), 
  
// Widget description
array( 'description' => __( 'Phone widget', 'wpb_widget_domain' ), ) 
);
}
  
// Creating widget front-end
  
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
  
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
  
// This is where you run the code and display the output
//echo __( 'Hello, World!', 'wpb_widget_domain' );
echo $args['after_widget'];
}
          
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
 
// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );


function social_media_icons( $contactmethods ) {
    // Add social media
    $contactmethods['twitter'] = 'Twitter';
    $contactmethods['facebook'] = 'Facebook';
    $contactmethods['ytube'] = 'Youtube';
    $contactmethods['vimeo'] = 'Vimeo';

    return $contactmethods;
}
add_filter('user_contactmethods','social_media_icons',10,1);

?>