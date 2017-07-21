$(document).ready(function(){
	
	var pos = 0;
	$('#user').click(function(){
		if (pos == 0) {
			$('.login').animate({
				right:0
			}, 300);
			pos = 5;
		}else{
			$('.login').animate({
				right:-330
			}, 300);
			pos = 0;
		}
	});

});