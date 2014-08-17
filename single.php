<?php get_header(); ?>
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="post" id="post-<?php the_ID(); ?>">
				<header>
					<div><h1><?php the_title(); ?></h1></div>
					<div><b>posted</b>: <?php the_time(' F j, Y') ?><br /> <b>under</b>: <?php the_category(', ') ?></div>
				</header>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div><!--.entry-->
			</article><!--.post-->		
			<section>
				<?php comments_template(); ?>
			</section>
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

