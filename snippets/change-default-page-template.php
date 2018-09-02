<?php
/**
 * Change default page template (i.e. sidebar position)
 *
 * @see https://codex.wordpress.org/Function_Reference/set_theme_mod
 */
function understrap_child_change_default_sidebar_position() {
  
  // Set left sidebar as default page template.
	set_theme_mod( 'understrap_sidebar_position', 'left' );

  // Set left & right sidebar as default page template.
	set_theme_mod( 'understrap_sidebar_position', 'both' );

  // Set no sidebar as default page template.
	set_theme_mod( 'understrap_sidebar_position', 'none' );

}
add_action( 'after_switch_theme', 'understrap_child_change_default_sidebar_position' );
