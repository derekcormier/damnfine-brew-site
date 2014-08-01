$(window).load(function()
{
	previousLabelNum = 1;
	labelNum = 0;

	var abv = [5.5, 6, 6.8, 6.8, 6.8, 5.2, "?", 6.8];
	var ibu = [34, 83, 26, 26, 26, 35, "?", 52];
	var srm = [9, 30, 25, 25, 25, 6, "?", 8];
	var srmColor = ["rgb(193, 136, 56)", "rgb(8, 3, 2)", "rgb(33, 19, 18)", "rgb(33, 19, 18)", "rgb(33, 19, 18)",
		"rgb(215, 188, 52)",  "rgb(192, 121, 56)",  "rgb(198, 148, 56)"];
	var highlight = ["#6b754a", "#80B3FF", "#784421", "#953532", "#9d0b0b", "#ff7f2a", "#587b45", "#db593f"];
	
	var sliderCount = $('#label-slider ul li').length;
	var sliderWidth = $('#label-slider ul li').width();
	var sliderHeight = $('#label-slider ul li').height();
	var sliderUlWidth = sliderCount * sliderWidth;
	
	$('#label-slider').css({ width: sliderWidth, height: sliderHeight });
	
	$('#label-slider ul').css({ width: sliderUlWidth, marginLeft: - sliderWidth });
	
    $('#label-slider ul li:last-child').prependTo('#label-slider ul');
	
	$('#beerDetails0').tabs();
	$('#beerDetails1').tabs();
	$('#beerDetails2').tabs();
	$('#beerDetails3').tabs();
	$('#beerDetails4').tabs();
	$('#beerDetails5').tabs();
	$('#beerDetails6').tabs();
	$('#beerDetails7').tabs();
	
	updateMeter(abv[0], ibu[0], srm[0]);
	
	$('#curtain').css({"display":"none"});
	
	setTimeout(function(){
		$('#slider-previous').fadeOut(400);
		$('#slider-next').fadeOut(400);
	}, 4000)
	
	$('#magnify').fadeOut(0);
	
	function updateMeter(abv, ibu, srm) {
		
		var meterwidth = $('.scale').width();
		var abvLimit = 12;
		var ibuLimit = 120;
		var srmLimit = 35;
		
		$('#content').stop().animate({'background-color': highlight[labelNum]},1000);
		$('#header').stop().animate({'background-color': highlight[labelNum]},1000);
		$('#sidebar').stop().animate({'background-color': highlight[labelNum]},1000);
		$('#beer').stop().animate({'border-top-color': srmColor[labelNum]},1000);
		
		updateValue('#abv', abv, abvLimit);
		updateValue('#ibu', ibu, ibuLimit);
		updateValue('#srm', srm, srmLimit);
		
		$('#beerDetails' + labelNum).css({"display":"block"});
		$('#beerDetails' + previousLabelNum).css({"display":"none"});
		
		
		function updateValue(meterID, newValue, valueLimit) {
			if (newValue == "?") {
				$(meterID + ' .needle').stop(true).animate({left: ((meterwidth * .5) + 30)}, {duration: 750});
				$(meterID + ' div .meter-value').text("??");
			} else {
			
				if ($(meterID + ' div .meter-value').text() == "??") {
					if (meterID == '#abv') {
						var currentValue = (abvLimit/2);
					} else if (meterID == '#ibu') {
						var currentValue = (ibuLimit/2);
					} else {
						var currentValue = (srmLimit/2);
					}
				} else {
					var currentValue = parseFloat($(meterID + ' div .meter-value').text());
				}
			
				$(meterID + ' .needle').stop(true).animate({left: (meterwidth * (newValue/valueLimit) + 30)}, {duration: 750});
				
				$({value: currentValue}).animate({value: newValue}, {
					duration: 750,
					step: function() {
						if(meterID == "#abv") {
							$(meterID + ' div .meter-value').text((Math.floor(10*(this.value + ((currentValue - newValue)/750))))/10);
						} else {
							$(meterID + ' div .meter-value').text(Math.floor(this.value + ((currentValue - newValue)/750)));
						}
					},
					complete : function(){
						$(meterID + ' div .meter-value').text(newValue);
					}
				});
			}
		}
	}
	
	function moveLeft() {
		
		if (labelNum != 0) {
			labelNum -= 1;
			$('#recipe' + labelNum).css({"display":"none"});
		} else {
			labelNum = (sliderCount - 1);
		}
		
		
		
		updateMeter(abv[labelNum], ibu[labelNum], srm[labelNum]);
	
        $('#label-slider ul').animate({
            left: + sliderWidth
        }, 300, function () {
            $('#label-slider ul li:last-child').prependTo('#label-slider ul');
            $('#label-slider ul').css('left', '');
        });
    };

    function moveRight() {

		if (labelNum != (sliderCount - 1)) {
			labelNum += 1;
		} else {
			labelNum = 0;
		}
	
		updateMeter(abv[labelNum], ibu[labelNum], srm[labelNum]);
	
        $('#label-slider ul').animate({
            left: - sliderWidth
        }, 300, function () {
            $('#label-slider ul li:first-child').appendTo('#label-slider ul');
            $('#label-slider ul').css('left', '');
        });
    };

    $('a#slider-previous').click(function () {
	
		previousLabelNum = labelNum;
	
        moveLeft();
    });

    $('a#slider-next').click(function () {
	
		previousLabelNum = labelNum;
	
        moveRight();
    });
	
	$('#label-slider').hover(function (){
		$('#slider-previous').fadeIn(400);
		$('#slider-next').fadeIn(400);
		$('#magnify').fadeIn(400);
	},function(){
		$('#slider-previous').fadeOut(400);
		$('#slider-next').fadeOut(400);
		$('#magnify').fadeOut(400);
	});
});