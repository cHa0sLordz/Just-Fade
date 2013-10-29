// default values
var defaults = {
	fadeSpeed: 1500,
	selectorID: '#justfade'
};

function JustFade() {
	var $active = $(defaults.selectorID + ' .active');
	$next = ($active.parent().next().children().length > 0) ? $active.parent().next().children() : $(defaults.selectorID).children().first().children()
	$next.css('z-index', 2);
	$active.fadeOut(defaults.fadeSpeed, function() {
		$active.css('z-index', 1).show().removeClass('active');
		$next.css('z-index', 3).addClass('active');
	});
};