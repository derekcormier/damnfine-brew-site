//*************************************//
// meter.js                            //
// Functions associated with the meter //
//*************************************//

const abvLimit = 12;
const ibuLimit = 120;
const srmLimit = 35;
const needleOffset = 30;
const transitionSpeedInMillis = 750;

function changeAllMeterValues(meterWindow, abv, ibu, srm) {
	abvMeter = meterWindow.find('#abv');
	ibuMeter = meterWindow.find('#ibu');
	srmMeter = meterWindow.find('#srm');
	
	changeMeterValue(abvMeter, abv, abvLimit);
	changeMeterValue(ibuMeter, ibu, ibuLimit);
	changeMeterValue(srmMeter, srm, srmLimit);
}

function changeMeterValue(meter, newValue, valueLimit) {
	moveNeedleTo(meter, newValue, valueLimit, transitionSpeedInMillis);
	changeMeterValueTo(meter, newValue, valueLimit, transitionSpeedInMillis);
}

function isMeterValueQuestionable(value) {
	if(value == '?') {
		return true;
	} else {
		return false;
	}
}

function isLastMeterValueQuestionable(value) {
	if(value == '??') {
		return true;
	} else {
		return false;
	}
}

function moveNeedleTo(meter, newValue, valueLimit, transitionSpeed) {
	meterWidth = meter.find('.scale').width();
	
	if(isMeterValueQuestionable(newValue)) {
		newValue = (valueLimit / 2);
	}
	
	meter.find('.needle').stop(true).animate({left: (meterWidth * (newValue / valueLimit) + needleOffset)}, transitionSpeed);
}

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