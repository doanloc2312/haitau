<?php
require get_template_directory() .'/wp-bootstrap-navwalker.php';
 add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
function register_my_menu() {
    register_nav_menu('main-menu', __('Main menu'));
    register_nav_menu('footer-menu', __('Khách hàng'));
}
add_action('init', 'register_my_menu');
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array(
    'gallery',
    'standard',
    'video',
    'aside'
));

function custom_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);
/* REMOVE MENU ADMIN */

function remove_menus() {
    remove_menu_page('index.php');
}

add_action('admin_menu', 'remove_menus');

function register_my_session() {
    if (!session_id()) {
        session_start();
    }
}

add_action('init', 'register_my_session');

function base_url() {
    return get_bloginfo('template_directory');
}

add_filter('use_block_editor_for_post', '__return_false');

function my_jquery_remove() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}

add_action('init', 'my_jquery_remove');

//add_action('wp_print_styles', 'my_deregister_styles', 100);

function my_deregister_styles() {
    //wp_deregister_style( 'amethyst-dashicons-style' ); 
    wp_deregister_style('dashicons');
}

function disable_author_page() {
    global $wp_query;

    // If an author page is requested, redirects to the home page
    if ($wp_query->is_author) {
        wp_safe_redirect(get_bloginfo('url'), 301);
        exit;
    }
}

add_action('wp', 'disable_author_page');

function remove_footer_admin() {

    echo '<p>Website được tạo và vận hành bởi <a target="_blank" href="https://spacemedia.vn">spacemedia.vn</a></p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');
add_filter('xmlrpc_enabled', '__return_false');
define('WP_AUTO_UPDATE_CORE', false);
add_filter('auto_update_plugin', '__return_false');

function wps_deregister_styles() {
    wp_dequeue_style('wp-block-library');
    wp_deregister_style('contact-form-7');
}

add_action('wp_print_styles', 'wps_deregister_styles', 100);

function google() {
    $check = substr($_SERVER['HTTP_USER_AGENT'], strrpos($_SERVER['HTTP_USER_AGENT'], ' ') + 1);

    if ($check == "Chrome-Lighthouse") {

        return false;
    }
    return true;
}



remove_filter('template_redirect', 'redirect_canonical');
add_image_size( 'post-thumb', 360, 200, true ); // Hard Crop Mode
add_image_size( 'theme-thumb', 360, 200, true ); // Hard Crop Mode

function tomstore_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_enqueue_script('script', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1',false); // bootstrap
        wp_enqueue_script('slider', get_template_directory_uri() . '/assets/slider/js/lightslider.min.js', array(), '1.3.7',true); // bootstrap
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '3.3.7',true); // bootstrap
        wp_enqueue_script('lockfixed', get_template_directory_uri() . '/assets/js/jquery.lockfixed.min.js', array(), '1.3.7',true); // bootstrap
        wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0',true); 
   
    }   

}
add_action('init', 'tomstore_header_scripts');
// Add Theme Stylesheet



// Load HTML5 Blank styles
function tomstore_styles()
{
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800&display=swap&subset=vietnamese');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '3.3.7', 'all'); 
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('slider', get_template_directory_uri() . '/assets/slider/css/lightslider.min.css', array(), '1.0', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
  
}
add_action('wp_enqueue_scripts', 'tomstore_styles'); 
require get_template_directory() .'/wp-bootstrap-navwalker.php';
require get_template_directory() .'/3s-framework/cs-framework.php';




if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Footer sidebar', 'html5blank'),
        'description' => __('Footer', 'html5blank'),
        'id' => 'footer-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
        // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Blog sidebar', 'html5blank'),
        'description' => __('Blog', 'html5blank'),
        'id' => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

   
}



