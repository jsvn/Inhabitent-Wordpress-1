<?php


function inhabitent_custom_login_logo() {
     echo '<style type="text/css">
         h1 a {
					 background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important;
			 	 	 background-size: contain !important;
				 	 width: 100% !important;}
     </style>';
}
add_action('login_head', 'inhabitent_custom_login_logo');


function inhabitent_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );



function inhabitent_login_logo_url_title() {
    return 'Inhabitent Camping Co';
}
add_filter( 'login_headertitle', 'inhabitent_login_logo_url_title' );













 ?>
