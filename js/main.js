/* =========================== BEGIN CUSTOMIZATIONS ================================= */

var show_alert = false;
var show_alert_until = '2018-03-21'; // FORMAT 'YYYY-MM-DD' - Enter the last day it should be visible

var show_evolved_banner = false;









// SLIDER ALERT
var data_alert = {
    shown: show_alert,
    date: "",
    text: ""
};

var data_slider = [{
        title: "",
        imgURL: "",
        offsetX: { desktop: 0, tablet: 0, mobile: 0 },
        offsetY: { desktop: 0, tablet: 0, mobile: 0 }
    },
    {
        title: "",
        imgURL: "",
        offsetX: { desktop: 0, tablet: 0, mobile: 0 },
        offsetY: { desktop: 0, tablet: 0, mobile: 0 }
    },
    {
        title: "",
        imgURL: "",
        offsetX: { desktop: 0, tablet: 0, mobile: 0 },
        offsetY: { desktop: 0, tablet: 0, mobile: 0 }
    },
    {
        title: "",
        imgURL: "",
        offsetX: { desktop: 0, tablet: 0, mobile: 0 },
        offsetY: { desktop: 0, tablet: 0, mobile: 0 }
    },
    {
        title: "",
        imgURL: "",
        offsetX: { desktop: 0, tablet: 0, mobile: 0 },
        offsetY: { desktop: 0, tablet: 0, mobile: 0 }
    },
    {
        title: "",
        imgURL: "",
        offsetX: { desktop: 0, tablet: 0, mobile: 0 },
        offsetY: { desktop: 0, tablet: 0, mobile: 0 }
    },
    {
        title: "",
        imgURL: "",
        offsetX: { desktop: 0, tablet: 0, mobile: 0 },
        offsetY: { desktop: 0, tablet: 0, mobile: 0 }
    },
    {
        title: "",
        imgURL: "",
        offsetX: { desktop: 0, tablet: 0, mobile: 0 },
        offsetY: { desktop: 0, tablet: 0, mobile: 0 }
    }
];

var data_eventCards = [{
    title: "",
    imgURL: "",
    imgPin: "center",

}];

// example: data_eventCards
//      {
//          title: "TEXT FOR FRONT OF CARD"
//          imgURL: "path/to/front/image.jpg"
//          imgPin: "left|center|right" <-- defaults to "center"
//          
//      }
//






























// PEABODY EVOLVED BANNER
var data_renoBanner = {
    shown: show_evolved_banner,
    text: "<h2 class='blue-shadow'>We're evolving!</h2><p id='renoText' class='blue-shadow'>Visit <a href='http://peabodyevolved.yale.edu' title='Peabody Evolved' aria-label='Peabody Evolved'>Peabody Evolved</a> to learn more about the Peabody’s transformative renovation.</p>"
};

/* =========================== END CUSTOMIZATIONS  ================================= */
/* ===========================                     ================================= */
/* =========================== BEGIN DOMAIN SWITCH ================================= */


// insert switch for siteRoot (localhost vs sprout) - put switch in main.js?

if (location.host.toString().indexOf("sprout018.sprout.yale.edu") > -1) {
    // console.log("you are on sprout018.");
    // use siteRoot = sprout
} else if (location.host.toString().indexOf("localhost:8888") > -1) {
    // console.log("you are on localhost (port 8888).");
    // use siteRoot = localhost
} else if (location.host.toString().indexOf("peabody.yale.edu") > -1) {




    $(".social-icons li a i.fa").css("-moz-transform", "translateY(0)").css("-webkit-transform", "translateY(12px)").css("transform", "translateY(12px)");



    $(".slider-alert-text").css("font-size", "14px!important");


} else {
    // console.log("you are lost.")
    // use siteRoot = localhost
}

var siteRoot = "http://sprout018.sprout.yale.edu/AM-testing/peabody-homepage-refresh/";


/* =========================== END CUSTOMIZATIONS ================================= */



var isMobile = false; //initiate as false
var fliplocks = {};
var fliplock = false;
var fliplockTimeout = null;
var isEmailValid = false;
var formTimeoutLength = 30000;
var formTimeout;
var formLock = false;
var locked_card = null;


var mouseLeaveTimeout;

var sliderHeight = "500px";

