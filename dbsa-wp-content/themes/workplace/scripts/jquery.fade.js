$(function () {
	$('.fade').hover(function() {
		$(this).fadeTo("fast", 0.7);
	}, function() {
		$(this).fadeTo("fast", 1);
	});
});