<?php get_header(); ?>

	<div id="container">
		<div id="content">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="posttitle"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
				<div class="dateme"><small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></div>
				<div class="entry">
					<?php the_content("Continue reading " . get_the_title('', '', false)); ?>				</div>

				<span class="tiny-comments">
                  <?php
                  global $id, $comment;
  	              $number = get_comments_number( $id );
                  ?>
                  <a class="<?php if($number<1) { echo 'No<br />'; }?>Comments" href="<?php comments_link(); ?>"><?php comments_number('No<br />Comments', '1<br />Comment', '%<br />Comments'); ?></a>
                  </span>
                  
                  
               <?php the_tags('<p class="tagged"><b>Tags: </b><br />', ', ', '</p>'); ?><div class="postmetadata">Posted in <?php the_category(', ') ?> <!-- by <?php the_author() ?> --> <?php edit_post_link('| Edit', '', ''); ?> </div>		<div class="clear"></div>
			</div><!-- .post -->



		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<div class="posttitle"><h2>Not Found</h2></div>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>



<div class="clear"></div>
		</div><!-- #content -->
	</div><!-- #container -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
