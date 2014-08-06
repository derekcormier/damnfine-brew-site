//*************************************//
// meter.js                            //
// Functions associated with the meter //
//*************************************//

const abvLimit = 12;
const ibuLimit = 120;
const srmLimit = 35;
const needleOffset = 30;

function changeAllMeterValues(meterWindow, abv, ibu, srm) {
	abvMeter = meterWindow.find('#abv');
	ibuMeter = meterWindow.find('#ibu');
	srmMeter = meterWindow.find('#srm');
	
	changeMeterValue(abvMeter, abv, abvLimit);
	changeMeterValue(ibuMeter, ibu, ibuLimit);
	changeMeterValue(srmMeter, srm, srmLimit);
}

function changeMeterValue(meter, newValue, valueLimit) {
	lastValue = parseFloat(meter.find('.meter-value').text());
	
	moveNeedleTo(meter, newValue, valueLimit);
	//changeMeterValueTo(meter, newValue);
}

function isMeterValueQuestionable(value) {
	if(value == '?') {
		return true;
	} else {
		return false;
	}
}

function wasLastMeterValueQuestionable(value) {
	if(value == '??') {
		return true;
	} else {
		return false;
	}
}

function moveNeedleTo(meter, newValue, valueLimit) {
	meterWidth = meter.find('.scale').width();
	
	if(isMeterValueQuestionable(newValue)) {
		newValue = (valueLimit / 2);
	}
	
	meter.find('.needle').stop(true).animate({left: (meterWidth * (newValue / valueLimit) + needleOffset)}, 1000);
}