<?php 

	show_admin_bar(false);

	add_theme_support( 'title-tag' );

	if ( ! function_exists( '_wp_render_title_tag' ) ) {
		function theme_slug_render_title() {
	?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php
		}
		add_action( 'wp_head', 'theme_slug_render_title' );
	}

	add_theme_support( 'post-thumbnails' );



?>