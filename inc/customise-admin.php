<?php
/**
 * Formo 2022: Customise the admin
 *
 * @since Formo 2022 1.0
 */

/**
 * Removes comments from the admin menu and other changes to the admin area
 *
 * @since Formo 2022 1.0
 *
 * @return void
 */

 // Remove comments
function remove_comments(){
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments' );

// Remoce comments from menu
function prefix_remove_comments_tl() {
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'prefix_remove_comments_tl' );