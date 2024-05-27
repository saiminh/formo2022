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
          'lock' => array(
            'move'   => true,
            'remove' => true,
            'insert' => true
          ),
          'className' => 'teammember-single-content',
          'align' => 'full',
        ), array(
          array('core/image', array(
            'lock' => array(
              'move'   => true,
              'remove' => true,
            ),
            'url' => 'https://via.placeholder.com/400/0000BB/FFFFFF?text=Upload+Image+or+Video',
            'settings' => array(
              'size' => 'quarter-screen-width'
            ),
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
            'content' => 'Add job titles or any other information here.',
            'lock' => array(
              'move'   => true,
              'remove' => true,
            ),
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
  
  register_taxonomy('department', 'formo2022_teammember', [
    'label' => __('Department', 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'department'],
    'show_admin_column' => true,
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __('Department', 'txtdomain'),
      'all_items' => __('All Departments', 'txtdomain'),
      'edit_item' => __('Edit Department', 'txtdomain'),
      'view_item' => __('View Department', 'txtdomain'),
      'update_item' => __('Update Department', 'txtdomain'),
      'add_new_item' => __('Add New Department', 'txtdomain'),
      'new_item_name' => __('New Department Name', 'txtdomain'),
      'search_items' => __('Search Departmenta', 'txtdomain'),
      'popular_items' => __('Popular Departments', 'txtdomain'),
      'separate_items_with_commas' => __('Separate Departments with comma', 'txtdomain'),
      'choose_from_most_used' => __('Choose from most used Departments', 'txtdomain'),
      'not_found' => __('No Department found', 'txtdomain'),
    ]
  ]);
  register_taxonomy_for_object_type('department', 'formo2022_teammember');

  flush_rewrite_rules(); 
}
add_action('init', 'formo2022_custom_post_type');

function teammember_add_fullname_meta_box() {
    add_meta_box(
        'teammember_fullname_meta_box', // id
        'Full Name', // title
        'teammember_fullname_meta_box_callback', // callback
        'formo2022_teammember' // post type
    );
}
add_action('add_meta_boxes', 'teammember_add_fullname_meta_box');

function teammember_fullname_meta_box_callback($post) {
    $value = get_post_meta($post->ID, '_teammember_fullname_meta_key', true);
    echo '<input type="text" id="teammember_fullname_meta_field" name="teammember_fullname_meta_field" value="' . esc_attr($value) . '"/>';
}

function add_teammember_column($columns) {
  unset( $columns['date'] );
  unset( $columns['password'] );
  unset( $columns['template'] );
  $columns['teammember_fullname_meta_field'] = 'Full Name';
  return $columns;
}
add_filter('manage_formo2022_teammember_posts_columns', 'add_teammember_column');

// Display current value of meta field in new column
add_action('manage_formo2022_teammember_posts_custom_column', 'show_teammember_meta_value', 10, 2);
function show_teammember_meta_value($column, $post_id) {
    if ($column == 'teammember_fullname_meta_field') {
        $meta_value = get_post_meta($post_id, '_teammember_fullname_meta_key', true);
        echo $meta_value;
    }
}


function teammember_quick_edit_custom_box($column_name, $post_type) {
  if ($column_name != 'teammember_fullname_meta_field') return;
  ?>
    <div class="fullname_meta">
      <label>
        <span class="title">Full Name</span>
        <span class="input-text-wrap">
          <input type="text" name="teammember_fullname_meta_field" value="">
        </span>
      </label>
    </div>
  <?php
}
add_action('quick_edit_custom_box', 'teammember_quick_edit_custom_box', 10, 2);

function teammember_save_postdata($post_id) {
  if (array_key_exists('teammember_fullname_meta_field', $_POST)) {
      update_post_meta(
          $post_id,
          '_teammember_fullname_meta_key',
          $_POST['teammember_fullname_meta_field']
      );
  }
}
add_action('save_post', 'teammember_save_postdata');

add_action('admin_footer', 'move_quick_edit_custom_box');
function move_quick_edit_custom_box() {
    ?>
    <script type="text/javascript">
      document.addEventListener( 'DOMContentLoaded',  () => {
          const rowActions = document.querySelectorAll('.row-actions');
          rowActions.forEach((rowAction) => {
              const quickEditBtn = rowAction.querySelector('.edit + span > button');
              quickEditBtn.addEventListener('click', () => {
                  const quickEditForm = document.querySelector('.quick-edit-row .inline-edit-col-right .inline-edit-col');
                  const fullnameMeta = document.querySelector('.fullname_meta');
                  quickEditForm.insertBefore(fullnameMeta, quickEditForm.firstChild);
              });
          });
          
      });
    </script>
    <?php
}