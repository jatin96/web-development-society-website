$(document).ready(function() {

	
	var speed = 8000;
	var run = setInterval('rotate()', speed);	
	
	
	var item_width = $('#featured_content li').outerWidth(); 
	var left_value = item_width * (-1); 
        
    
	$('#featured_content li:first').before($('#featured_content li:last'));
	
	
	$('#featured_content ul').css({'left' : left_value});

    
	$('#featured-item-prev').click(function() {

		           
		var left_indent = parseInt($('#featured_content ul').css('left')) + item_width;

        
		$('#featured_content ul:not(:animated)').animate({'left' : left_indent}, 200,function(){    

                      	
			$('#featured_content li:first').before($('#featured_content li:last'));           

			
			$('#featured_content ul').css({'left' : left_value});
		
		});

	         
		return false;
            
	});

 
    //if user clicked on next button
	$('#featured-item-next').click(function() {
		
		//get the right position
		var left_indent = parseInt($('#featured_content ul').css('left')) - item_width;
		
		//slide the item
		$('#featured_content ul:not(:animated)').animate({'left' : left_indent}, 200, function () {
            
            //move the first item and put it as last item
			$('#featured_content li:last').after($('#featured_content li:first'));                 	
			
			//set the default item to correct position
			$('#featured_content ul').css({'left' : left_value});
		
		});
		         
		//cancel the link behavior
		return false;
		
	});        
	
	//if mouse hover, pause the auto rotation, otherwise rotate it
	$('#featured_content').hover(
		
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	); 
        
});

//a simple function to click next link
//a timer will call this function, and the rotation will begin :)  
function rotate() {
	$('#featured-item-next').click();
}