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

	// Globals to keep track of which label the user is on
	labelNum = 0;
	
	$(window).load(function() {

		initializePage();
		revealPage();
	
	});
	
	$('a#slider-next').click(function () {
		if (labelNum != (beerCount - 1)) {
			labelNum += 1;
		} else {
			labelNum = 0;
		}
		
		sliderNext(sliderWindow, 300);
		changeAllMeterValues(meterWindow, abv[labelNum], ibu[labelNum], srm[labelNum]);
	});
	
	$('a#slider-previous').click(function () {
		if (labelNum != 0) {
			labelNum -= 1;
		} else {
			labelNum = (beerCount - 1);
		}
	
		sliderPrevious(sliderWindow, 300);
		changeAllMeterValues(meterWindow, abv[labelNum], ibu[labelNum], srm[labelNum]);
	});
	
	
	function initializePage() {
		initializeSlider(sliderWindow);
		changePageHighlightColor(highlightColor[labelNum], 1000);
		changeAllMeterValues(meterWindow, abv[labelNum], ibu[labelNum], srm[labelNum]);
	}

	function revealPage() {
		$('#curtain').css('display','none');
	}
	
	function changePageHighlightColor(highlightColor, speed) {
		header.stop().animate({'background-color':highlightColor}, speed);
		sidebar.stop().animate({'background-color':highlightColor}, speed);
		content.stop().animate({'background-color':highlightColor}, speed);
	}
});
