	$(document).ready(function(){
		$('.menuitem img').animate({width: 120}, 0);
		$('.menuitem').mouseover(function(){
				gridimage = $(this).find('img');
				gridimage.stop().animate({width: 140}, 300);
			}).mouseout(function(){
				gridimage.stop().animate({width: 120}, 300);
		});
	}); 
