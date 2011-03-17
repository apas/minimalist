<?php get_header(); ?>



	<div id="content">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="post" id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>

			<div class="entry">

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>



				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>



				<p>
						&mdash;<br />
						<b>posted</b>: <?php the_time(' F j, Y') ?><br /> <b>under</b>: <?php the_category(', ') ?>

						
				</p>
 		<div class="social group">
	  <div class="twitter">
	  <a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="apas">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	  <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=button_count&amp;show_faces=false&amp;width=90&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
	  </div>
	  </div>



			</div>

		</div>

	<?php comments_template(); ?>



	<?php endwhile; else: ?>



		<p>Sorry, no posts matched your criteria.</p>



<?php endif; ?>



	</div>

	

<?php get_sidebar(); ?>



<?php get_footer(); ?>

