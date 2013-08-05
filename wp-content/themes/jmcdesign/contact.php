<?php
/*
Template Name: Contact
*/
	//CONTACT.PHP CUSTOM CONTACT TEMPLATE
	
	get_header(); 
?>

<div id="container">   
<div id="content">
<center>	
		<?php
        if ( 
            !function_exists('dynamic_sidebar')|| 
            !dynamic_sidebar('Contact Sidebar') 
        ) { 
            echo 'sorry no widgets';
        }
        ?>                
 </center>   
</div><!-- end content -->
</div><!-- end container -->
            
<?php
	get_footer();
?>