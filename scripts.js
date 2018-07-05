$(document).ready(function() {

	$('#my-slider-1').simpleSlider
	(
		{
			'width'     : 800,
			'height'    : 500,
			'responsive': true
		}
	);

	$('#my-slider-2').simpleSlider
	(
		{
			'width'     : 400,
			'height'    : 300,
			'responsive': true,
			'arrows'    : { autohide: true },
			'captions'  : { autohide: true }
		}
	);

	$('#my-slider-3').simpleSlider
	(
		{
			'width'    : 400,
			'height'   : 300,
			'arrows'   : { autohide: true },
			'captions' : { autohide: true }
		}
	);

});