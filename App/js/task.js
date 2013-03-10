$('.goals').show();
$('.progress').hide();

function scrollToElement(selector, time, verticalOffset) {
    time = typeof(time) != 'undefined' ? time : 1000;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    $('html, body').animate({
        scrollTop: offsetTop
    }, time);
}

$('.proceed').click(function () {
    $(this).hide();
    scrollToElement('.goals', 500, -15);
});

$('#saveGoalsButton').click(function() {
   scrollToElement('.goals', 500, -15);
   $('.goals').slideUp();
   $('.progress').slideDown();
});



/* Hører til home */

$('.close').click(function () {
    $('.intro').hide();
});