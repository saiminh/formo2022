<?php
/**
 * Formo 2022: Shortcodes
 *
 * @since Formo 2022 1.0
 */

/**
 * Registers shortcodes bcs some new block functionality is still lacking.
 *
 * @since Formo 2022 1.0
 *
 * @return void
 */

//Shortcode for displaying Events
function query_events() {
  echo '<div class="wp-block-group team-teammembers offset-1">';
      $args = array(  
        'post_type' => 'formo2022_event',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        //'orderby’ => 'title', 
        //'order’ => 'ASC', 
      );
      global $more;
      $loop = new WP_Query( $args ); 
            
      while ( $loop->have_posts() ) { 
        $loop->the_post();
    echo '<div class="wp-block-group team-teammember">
            <figure class="wp-block-image team-teammember-image">'.get_the_post_thumbnail(null, 'large').'</figure>
            
              <p>'.get_the_title().'</p>'
              .get_the_content('', true).'
            
            <a href="'. get_the_permalink() .'" role="button" class="team-teammember-button">Learn More</a>
          </div>';
          $more = 1;
      }
      wp_reset_postdata(); 
  echo '</div></div>';
}
function outputbuffer_query_events(){
    ob_start();             // turn on output buffering
    query_events(); // put the output to the buffer
    return ob_get_clean();  // capture and return the buffer
}
add_shortcode( 'query-events', 'outputbuffer_query_events' ); 