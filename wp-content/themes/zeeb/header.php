<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />




<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/latest.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/core.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/tabs.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/menu.js" type="text/javascript"></script>


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body>


	<div id="header">
		<div id="headerimg"><?php if (is_front_page()) { ?> 
     <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
 <div class="description"><?php bloginfo('description') ?></div>
	</div><?php } else { ?> 
      <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
 <div class="description"><?php bloginfo('description') ?></div>
	</div><?php } ?>
</div>
		<!--  #header -->
<div id="level1">
	
	<div id="topright">
		<div class="feedme">
			<a href="<?php bloginfo('rss2_url'); ?>" title="subscribe for updates and new themes"><img id="bigrss" src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.gif" alt="subscribe" /></a>
		</div>
		
	<?php include (TEMPLATEPATH . "/toprightmsg.php"); ?>

		
	</div>	
	<div id="picture">			
	</div>
<div class="clear"></div>

</div>
