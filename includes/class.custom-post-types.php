<?php

Class CustomPostTypes {
  public function __construct() {
    add_action('init', [$this, 'initialize_cpts']);
  }

  public function initialize_cpts() {
    $custom_post_types['porfolio'] = [
      'labels' => [
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio Item'
      ],
      'public' => true,
      'menu_position' => '27',
      'menu_icon' => 'dashicons-portfolio',
      'capability_type' => 'post',
      'has_archive' => false,
      'supports' => [
        'title',
        'editor',
        'thumbnail',
        'page-attributes'
      ],
      'rewrite' => [
        'slug' => 'portfolio',
        'with_front' => false
      ]
    ];

    $this->register_custom_post_types($custom_post_types);
  }

  private function register_custom_post_types($cpts) {
    foreach($cpts as $cpt => $cpt_args) {
      register_post_type($cpt, $cpt_args);
    }
  }
}
