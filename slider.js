jQuery(document).ready(function()
{
	var sliderCount = $('#label-slider ul li').length;
	var sliderWidth = $('#label-slider ul li').width();
	var sliderHeight = $('#label-slider ul li').height();
	var sliderUlWidth = sliderCount * sliderWidth;
	
	document.getElementById('slideCount').innerHTML = sliderCount;
	document.getElementById('slideWidth').innerHTML = sliderWidth;
	document.getElementById('slideHeight').innerHTML = sliderHeight;
	document.getElementById('slideCount').innerHTML = sliderCount;
	
	$('#label-slider').css({ width: sliderWidth, height: sliderHeight });
	
	$('#label-slider ul').css({ width: sliderUlWidth, marginLeft: - sliderWidth });
	
    $('#label-slider ul li:last-child').prependTo('#label-slider ul');
	
	function moveLeft() {
        $('#label-slider ul').animate({
            left: + sliderWidth
        }, 200, function () {
            $('#label-slider ul li:last-child').prependTo('#slider ul');
            $('#label-slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#label-slider ul').animate({
            left: - sliderWidth
        }, 200, function () {
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