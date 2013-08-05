<?php
	//SINGLE.PHP DEFAULT TEMPLATE FOR VIEWING SINGLE POSTS/FEEDS, IF NOT SPECIFIED WP DEFAULTS TO INDEX.PHP TEMPLATE
	
	get_header(); 
?>


<div id="content">
    <div id="main_content">
    <h1>Single.php Default Template</h1>
	<?php if(have_posts()): 
 			while(have_posts()): the_post();  ?>
				<div class="entry">
					<h2><?php the_title();?></h2>
					<?php the_content();?>
				</div>
				
			<?php endwhile; 
	      
		  else: 
		  endif; 
     ?>
    
    </div><!-- end main_content -->
    
    <div id="sidebar"></div><!-- end sidebar -->
    
    <div class="clear"></div>
</div><!-- end content -->

            
<?php
	get_footer();
?>