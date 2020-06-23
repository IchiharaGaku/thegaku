<?php 

function init_func() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_post_type('item', [
    'labels' => [
      'name' => '商品',
      'singular name' => '商品',
      'add_new' => '商品を追加',
      'add_new_item' => '商品を追加',
      'edit_item' => '商品を編集',
      'new_item' => '新しい商品',
      'all_items' => '全ての商品',
      'view_item' => '商品を見る',
      'search_items' => '商品を探す',
      'not_found' => '商品は見つかりませんでした。',
      'not_found_in_trash' => 'ゴミ箱は空です',
      'parent_item_colon' => '',
      'menu_name' => '商品'
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-cart'
  ]);

  register_taxonomy('item_category', 'item', [
    'labels' => [
      'name' => '商品カテゴリー',
    ],
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
}
add_action('init', 'init_func');

function twpp_enqueue_styles() {
  wp_enqueue_style('main-style-sheet',
  get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');
add_filter('show_admin_bar', '__return_false');

function twpp_enqueue_scripts() {
  wp_enqueue_script('cleanblog-js-sheet',
  get_template_directory_uri().'/js/clean-blog.js',
  array(),
  false,
  true
);
  wp_enqueue_script('cleanblogmin-js-sheet',
  get_template_directory_uri().'/js/clean-blog.min.js',
  array(),
  false,
  true
);
  wp_enqueue_script('contactme-js-sheet',
  get_template_directory_uri().'/js/contact_me.js',
  array(),
  false,
  true
);
  wp_enqueue_script('jqbootstrap-js-sheet',
  get_template_directory_uri().'/js/jqBootstrapValidation.js',
  array(),
  false,
  true
);
}
add_action('wp_enqueue_scripts',
'twpp_enqueue_scripts');
add_theme_support('post-thumbnails');

add_image_size ('single_size', 400, 300, true)
?>