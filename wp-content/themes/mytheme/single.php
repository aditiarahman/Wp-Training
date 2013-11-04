<?php get_header(); ?>

	<div id="block_portfolio">
	</div>			
            
            <div id="block_content">  
           
				<div id="content_area" class="block">  
					<div class="block_inside">  
						<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>

						<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1><br /> 

						Posted in <?php the_category(","); ?>

						<?php the_time(__('F jS, Y')) ?> by <?php the_author() ?>

						<?php the_content(__('Read the rest of this entry »')); ?>

						<?php endwhile; ?>

						<?php next_posts_link(__('« Older Entries')) ?>

						<?php previous_posts_link(__('Newer Entries »')) ?> <?php else : ?>

						<?php endif; ?>
					</div>  
				</div>  
				
				<div id="sidebar">  
					<img src="<?php bloginfo('template_directory'); ?>/images/ribbon_navigation.png" class="ribbon" alt="Featured Project"/>  
					<div class="block_inside">  
						<?php get_sidebar(); ?>
					</div>  
				</div>  
        
			</div>
    
    </div> <!-- end class container on header -->

<?php get_footer(); ?>