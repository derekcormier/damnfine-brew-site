$(document).ready(function()
{
	labelNum = 0;

	var abv = [6, 6.8, 6.8, 6.8, 5.2, "?", 6.8];
	var ibu = [83, 26, 26, 26, 35, "?", 52];
	var srm = [30, 25, 25, 25, 6, "?", 8];
	var highlight = ["#80B3FF", "#aaaaaa", "#aaaaaa", "#aaaaaa", "#ff7f2a", "#587b45", "#db593f"];
	
	var sliderCount = $('#label-slider ul li').length;
	var sliderWidth = $('#label-slider ul li').width();
	var sliderHeight = $('#label-slider ul li').height();
	var sliderUlWidth = sliderCount * sliderWidth;
	
	$('#label-slider').css({ width: sliderWidth, height: sliderHeight });
	
	$('#label-slider ul').css({ width: sliderUlWidth, marginLeft: - sliderWidth });
	
    $('#label-slider ul li:last-child').prependTo('#label-slider ul');
	
	updateMeter(abv[0], ibu[0], srm[0]);
	
	function updateMeter(abv, ibu, srm) {
		
		var meterwidth = $('.scale').width();
		var abvLimit = 12;
		var ibuLimit = 120;
		var srmLimit = 35;
		
		$('#labelNum').text(labelNum);
		
		$('#content').animate({'background-color': highlight[labelNum]},600);
		
		updateValue('#abv', abv, abvLimit);
		updateValue('#ibu', ibu, ibuLimit);
		updateValue('#srm', srm, srmLimit);
		
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
					var currentValue = $(meterID + ' div .meter-value').text();
				}
			
				$(meterID + ' .needle').stop(true).animate({left: (meterwidth * (newValue/valueLimit) + 30)}, {duration: 750});
				
				$({someValue: currentValue}).animate({someValue: newValue}, {
					duration: 750,
					step: function() {
						$(meterID + ' div .meter-value').text(Math.floor(this.someValue + ((currentValue - newValue)/750)));
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
        moveLeft();
    });

    $('a#slider-next').click(function () {
        moveRight();
    });
});