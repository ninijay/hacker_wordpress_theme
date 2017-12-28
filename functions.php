<?php // Register custom navigation walker
        require_once('wp-bootstrap-navwalker.php');
    ?>

<?php
    /* Theme setup */
    add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
        
        function wpt_register_reset() {
            wp_register_style( 'reset', get_template_directory_uri() . '/_reset.css' );
            wp_enqueue_style( 'reset' );
        }
        add_action( 'wp_enqueue_scripts', 'wpt_register_reset' );

        function wpt_register_js() {
            wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
            wp_enqueue_script('jquery.bootstrap.min');
        }
        add_action( 'init', 'wpt_register_js' );
        function wpt_register_css() {
            wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
            wp_enqueue_style( 'bootstrap.min' );
        }
        add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
        function wpt_register_style_css() {
            wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
            wp_enqueue_style( 'style' );
        }
        add_action( 'wp_enqueue_scripts', 'wpt_register_style_css' );
        function get_tuned_title(){
            $title = get_bloginfo('title');
            $lastchar = '<span class="vim-caret">'.substr($title, -1).'</span>';
            $newtitle = substr($title, 0, -1).$lastchar;
            return $newtitle;
        }
        add_theme_support( 'post-thumbnails' );
        function modify_read_more_link() {
            return '[...]<br /><br />  <a href="' . get_permalink() . '" class="btn btn-dark">Read More</a>';
        }
        add_filter( 'the_content_more_link', 'modify_read_more_link' );
        function arphabet_widgets_init() {

            register_sidebar( array(
                'name'          => 'Home right sidebar',
                'id'            => 'home_right_1',
                'before_widget' => '<div>',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="text-success text-mono">',
                'after_title'   => '</h5>',
            ) );
        
        }
        add_action( 'widgets_init', 'arphabet_widgets_init' );
        function footer_widgets_init() {

            register_sidebar( array(
                'name'          => 'Footer',
                'id'            => 'footer-copyright-text',
                'before_widget' => '<div>',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="text-success text-mono">',
                'after_title'   => '</h5>',
            ) );
        
        }
        add_action( 'widgets_init', 'footer_widgets_init' );
        add_theme_support( 'jetpack-social-menu' );
?>
