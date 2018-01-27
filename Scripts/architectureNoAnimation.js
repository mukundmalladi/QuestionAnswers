	$(document).ready(function(){
		$('.menuitem img').animate({width: 200}, 0);
		$('.menuitem').mouseover(function(){
				gridimage = $(this).find('img');
				gridimage.stop().animate({width: 400}, 300);
			}).mouseout(function(){
				gridimage.stop().animate({width: 200}, 300);
		});
	}); 
