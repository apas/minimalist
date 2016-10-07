<?php get_header(); ?>

<div>
	<h2>What the?</h2>
	Either you're making up page names,<br>
	or someone screwed up.<br>
	I do not know which it is.<br>
	It's a 404. Time to <a href="<?php echo esc_url( home_url( '/' ) ); ?>">go home</a>.
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>