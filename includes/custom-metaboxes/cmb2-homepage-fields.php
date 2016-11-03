<?php

$homepage_content = new_cmb2_box([
  'id' => 'homepage',
  'title' => __('Extra Homepage Content', 'sq'),
  'object_types' => ['page'],
  'show_on' => [
                'key' => 'id',
                'value' => get_option('page_on_front')
               ],
  'context' => 'normal',
  'priority' => 'high',
  'show_names' => true
]);

$homepage_content->add_field([
  'name' => __('Subtitle', 'sw'),
  'id' => $prefix . 'home_subtitle',
  'type' => 'text'
]);

$homepage_content->add_field([
  'name' => __('Email Address', 'sw'),
  'id' => $prefix . 'email',
  'type' => 'text_email'
]);

$homepage_content->add_field([
  'name' => __('Telephone Number', 'sw'),
  'id' => $prefix . 'telephone',
  'type' => 'text'
]);
