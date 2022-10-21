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
        array( 'core/group', array(
          'className' => 'gridline-middle-bg',
          'align' => 'full',
        ), array(
          array( 'core/columns', array( 'className' => 'event-single-content', ), array(
            array( 'core/column', array( 'className' => 'span6',), array(
              array('core/post-featured-image', array(
                'lock' => array(
                  'move'   => true,
                  'remove' => true,
                ),
                'rel' => 'Can you see me?',
              ) )
            )),
            array( 'core/column', array( 'className' => 'span6', ), array(
              array('core/post-title', array(
                'lock' => array(
                  'move'   => true,
                  'remove' => true,
                ),
                'placeholder' => 'Add Event Title',
                'fontSize' => 'xxx-large',
              )),
              array( 'create-block/event-date', array(
                'lock' => array(
                  'move'   => true,
                  'remove' => true,
                ),
              ) ),
              array( 'create-block/event-location', array(
                'lock' => array(
                  'move'   => true,
                  'remove' => true,
                ),
              ) ),
              array('core/paragraph', array(
                'placeholder' => 'Add a description of the Event here...',
                'content' => 'Add a description of the Event here...'
              )),
              array('core/paragraph', array(
                'placeholder' => 'Add a description of the Event here...',
                'content' => 'Speakers: <strong>John Does</strong>',
              )),
              array('core/button', array(
                'placeholder' => 'Buy Tickets?',
              )),
            ))
          )),
          array( 'core/spacer', array(
            'height' => 100,
          )),
          array( 'core/group', array( 'align' => 'full',), array(
            array('core/heading', array(
              'content' => 'More Events',
              'level' => 3,
            )),
            array( 'create-block/events-query', array(
              'layout' => 'layout-latest',
            ) ),
          )),
        )),
      ),
      'supports' => array('title', 'editor', 'excerpt', 'eventdate', 'eventlocation', 'custom-fields', 'thumbnail'),
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
      'template' => array(
        array( 'core/group', array(
          'className' => 'teammember-single-content',
          'align' => 'full',
        ), array(
          array('core/image', array(
            'lock' => array(
              'move'   => true,
              'remove' => true,
            ),
            'url' => 'https://via.placeholder.com/400/0000BB/FFFFFF?text=Upload+Image+or+Video',
          ) ),
          array('core/post-title', array(
            'lock' => array(
              'move'   => true,
              'remove' => true,
            ),
            'fontSize' => 'large',
          )),
          array('core/paragraph', array(
            'placeholder' => 'Add job titles or any other information here.',
            'content' => 'Add job titles or any other information here.'
          )),
        )),
      ),
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