<?php
/**
 * Formo 2022: Query Exclude Current Post
 *
 * @since Formo 2022 1.0
 */


/* create a function that every time the query block is used, it will check the current page and check if its ID matches any of the posts in the query result. If that is the case, fetch another post instead */

function query_exclude_current_post($query) {
  if (is_admin()) {
    return;
  }

  if (is_singular('formo2022_recipe')) {
    $current_post_id = get_the_ID();
    $query->set('post__not_in', array($current_post_id));
  }
}
add_action('pre_get_posts', 'query_exclude_current_post');
