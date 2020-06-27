$(document).ready(function () {
	var left = true;
	$('.switch-sort').click(function () {
		if (left) {
			$(this).children().css('left', 0);
			left = false;
		}else{
			$(this).children().css('left', 'unset');
			left = true;
		}
		
	});
});

