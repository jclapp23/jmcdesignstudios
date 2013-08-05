<?php
/*
Template Name: Service Areas
*/
	get_header(); 
?>

<div id="container">   
<div id="content" class="service_area">
    <div id="main_content">
    
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
    
    <div class="clear"></div>
</div><!-- end content -->
</div><!-- end container -->
