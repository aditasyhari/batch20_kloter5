/*global $, document, window, setTimeout, navigator, console, location*/
$(document).ready(function () {

    // Label effect
    $('input').focus(function () {
        $(this).siblings('label').addClass('active');
    });

    // form switch
    $('a.switch').click(function (e) {
        $(this).toggleClass('active');
        e.preventDefault();

        if ($('a.switch').hasClass('active')) {
            $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
        } else {
            $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
        }
    });

});
