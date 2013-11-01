<?php get_header(); ?>

	<div id="container">
		<div id="content">
		<?php if (have_posts()) : ?>
<div class="post">	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<div class="posttitle"><h2><?php single_cat_title(); ?></h2></div>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<div class="posttitle"><h2>Tag: <?php single_tag_title(); ?></h2></div><div class="clear"></div>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<div class="posttitle"><h2><?php the_time('F jS, Y'); ?></h2></div>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<div class="posttitle"><h2><?php the_time('F, Y'); ?></h2></div>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<div class="posttitle"><h2><?php the_time('Y'); ?></h2></div>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<div class="posttitle"><h2>Author Archive</h2></div>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<div class="posttitle"><h2>Archives</h2></div>
 	  <?php } ?>


		
</div>
		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<div class='posttitle'><h2>Nothing Found</h2></div>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<div class='posttitle'><h2>Nothing Found</h2></div>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<div class='posttitle'><h2>Nothing Found</h2></div>", $userdata->display_name);
		} else {
			echo("<div class='posttitle'><h2>Nothing Found</h2></div>");
		}
		get_search_form();

	endif;
?>


		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
