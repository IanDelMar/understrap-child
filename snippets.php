<?php
/**
 * Collection of usefull snippets.
 */

/**
 * Remove UnderStrap page templates from the templates dropdown
 */
function yourprefix_remove_understrap_page_templates( $page_templates ) {

	unset( $page_templates['page-templates/right-sidebarpage.php'] );
	unset( $page_templates['page-templates/left-sidebarpage.php'] );
	unset( $page_templates['page-templates/both-sidebarspage.php'] );
	unset( $page_templates['page-templates/blank.php'] );
	unset( $page_templates['page-templates/empty.php'] );
	unset( $page_templates['page-templates/fullwidthpage'] );

	return $page_templates;

}
add_filter( 'theme_page_templates', 'yourprefix_remove_understrap_page_templates' );

/**
 * Customize site info.
 */
function yourprefix_site_info_content() {
	$your_site_info = '&copy; ' . date( 'Y' ) . ' Exmaple, Inc.';
	return esc_html( $your_site_info );
}
add_filter( 'understrap_site_info_content', 'yourprefix_site_info_content' );