$(document).ready(function() {


    // device detection
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;

    // console.log(isMobile ? "MOBILE DEVICE" : "DESKTOP DEVICE");


    $('.theSlider').slick({
        dots: false,
        infinite: true,
        speed: 800,
        lazyLoad: 'progressive',
        fade: true,
        cssEase: 'ease',
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        adaptiveHeight: false,
        pauseOnFocus: false,
        pauseOnHover: false
    });





    /* --------------------- INITIALIZE PAGE ELEMENTS --------------------------- */


//    if (!data_renoBanner.shown) {
//        $(".peabody-evolved").hide();
//        $(".peabody-evolved-separator").show();
//
//    } else {
//        $(".peabody-evolved").show();
//        $(".peabody-evolved-separator").hide();
//
//    }

    // do we show the alert?
    if (data_alert.shown) {
        // is the alert expiration date valid?
        if (show_alert_until && typeof(show_alert_until != 'undefined') && show_alert_until != "") {
            // is the banner expiration date in the future?
            console.warn("the date is: " + moment().format('YYYY-MM-DD') + ".  alert is active, expires " + show_alert_until);
            if (moment().isAfter(show_alert_until, 'day') === false) {
                console.warn("alert is active.");
                setTimeout(function() {
                    $("#alert1").fadeIn();
                }, 1500);
            } else {
                console.warn("alert active, but expired.");
            }
        }
    }


    /* -------------------------------------------------------------------------- */


    logoImageSwap();
    toroImageSwap();

    //CHANGE "box-items" to "box-item" TO RESET FUNCTIONALITY
    $(".box-items").on("tap", function(event) {

        var target = $(event.target);

        if (target.not("[rel=card]")) {
            event.preventDefault();
        }

        var card = $(this).attr("id");

        // console.error(card)

        //check to see if user has clicked a link inside a card
        var isLink = target.attr('data-link-parent');
        var isForm = target.attr('data-form-parent');
        if (typeof isLink !== typeof undefined && isLink !== false) {
            // CLICKED ON A LINK
            // console.warn("THIS IS A LINK", target);
            var link = target.attr("href");

            // IS THIS LINK HIDDEN FROM VIEW?
            if (!locked_card || locked_card != card) {
                // console.log("this card is not already shown.  flip to back.");
                fadeToBack($(this));
                locked_card = card;
            } else {
                // console.log("this card is already shown.  resolve URL.")
                document.location = link;
            }

        } else if (typeof isForm !== typeof undefined && isForm !== false) {
            // console.warn("YOU CLICKED ON A FORM ELEMENT");
            $(this).focus();
        } else {
            // console.log("not a link", target);
            // CLICKED ON AN INERT PART OF THE CARD
            if (!locked_card || locked_card != card) {
                // console.log("this card is not already shown.  flip to back.");
                fadeToBack($(this));
                locked_card = card;
            } else {
                if (target.is(".back-submit")) {
                    console.warn("submit!")
                } else {
                    locked_card = null;
                    fadeToFront();
                }
            }
        }

    });

    // var fadeTimeout;
    $("body").on("tap", function(event) {

        var target = $(event.target);
        // console.log(target);

        if (target.not(".card-row") || target.parents('.card-row').length < 1) {
            // clearTimeout(fadeTimeout);
            // $("body").addClass("colorchange");
            // fadeTimeout = setTimeout(function() {
            //     $("body").removeClass("colorchange");
            // }, 5000);
            locked_card = null;
            fadeToFront();
        }

    })




    $(".box-item").mouseover(function() {
        fadeToBack($(this));
    });

    $(".box-item").mouseleave(function() {
        // flipToFront($(this));
        // fadeToFront($(this));
        // delayedMouseLeave();
    });


    $(".box-item").each(function() {
        var card = $(this).attr("id");
        fliplocks[card] = false;
    });
    // console.log(fliplocks);

    $("#contactForm").submit(function(e) {
        e.preventDefault();
        if (formLock === false) {
            submitForm();
        } else {
            BootstrapDialog.show({
                title: 'Please wait',
                message: 'You have recently submitted an email signup request.  Please try again shortly.',
                type: 'type-warning'
            });
        }
        return false;
    });



    var flipToggle = function(e) {
        $(this).toggleClass('flipped');
    }

    var fadeToggle = function(e) {
        $(this).toggleClass('crossfade');
    }

    // =================================== FLIP ANIMATIONS - DEPRECATED =========================================

    var flipToFront = _.debounce(function(e) {
        setTimeout(function() {
            $(e).removeClass("flipped");
            fliplock = false;
        }, 500);
    }, 100);


    var flipToBack = _.debounce(function(e) {
        $(e).addClass("flipped");
        $(".flipped").not(e).removeClass("flipped");
    }, 100);


    // =================================== FADE ANIMATIONS - CURRENT =========================================

    var fadeToBack = _.throttle(function(e) {

        var card = $(e).attr("id");

        if (locked_card == card) {
            // console.log("DENIED | locked card: " + card);
        } else {
            locked_card = card;
            // console.log("SWITCHING locked card: " + card);

            $(e).addClass("shadow");
            $(e).addClass("faded");
            $(e).find(".front").css("opacity", 0);
            $(e).find(".back").css("opacity", 1);

            $(".faded").not(e).find(".front").css("opacity", 1);
            $(".faded").not(e).find(".back").css("opacity", 0);
            $(".faded").not(e).removeClass("shadow");

        }

    }, 100);

    // var fadeToFront = _.debounce(function(e) {
    //     $(e).removeClass("shadow");
    //     $(e).removeClass("faded");
    //     $(e).find(".front").css("opacity", 1);
    //     $(e).find(".back").css("opacity", 0);
    // }, 0);

    function fadeToFront() {
        $(".faded").find(".front").css("opacity", 1);
        $(".faded").find(".back").css("opacity", 0);
        $(".faded").removeClass("shadow");
    }


    // =============================================================================================

    function resizeSliderImages() {

        $(".slick-slide img").each(function() {
            if ($(this).height() < $(".slick-list").height()) {
                console.log("container is too tall!")
                $(this).css("height", sliderHeight).css("width", "auto");
            } else {
                console.log("container is shorter than image");
                $(this).css("width", "100%").css("height", "auto");
            }
        })

    }



    function logoImageSwap() {
        if ($(window).width() >= 1000) {
            $(".wordmark").attr("src", siteRoot + "img/peabodyWordmarkSingle.png");
        } else {
            if ($(window).width() < 480) {
                $(".wordmark").attr("src", siteRoot + "img/peabodyWordmarkDouble.png");
            } else if ($(window).width() < 640) {
                $(".wordmark").attr("src", siteRoot + "img/peabodyWordmarkSingle.png");
            } else {
                $(".wordmark").attr("src", siteRoot + "img/peabodyWordmarkDouble.png");
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
        logoImageSwap();
        toroImageSwap();
    }, 25);

    $(window).resize(function() {
        headerImageSwapDebounced();
    });








})

function dismissAlert(theID) {
    $(theID).fadeOut();
}

function checkEmail(val) {

    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var matches = emailRegex.test(val);
    if (matches === true) { $("#submit").removeClass("disabled"); } else { $("#submit").addClass("disabled"); }
    isEmailValid = matches;
}

function emailValid() {
    var val = $("#email").val();
    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var matches = emailRegex.test(val);
    return matches;
}


function submitForm() {

    // take in form variables
    // send to signup.php
    // send email
    // notify user with bootstrapDialog modal
    // --> WARNING for error, PEABODY for success
    var formData = { firstName: $("#first_name").val(), lastName: $("#last_name").val(), email: $("#email").val() };

    console.log(formData);
    // $.post(siteRoot+'signup.php', { jsonData: formData, email: formData.email, firstName: formData.firstName, lastName: formData.lastName }, function(response) {
    $.post(siteRoot + 'signup.php', { jsonData: formData }, function(response) {
            console.log(response);
        })
        .done(function() {
            console.log("form submit: success");
            BootstrapDialog.show({
                title: 'Thank you!',
                message: 'We have recieved your request.  Be sure to check your email for updates!',
                type: 'type-success'
            });
            formLock = true;
            formTimeout = setTimeout(function() {
                formLock = false;
                console.log("formLock is reset.");
                clearTimeout(formTimeout);
            }, formTimeoutLength);

        })
        .fail(function(xhr, status, error) {
            console.log("form submit: error");
            console.warn(xhr);
            console.warn(status);
            console.warn(error);
            BootstrapDialog.show({
                title: 'Error',
                message: 'Something went wrong processing your request.  Please try again later.',
                type: 'type-danger'
            });
        })
        .always(function() {
            console.log("form submit: request finished");
        });

    $("#contactForm").find("input[type=text]").val("");
    return false;
}