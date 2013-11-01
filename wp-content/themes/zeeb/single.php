<?php get_header() ?>

	<div id="container">
		<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post"><div class="navigation">
			<div class="alignleft"><?php previous_post_link('%link') ?></div>
			<div class="alignright"><?php next_post_link('%link') ?></div>
		</div><div class="clear"></div></div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<div class="posttitle">	<h1><?php the_title(); ?></h1></div>
			<div class="dateme"><small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></div><div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
					<small><?php the_time('l, F jS, Y') ?> | <?php the_category(', ') ?> | <?php post_comments_feed_link('Comments RSS'); ?> | 

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							<a href="#respond">Respond</a> | <a href="<?php trackback_url(); ?>" rel="trackback">Trackback</a> 

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">Trackback</a>
							
						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('| Edit this entry','','.'); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
