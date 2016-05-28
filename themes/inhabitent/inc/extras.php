<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'inhabitent_remove_submenus', 102 );


//setting inline css.
function about_hero_style_method() {

				// if ( !is_page_template( 'about.php' ) ) {
				// 	return ;
				// }
					$hero_img = CFS()->get( 'hero_image' ); //E.g. #FF0000
					$custom_css = "
									.about_hero{
													background:
													linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
													url(".$hero_img.");
													background-size: cover;
									}";
					wp_add_inline_style( 'inhabitent-style', $custom_css );


}
add_action( 'wp_enqueue_scripts', 'about_hero_style_method' );


function inhabitent_filter_product_query( $query ){

		if ( is_post_type_archive() && !is_admin() && $query->is_main_query() ){
			$query->set('orderby', 'title');
			$query->set('order', 'ASC');
			$query->set('posts_per_page', 16);
		}

};


add_action('pre_get_posts', 'inhabitent_filter_product_query');


// Changing archive title
add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {

        $title = 'Shop Stuff';

    }

    return $title;

});


// Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
}

// jQuery for Search



?>
