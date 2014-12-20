//**************************************//
// home.js                              //
// Functions for the home page of       //
// DamnfineBrew.com	                    //
//**************************************//

// !!! --> Requires slider.js <-- !!! //


$(function($) {

	const sliderWindow = $('#label-slider');
	const meterWindow = $('#meter-box');
	const header = $('#header');
	const sidebar = $('#sidebar');
	const content = $('#content');
	const beerCount = sliderWindow.find('li').length;

	// Globals to keep track of which label the user is on
	previousLabelNum = 1;
	labelNum = 0;
	
	// Beer info from database
	beerInfo = {};
	
	
	// Do this only after all assets have loaded
	$(window).load(function() {

		$.ajax({
			url: "./php/get_beer_info.php",
			async:false})
			.done( function(data){
				$('#curtain').text(data);
				beerInfo = $.parseJSON(data);
		});

		initializePage();
		revealPage();
	
	});
	
	
	// Clicking the right button on the slider
	$('a#slider-next').click(function () {
		sliderNext(sliderWindow);
		incrementLabelNumber();
		
		switchBeer();
	});
	
	
	// Clicking the left button on the slider
	$('a#slider-previous').click(function () {
		sliderPrevious(sliderWindow);
		decrementLabelNumber();
	
		switchBeer();
	});
	
	
	// Ensure that when you click a tab, all the tabs change to that tab
	$('a.recipeTab').click(function () {
		numberOfDetails = ('.beerDetails').length;
		
		for(i = 0; i < numberOfDetails; i++) {
			$('#beerDetails' + i).tabs({active : 0});
		}
	});
	
	
	// Ensure that when you click a tab, all the tabs change to that tab
	$('a.storyTab').click(function () {
		numberOfDetails = ('.beerDetails').length;
		
		for(i = 0; i < numberOfDetails; i++) {
			$('#beerDetails' + i).tabs({active : 1});
		}
	});
	
	
	// Clicking on the magnify button will display the label larger
	$('a#magnify').click(function () {
		

		$('#magnified').fadeIn(400);
		$('#zoomed-label').attr("src", "./images/" + beerInfo[labelNum].label_image + ".svg");
	});
	
	
	// Clicking on the unmagnify button will return to the page
	$('#magnify-back').click(function () {
		$('#zoomed-label').attr("src", "./images/blank.png");
		$('#magnified').fadeOut(400);
	});
	
	
	// Clicking outside of the zoomed image will return to the page
	$('#unmagnify').click(function () {	
		$('#zoomed-label').attr("src", "./images/blank.png");
		$('#magnified').fadeOut(400);
	});
	
	
	// Only show the unmagnify button when you are hovered over the image as
	//	not to block the image
	$('#magnify-window').hover(function (){
		$('#unmagnify').fadeIn(400);
	},function(){
		$('#unmagnify').fadeOut(400);
	});
	
	// Only show the magnify button and the next/previous buttons when the
	//	user is hovered over the slide, as not to block the image
	$('#label-slider').hover(function (){
		$('#slider-previous').stop();
		$('#slider-next').stop();
		$('#magnify').stop();
	
		$('#slider-previous').css('display','none');
		$('#slider-next').css('display','none');
		$('#magnify').css('display','none');
	
		$('#slider-previous').fadeIn(400);
		$('#slider-next').fadeIn(400);
		$('#magnify').fadeIn(400);
	},function(){
		$('#slider-previous').stop();
		$('#slider-next').stop();
		$('#magnify').stop();
		
		$('#slider-previous').css('display','block');
		$('#slider-next').css('display','block');
		$('#magnify').css('display','block');
		
		$('#slider-previous').fadeOut(400);
		$('#slider-next').fadeOut(400);
		$('#magnify').fadeOut(400);
	});
	
	
	// Ready the page
	function initializePage() {
		initializeSlider(sliderWindow);
		switchBeer();
		
		$('#slider-previous').fadeOut(2000);
		$('#slider-next').fadeOut(2000);
		$('#magnify').fadeOut(2000);
		
		initializeAllBeerDetailsTabs();
		$('#beerDetails' + labelNum).css({"display":"block"});
	}
	
	
	// Make the tabs functional
	function initializeAllBeerDetailsTabs() {
		numberOfDetails = ('.beerDetails').length;
		
		for(i = 0; i < numberOfDetails; i++) {
			$('#beerDetails' + i).tabs();
		}
	}

	
	// Remove the 'curtain' over the page to show the content
	function revealPage() {
		$('#curtain').css('display','none');
	}
	
	
	// Change the information associated with the beer
	function switchBeer() {
		changePageHighlightColor(beerInfo[labelNum].highlight_color, 1000);
		changeBeerColor(beerInfo[labelNum].beer_color, 1000);
		changeAllMeterValues(meterWindow, beerInfo[labelNum].abv, beerInfo[labelNum].ibu,
			beerInfo[labelNum].srm);
		
		$('#beerDetails' + labelNum).css({"display":"block"});
		$('#beerDetails' + previousLabelNum).css({"display":"none"});
	}
	
	
	// Change the highlight color of the page
	function changePageHighlightColor(highlightColor, speed) {
		header.stop().animate({'background-color':highlightColor}, speed);
		sidebar.stop().animate({'background-color':highlightColor}, speed);
		content.stop().animate({'background-color':highlightColor}, speed);
	}
	
	
	// Change the color of the beer in the glass
	function changeBeerColor(beerColor, speed) {
		$('#beer').stop().animate({'border-top-color': beerColor}, speed);
	}
	
	
	// Increment the label number, but wrap around if necessary
	function incrementLabelNumber() {
		previousLabelNum = labelNum;
	
		if (labelNum != (beerCount - 1)) {
			labelNum += 1;
		} else {
			labelNum = 0;
		}
	}
	
	
	// Decrement the label number, but wrap around if necessary
	function decrementLabelNumber() {
		previousLabelNum = labelNum;
	
		if (labelNum != 0) {
			labelNum -= 1;
		} else {
			labelNum = (beerCount - 1);
		}
	}
	
	
	// Change the text to the highlight color when hovering over it
	$('a.navigator').hover(function (){
		$(this).find('div').css({color:beerInfo[labelNum].highlight_color});
	},function(){
		$(this).find('div').css({'color':'black'});
	});
	
	
	// Change the text to the highlight color when hovering over it
	$('a.blog-preview-link').hover(function (){
		$(this).find('div>h1').css({color:beerInfo[labelNum].highlight_color});
	},function(){
		$(this).find('div>h1').css({'color':'black'});
	});
	
	
	// Change the text to the highlight color when hovering over it
	$('a.recipeTab').hover(function (){
		$(this).find('div').css({color:beerInfo[labelNum].highlight_color});
	},function(){
		$(this).find('div').css({'color':'black'});
	});
	
	
	// Change the text to the highlight color when hovering over it
	$('a.storyTab').hover(function (){
		$(this).find('div').css({color:beerInfo[labelNum].highlight_color});
	},function(){
		$(this).find('div').css({'color':'black'});
	});
	
});
