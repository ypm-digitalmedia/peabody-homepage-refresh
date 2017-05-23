$(document).ready(function() {

    $("#mainHeader").fitText(2.0);

    // $('#slider').mouseover(function() {
    //     $('.carousel-ui').css({ opacity: 0.0, visibility: "visible" }).animate({ opacity: 1.0 });
    // });

    // $('#slider').mouseout(function() {
    //     $('.carousel-ui').css({ opacity: 0.0, visibility: "visible" }).animate({ opacity: 0.0 });
    // });

    // .css({opacity: 0.0, visibility: "visible"}).animate({opacity: 1.0});

    $(".box-item").hover(function() {
        $(this).toggleClass("flipped");
    })









    $(window).resize(function() { console.log($(".box").eq(0).css("width")); });








})