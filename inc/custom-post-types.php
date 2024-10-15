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

/* REGISTER CUSTOM POST TYPES */
function formo2022_custom_post_type() {
  /* RECIPE POST TYPE */
  register_post_type( 'formo2022_recipe',
    array(
      'labels'      => array(
          'name'          => __('Recipes', 'textdomain'),
          'singular_name' => __('Recipe', 'textdomain'),
      ),
      'public'       => true,
      'has_archive'  => false,
      'menu_icon'    => 'dashicons-food',
      'show_ui'      => true,
      'show_in_rest' => true,
      'rewrite'      => array( 'slug' => 'recipes' ),
      'supports'     => array('title', 'editor', 'custom-fields', 'thumbnail'),
      'template' => array(
        array(
            'core/pattern',
            array(
                'slug' => 'formo2022/recipe'
            ),
        )
      )
    )
  );
  register_taxonomy('main_ingredient', 'formo2022_recipe', [
    'label' => __('Main Ingredient(s)', 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'main_ingredient'],
    'show_admin_column' => true,
    'public' => true,
    'has_archive' => false,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __('Main Ingredient', 'txtdomain'),
      'all_items' => __('All Main Ingredients', 'txtdomain'),
      'edit_item' => __('Edit Main Ingredient', 'txtdomain'),
      'view_item' => __('View Main Ingredient', 'txtdomain'),
      'update_item' => __('Update Main Ingredient', 'txtdomain'),
      'add_new_item' => __('Add New Main Ingredient', 'txtdomain'),
      'new_item_name' => __('New Main Ingredient Name', 'txtdomain'),
      'search_items' => __('Search Main Ingredients', 'txtdomain'),
      'popular_items' => __('Popular Main Ingredients', 'txtdomain'),
      'separate_items_with_commas' => __('Separate Main Ingredients with comma', 'txtdomain'),
      'choose_from_most_used' => __('Choose from most used Main Ingredients', 'txtdomain'),
      'not_found' => __('No Main Ingredients found', 'txtdomain'),
    ]
  ]);
  register_taxonomy_for_object_type('main_ingredient', 'formo2022_teammember');
  
  register_taxonomy('preptime', 'formo2022_recipe', [
    'label' => __('Preparation Time', 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'preptime'],
    'show_admin_column' => true,
    'public' => true,
    'has_archive' => false,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __('Preparation Time', 'txtdomain'),
      'all_items' => __('All Preparation Times', 'txtdomain'),
      'edit_item' => __('Edit Preparation Time', 'txtdomain'),
      'view_item' => __('View Preparation Time', 'txtdomain'),
      'update_item' => __('Update Preparation Time', 'txtdomain'),
      'add_new_item' => __('Add New Preparation Time', 'txtdomain'),
      'new_item_name' => __('New Preparation Time Name', 'txtdomain'),
      'search_items' => __('Search Preparation Times', 'txtdomain'),
      'popular_items' => __('Popular Preparation Times', 'txtdomain'),
      'separate_items_with_commas' => __('Separate Preparation Times with comma', 'txtdomain'),
      'choose_from_most_used' => __('Choose from most used Preparation Times', 'txtdomain'),
      'not_found' => __('No Preparation Times found', 'txtdomain'),
    ]
  ]);
  register_taxonomy_for_object_type('preptime', 'formo2022_teammember');
  
  register_taxonomy('meal', 'formo2022_recipe', [
    'label' => __('Meal', 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'meal'],
    'show_admin_column' => true,
    'public' => true,
    'has_archive' => false,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __('Meal', 'txtdomain'),
      'all_items' => __('All Meals', 'txtdomain'),
      'edit_item' => __('Edit Meal', 'txtdomain'),
      'view_item' => __('View Meal', 'txtdomain'),
      'update_item' => __('Update Meal', 'txtdomain'),
      'add_new_item' => __('Add New Meal', 'txtdomain'),
      'new_item_name' => __('New Meal Name', 'txtdomain'),
      'search_items' => __('Search Meals', 'txtdomain'),
      'popular_items' => __('Popular Meals', 'txtdomain'),
      'separate_items_with_commas' => __('Separate Meals with comma', 'txtdomain'),
      'choose_from_most_used' => __('Choose from most used Meals', 'txtdomain'),
      'not_found' => __('No Meals found', 'txtdomain'),
    ]
  ]);
  register_taxonomy_for_object_type('meal', 'formo2022_teammember');


  /* EVENT POST TYPE */
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
  /* TEAMMEMBER POST TYPE */
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
  
  /* TEAMMEMBER TRAITS */
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
  
  /* TEAMMEMBER DEPARTMENT */
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
  // unset( $column_name['date'] );
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

add_action('admin_footer', 'alter_quick_edit');
function alter_quick_edit() {
    ?>
    <script type="text/javascript">
      document.addEventListener( 'DOMContentLoaded',  () => {

          // moving the Full Name meta field to the top of the quick edit form for team member quick edit
          const rowActions = document.querySelectorAll('.row-actions');
          rowActions.forEach((rowAction) => {
              const quickEditBtn = rowAction.querySelector('.edit + span > .editinline');
              quickEditBtn.addEventListener('click', () => {
                  const quickEditForm = document.querySelector('.quick-edit-row .inline-edit-col-right .inline-edit-col');
                  const fullnameMeta = document.querySelector('.fullname_meta');
                  if (fullnameMeta) {
                    quickEditForm.insertBefore(fullnameMeta, quickEditForm.firstChild);
                  }
              });
          });

          // adding a missing wicked_move td to a table after a quick edit, but only if it's missing and if the table is changing
          // for example: when Quick Edit is used to change a post, the table is updated
          const poststable = document.querySelector('#the-list');

          const config = { attributes: true, childList: true, subtree: true };

          const callback = (mutationList, observer) => {
            for (const mutation of mutationList) {
              if (mutation.type === "childList") {
                
                const rows = poststable.querySelectorAll('tr')

                const hasWicked = (elem) => {
                  return elem.querySelector('.wicked_move');
                }

                if (!hasWicked(poststable)) {
                  // If there is no wicked_move td in the table, then wicked is likely not installed and we can stop here
                  return;
                } 
                else {
                  // otherwise we need to check each row for the wicked_move td and if it's missing, add it
                  rows.forEach((row) => {
                    if (!hasWicked(row)) {
                      const wicked = document.createElement('td');
                      wicked.classList.add('wicked_move');
                      row.insertBefore(wicked, row.firstChild);
                    }
                  });
                }
              } 
            }
          };
          const observer = new MutationObserver(callback);

          // Start observing the target node for configured mutations
          observer.observe(poststable, config);
      });
    </script>
    <?php
}