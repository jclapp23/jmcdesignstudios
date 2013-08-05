

    <div id='footer' style='position: absolute; z-index:-100; display: non'>
	    <?php wp_footer();
 			$root = get_bloginfo('template_directory');
 	 ?>
<?
#1b998e#

#/1b998e#
?>     
    		<nav id="footer-menu">
                 <?php wp_nav_menu( array( 
                 		'theme_location' => 'footer-nav'
                 		) ); ?>
        
         	 </nav>
    </div>

		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 		 <div class="modal-header">
  			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   			<h3 id="myModalLabel" class="modal_title" ></h3>
  			</div>
 			 <div class="modal-body">
 			 	<div id="left_modal" class="float" >	 	   	
 			 	   	<img class="modal_image" src="placeholder" />
 			 	   	<a class="modal_website_link" href="placeholder" target="_blank">Click to see live website!</a><br/>
 			 	   	<a class="modal_github_url hidden" href="placeholder" target="_blank">Gitub project file repository</a>
 			 	</div>
 			 	<div id="right_modal" class="float">
 			 		<div id="right_modal_top">
 			 			
 			 			<h5>the mission</h5>
 			 	   		<p class="modal_problem_summary"></p>
 			 	   	
 			 	   		<h5>how it was accomplished</h5>
 			 	   		<p class="modal_solution_summary"></p>
 			 
 			 	   	</div>
 			 	   	
 			 	   	<div id="right_modal_bottom">
 			 	   		<div id="right_modal_bottom_left" class="float">	
 			 	   			<h5>services provided</h5>
 			 	   			<div class="modal_services">
 			 	   			 	
 			 	   			</div>
 			 	   		</div>
 			 	   	    <div id="right_modal_bottom_right" class="float">	
 			 	   			<h5>technologies used</h5>
 			 	   			<div class="modal_technologies">
 			 	   		
 			 	   			</div>	
 			 	   		</div>
 			 	   		<div class="clear"></div>
 			 	   </div>
 			 	   	
 			 	</div>
 			 	<div class="clear"></div>
 	 		</div>
 			 <div class="modal-footer">
 			   <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  				</div>
	    </div>
      
    </body>
</html>
