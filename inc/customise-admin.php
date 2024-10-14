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

// Remove comments from menu
function prefix_remove_comments_tl() {
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'prefix_remove_comments_tl' );

// Allow SVG files
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];
}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

function remove_link_from_admin_bar( $wp_admin_bar ) {
  $wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'remove_link_from_admin_bar', 999 );

function add_formo_logo_to_admin_bar($wp_admin_bar ) {
  $wp_admin_bar->add_node( array(
    'id'        => 'formo2022-logo',
    'href'      => get_admin_url(),
    'title'     => '<div style="display: flex; height: 100%; align-items: center"><svg width="70" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 20" style="enable-background:new 0 0 70 20" xml:space="preserve"><path d="m3.4 5.6 7.9-3.3c.1 0 .1-.1.1-.2l-.9-2c-.1-.1-.2-.1-.2-.1L2.4 3.3C.9 3.9 0 5.3 0 6.9v12.3c0 .1.1.1.1.1h2.2c.1 0 .1-.1.1-.1v-8.7c.2.1.3.1.5.2l7.2 1.8c.1 0 .1 0 .1-.1l.6-2.1c0-.1 0-.1-.1-.1L3.6 8.3C2.7 8 2.5 7.2 2.5 7s0-1 .9-1.4zm59.7.7c-3.8 0-6.9 3-6.9 6.8s3.1 6.8 6.9 6.8 6.9-3 6.9-6.8-3.1-6.8-6.9-6.8zm0 11.1c-2.4 0-4.4-1.9-4.4-4.3s2-4.3 4.4-4.3 4.4 1.9 4.4 4.3-2 4.3-4.4 4.3zM18.8 6.3c-3.8 0-6.9 3-6.9 6.8s3.1 6.8 6.9 6.8 6.9-3 6.9-6.8-3.1-6.8-6.9-6.8zm0 11.1c-2.4 0-4.4-1.9-4.4-4.3s2-4.3 4.4-4.3 4.4 1.9 4.4 4.3-2 4.3-4.4 4.3zM53.1 7.1c-.9-.7-2-.9-3-.6l-3.2.9c-.3.1-.6.2-.9.4-.2-.3-.4-.5-.7-.7-.9-.7-2-.9-3-.6l-3.3.9c-1.6.4-2.7 1.9-2.7 3.5v8.3c0 .1.1.1.1.1h2.2c.1 0 .1-.1.1-.1v-8.3c0-.5.4-1 .9-1.1l3.2-.9c.4-.1.7.1.8.2.3.2.4.5.4.8v9.4c0 .1.1.1.1.1h2.2c.1 0 .1-.1.1-.1V11c0-.5.4-1 .9-1.1l3.2-.9c.4-.1.7.1.8.2.3.2.4.5.4.8v9.4c0 .1.1.1.1.1H54c.1 0 .1 0 .1-.1V9.9c.4-1.1-.1-2.1-1-2.8zm-23 .3c-1.6.4-2.7 1.9-2.7 3.5v8.3c0 .1.1.1.1.1h2.2c.1 0 .1-.1.1-.1v-8.3c0-.5.4-1 .9-1.1l4.6-1.3c.1 0 .1-.1.1-.1l-.6-2.1c0-.1-.1-.1-.1-.1l-4.6 1.2z" style="fill:#fff"/></svg></div>',
    ) );
  }
  add_action( 'admin_bar_menu', 'add_formo_logo_to_admin_bar', 10 );

// customize admin bar css
function override_admin_bar_css() { 
  if ( is_admin_bar_showing() ) { ?>

    <style type="text/css">
      #wpadminbar,
      #adminmenuwrap,
      #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
        background-color: #0000ff;
      }
      #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
        background-color: #5555ff;
      }
      .components-button.components-dropdown-menu__menu-item.is-active.has-text.has-icon {
        background: black;
        color: white;
      }
      .editor-styles-wrapper .edit-post-visual-editor__post-title-wrapper {
        margin-top: 0!important;
      }
      .editor-styles-wrapper .edit-post-visual-editor__post-title-wrapper h1 {
        font-family: var(--wp--preset--font-family--roobert);
        text-transform: none;
        margin: 0;
        padding: 0;
      }
      .editor-styles-wrapper h1.components-heading, 
      .editor-styles-wrapper h2.components-heading, 
      .editor-styles-wrapper h3.components-heading, 
      .editor-styles-wrapper h4.components-heading, 
      .editor-styles-wrapper h5.components-heading {
          font-family: var(--wp--preset--font-family--roobert);
          font-size: 1.5rem;
      }
      .components-datetime__date .components-datetime__date__day {
        padding: 0;
      }
      .edit-post-visual-editor {
        width: 100vw;
        overflow-x: hidden;
      }
      font[size="1"] {
        position: relative;
        z-index: 9999;
      }
      .edit-site-navigation-toggle__button.components-button,
      .edit-post-fullscreen-mode-close.components-button {
        background-color: #FFF;
      }
      .edit-site-navigation-toggle__button.components-button::before,
      .edit-site-navigation-toggle__button.components-button:focus::before,
      .edit-post-fullscreen-mode-close.components-button::before {
        box-shadow: none;
      }
      .edit-site-navigation-toggle__button.components-button .edit-site-navigation-toggle__site-icon,
      .edit-post-fullscreen-mode-close.components-button .edit-post-fullscreen-mode-close_site-icon {
        object-fit: contain;
      }
      .block-editor-block-list__empty-block-inserter.block-editor-block-list__empty-block-inserter, 
      .block-editor-default-block-appender .block-editor-inserter {
        top: 100%;
        left:0;
      }
      .post-type-formo2022_teammember .wp-block-post-title {
        margin-top: 1em;
      }
      .post-type-formo2022_teammember figure.wp-block-image {
        width: auto;
        height: 100%;
        max-height: 320px;
        max-width: 320px;
      }
      .post-type-formo2022_teammember figure.wp-block-image img {
        width: auto;
        height: 100%;
        max-height: 300px;
        position: relative;
      }
      .xdebug-error {
        position: fixed;
        top: 2em;
        left: 2em;
        right: 2em;
        height: calc(100vh - 4em);
        overflow: scroll;
        z-index: 999999;
        display: block;
        /* animation: hideerror 1s 1s forwards; */
      }
      @keyframes hideerror {
        0% {
          z-index: 9999999;
          opacity: 1;
        }
        100% {
          z-index: 0;
          opacity: 0;
          pointer-events: none;
        }
      }
    </style>
  <?php }
}

// on backend area
add_action( 'admin_head', 'override_admin_bar_css' );
// on frontend area
add_action( 'wp_head', 'override_admin_bar_css' );