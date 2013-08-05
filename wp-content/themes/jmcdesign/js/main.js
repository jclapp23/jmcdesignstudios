(function($){
    
    $('body').removeClass('customize-support');
    
    function placeFooter() {   
   		var windHeight = $(window).height();
    	var footerHeight = $('#footer').height();
        var offset = parseInt(windHeight) - parseInt(footerHeight);
    	$('#footer').css('top',offset);
    } //end placefooter function
    
    $(window).resize(function(){
        placeFooter();
    });
    
    placeFooter();
    

    // hide it before it's positioned
    $('#footer').css('display','inline');
	

  $('#roundabout_ul').roundabout({
					minZ: 100,
					maxZ: 300,
					minOpacity: 1,
					minScale: 0.6,
					childSelector: '.mover',
					tilt: -4,
					autoplay: true,
					autoplayDuration: 5000,
					autoplayPauseOnHover: true,
					triggerFocusEvents: true
				
				});
		

  
  $('.mover').focus(function(){ 	  	
  
  	  title = $(this).find('h4').html();
  	  content = $(this).find('h7.project_content').html();
  	  url = $(this).find('h7.hidden_website_url').attr('href');
  	  
  	  $('.monolith .title').html(title);
  	  $('.monolith .title').show();
  	  $('.monolith p.project_content').html(content);
  	  $('.monolith p.project_content').show();
  	  $('.monolith .url').attr('href',url);
  	  $('.monolith .url').show();
  
  });
   	
   	//on page load, load into the center container, the roundabout in focus
  	  title = $('.roundabout-in-focus').find('h4').html();
  	  content = $('.roundabout-in-focus').find('h7.project_content').html();
  	  url = $('.roundabout-in-focus').find('h7.hidden_website_url').attr('href');
  	  
  	  $('.monolith .title').html(title);
  	  $('.monolith .title').show();
  	  $('.monolith p.project_content').html(content);
  	  $('.monolith p.project_content').show();
  	  $('.monolith .url').attr('href',url);
  	  $('.monolith .url').show();

	$('.url').on('click',function(e){
		
		e.preventDefault();

		title = $('.roundabout-in-focus').find('.title').html();
  	    content = $('.roundabout-in-focus').find('.project_content').html();
  	    website_link = $('.roundabout-in-focus').find('h7.hidden_website_url').html();
  	    github_link = $('.roundabout-in-focus').find('h7.hidden_github_url').html();
  	    image_url = $('.roundabout-in-focus').find('h7.image_url').html();
  	    problem_summary = $('.roundabout-in-focus').find('h7.problem_summary').html();
  	    solution_summary = $('.roundabout-in-focus').find('h7.solution_summary').html();
  	    services_list = $('.roundabout-in-focus').find('h7.services_list').html();
  	    technology_list = $('.roundabout-in-focus').find('h7.technology_list').html();
		
		$('#myModal .modal_title').html(title);
		$('#myModal .modal_content').html(content);
		$('#myModal .modal_image').attr('src',image_url);
		$('#myModal .modal_website_link').attr('href',website_link);
		$('#myModal .modal_github_url').attr('href',github_link);
              if (github_link != ""){
			$('#myModal .modal_github_url').removeClass('hidden');
		}
		$('#myModal .modal_problem_summary').html(problem_summary);
		$('#myModal .modal_solution_summary').html(solution_summary);
		
		$('#myModal .modal_services').html(services_list);
		$('#myModal .modal_technologies').html(technology_list);
	    
	});
	
	$('a.recent-project-read-more').on('click',function(e){

		e.preventDefault();
		
		recent_title = $('#left_info_window').find('h7.recent_title').html();
  	    recent_content = $('#left_info_window').find('h7.recent_project_content').html();
  	    recent_website_link = $('#left_info_window').find('h7.recent_hidden_website_url').html();
  	    recent_github_link = $('.roundabout-in-focus').find('h7.recent_github_url').html();
  	    recent_image_url = $('#left_info_window').find('h7.recent_image_url').html();
  	    recent_problem_summary = $('#left_info_window').find('h7.recent_problem_summary').html();
  	    recent_solution_summary = $('#left_info_window').find('h7.recent_solution_summary').html();
  	    services_list = $('#left_info_window').find('h7.recent_services_list').html();
  	    technology_list = $('#left_info_window').find('h7.recent_technology_list').html();
		
		
		$('#myModal .modal_title').html(recent_title);
		$('#myModal .modal_content').html(recent_content);
		$('#myModal .modal_image').attr('src',recent_image_url);
		$('#myModal .modal_website_link').attr('href',recent_website_link);
		$('#myModal .modal_github_url').attr('href',recent_github_link);
		$('#myModal .modal_problem_summary').html(recent_problem_summary);
		$('#myModal .modal_solution_summary').html(recent_solution_summary);
		$('#myModal .modal_services').html(services_list);
		$('#myModal .modal_technologies').html(technology_list);
	    
	});
 	
	
})(jQuery);


