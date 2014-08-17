<?php get_header(); ?>

	<section id="content">
		<div id="latest">latest posts</div>

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<aside class="post" id="post-<?php the_ID(); ?>">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</aside>
			<?php endwhile; ?>

				<?php next_posts_link('&laquo; Older') ?> | <?php previous_posts_link('Newer &raquo;') ?>

		<?php else : ?>

			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

	</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
