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
        function get_tuned_title(){
            $title = get_bloginfo('title');
            $lastchar = '<span class="vim-caret">'.substr($title, -1).'</span>';
            $newtitle = substr($title, 0, -1).$lastchar;
            return $newtitle;
        }
?>
