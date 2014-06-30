$(document).ready(function()
{
	var abv = 6;
	var ibu = 83;
	var srm = 70;
	
	updateMeter();
	
	function updateMeter() {
		
		var meterwidth = $(".scale").width();
		var abvLimit = 12;
		var ibuLimit = 120;
		var srmLimit = 150;
		
		var currentABV = $("#abv div .meter-value").text();
		var currentIBU = $("#ibu div .meter-value").text();
		var currentSRM = $("#srm div .meter-value").text();
		
		$("#abv .needle").stop(true).animate({left: (meterwidth * (abv/abvLimit) - 5)}, {duration: 750});
		
		$({someValue: currentABV}).animate({someValue: abv}, {
			duration: 750,
			step: function() { // called on every step
				// Update the element's text with value:
				$('#abv div .meter-value').text(Math.floor(this.someValue + ((currentABV - abv)/750)));
			},
			complete : function(){
				$('#abv div .meter-value').text(abv);
			}
		});
		
		$("#ibu .needle").stop(true).animate({left: (meterwidth * (ibu/ibuLimit) - 5)}, {duration: 750});
		
		$({someValue: currentIBU}).animate({someValue: ibu}, {
			duration: 750,
			step: function() { // called on every step
				// Update the element's text with value:
				$('#ibu div .meter-value').text(Math.floor(this.someValue + ((currentIBU - ibu)/750)));
			},
			complete : function(){
				$('#ibu div .meter-value').text(ibu);
			}
		});
		
		$("#srm .needle").stop(true).animate({left: (meterwidth * (srm/srmLimit) - 5)}, {duration: 750});
		
		$({someValue: currentSRM}).animate({someValue: srm}, {
			duration: 750,
			step: function() { // called on every step
				// Update the element's text with value:
				$('#srm div .meter-value').text(Math.floor(this.someValue + ((currentSRM - srm)/750)));
			},
			complete : function(){
				$('#srm div .meter-value').text(srm);
			}
		});
	}
});