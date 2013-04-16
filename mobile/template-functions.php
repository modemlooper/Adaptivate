<?php
/*
*
* checks if a mobile template file exists and then switchs out template when on mobile
*
*/

function template_mobile( $template ) {

	if ( wp_is_mobile() ) {

		if ( is_home() || is_front_page() && file_exists( TEMPLATEPATH . '/mobile/mobile-index.php') ) {

			return locate_template( '/mobile/mobile-index.php' );

		} else if ( is_single() && file_exists( TEMPLATEPATH . '/mobile/mobile-single.php') ) {

			return locate_template( '/mobile/mobile-single.php' );

		} else if ( is_page() && file_exists( TEMPLATEPATH . '/mobile/mobile-page.php') ) {

			return locate_template( '/mobile/mobile-page.php' );

		} else if ( is_page_template() && file_exists( TEMPLATEPATH . '/mobile/mobile-page-template.php') ) {

			return locate_template( '/mobile/mobile-page-template.php' );

		} else if ( is_category() && file_exists( TEMPLATEPATH . '/mobile/mobile-category.php') ) {

			return locate_template( '/mobile/mobile-category.php' );

		} else if ( is_tag() && file_exists( TEMPLATEPATH . '/mobile/mobile-tag.php') ) {

			return locate_template( '/mobile/mobile-tag.php' );

		} else if ( is_tax() && file_exists( TEMPLATEPATH . '/mobile/mobile-taxonomy.php') ) {

			return locate_template( '/mobile/mobile-taxonomy.php' );

		} else if ( is_author() && file_exists( TEMPLATEPATH . '/mobile/mobile-author.php') ) {

			return locate_template( '/mobile/mobile-author.php' );

		} else if ( is_archive() && file_exists( TEMPLATEPATH . '/mobile/mobile-archive.php') ) {

			return locate_template( '/mobile/mobile-archive.php' );

		} else if ( is_404() && file_exists( TEMPLATEPATH . '/mobile/mobile-404.php') ) {

			return locate_template( '/mobile/mobile-404.php' );

		} else if ( is_search() && file_exists( TEMPLATEPATH . '/mobile/mobile-search.php') ) {

			return locate_template( '/mobile/mobile-search.php' );

		} else if ( is_attachment() && file_exists( TEMPLATEPATH . '/mobile/mobile-attachment.php') ) {

			return locate_template( '/mobile/mobile-attachment.php' );

		}

			return $template;
	}
}
add_filter( 'template_include', 'template_mobile', 10, 2 );