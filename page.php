<?php get_header(); ?>

	<section id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</article>	
		<?php endwhile; endif; ?>
	<small><?php edit_post_link('Edit', '<p>', '</p>'); ?></small>
	</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>