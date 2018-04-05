<?php

//Load Main Scripts
function enqueue_crafted_brew_scripts()
{
    wp_enqueue_script('Ajax-Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('Bootstrap-4x', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', false, null, true, null);
    wp_enqueue_script('crafted-brew-scripts', get_template_directory_uri() . '/js/craftedBrew.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_crafted_brew_scripts');

//Load CSS
function enqueue_crafted_brew_styles()
{
    wp_enqueue_style('bootstrap4.0-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('crafted-brew-styles', get_template_directory_uri() . '/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_crafted_brew_styles');

//Hide admin bar from front of site
show_admin_bar(false);

//Allow post and page "featured image"
add_theme_support('post-thumbnails');

//Allow RSS Feeds
add_theme_support('automatic-feed-links');

// add tag support to pages
function tags_support_all() {
  register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
  if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

// Register Nav Menus
register_nav_menus( array( $location => $description ) );

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => __( 'Main Navigation Bar', 'crafted_brew' ),
) );
// Nav Walker

//Wordpress Fluid Images Bootstrap 4.0.0
function bootstrap_fluid_images( $html ){
  $classes = 'img-fluid';
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . '$2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="'. $classes .'"$2', $html);
  }
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','bootstrap_fluid_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_fluid_images', 10 );

//begin blog page read more button
function excerpt_read_more_link($output)
{
    global $post;
    return $output . '<a class="btn btn-lg btn-info text-uppercase" href="'. get_permalink() . '">Read More <i class="fas fa-angle-double-right fa-fw fa-lg"></i></a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
//end blog page read more button


//begin pagination
function crafted_brew_pagination($pages = '', $range = 1) {
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }

     if(1 != $pages) {
         echo "<nav aria-label='Blog Navigation pagination'>";
            echo "<ul class='pagination justify-content-center'>";
            echo "<li class='page-item'>";
                if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
                  echo "<a class='page-link' aria-label='First Page' href='".get_pagenum_link(1)."'>
                          <i class='fas fa-angle-double-left fa-lg'></i>
                          <span class='sr-only'>go to first page</span>
                      </a>"
            ;
            echo "</li>";
            echo "<li class='page-item'>";
                if($paged > 1 && $showitems < $pages) 
                  echo "<a class='page-link' href='".get_pagenum_link($paged - 1)."'>
                          <i class='fas fa-angle-left fa-lg'></i>
                          <span class='sr-only'>go to previous page</span>
                      </a>"
            ;
            echo "</li>";
            for ($i=1; $i <= $pages; $i++) {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                    echo ($paged == $i)? "<li class='page-link'>".$i."</li>":"<a href='".get_pagenum_link($i)."' class='page-link' >".$i."</a>"
                ;}}
                if ($paged < $pages && $showitems < $pages) 
                  echo "<a class='page-link' aria-label='Next Page' href='".get_pagenum_link($paged + 1)."'>
                          <i class='fas fa-angle-right fa-lg'></i>
                          <span class='sr-only'>go to next page</span>
                        </a>";
                if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) 
                  echo "<a class='page-link' aria-label='Last Page' href='".get_pagenum_link($pages)."'>
                          <i class='fas fa-angle-double-right fa-lg'></i>
                          <span class='sr-only'>go to last page</span>
                        </a>";
            global $wp_query;
              echo "</ul></nav>";
          }
}
//end pagination
