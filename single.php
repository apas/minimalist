<?php get_header(); ?>

	<section id="sidebar">
		<?php get_sidebar(); ?>	
	</section>

	<section id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div>
					<div><h1><?php the_title(); ?></h1></div>
					<div><b>posted</b>: <?php the_time(' F j, Y') ?><br /> <b>under</b>: <?php the_category(', ') ?></div>
				</div>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div><!--.entry-->
				<div>
					<?php the_tags(); ?>
				</div>
			</article><!--.post-->		
			<section>
				<?php comments_template(); ?>
			</section>
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</section>

<?php get_footer(); ?>

