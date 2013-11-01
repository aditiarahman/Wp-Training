<div class="clear whitespace"></div>
<div id="footer">
		<p class="postmetadata"><a href="http://wordpress.org">Poweed by WordPress</a> | <a href="http://rosecitygardens.com">Zeeb Theme by RoseCityGardens.com</a></p></div><!-- #footer -->

<div id="search" class="clearfix">
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<fieldset>
				<legend>Search</legend>
			<label for="s" title="Enter Keyword or Phrase">Type Keyword  or Phrase</label>
<input class="searchbox" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />			<input type="submit" name="submit" class="find" value="Find" />
			</fieldset>

		</form>
	</div>
<div id="absnav">
<div id="navigation"><ul id="nav"><?php wp_list_pages('sort=menu_order&depth=3&title_li='); ?></ul>
</div></div>
<?php wp_footer(); ?>
</body>
</html>