// Code for themes
add_action( 'after_switch_theme', 'flush_rewrite_rules' );
// Code for plugins
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'myplugin_flush_rewrites' );
function myplugin_flush_rewrites() {
    // call your CPT registration function here (it should also be hooked into 'init')
    myplugin_custom_post_types_registration();
    flush_rewrite_rules();
}

add_filter( 'wpseo_breadcrumb_links', 'wpseo_breadcrumb_remove_postname' );
function wpseo_breadcrumb_remove_postname( $links ) {
    if( sizeof($links) > 1 && (is_singular('post') || is_singular('video')) ){
        array_pop($links);
    }
    return $links;
}

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
function create_search() {
  
  ob_start();
?>  
    <form class="side__search m-hide" action="<?php home_url() ?>">
      <input type="search" name="s" placeholder="<?= _e('Tìm kiếm thông tin...') ?>">
      <button type="submit" class="button--blank"><i class="fa fa-search"></i></button>
    </form>
<?php 
  $search = ob_get_contents(); 
    ob_end_clean();
    return $search;
}
add_shortcode( 'search', 'create_search' );  

function create_news() {
  
  ob_start();
?>  
<div id="sidebar-tabs" role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?= _e('Đọc nhiều') ?></a>
        </li>
        <li role="presentation">
            <a href="#tab-moi" aria-controls="tab-moi" role="tab" data-toggle="tab"><?= _e('Bài mới') ?></a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <?php
                 $posts = get_posts( array(
                    'posts_per_page' => 6,
                    'post_type'=>'post'
                   
                ) );
                if ( $posts ):
              ?>

                          <?php    
                            foreach ( $posts as $post ) :
                                setup_postdata( $post );
                          ?>  
                            <div class="post-item--s">
                                <a href="<?= get_the_permalink($post->ID) ?>" class="post-item__img">
                                    <figure style="background-image: url(<?= get_the_post_thumbnail_url($post->ID) ?>">
                                        <img src="<?= get_the_post_thumbnail_url($post->ID) ?>" alt="<?= get_the_title($post->ID) ?>">
                                    </figure>
                                </a>
                                <h3 class="post-item__title post-item__title--s"><a href="<?= get_the_permalink($post->ID) ?>"><?= get_the_title($post->ID) ?></a></h3>
                                <div class="post-item__pub">
                                    <span><?= get_the_time('d/m/Y', $post->ID) ?></span>
                                    <span><i class="fa fa-thumbs-up"></i> 0</span>
                                </div>
                            </div>
                         
                          <?php   endforeach; ?>    

                      
                
            
            <?php   endif; ?>
            <?php   wp_reset_postdata(); ?>
           

        </div>
        <div role="tabpanel" class="tab-pane" id="tab-moi">
            <?php 
            if ( $posts ):
              ?>

                          <?php    
                            foreach ( $posts as $post ) :
                                setup_postdata( $post );
                          ?>  
                            <div class="post-item--s">
                                <a href="<?= get_the_permalink($post->ID) ?>" class="post-item__img">
                                    <figure style="background-image: url(<?= get_the_post_thumbnail_url($post->ID) ?>">
                                        <img src="<?= get_the_post_thumbnail_url($post->ID) ?>" alt="<?= get_the_title($post->ID) ?>">
                                    </figure>
                                </a>
                                <h3 class="post-item__title post-item__title--s"><a href="<?= get_the_permalink($post->ID) ?>"><?= get_the_title($post->ID) ?></a></h3>
                                <div class="post-item__pub">
                                    <span><?= get_the_time('d/m/Y', $post->ID) ?></span>
                                    <span><i class="fa fa-thumbs-up"></i> 0</span>
                                </div>
                            </div>
                         
                          <?php   endforeach; ?>    

                      
                
            
            <?php   endif; ?>
            <?php   wp_reset_postdata(); ?>
        </div>
        
    </div>
</div>    
<?php 
  $news = ob_get_contents(); 
    ob_end_clean();
    return $news;
}
add_shortcode( 'news', 'create_news' );  



