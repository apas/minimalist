<div id="sidebar">			
		<aside id="static">
			<div id="avatar"> 
				<img src="<?php echo get_option( 'avatar_url', 'set in backend under settings' ); ?>" alt="Author avatar of <?php bloginfo('name'); ?>" width="190" />
			</div>

			<div id="mini-bio">
				<p>WHATEVER YOU WANT HERE.</p>
			</div>
			
			<!--sidebar menu-->		
			<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>
			<!--sidebar widget area-->
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main_sidebar') ) : endif; ?>
		</aside><!--#static-->
</div>