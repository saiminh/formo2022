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
    register_post_type('formo2022_event',
        array(
            'labels'      => array(
                'name'          => __('Events', 'textdomain'),
                'singular_name' => __('Event', 'textdomain'),
            ),
                'public'      => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-calendar-alt',
              
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
              
        )
    );
}
add_action('init', 'formo2022_custom_post_type');