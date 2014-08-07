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
	
// !!! TO BE REMOVED WITH AJAX CALL TO DB !!! //
	const abv = [5.5, 6, 6.8, 6.8, 6.8, 5.2, "?", 6.8];
	const ibu = [34, 83, 26, 26, 26, 35, "?", 52];
	const srm = [9, 30, 25, 25, 25, 6, "?", 8];
	const srmColor = ["rgb(193, 136, 56)", "rgb(8, 3, 2)", "rgb(33, 19, 18)", "rgb(33, 19, 18)", "rgb(33, 19, 18)",
		"rgb(215, 188, 52)",  "rgb(192, 121, 56)",  "rgb(198, 148, 56)"];
	const highlightColor = ["#6b754a", "#80B3FF", "#784421", "#953532", "#9d0b0b", "#ff7f2a", "#587b45", "#db593f"];
	const labelPath = ["./images/mcgbrew.svg", "./images/lights.svg", "./images/singlec.svg", "./images/doublec.svg",
		"./images/triplec.svg", "./images/raven.svg", "./images/bloody.svg", "./images/cold.svg"];
// !!! TO BE REMOVED WITH AJAX CALL TO DB !!! //

	// Global to keep track of which label the user is on
	previousLabelNum = 1;
	labelNum = 0;
	
	$(window).load(function() {

		initializePage();
		revealPage();
	
	});
	
	$('a#slider-next').click(function () {
		sliderNext(sliderWindow);
		incrementLabelNumber();
		
		switchBeer();
	});
	
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
		$('#zoomed-label').attr("src", labelPath[labelNum]);

		$('#magnified').fadeIn(400);
	});
	
	// Clicking on the unmagnify button will return to the page
	$('#magnify-back').click(function () {	
		$('#magnified').fadeOut(400);
	});
	
	// Clicking outside of the zoomed image will return to the page
	$('#unmagnify').click(function () {	
		$('#magnified').fadeOut(400);
	});
	
	$('#magnify-window').hover(function (){
		$('#unmagnify').fadeIn(400);
	},function(){
		$('#unmagnify').fadeOut(400);
	});
	
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
	
	function initializePage() {
		initializeSlider(sliderWindow);
		switchBeer();
		
		$('#slider-previous').fadeOut(2000);
		$('#slider-next').fadeOut(2000);
		$('#magnify').fadeOut(2000);
		
		initializeAllBeerDetailsTabs();
		$('#beerDetails' + labelNum).css({"display":"block"});
	}
	
	function initializeAllBeerDetailsTabs() {
		numberOfDetails = ('.beerDetails').length;
		
		for(i = 0; i < numberOfDetails; i++) {
			$('#beerDetails' + i).tabs();
		}
	}

	function revealPage() {
		$('#curtain').css('display','none');
	}
	
	function switchBeer() {
		changePageHighlightColor(highlightColor[labelNum], 1000);
		changeBeerColor(srmColor[labelNum], 1000);
		changeAllMeterValues(meterWindow, abv[labelNum], ibu[labelNum], srm[labelNum]);
		
		$('#beerDetails' + labelNum).css({"display":"block"});
		$('#beerDetails' + previousLabelNum).css({"display":"none"});
	}
	
	function changePageHighlightColor(highlightColor, speed) {
		header.stop().animate({'background-color':highlightColor}, speed);
		sidebar.stop().animate({'background-color':highlightColor}, speed);
		content.stop().animate({'background-color':highlightColor}, speed);
	}
	function changeBeerColor(beerColor, speed) {
		$('#beer').stop().animate({'border-top-color': beerColor}, speed);
	}
	
	function incrementLabelNumber() {
		previousLabelNum = labelNum;
	
		if (labelNum != (beerCount - 1)) {
			labelNum += 1;
		} else {
			labelNum = 0;
		}
	}
	
	function decrementLabelNumber() {
		previousLabelNum = labelNum;
	
		if (labelNum != 0) {
			labelNum -= 1;
		} else {
			labelNum = (beerCount - 1);
		}
	}
});
