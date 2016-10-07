<aside id="static">		
	<!--sidebar menu-->		
	<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>
	<!--sidebar widget area-->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main_sidebar') ) : endif; ?>
</aside><!--#static-->