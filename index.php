<?php header("access-control-allow-origin: *"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Yale Peabody Museum of Natural History</title>
    <meta name="description" content="">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="http://peabody.yale.edu/sites/default/files/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="fonts/fontAwesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-dialog.css" />
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/main.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <script>
        // For IE11.
        Modernizr.addTest('preserve3d', function() {
            return Modernizr.testAllProps('transformStyle', 'preserve-3d');
        });
    </script>

    <header>
        <div class="container">
            <a href="http://peabody.yale.edu" title="Peabody Museum: Home" aria-label="Peabody Museum: Home"><img src="img/torosaurus.png" width="275" class="toro" />
                <img class="wordmark" src="img/peabodyWordmarkSingle.png" /></a>
        </div>
    </header>

    <nav class="navbar" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" title="Toggle navigation" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span><h5 style="display: inline;">Menu </h5> <i class="fa fa-bars"></i></span>
          </button>
          
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="spacer"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Visit" aria-label="Visit">Visit</a>
                        <ul class="dropdown-menu">
                            <li><a href="http://peabody.yale.edu/visit/admission-hours" title="Admission and Hours" aria-label="Admission and Hours">Admission &amp; Hours</a></li>
                            <li><a href="http://peabody.yale.edu/visit/directions-parking" title="Directions and Parking" aria-label="Directions and Parking">Directions &amp; Parking</a></li>
                            <li><a href="http://peabody.yale.edu/visit/museum-tours" title="Museum Tours" aria-label="Museum Tours">Museum Tours</a></li>
                            <li><a href="http://peabody.yale.edu/visit/visit-free" title="Visit For Free" aria-label="Visit For Free">Visit For Free</a></li>
                            <li><a href="http://peabody.yale.edu/visit/area-dining" title="Area Dining" aria-label="Area Dining">Area Dining</a></li>
                            <li><a href="http://peabody.yale.edu/visit/audio-tour" title="Audio Tour" aria-label="Audio Tour">Audio Tour</a></li>
                            <li><a href="http://www.yale.edu/newhaven/" target="_blank" title="Yale and New Haven" aria-label="Yale and New Haven">Yale &amp; New Haven</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Events" aria-label="Events">Events</a>
                        <ul class="dropdown-menu">
                            <li><a href="http://peabody.yale.edu/events/calendar" title="Calendar" aria-label="Calendar">Calendar</a></li>
                            <li><a href="http://peabody.yale.edu/events/summer-camps" title="Summer Camps" aria-label="Summer Camps">Summer Camps</a></li>
                            <li><a href="http://peabody.yale.edu/events/february-vacation-two-day-camp" title="February Vacation Two-Day Camp" aria-label="February Vacation Two-Day Camp">February Vacation Two-Day Camp</a></li>
                            <li><a href="http://peabody.yale.edu/events/upcoming-events" title="Upcoming Events" aria-label="Upcoming Events">Upcoming Events</a></li>
                            <li><a href="http://peabody.yale.edu/events/talks" title="Talks" aria-label="Talks">Talks</a></li>
                            <li><a href="http://peabody.yale.edu/visit/facility-rental" title="Facility Rental" aria-label="Facility Rental">Facility Rental</a></li>
                            <li><a href="http://calendar.yale.edu/cal/opa" target="_blank" title="Other Events at Yale" aria-label="Other Events at Yale">Other Events at Yale</a></li>
                            <li><a href="http://peabody.yale.edu/events/email-sign" title="Email Sign-up" aria-label="Email Sign-up">Email Sign-up</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Exhibits" aria-label="Exhibits">Exhibits</a>
                        <ul class="dropdown-menu">
                            <li><a href="http://peabody.yale.edu/exhibits/temporary-exhibits" title="Temporary Exhibits" aria-label="Temporary Exhibits">Temporary Exhibits</a></li>
                            <li><a href="http://peabody.yale.edu/exhibits/permanent-halls" title="Permanent Halls" aria-label="Permanent Halls">Permanent Halls</a></li>
                            <li><a href="http://peabody.yale.edu/education/discovery-room" title="Discovery Room" aria-label="Discovery Room">Discovery Room</a></li>
                            <li><a href="http://peabody.yale.edu/exhibits/online-exhibits" title="Online Exhibits" aria-label="Online Exhibits">Online Exhibits</a></li>
                            <li><a href="http://peabody.yale.edu/exhibits/floor-plans" title="Floor Plans" aria-label="Floor Plans">Floor Plans</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Education" aria-label="Education">Education</a>
                        <ul class="dropdown-menu">
                            <li><a href="http://peabody.yale.edu/education/school-group-visits" title="School and Group Visits" aria-label="School and Group Visits">School &amp; Group Visits</a></li>
                            <li><a href="http://peabody.yale.edu/education/west-campus-programs" title="West Campus" aria-label="West Campus">West Campus</a></li>
                            <li><a href="http://peabody.yale.edu/teachers" title="Teachers" aria-label="Teachers">Teachers</a></li>
                            <li><a href="http://peabody.yale.edu/education/evolutions" title="After School Program" aria-label="After School Program">After School Program</a></li>
                            <li><a href="http://peabody.yale.edu/education/peabody-road-program" title="Outreach" aria-label="Outreach">Outreach</a></li>
                            <li><a href="http://peabody.yale.edu/education/birthday-parties" title="Birthday Parties" aria-label="Birthday Parties">Birthday Parties</a></li>
                            <li><a href="http://peabody.yale.edu/yale-students" title="Yale Students" aria-label="Yale Students">Yale Students</a></li>
                            <li><a href="http://peabody.yale.edu/education/programs-adults" title="Programs for Adults" aria-label="Programs for Adults">Programs for Adults</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Collections" aria-label="Collections">Collections</a>
                        <ul class="dropdown-menu">
                            <li><a href="http://collections.peabody.yale.edu/search/" title="Search the Collections" aria-label="Search the Collections">Search the Collections</a></li>
                            <li><a href="http://peabody.yale.edu/collections/the-collections" title="The Collections" aria-label="The Collections">The Collections</a></li>
                            <li><a href="http://peabody.yale.edu/collections/collection-contacts" title="Collection Contacts" aria-label="Collection Contacts">Collection Contacts</a></li>
                            <li><a href="http://peabody.yale.edu/collections/using-collections" title="Using the Collections" aria-label="Using the Collections">Using the Collections</a></li>
                            <li><a href="http://peabody.yale.edu/collections/office-collections-and-operations" title="Office of Collections and Operations" aria-label="Office of Collections and Operations">Office of Collections &amp; Operations</a></li>
                            <li><a href="http://peabody.yale.edu/collections/facilities" title="Facilities" aria-label="Facilities">Facilities</a></li>
                            <li><a href="http://peabody.yale.edu/collections/collections-policies" title="Collections Policies" aria-label="Collections Policies">Collections Policies</a></li>
                            <li><a href="http://peabody.yale.edu/collections/opportunities" title="Opportunities" aria-label="Opportunities">Opportunities</a></li>
                            <li><a href="http://peabody.yale.edu/scientific-publications" title="Scientific Publications" aria-label="Scientific Publications">Scientific Publications</a></li>
                            <li><a href="http://peabody.yale.edu/education/specimen-identifications" title="Specimen Identifications" aria-label="Specimen Identifications">Specimen Identifications</a></li>
                            <li><a href="http://peabody.yale.edu/collections/database-admin-informatics" title="Database Admin and Informatics" aria-label="Database Admin and Informatics">Database Admin / Informatics</a></li>
                            <li><a href="http://peabody.yale.edu/collections/conservation-lab" title="Conservation Lab" aria-label="Conservation Lab">Conservation Lab</a></li>
                            <li><a href="http://peabody.yale.edu/collections/blog" title="Collections Blog" aria-label="Collections Blog">Collections Blog</a></li>
                            <li><a href="http://peabody.yale.edu/collections/spnhc2012" title="SPNHC 2012" aria-label="SPNHC 2012">SPNHC 2012</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="About Us" aria-label="About Us">About Us</a>
                        <ul class="dropdown-menu">
                            <li><a href="http://peabody.yale.edu/about-us/directors-welcome" title="Director's Welcome" aria-label="Director's Welcome">Director's Welcome</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/mission-history" title="Mission and History" aria-label="Mission and History">Mission &amp; History</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/contact-us" title="Contact Us" aria-label="Contact Us">Contact Us</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/administrative-staff" title="Administrative Staff" aria-label="Administrative Staff">Administrative Staff</a></li>
                            <li><a href="http://peabody.yale.edu/collections/collection-contacts" title="Divisional Staff" aria-label="Divisional Staff">Divisional Staff</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/get-involved" title="Get Involved" aria-label="Get Involved">Get Involved</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/press-room" title="Press Room" aria-label="Press Room">Press Room</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/museum-policies" title="Museum Policies" aria-label="Museum Policies">Museum Policies</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/board-curators" title="Board of Curators" aria-label="Board of Curators">Board of Curators</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/employment-opportunities" title="Employment Opportunities" aria-label="Employment Opportunities">Employment Opportunities</a></li>
                            <li><a href="http://peabody.yale.edu/about-us/connecticut-dinosaur-trail" title="CT Dino Trail" aria-label="CT Dino Trail">CT Dino Trail</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Support" aria-label="Support">Support</a>
                        <ul class="dropdown-menu">
                            <li><a href="https://hopperportal.yale.edu/page.aspx?pid=319" target="_blank" title="Make a Donation Now" aria-label="Make a Donation Now">Make a Donation Now!</a></li>
                            <li><a href="http://peabody.yale.edu/support/we-appreciate-our-supporters" title="Past Supporters" aria-label="Past Supporters">Past Supporters</a></li>
                            <li><a href="http://peabody.yale.edu/support/peabody-renovation" title="Peabody Renovation" aria-label="Peabody Renovation">Peabody Renovation</a></li>
                            <li><a href="http://peabody.yale.edu/support/giving-opportunities-planned-giving" title="Giving Opportunities and Planned Giving" aria-label="Giving Opportunities and Planned Giving">Giving Opportunities &amp; Planned Giving</a></li>
                            <li><a href="http://peabody.yale.edu/members" title="Become a Member" aria-label="Become a Member">Become a Member</a></li>
                            <li><a href="http://peabody.yale.edu/support/oc-marsh-fellows-program" title="O.C. Marsh Fellows Program" aria-label="O.C. Marsh Fellows Program">O.C. Marsh Fellows Program</a></li>
                            <li><a href="http://peabody.yale.edu/support/current-past-projects" title="Current and Past Projects" aria-label="Current and Past Projects">Current &amp; Past Projects</a></li>
                            <li><a href="http://peabody.yale.edu/volunteer" title="Become a Volunteer" aria-label="Become a Volunteer">Become a Volunteer</a></li>
                            <li><a href="http://peabody.yale.edu/support/peabody-institutional-partners" title="Peabody Institutional Partners" aria-label="Peabody Institutional Partners">Peabody Institutional Partners</a></li>
                            <li><a href="http://peabody.yale.edu/support/peabody-overview" title="Peabody Overview" aria-label="Peabody Overview">Peabody Overview</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>


    <div class="jumbotron main-slider">
        <div class="container-fluid slider-container">

            <div id="slider">
                <div class="theSlider" id="theSlider">
                    <!-- BEGIN SLIDER ITEMS -->
                    <div class="item">
                        <img src="img/slider/slider_exteriorToro_am_lq_mini.jpg" alt="Museum Exterior with Torosaurus Statue" aria-label="Museum Exterior with Torosaurus Statue">
                    </div>
                    <div class="item">
                        <img src="img/slider/slider_giantSquid_am_lq_mini.jpg" alt="Giant Squid in Lobby" aria-label="Giant Squid in Lobby">
                    </div>
                    <div class="item">
                        <img src="img/slider/slider_olmecHead_ALT_kz_lq_mini.jpg" alt="Olmec Head" aria-label="Olmec Head">
                    </div>
                    <div class="item">
                        <img src="img/slider/slider_fluidCollection_kz_lq_mini.jpg" alt="Fluid Collections Storage" aria-label="Fluid Collections Storage">
                    </div>
                    <div class="item">
                        <img src="img/slider/slider_horseFossils_kz_lq_mini.jpg" alt="Horse Fossils" aria-label="Horse Fossils">
                    </div>
                    <div class="item">
                        <img src="img/slider/slider_jungleDiorama_am_lq_mini.jpg" alt="Jungle Diorama" aria-label="Jungle Diorama">
                    </div>
                    <div class="item">
                        <img src="img/slider/slider_davidFriendHall_am_lq_mini.jpg" alt="David Friend Hall" aria-label="David Friend Hall">
                    </div>
                    <div class="item">
                        <img src="img/slider/slider_ageOfMammals_am_lq_mini.jpg" alt="The Age of Mammals Mural" aria-label="The Age of Mammals Mural">
                    </div>
                    <!-- END SLIDER ITEMS -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-7 col-md-offset-5 col-lg-4 col-lg-offset-8" style="height: 0px">
                <div class="sliderAlert" id="alert1">

                    <div class="container-fluid">


                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td width="60" style="text-align: left;">
                                    <h1 style="margin-top: 0"><i class="fa fa-comment speech-bubble" aria-hidden="true"></i></h1>
                                </td>
                                <td>
                                    <p style="padding-top: 5px;">
                                        <strong>Monday, October 12</strong>
                                        <span style="float: right"><a href="javascript:dismissAlert('#alert1')"><i class="fa fa-close" aria-hidden="true"></i></a></span>
                                    </p>
                                    <p class="slider-alert-text">David Friend Hall is closed from 2pm until 5pm for a special event.</p>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <div class="jumbotron" id="masthead">
        <div class="container">
            <h1 class="bigTitle" id="mainHeader">Our Mission</h1>
            <p class="jumbotron-paragraph">To serve Yale University by advancing our understanding of earth’s history through geological, biological, and anthropological research, and by communicating the results of this research to the widest possible audience through publication,
                exhibition, and educational programs.</p>
        </div>
    </div>

    <div class="container" id="icons">
        <div class="row">
            <div class="col-sm-2 hidden-xs icon-container-col">
                <p align="center" class="icon-container"><img src="img/icons/icon_ent01.png"></p>
            </div>
            <div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
                <p align="center" class="icon-container"><img src="img/icons/icon_inv01.png"></p>
            </div>
            <div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
                <p align="center" class="icon-container"><img src="img/icons/icon_vp01.png"></p>
            </div>
            <div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
                <p align="center" class="icon-container"><img src="img/icons/icon_bot01.png"></p>
            </div>
            <div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
                <p align="center" class="icon-container"><img src="img/icons/icon_inv02.png"></p>
            </div>
            <div class="col-sm-2 hidden-xs icon-container-col">
                <p align="center" class="icon-container"><img src="img/icons/icon_ant01.png"></p>
            </div>
        </div>
    </div>

    <div class="jumbotron peabody-evolved" id="masthead2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 hidden-xs" style="text-align: right">
                    <img id="evolving_pic" src="img/tower_drawing_crop_paleblue_large_test2.jpg" />

                </div>
                <div class="col-md-8 col-sm-9 col-xs-12" id="evolving_text">
                    <h2 class="blue-shadow">We're evolving!</h2>
                    <p class="blue-shadow" id="renoText">Visit <a href="#" title="Peabody Evolved" aria-label="Peabody Evolved">Peabody Evolved</a> to learn more about the Peabody’s transformative renovation.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container peabody-evolved-separator">
        <hr />
    </div>

    <div class="container">


        <h1 class="mediumTitle" id="upcomingEvents">Featured Exhibitions &amp; Events</h1>
        <!--<hr />-->

        <div class="row">
            
            <!-- CARD 1 -->
            <div class="col-md-6">
                <div class="box-item box" id="card_event1">
                    <figure class="front photo-front photo-front-shadow" style="background-image:url('img/cards/events_exhibitions/Beauty_Beetles_web_image_mini.jpg'); background-position: right;">
                        <div class="front-content">
                            <h2 class="box-header">Beauty and the Beetle</h2>
                        </div>
                    </figure>
                    <figure class="back">
                        <div class="back-content">
                            <h5 class="box-header"><strong>Temporary Exhibition</strong></h5>
                            <h3 class="left plain-case mallory-thin exhibit-heading" id="exhibit1_heading_back">Beauty and the Beetle</h3>
                            <h5 class="left plain-case mallory-mp-light exhibit-subheading" id="exhibit1_subheading_back">Coleoptera in Art and Science</h5>
                            <hr />
                            <p>Artist Gar Waterman and photographer William Guth present dazzling representations of these incredible insects!</p>
                            <p>On view through August 6, 2017.</p>
                            <p class="button-row"><a class="btn btn-peabody" href="http://peabody.yale.edu/exhibits/beauty-and-beetle" role="button" title="More info: Beauty and the Beetle" aria-label="More info: Beauty and the Beetle">More Info</a></p>
                        </div>
                    </figure>
                </div>
            </div>

            <!-- CARD 1 REPLACEMENT -->
            <div class="col-md-6" style="display: none">
                <div class="box-item box" id="card_event1">
                    <figure class="front photo-front photo-front-shadow" style="background-image:url('img/cards/events_exhibitions/summers_last_roar_www_card_mini.jpg'); background-position: right;">
                        <div class="front-content">
                            <h2 class="box-header">Summer's Last Roar</h2>
                            <h5 class="box-date box-date-left">Saturday, August 26</h5>
                        </div>
                    </figure>
                    <figure class="back">
                        <div class="back-content">
                            <h5 class="box-header"><strong>Public Program</strong></h5>
                            <h3 class="left plain-case mallory-thin exhibit-heading" id="exhibit1_heading_back">Summer's Last Roar!</h3>
                            <hr />
                            <p>Celebrate the end of summer with a <strong>free</strong> day at the Peabody!  Explore billions of years of Earth history, engage in a craft activity, win prizes, and interact with real specimens on our SciCarts.</p>
                            <p>Saturday, August 26, 2017 from 10 am to 4 pm.</p>
                            <p class="button-row"><a class="btn btn-peabody" href="http://peabody.yale.edu/events/summers-last-roar" role="button" title="More info: Summer's Last Roar" aria-label="More info: Summer's Last Roar">More Info</a></p>
                        </div>
                    </figure>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
                <div class="box-item box" id="card_event2">
                    <figure class="front photo-front" style="background-image:url('img/cards/events_exhibitions/DinoTakeFlight_web_image_mini.jpg'); background-position: right;">
                        <div class="front-content">
                            <h2 class="box-header">Dinosaurs Take Flight</h2>
                        </div>
                    </figure>
                    <figure class="back">
                        <div class="back-content">
                            <h5 class="box-header"><strong>Temporary Exhibition</strong></h5>
                            <h3 class="left plain-case mallory-thin exhibit-heading" id="exhibit2_heading_back">Dinosaurs Take Flight</h3>
                            <h5 class="left plain-case mallory-mp-light exhibit-subheading" id="exhibit2_subheading_back">The Art of Archaeopteryx</h5>
                            <hr />
                            <p>Six renowned artists from around the world provide a glimpse into their studios and processes as they bring this iconic "missing link" back to life.</p>
                            <p>On view through August 30, 2017.</p>
                            <p class="button-row"><a class="btn btn-peabody" href="http://peabody.yale.edu/exhibits/dinosaurs-take-flight-art-archaeopteryx" role="button" title="More info: Dinosaurs Take Flight" aria-label="More info: Dinosaurs Take Flight">More Info</a></p>
                        </div>
                    </figure>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="button-row"><a class="btn btn-peabody btn-lg" href="http://peabody.yale.edu/events/upcoming-events" role="button" title="View Calendar" aria-label="View Calendar">View Calendar</a></p>
            </div>
        </div>

        <hr />

        <!-- 3-column main call-to-action panels -->
        <h1 class="mediumTitle" id="explore">Explore the Peabody</h1>
        <div class="row" id="actionsRow1">
            <div class="col-md-4">
                <div class="box-item box" id="card_cta1">
                    <figure class="front photo-front photo-front-shadow" style="background-image:url('img/cards/actions/EXHIBITS_am.jpg'); background-position:right;">
                        <div class="front-content">
                            <h2 class="box-header">Exhibitions</h2>
                        </div>
                    </figure>
                    <figure class="back">
                        <div class="back-content">
                            <h5 class="event-back-heading">Exhibitions</h5>
                            <p>Explore the 4.5-billion-year history of the Earth and its life, all under one roof.</p>
                            <p>From mummies and mastodons to dinosaurs and diamonds, there's something fascinating around every corner of the Peabody. Come see for yourself!</p>
                            <p class="button-row"><a class="btn btn-peabody" href="http://peabody.yale.edu/exhibits/permanent-halls" role="button" title="Peabody Museum exhibitions" aria-label="Peabody museum exhibitions">Learn more</a></p>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-item box" id="card_cta2">
                    <figure class="front photo-front photo-front-shadow" style="background-image:url('img/cards/actions/YALESTUDENTS_am.jpg'); background-position:center;">
                        <div class="front-content">
                            <h2 class="box-header">Yale Students</h2>
                        </div>
                    </figure>
                    <figure class="back">
                        <div class="back-content">
                            <h5 class="event-back-heading">Yale Students</h5>
                            <p>The Peabody is YOUR natural history museum. Join our community today.</p>
                            <p class="button-row"><a class="btn btn-peabody" href="http://peabody.yale.edu/yale-students" role="button" title="Learn more about Peabody student programs" aria-label="Learn more about Peabody student programs">More info</a></p>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-item box" id="card_cta3">
                    <figure class="front photo-front photo-front-shadow" style="background-image:url('img/cards/actions/COLLECTIONS_am.jpg'); background-position:center;">
                        <div class="front-content">
                            <h2 class="box-header">Collections &amp; Research</h2>
                        </div>
                    </figure>
                    <figure class="back">
                        <div class="back-content">
                            <h5 class="event-back-heading">Collections &amp; Research</h5>
                            <p>Explore the vast collections and cutting-edge research of the Peabody Museum, or <a href="http://collections.peabody.yale.edu/search/" aria-label="Search the collections database" title="Search the collections database">search the database</a>                                for over 8.5 million objects.</p>
                            <p class="button-row"><a class="btn btn-peabody" href="http://peabody.yale.edu/collections/the-collections" role="button" title="Explore the Collections" aria-label="Explore the Collections">Explore the Collections</a></p>
                        </div>
                    </figure>
                </div>
            </div>
        </div>

        <div class="row" id="actionsRow2">
            <div class="col-md-4">
                <div class="box-item box" id="card_cta4">
                    <figure class="front photo-front photo-front-shadow" style="background-image:url('img/cards/actions/SCHOOLGROUPS_am.jpg'); background-position:center;">
                        <div class="front-content">
                            <h2 class="box-header">School &amp; Group Visits</h2>
                        </div>
                    </figure>
                    <figure class="back">
                        <div class="back-content">
                            <h5 class="event-back-heading">School &amp; Group Visits</h5>
                            <p>Learn about our many offerings and schedule your field trip here. Field trip planning made easy.</p>
                            <p><a href="http://peabody.yale.edu/education/general-information-reservations" title="Field trip information and fees" aria-label="Field trip information and fees">General information and fees</a></p>
                            <a href="http://peabody.yale.edu/education/school-program-registration-form" title="Register for a field trip" aria-label="Register for a field trip"><button class="btn btn-peabody">Register today</button></a>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-item box" id="card_cta5">
                    <figure class="front photo-front photo-front-shadow" style="background-image:url('img/cards/actions/CONNECT_kz.jpg'); background-position:left;">
                        <div class="front-content">
                            <h2 class="box-header">Connect</h2>
                        </div>
                    </figure>
                    <figure class="back">
                        <div class="back-content">
                            <form class="form-horizontal form-contact" name="contact" id="contactForm" action="javascript:void(0)">
                                <fieldset rel="card">
                                    <h5 class="event-back-heading" rel="card">Sign up for our mailing list</h5>

                                    <div id="signup_textfields" rel="card">
                                        <div class="form-group" rel="card">
                                            <div class="col-xs-12" rel="card">
                                                <input rel="card" id="first_name" name="first_name" placeholder="First Name" class="form-control input-md" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group" rel="card">
                                            <div class="col-xs-12" rel="card">
                                                <input rel="card" id="last_name" name="last_name" placeholder="Last Name" class="form-control input-md" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group" rel="card">
                                            <div class="col-xs-12" rel="card">
                                                <input rel="card" id="email" name="email" placeholder="Email Address" class="form-control input-md" required="" type="text" onchange="checkEmail(this.value)" onkeyup="checkEmail(this.value)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" rel="card">
                                        <label class="col-md-4 control-label" for="submit" rel="card"></label>
                                        <div class="col-md-8" rel="card">
                                            <button id="submit" rel="card" name="submit" type="submit" class="btn btn-peabody disabled" title="Sign up for the Peabody mailing list" aria-label="Sign up for the Peabody mailing list">Sign Up</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </figure>
                </div>

            </div>
            <div class="col-md-4">
                <div class="box-item box" id="card_cta6">
                    <figure class="front photo-front photo-front-shadow" style="background-image:url('img/cards/actions/SUPPORT_am.jpg'); background-position:right;">
                        <div class="front-content">
                            <h2 class="box-header">Support</h2>
                        </div>
                    </figure>
                    <figure class="back diagonal-back">
                        <div class="back-content">
                            <div class="back-top back-left">
                                <h5 class="event-back-heading-double">Donate to the Peabody</h5>
                                <p>Every contribution counts!</p>
                                <a href="https://hopperportal.yale.edu/page.aspx?pid=319" target="_blank" title="Donate now" aria-label="Donate now"><button class="btn btn-peabody">Donate now</button></a>
                            </div>
                            <div class="back-bottom back-right">
                                <h5 class="event-back-heading-double">Become a Member</h5>
                                <a href="http://peabody.yale.edu/members" title="Membership information" aria-label="Membership information"><button class="btn btn-peabody">Learn more</button></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>

        <!--<hr />-->


        <!-- Hours & Admission -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="mediumTitle">Hours &amp; Admission</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <p style="text-align: right;">
                    <span class="hours-day"><strong>Sunday</strong></span><br />
                    <span class="hours-day"><strong>Monday</strong></span><br />
                    <span class="hours-day"><strong>Tuesday</strong></span><br />
                    <span class="hours-day"><strong>Wednesday</strong></span><br />
                    <span class="hours-day"><strong>Thursday</strong></span><br />
                    <span class="hours-day"><strong>Friday</strong></span><br />
                    <span class="hours-day"><strong>Saturday</strong></span>
                </p>
            </div>
            <div class="col-xs-6">
                <p>
                    <span class="hours-time">12 pm &ndash; 5 pm</span><br />
                    <span class="hours-time hours-time-closed">CLOSED</span><br />
                    <span class="hours-time">10 am &ndash; 5 pm</span><br />
                    <span class="hours-time">10 am &ndash; 5 pm</span><br />
                    <span class="hours-time">10 am &ndash; 5 pm</span><br />
                    <span class="hours-time">10 am &ndash; 5 pm</span><br />
                    <span class="hours-time">10 am &ndash; 5 pm</span>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p align="center"><br />Openings subject to inclement weather and holiday schedules.<br />Please check our <a href="http://peabody.yale.edu/visit/admission-hours" title="Admissions information" aria-label="Admissions information">admissions</a> page for
                    more information.<br /><br /></p>

                <p align="center">
                    <a href="https://www.google.com/maps/place/Yale+Peabody+Museum+of+Natural+History/@41.31611,-72.920938,15z/data=!4m5!3m4!1s0x89e7d9c874e11dd1:0x368793b0d438047!8m2!3d41.315785!4d-72.921048?hl=en" class="btn btn-peabody" target="_blank" title="Directions to the Peabody"
                        aria-label="Directions to the Peabody"><i class="fa fa-map-marker" aria-hidden="true"></i> Directions</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <ul class="social-icons">
                    <li class="social-icon-facebook"><a href="https://www.facebook.com/YalePeabodyMuseum/" target="_blank" title="Peabody Museum on Facebook" aria-label="Peabody Museum on Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icon-instagram"><a href="https://www.instagram.com/yalepeabodymuseum/" target="_blank" title="Peabody Museum on Instagram" aria-label="Peabody Museum on Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li class="social-icon-twitter"><a href="https://twitter.com/yalepeabody" target="_blank" title="Peabody Museum on Twitter" aria-label="Peabody Museum on Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icon-youtube"><a href="https://www.youtube.com/user/yalepeabodymuseum" target="_blank" title="Peabody Museum's YouTube channel" aria-label="Peabody Museum YouTube channel"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>

        <hr />

        <footer class="row footer-copyright">
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p class="footer-logo footer-item">
                    <a href="http://www.yale.edu" title="Yale University Website" aria-label="Yale University Website"><img src="http://peabody.yale.edu/sites/default/files/images/yaleWordmark.gif" alt="Yale University" width="72" height="36"></a>
                </p>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-11">
                <p class="footer-item footer-text">Copyright &copy; 2017, Yale Peabody Museum of Natural History. All rights reserved.<br /> 170 Whitney Ave, New Haven, CT 06511
                    <span id="footerPrivacyTerms">
                        &nbsp;&bull;&nbsp;<a target="_blank" href="http://www.yale.edu/privacy" title="Yale University Privacy Policy" aria-label="Yale University Privacy Policy">Privacy policy</a>&nbsp;&bull;&nbsp;
                    <a href="http://peabody.yale.edu/about-us/terms-use-what-you-need-know" title="Terms of Use" aria-label="Terms of Use">Terms of Use</a>&nbsp;&bull;&nbsp;
                    </span>
                </p>
            </div>

        </footer>
    </div>
    <!-- /container -->
    
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/lodash.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/bootstrap-dialog.js"></script>
    <script src="js/vendor/jquery.mobile-events.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>


    <script src="js/main.js"></script>

</body>

</html>