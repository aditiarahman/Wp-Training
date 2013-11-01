<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header(); ?>

	<div id="container">
		<div id="content">

<div class="post">

	<div class="posttitle"><h2>Archives by Month:</h2></div>

		<div class="entry">		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>
</div>
<div class="post">
	
	<h2>Archives by Subject:</h2>
	<div class="entry">
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>
	</div>
</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
