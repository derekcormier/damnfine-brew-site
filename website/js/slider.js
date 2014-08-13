//**************************************//
// slider.js                            //
// Functions associated with the slider //
//**************************************//


// Setup the slider
function initializeSlider(sliderWindow) {
	slideWidth = sliderWindow.find('li').width();
	slideHeight = sliderWindow.find('li').height();

	// Set the size of the slider window to the slide size
	sliderWindow.css('width', slideWidth);
	sliderWindow.css('height', slideHeight);
	
	// Set the size of the ul beneath the slider window to be big enough to hold
	// 	the previous, current and next slides
	sliderWindow.find('ul').css('width', slideWidth * 3);
	
	// Move the ul beneath the slider window to the left by the width of one 
	//	slide to hide the previous slide
	sliderWindow.find('ul').css('margin-left', -slideWidth);

	// move the last slide in front of the first to prepare for sliderPrevious
	sliderWindow.find('ul li:last-child').prependTo(sliderWindow.find('ul'));
}


// Moves the slider to the next (right) slide
function sliderNext(sliderWindow, slideSpeedInMillis) {
	slideWidth = sliderWindow.find('ul li').width();

	sliderWindow.find('ul').animate({
		left: -slideWidth
	}, slideSpeedInMillis, function() {
		sliderWindow.find('ul li:first-child').appendTo(sliderWindow.find('ul'));
		sliderWindow.find('ul').css('left','');
	});
}


// Moves the slider to the previous (left) slide
function sliderPrevious(sliderWindow, slideSpeedInMillis) {
	slideWidth = sliderWindow.find('ul li').width();

	sliderWindow.find('ul').animate({
		left: slideWidth
	}, slideSpeedInMillis, function() {
		sliderWindow.find('ul li:last-child').prependTo(sliderWindow.find('ul'));
		sliderWindow.find('ul').css('left','');
	});
}
