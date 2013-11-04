<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/>
</head>

<body>

<div id="main">
    
    	<div class="container">
        
        	<div id="header">
            
            	<ul id="menu">  
					<?php 
					$args = array(
						'depth'        => 0,
						'show_date'    => '',
						'date_format'  => get_option('date_format'),
						'child_of'     => 0,
						'exclude'      => '',
						'include'      => '',
						'title_li'     => __(''),
						'echo'         => 1,
						'authors'      => '',
						'sort_column'  => 'menu_order, post_title',
						'link_before'  => '',
						'link_after'   => '',
						'walker'       => '',
						'post_type'    => 'page',
							'post_status'  => 'publish' 
					);
					wp_list_pages( $args ); ?> 
                </ul> 
				
				<div id="logo">  
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"/></a>
                    <h1>Creatif</h1>  
                    <small>A Family of Rockstar WordPress Themes</small>  
                </div> 
            
            </div>

			