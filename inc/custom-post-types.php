<?php
/**
 * Formo 2022: Custom Post Types
 *
 * @since Formo 2022 1.0
 */

/**
 * Registers custom post types for events, teammembers.
 *
 * @since Formo 2022 1.0
 *
 * @return void
 */

function formo2022_custom_post_type() {
  register_post_type( 'formo2022_event',
    array(
      'labels'      => array(
          'name'          => __('Events', 'textdomain'),
          'singular_name' => __('Event', 'textdomain'),
      ),
      'public'      => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-calendar-alt',
      'show_ui'     => true,
      'show_in_rest' => true,
      'template' => array(
        array( 'create-block/event-date', array(
            'lock' => array(
              'move'   => true,
              'remove' => true,
          ),
        ) ),
      ),
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    )
  );
  register_post_type('formo2022_teammember',
    array(
      'labels'      => array(
        'name'          => __('Team members', 'textdomain'),
        'singular_name' => __('Team member', 'textdomain'),
      ),
      'public'      => true,
      'has_archive' => true,
      'menu_icon'   => 'dashicons-buddicons-buddypress-logo',
      'show_ui'     => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
      'taxonomies' => array('traits')
    )
  );
  register_taxonomy('traits', 'formo2022_teammember', [
    'label' => __('Traits', 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'traits'],
    'show_admin_column' => true,
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __('Trait', 'txtdomain'),
      'all_items' => __('All Traits', 'txtdomain'),
      'edit_item' => __('Edit Trait', 'txtdomain'),
      'view_item' => __('View Trait', 'txtdomain'),
      'update_item' => __('Update Trait', 'txtdomain'),
      'add_new_item' => __('Add New Trait', 'txtdomain'),
      'new_item_name' => __('New Trait Name', 'txtdomain'),
      'search_items' => __('Search Traits', 'txtdomain'),
      'popular_items' => __('Popular Traits', 'txtdomain'),
      'separate_items_with_commas' => __('Separate Traits with comma', 'txtdomain'),
      'choose_from_most_used' => __('Choose from most used Traits', 'txtdomain'),
      'not_found' => __('No Traits found', 'txtdomain'),
    ]
  ]);
  register_taxonomy_for_object_type('traits', 'formo2022_teammember');

  flush_rewrite_rules(); 
}
add_action('init', 'formo2022_custom_post_type');