$(document).ready(function() {

    $("#mainHeader").fitText(2.0);
    logoImageSwap();
    toroImageSwap();
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

    function logoImageSwap() {
        if ($(window).width() >= 1000) {
            $(".wordmark").attr("src", "img/peabodyWordmarkSingle.png");
        } else {
            if ($(window).width() < 480) {
                $(".wordmark").attr("src", "img/peabodyWordmarkDouble.png");
            } else if ($(window).width() < 640) {
                $(".wordmark").attr("src", "img/peabodyWordmarkSingle.png");
            } else {
                $(".wordmark").attr("src", "img/peabodyWordmarkDouble.png");
            }
        }
    }

    function toroImageSwap() {
        if ($(window).width() < 640) {
            $(".toro").hide();
        } else {
            $(".toro").show();
        }
    }


    var headerImageSwapDebounced = _.debounce(function(e) {
        // $(".wordmark").attr("src", "img/peabodyWordmarkSingle.png");
        logoImageSwap();
        toroImageSwap();
    }, 25);

    $(window).resize(function() {
        headerImageSwapDebounced();
    });








})