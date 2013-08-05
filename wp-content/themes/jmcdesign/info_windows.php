  <div id="info_window_wrapper">  
              <div class="center">
                <div id="left_info_window" class="footer_info_windows">
                
                     <?php
						$my_query = new WP_Query(array(
							'post_type'=>'post',
							'posts_per_page'=>1,
							'order_by'=> 'date',
							'order'=>'DESC', //vs ASC,
							'category_name' => 'portfolio'
						));
					
						/*echo '<pre>';
						
							print_r($my_query);
						
						echo '</pre>';
						*/
					
					?>
                                    
                   <h4>most recent project</h4>
                   
        			    <?php if( $my_query->have_posts() ): while( $my_query->have_posts() ): $my_query->the_post(); ?>
                         
						<?php
                        
                        //Advanced custom fields
						
						//hidden title information
						echo "<h7 class='recent_title'>";
						    the_title();
						echo "</h7>";
							
						$post_excerpt = get_the_excerpt();
						//hidden content information
						echo "<h7 class='recent_project_content'>";
						   echo $post_excerpt;
						echo "</h7>";
								
						       $website_url = get_field('website_url');
								
								//hidden website_url information
								echo "<h7 class='recent_hidden_website_url'>";
									echo $website_url;
								echo "</h7>";
								
								
									
						     //  $github_url = get_field('github_url');
								
								//hidden github_url information
								//echo "<h7 class='recent_github_url'>";
								//	echo $github_url;
								//echo "</h7>";
								
								$img = get_field('project_thumbnail');
								//hidden image_url information
								echo "<h7 class='recent_image_url'>";
									echo $img;
								echo "</h7>";
								
							    $problem_summary = get_field('problem_summary');
								//hidden problem_summary information
								echo "<h7 class='recent_problem_summary'>";
									echo $problem_summary;
								echo "</h7>";
								  $solution_summary = get_field('solution_summary');
								//hidden solution_summary information
								echo "<h7 class='recent_solution_summary'>";
									echo $solution_summary;
								echo "</h7>";
								
								$technology_list_html = '';
								$technology_list = get_field('technologies');
								//hidden technologies information
								echo "<h7 class='recent_technology_list'>";								
									foreach($technology_list as $key=>$value){
										$technology_list_html .= "<p>" . $value . "</p>";
									}
									
									echo $technology_list_html;
								echo "</h7>";
 								
 								$services_list_html = '';
								$services_list = get_field('services');
								
								//hidden services information
								echo "<h7 class='recent_services_list'>";								
									foreach($services_list as $key=>$value){
										$services_list_html .= "<p>" . $value . "</p>";
									}
									
									echo $services_list_html;
								echo "</h7>";
								
							
	
						echo "<img style='width:75px;height:100px;' src='".$img."' />";
                        
                        ?>

                        <p class="info_window_title"><?php the_title(); ?></p> <p><?php echo $post_excerpt; ?>&nbsp;<a class="recent-project-read-more" href="#myModal" role="button" data-toggle="modal">Read more...</a><p>
                                                      
                  <?php endwhile; endif; ?>

                </div>
                <div class="footer_info_windows">
                        <h4>services</h4>
                        <ul>
                                            
                            <li>information architecture & wireframing</li>
                            <li>front end design</li>
                            <li>social media marketing</li>
                            <li>search engine optimzation</li>
                            <li>content management system implementation</li>
                            <li>ongoing site maintenance</li>
                          
                        </ul>
                </div>
	
           <div class="clear"></div>             
		</div>
</div>
         

