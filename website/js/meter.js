//*************************************//
// meter.js                            //
// Functions associated with the meter //
//*************************************//

const abvLimit = 12;
const ibuLimit = 120;
const srmLimit = 35;
const needleOffset = 30;
const transitionSpeedInMillis = 750;


// Change the values on the meter
function changeAllMeterValues(meterWindow, abv, ibu, srm) {
	abvMeter = meterWindow.find('#abv');
	ibuMeter = meterWindow.find('#ibu');
	srmMeter = meterWindow.find('#srm');
	
	changeMeterValue(abvMeter, abv, abvLimit);
	changeMeterValue(ibuMeter, ibu, ibuLimit);
	changeMeterValue(srmMeter, srm, srmLimit);
}


// Change a single value on the meter
function changeMeterValue(meter, newValue, valueLimit) {
	moveNeedleTo(meter, newValue, valueLimit, transitionSpeedInMillis);
	changeMeterValueTo(meter, newValue, valueLimit, transitionSpeedInMillis);
}


// Check if the meter value is 'questionable' (null)
function isMeterValueQuestionable(value) {
	if(value == '0' || value == '0.0') {
		return true;
	} else {
		return false;
	}
}


// Check if the previous meter value was 'questionable' (null)
function isLastMeterValueQuestionable(value) {
	if(value == '??') {
		return true;
	} else {
		return false;
	}
}


// Move the needle across the scale
function moveNeedleTo(meter, newValue, valueLimit, transitionSpeed) {
	meterWidth = meter.find('.scale').width();
	
	if(isMeterValueQuestionable(newValue)) {
		newValue = (valueLimit / 2);
	}
	
	meter.find('.needle').stop(true).animate({left: (meterWidth * (newValue / valueLimit) + needleOffset)}, transitionSpeed);
}


// Change the numeric value of the meter
function changeMeterValueTo(meter, newValue, valueLimit, transitionSpeed) {
	meterValueDiv = meter.find('.meter-value');
	oldMeterValue = meterValueDiv.text();

	if(isMeterValueQuestionable(newValue)) {
		$({value: 0}).animate({value: 0}, {
			duration: transitionSpeed,
			step: function() {
				meter.find('.meter-value').text('??');
			},
			complete : function(){
				meter.find('.meter-value').text('??');
			}
		});
	} else {
		if(isLastMeterValueQuestionable(oldMeterValue)) {
			currentValue = (valueLimit / 2);
		} else {
			currentValue = parseFloat(meterValueDiv.text());
		}
	
		// Animate the transition from the old value to the new value
		$({value: currentValue}).animate({value: newValue}, {
			duration: transitionSpeed,
			step: function() {
				if(meter.is('#abv')) {
					// Allow the animating of one decimal place for ABV (to spice it up)
					meter.find('.meter-value').text((Math.floor(10*(this.value + ((currentValue - newValue)/transitionSpeed))))/10);
				} else {
					meter.find('.meter-value').text(Math.ceil(this.value + ((currentValue - newValue)/transitionSpeed)));
				}
			},
			complete : function(){
				meter.find('.meter-value').text(newValue);
			}
		});
	}
}