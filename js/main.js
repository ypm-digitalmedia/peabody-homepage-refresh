$(document).ready(function() {

    $("#mainHeader").fitText(2.0);

    // $('#slider').mouseover(function() {
    //     $('.carousel-ui').css({ opacity: 0.0, visibility: "visible" }).animate({ opacity: 1.0 });
    // });

    // $('#slider').mouseout(function() {
    //     $('.carousel-ui').css({ opacity: 0.0, visibility: "visible" }).animate({ opacity: 0.0 });
    // });

    // .css({opacity: 0.0, visibility: "visible"}).animate({opacity: 1.0});

    // $(".box-item").hover(_.debounce(function() {
    //     $(this).toggleClass("flipped");
    // })

    // var flip = _.debounce(function(el))
    //     $(el).toggleClass("flipped");
    // }

    // $(".box-item").hover(function() {
    //     flip($(this));
    // });

    $(".box-item").mouseover(function() {
        flipToBack($(this));
    });

    $(".box-item").mouseleave(function() {
        flipToFront($(this));
    });

    var flip = _.debounce(function(e) {
        $(e).toggleClass("flipped");
    }, 100);

    var flipToFront = _.debounce(function(e) {
        $(e).removeClass("flipped");
    }, 100);

    var flipToBack = _.debounce(function(e) {
        $(e).addClass("flipped");
    }, 100);


    // $(window).resize(function() { console.log($(".box").eq(0).css("width")); });








})