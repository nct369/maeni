var loadInterval;

$('#logo').loadgo({
	'opacity':  0.3,
	'image':    '/furniture/logo_white.png',
	'bgcolor': 'transparent'
});

$(document).ready(function () {
	$("body").queryLoader2({
		barColor: "transparent",
		backgroundColor: "transparent",
		percentage: true,
		barHeight: 0,
		minimumTime: 200,
		fadeOutTime: 0
	});

	$('#logo').removeAttr('style');

	loadInterval = setInterval(function(){
		var str = $('#qLpercentage').text();
		str = str.substring(0, str.length - 1);

		$('#logo').loadgo('setprogress', str);
	},200);
});

$(window).load(function() {
	clearInterval(loadInterval);
	$('#logo').loadgo('setprogress', 100);
});