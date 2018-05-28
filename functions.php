<?php

//Load Main Scripts
function enqueue_crafted_brew_scripts()
{
    wp_enqueue_script('Ajax-Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('Bootstrap-4.1.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/js/all.js', false, null, null, false);
    wp_enqueue_script('crafted-brew-scripts', get_template_directory_uri() . '/lib/js/craftedBrew.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_crafted_brew_scripts');

//Load CSS
function enqueue_crafted_brew_styles()
{
    wp_enqueue_style('bootstrap-4.1.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('crafted-brew-styles', get_template_directory_uri() . '/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_crafted_brew_styles');

//Load Smooth Scroll only on post pages
function sscroll_post_page() {
    if ( is_page('287') )
{
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/lib/js/sscroll.min.js', array('jquery'), null, true, null );
}}
add_action('wp_enqueue_scripts', 'sscroll_post_page');

//Hide admin bar from front of site
show_admin_bar(false);

//Allow post and page "featured image"
add_theme_support('post-thumbnails');

//Allow RSS Feeds
add_theme_support('automatic-feed-links');

//Disable posts -- for now
function remove_posts_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');

// add tag support to pages
function tags_support_all()
{
    register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query)
{
    if ($wp_query->get('tag'))
        $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

// Register Nav Menus
register_nav_menus(array(
    $location => $description
));

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

register_nav_menus(array(
    'primary' => __('Main Navigation Bar', 'crafted_brew')
));
// Nav Walker

//WordPress Fluid Images Bootstrap 4.1.0
function bootstrap_fluid_images($html)
{
    $classes = 'img-fluid';
    if (preg_match('/<img.*? class="/', $html)) {
        $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . '$2', $html);
    } else {
        $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '"$2', $html);
    }
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}
add_filter('the_content', 'bootstrap_fluid_images', 10);
add_filter('post_thumbnail_html', 'bootstrap_fluid_images', 10);

//begin blog page read more button
function excerpt_read_more_link($output)
{
    global $post;
    return $output . '<a class="btn btn-lg btn-warning text-uppercase" href="' . get_permalink() . '">Read More <i class="fas fa-angle-double-right fa-fw fa-lg"></i></a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
//end blog page read more button


//begin pagination
function crafted_brew_pagination($pages = '', $range = 1)
{
    $showitems = ($range * 2) + 1;
    
    global $paged;
    if (empty($paged))
        $paged = 1;
    
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    
    if (1 != $pages) {
        echo "<nav aria-label='Blog Navigation pagination'>";
        echo "<ul class='pagination justify-content-center'>";
        echo "<li class='page-item'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
            echo "<a class='page-link' aria-label='First Page' href='" . get_pagenum_link(1) . "'>
                          <i class='fas fa-angle-double-left fa-lg'></i>
                          <span class='sr-only'>go to first page</span>
                      </a>";
        echo "</li>";
        echo "<li class='page-item'>";
        if ($paged > 1 && $showitems < $pages)
            echo "<a class='page-link' href='" . get_pagenum_link($paged - 1) . "'>
                          <i class='fas fa-angle-left fa-lg'></i>
                          <span class='sr-only'>go to previous page</span>
                      </a>";
        echo "</li>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<li class='page-link'>" . $i . "</li>" : "<a href='" . get_pagenum_link($i) . "' class='page-link' >" . $i . "</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages)
            echo "<a class='page-link' aria-label='Next Page' href='" . get_pagenum_link($paged + 1) . "'>
                          <i class='fas fa-angle-right fa-lg'></i>
                          <span class='sr-only'>go to next page</span>
                        </a>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
            echo "<a class='page-link' aria-label='Last Page' href='" . get_pagenum_link($pages) . "'>
                          <i class='fas fa-angle-double-right fa-lg'></i>
                          <span class='sr-only'>go to last page</span>
                        </a>";
        global $wp_query;
        echo "</ul></nav>";
    }
}
//end pagination

//Style login page logo
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/lib/img/blue-earl-logo.png) !important;
            background-size: contain !important;
            width: 200px !important;
            height: 210px !important
        }
        body {
            
        }
        a:focus {
            box-shadow: none;
        }
        .login form {
            background: transparent;
        }
        .login form::before {
            display: block;
            content: "Website Administration Area";
            margin-top: -20px;
            padding-bottom: 20px;
            font-size: 18px;
            text-align: center;
        }
        .login label {
            font-size: 18px;
            font-weight: bold;
            color: white;
        }
        label[for=user_pass]:before {
            content: "\f023 \2002";
            font-family: FontAwesome;
            color: #999;
        }
        label[for=user_login]:before {
            content: "\f007 \2002";
            font-family: FontAwesome;
            color: #999;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Blue Earl Brewing';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/* End Style Login */

/* Kill Emojis */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
// Remove the REST API endpoint.
remove_action('rest_api_init', 'wp_oembed_register_route');
// Don't filter oEmbed results.
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
// Remove oEmbed discovery links.
remove_action('wp_head', 'wp_oembed_add_discovery_links');
// Remove oEmbed-specific JavaScript from the front-end and back-end.
remove_action('wp_head', 'wp_oembed_add_host_js');
//ADMIN SECTION FAVICON ITEMS TO <head> SECTION
function craftedBrew_Favicon() {
 echo '<link rel="Icon" type="image/x-icon" href="https://blueearlbrewing.com/wp-content/themes/crafted-brew-wordpress-theme/lib/img/favicon-32x32.png" />
 <link rel="Shortcut Icon" type="image/x-icon" href="https://blueearlbrewing.com/wp-content/themes/crafted-brew-wordpress-theme/lib/img/favicon-32x32.png" />';
 }
 add_action( 'login_head', 'craftedBrew_Favicon' );
 add_action( 'admin_head', 'craftedBrew_Favicon' );
