<?php

if (function_exists('add_theme_support')) {
  add_theme_support('menus');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-header' );
  add_theme_support('widgets');
  add_theme_support( 'html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
  add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
  ) );
  add_theme_support( 'customize-selective-refresh-widgets' );

}



function genich_style() {
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js');

}

add_action( 'wp_enqueue_scripts', 'genich_style' );


function the_breadcrumb() {
  if (!is_front_page()) {
    echo '<a href="';
    echo get_option('home');
    echo '">Defy Logistics';
    echo "</a> <span class='breadcrumb-one'></span> ";
    if (is_category() || is_single()) {
      the_category(' ');
      if (is_single()) {
        echo " » ";
        the_title();
      }
    } elseif (is_page()) {
      echo the_title();
    }
  }
  else {
    echo 'Home';
  }
}

// add_filter ( 'wp_list_categories', 'span_before_link_list_categories' );

// function span_before_link_list_categories( $list, $list2 ) {
// $list = str_replace('<a href=','<span><a href=',$list);
// $list2 = str_replace('</a>','</span></a>',$list2);
// return $list;
// return $list2;
// }

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Right-Sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Left-Sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Left-Sidebar-Video',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
  )
);


// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
  /*
  Вид базового шаблона:
  <nav class="navigation %1$s" role="navigation">
    <h2 class="screen-reader-text">%2$s</h2>
    <div class="nav-links">%3$s</div>
  </nav>
  */

  return '
  <nav class="navigation %1$s" role="navigation">
    <div class="nav-links">%3$s</div>
  </nav>    
  ';
}

add_action( 'pre_get_posts', function( $query ) {

    // Check that it is the query we want to change: front-end search query
    if( $query->is_main_query() && ! is_admin() && $query->is_search() ) {

        // Change the query parameters
        $query->set( 'posts_per_page', 8 );

    }

} );

?>