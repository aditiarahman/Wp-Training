<div id="container-1">
            <ul>
                <li class="first"><a href="#side-tags"><span>Tags</span></a></li>
                <li><a href="#side-posts"><span>Recent Posts</span></a></li>

                <li><a href="#side-comments"><span>Comments</span></a></li>
                          </ul>
            <div class="sidelist" id="side-tags">
              
<?php wp_tag_cloud('smallest=12&largest=22'); ?>

            </div>
            <div class="sidelist" id="side-posts">
                <ul>
                	<?php wp_get_archives('type=postbypost&limit=5'); ?>
     		</ul>
							
                            </div>
            <div class="sidelist" id="side-comments">
              
         <?php include (TEMPLATEPATH . "/simple_recent_comments.php"); ?>
<?php if (function_exists('src_simple_recent_comments')) {
src_simple_recent_comments(10, 50, '', '');
}
?>  

              </div>
       </div>         <div class="clear"></div>