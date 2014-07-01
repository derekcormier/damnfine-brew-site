$(document).ready(function()
{
	var abv = 6;
	var ibu = 83;
	var srm = 22;
	
	updateMeter();
	
	function updateMeter() {
		
		var meterwidth = $('.scale').width();
		var abvLimit = 12;
		var ibuLimit = 120;
		var srmLimit = 35;
		
		updateValue('#abv', 6, abvLimit);
		updateValue('#ibu', 83, ibuLimit);
		updateValue('#srm', 22, srmLimit);
		
		function updateValue(meterID, newValue, valueLimit) {
			var currentValue = $(meterID + ' div .meter-value').text();
		
			$(meterID + ' .needle').stop(true).animate({left: (meterwidth * (newValue/valueLimit) - 5)}, {duration: 750});
			
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
});