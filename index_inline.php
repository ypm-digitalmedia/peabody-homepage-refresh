<?php 
	if (strpos($_SERVER['HTTP_HOST'], 'www.') === 0) {
	return;
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://'.substr($_SERVER['HTTP_HOST'],4).$_SERVER['REQUEST_URI']);
	exit(); 

	} else {
		header("access-control-allow-origin: *");
	}
?>

<?php  
session_start(); 
if(!isset($_SESSION['random'])){  
     $_SESSION['randomone'] = mt_rand(100000, 999999);  
     $_SESSION['randomtwo'] = mt_rand(100000, 999999);  
}  
$randomone = $_SESSION['randomone'];  
$randomtwo = $_SESSION['randomtwo'];  
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"> -->
	<meta charset="utf-8">
	<title>Yale Peabody Museum of Natural History</title>
	<meta name="description" content="">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/sites/default/files/favicon.ico" type="image/x-icon" />
	<!--	<link rel="stylesheet" href="https://peabody.yale.edu/sites/default/files/2017/frontpage/fonts/fontAwesome5/css/font-awesome.d6_s.css" />-->
	<link rel="stylesheet" href="/sites/default/files/2017/frontpage/fonts/fontAwesome5/css/all.d6_s.css" />
	<link rel="stylesheet" type="text/css" href="/sites/default/files/2017/frontpage/slick/slick.css" />
	<link rel="stylesheet" href="/sites/default/files/2017/frontpage/css/bootstrap.css" />
	<link rel="stylesheet" href="/sites/default/files/2017/frontpage/css/bootstrap-dialog.css" />
	<style>
		body {
			padding-top: 50px;
			padding-bottom: 20px;
		}

	</style>
	<link rel="stylesheet" href="/sites/default/files/2017/frontpage/css/bootstrap-theme.css" />
	<link rel="stylesheet" href="/sites/default/files/2017/frontpage/css/fonts_d6_s.css" />
	<?php echo '<link rel="stylesheet" href="/sites/default/files/2017/frontpage/css/main.css?v=' . $randomone . '" />'; ?>
	
	<!-- use JS injector instead -->
<!--	<script src="https://10.5.33.98/peabody-homepage-refresh/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
	<!-- ----------------------- -->
</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<div id="skipLinkContainer" role="complementary" aria-label="Skip Link"><a href="#main" class="skip-link">Skip to Main</a></div>
	<div class="container-fluid static-header-alert" id="alertBox" role="complementary" aria-label="Exhibition Closing Message" style="position: inherit!important; min-height: 3.5em; background: yellow!important">
		<span style="clear: both;">
			<p id="closureInfoHeading" align="center" style="display: none; text-align: left; margin: 0 auto; max-width: 70%; position:absolute; top: 5px; left: 5px; z-index: 900"><i class="fas fa-info-circle" aria-hidden="true"></i> <strong>Important Museum Closure Information</strong></p>
			<button id="toggleCountdown" aria-label="Show/Hide Important Museum Closure Information" aria-haspopup="true" aria-expanded="true" style="position: absolute; top: 5px; right: 5px" aria-controls="alertBox"><i class="fas fa-times" aria-hidden="true"></i> Hide</button>
		</span>
		<div id="static-header-alert-content">
			<br />
			<!-- NEW COVID-19 CLOSURE MESSAGE -->
			<p align="center" class="static-header-alert-headline"><i class="fas fa-exclamation-triangle"></i>&nbsp;<strong>Notice to Visitors</strong>&nbsp;<i class="fas fa-exclamation-triangle"></i>
				<br /><p style="text-align: center">The Peabody Museum is closed to the public until <strong>April 15 at the earliest.</strong><br /><br /><strong><a href="/about-us/updates/2020-03-12--covid-19">Click Here</a></strong> for a message from Director David Skelly.</p>
			</p><hr /><p style="text-align: center">The Museum will be closed to the public for renovation starting <strong>July 1, 2020.</strong>&nbsp;<a href="https://peabodyevolved.yale.edu" target="_blank" style="font-size: 12px;" title="Peabody Evolved: Our Upcoming Transformative Renovation">Learn More</a></p>
			<!-- END NEW COVID-19 CLOSURE MESSAGE -->
			<!-- ORIGINAL CLOSURE MESSAGE -->
<!--
			<p align="center" class="static-header-alert-headline"><i class="far fa-clock"></i><strong id="countdown" style="padding-left: 0.25em"></strong> until our exhibitions close!
				<br /><p style="text-align: center">The <strong>Dinosaur and Mammal Halls are already closed</strong>; all other galleries are open.</p><p style="text-align: center">The Museum will be closed to the public for renovation starting <strong>July 1, 2020.</strong></p>
			</p>
			<p align="center" style="font-size:12px; margin-bottom: 5px;"><a href="https://peabodyevolved.yale.edu" target="_blank" class="btn btn-peabody" style="font-size: 12px;" title="Peabody Evolved: Our Upcoming Transformative Renovation">Learn More</a></p>
-->
			<!-- END ORIGINAL CLOSURE MESSAGE -->
		</div>
	</div>
	
	<header>
		<div class="container" style="margin-top: -51px">
			<a href="https://peabody.yale.edu" class="homeLogo" title="Peabody Museum: Home"><img src="/sites/default/files/2017/frontpage/img/torosaurus.png" width="275" class="toro" alt="" />
                <img class="wordmark" src="/sites/default/files/2017/frontpage/img/peabodyWordmarkSingle.png" alt="Peabody Museum: Home" /></a>
		</div>
	</header>

	<nav class="navbar" role="navigation" aria-label="Main Menu Container">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span><h5 style="display: inline;">Menu </h5> <i class="fa fa-bars"></i></span>
          </button>

			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right" role="menubar" aria-label="Main Menu">
					<li class="spacer"></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="submenu1" title="Visit">Visit</a>
						<ul class="dropdown-menu" role="menu" id="submenu1">
							<li><a href="/visit/admission-hours" title="Admission and Hours" role="menuitem">Admission &amp; Hours</a></li>
							<li><a href="/visit/directions-parking" title="Directions and Parking" role="menuitem">Directions &amp; Parking</a></li>
							<li><a href="https://shop.peabody.yale.edu/#/Admission" title="Buy Tickets Online" role="menuitem"><strong class="newStrong">NEW!</strong>&nbsp;&nbsp;Buy Tickets</a></li>
							<li><a href="/members" title="Become a Member" role="menuitem">Become a Member</a></li>
							<li><a href="/visit/museum-tours" title="Museum Tours" role="menuitem">Museum Tours</a></li>
							<li><a href="/visit/visit-free" title="Visit For Free" role="menuitem">Visit For Free</a></li>
							<li><a href="/visit/area-dining" title="Area Dining" role="menuitem">Area Dining</a></li>
							<li><a href="/visit/audio-tour" title="Audio Tour" role="menuitem">Audio Tour</a></li>
							<li><a href="https://www.yale.edu/newhaven/" target="_blank" title="Yale and New Haven" role="menuitem">Yale &amp; New Haven</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-controls="submenu2" role="button" aria-haspopup="true" aria-expanded="false" title="Events">Events</a>
						<ul class="dropdown-menu" role="menu" id="submenu2">
							<li><a href="/events/calendar" title="Calendar" role="menuitem">Calendar</a></li>
							<li><a href="/events/camps" title="Camps" role="menuitem">Camps</a></li>
							<li><a href="/events/upcoming-events" title="Upcoming Events" role="menuitem">Upcoming Events</a></li>
							<li><a href="/events/talks" title="Talks" role="menuitem">Talks</a></li>
							<li><a href="/visit/facility-rental" title="Facility Rental" role="menuitem">Facility Rental</a></li>
							<li><a href="https://calendar.yale.edu" target="_blank" title="Other Events at Yale" role="menuitem">Other Events at Yale</a></li>
							<li><a href="/visit/museum-tours" title="Museum Tours" role="menuitem">Museum Tours</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-controls="submenu3" role="button" aria-haspopup="true" aria-expanded="false" title="Exhibits">Exhibits</a>
						<ul class="dropdown-menu" role="menu" id="submenu3">
							<li><a href="/exhibits/temporary-special-exhibits" title="Temporary & Special Exhibits" role="menuitem">Temporary &amp; Special Exhibits</a></li>
							<li><a href="/exhibits/permanent-halls" title="Permanent Halls" role="menuitem">Permanent Halls</a></li>
							<li><a href="/education/discovery-room" title="Discovery Room" role="menuitem">Discovery Room</a></li>
							<li><a href="/exhibits/online-exhibits" title="Online Exhibits" role="menuitem">Online Exhibits</a></li>
							<li><a href="/exhibits/floor-plans" title="Floor Plans" role="menuitem">Floor Plans</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-controls="submenu4" role="button" aria-haspopup="true" aria-expanded="false" title="Education" >Education</a>
						<ul class="dropdown-menu" role="menu" id="submenu4">
							<li><a href="/education/school-group-visits" title="School and Group Visits" role="menuitem">School &amp; Group Visits</a></li>
							<li><a href="/education/west-campus-programs" title="West Campus" role="menuitem">West Campus</a></li>
							<li><a href="/teachers" title="Teachers" role="menuitem">Teachers</a></li>
							<li><a href="/education/evolutions" title="After School Program" role="menuitem">After School Program</a></li>
							<li><a href="/education/peabody-road-program" title="Outreach" role="menuitem"">Outreach</a></li>
							<li><a href="/education/birthday-parties" title="Birthday Parties" role="menuitem">Birthday Parties</a></li>
							<li><a href="/yale-students" title="Yale Students" role="menuitem">Yale Students</a></li>
							<li><a href="/education/programs-adults" title="Programs for Adults" role="menuitem"">Programs for Adults</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-controls="submenu5" role="button" aria-haspopup="true" aria-expanded="false" title="Collections">Collections</a>
						<ul class="dropdown-menu" role="menu" id="submenu5">
							<li><a href="https://collections.peabody.yale.edu/search/" title="Search the Collections" role="menuitem">Search the Collections</a></li>
							<li><a href="/collections/the-collections" title="The Collections" role="menuitem">The Collections</a></li>
							<li><a href="/collections/collection-contacts" title="Collection Contacts" role="menuitem">Collection Contacts</a></li>
							<li><a href="/collections/using-collections" title="Using the Collections" role="menuitem">Using the Collections</a></li>
							<li><a href="/collections/office-collections-and-research" title="Office of Collections and Research" role="menuitem">Office of Collections &amp; Research</a></li>
							<li><a href="/collections/facilities" title="Facilities" role="menuitem">Facilities</a></li>
							<li><a href="/collections/collections-policies" title="Collections Policies" role="menuitem">Collections Policies</a></li>
							<li><a href="/collections/opportunities" title="Opportunities" role="menuitem">Opportunities</a></li>
							<li><a href="/scientific-publications" title="Scientific Publications" role="menuitem">Scientific Publications</a></li>
							<li><a href="/education/specimen-identifications" title="Specimen Identifications" role="menuitem">Specimen Identifications</a></li>
							<li><a href="/collections/systems-database-admin" title="Systems/Database Admin" role="menuitem">Systems/Database Admin</a></li>
							<li><a href="/collections/informatics" title="Informatics" role="menuitem">Informatics</a></li>
							<li><a href="/collections/conservation-lab" title="Conservation Lab" role="menuitem">Conservation Lab</a></li>
							<li><a href="/collections/blog" title="Collections Blog" role="menuitem">Collections Blog</a></li>
							<li><a href="/collections/spnhc2012" title="SPNHC 2012" role="menuitem">SPNHC 2012</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-controls="submenu6" role="button" aria-haspopup="true" aria-expanded="false" title="About Us">About Us</a>
						<ul class="dropdown-menu" role="menu" id="submenu6">
							<li><a href="/about-us/directors-welcome" title="Director's Welcome" role="menuitem">Director's Welcome</a></li>
							<li><a href="/about-us/mission-history" title="Mission and History" role="menuitem">Mission &amp; History</a></li>
							<li><a href="/about-us/contact-us" title="Contact Us" role="menuitem">Contact Us</a></li>
							<li><a href="/about-us/administrative-staff" title="Administrative Staff" role="menuitem">Administrative Staff</a></li>
							<li><a href="/collections/collection-contacts" title="Divisional Staff" role="menuitem">Divisional Staff</a></li>
							<li><a href="/about-us/get-involved" title="Get Involved" role="menuitem">Get Involved</a></li>
							<li><a href="/about-us/press-room" title="Press Room" role="menuitem">Press Room</a></li>
							<li><a href="/about-us/museum-policies" title="Museum Policies" role="menuitem">Museum Policies</a></li>
							<li><a href="/about-us/board-curators" title="Board of Curators" role="menuitem">Board of Curators</a></li>
							<li><a href="/about-us/employment-opportunities" title="Employment Opportunities" role="menuitem">Employment Opportunities</a></li>
							<li><a href="/about-us/connecticut-dinosaur-trail" title="CT Dino Trail" role="menuitem">CT Dino Trail</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-controls="submenu7" role="button" aria-haspopup="true" aria-expanded="false" title="Support">Support</a>
						<ul class="dropdown-menu" role="menu" id="submenu7">
							<li><a href="https://yale.edu/givepeabody" target="_blank" title="Make a Donation Now" role="menuitem">Make a Donation Now!</a></li>
							<li><a href="/support/we-appreciate-our-supporters" title="Past Supporters" role="menuitem">Past Supporters</a></li>
							<li><a href="/support/peabody-renovation" title="Peabody Renovation" role="menuitem">Peabody Renovation</a></li>
							<li><a href="/support/giving-opportunities-planned-giving" title="Giving Opportunities and Planned Giving" role="menuitem">Giving Opportunities &amp; Planned Giving</a></li>
							<li><a href="/members" title="Become a Member" role="menuitem">Become a Member</a></li>
							<li><a href="/support/current-past-projects" title="Current and Past Projects" role="menuitem">Current &amp; Past Projects</a></li>
							<li><a href="/volunteer" title="Become a Volunteer" role="menuitem">Become a Volunteer</a></li>
							<li><a href="/support/peabody-institutional-partners" title="Peabody Institutional Partners" role="menuitem">Peabody Institutional Partners</a></li>
							<li><a href="/support/peabody-overview" title="Peabody Overview" role="menuitem">Peabody Overview</a></li>
							<li><a href="/members/1866-society" title="1866 Society" role="menuitem">1866 Society</a></li>
							<li><a href="/members/peabody-museum-charitable-donation-policy" title="Charitable Donation Policy" role="menuitem">Charitable Donation Policy</a></li>

						</ul>
					</li>
				</ul>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>

   <main id="main">
	<div class="jumbotron main-slider">
		<div class="container-fluid slider-container">

			<div id="slider" role="region" aria-label="Image Carousel" aria-roledescription="carousel">
				<div class="theSlider" id="theSlider">
					<!-- BEGIN SLIDER ITEMS -->
					<div class="item"  role="group" aria-roledescription="slide" aria-label="1 of 8">
						<img src="/sites/default/files/2017/frontpage/img/slider/slider_exteriorToro_am_lq_mini.jpg" alt="Museum Exterior with Torosaurus Statue">
					</div>
					<div class="item"  role="group" aria-roledescription="slide" aria-label="2 of 8">
						<img src="/sites/default/files/2017/frontpage/img/slider/slider_giantSquid_am_lq_mini.jpg" alt="Giant Squid in Lobby">
					</div>
					<div class="item"  role="group" aria-roledescription="slide" aria-label="3 of 8">
						<img src="/sites/default/files/2017/frontpage/img/slider/slider_olmecHead_ALT_kz_lq_mini.jpg" alt="Olmec Head">
					</div>
					<div class="item"  role="group" aria-roledescription="slide" aria-label="4 of 8">
						<img src="/sites/default/files/2017/frontpage/img/slider/slider_fluidCollection_kz_lq_mini.jpg" alt="Fluid Collections Storage">
					</div>
					<div class="item"  role="group" aria-roledescription="slide" aria-label="5 of 8">
						<img src="/sites/default/files/2017/frontpage/img/slider/slider_horseFossils_kz_lq_mini.jpg" alt="Horse Fossils">
					</div>
					<div class="item"  role="group" aria-roledescription="slide" aria-label="6 of 8">
						<img src="/sites/default/files/2017/frontpage/img/slider/slider_jungleDiorama_am_lq_mini.jpg" alt="Jungle Diorama">
					</div>
					<div class="item"  role="group" aria-roledescription="slide" aria-label="7 of 8">
						<img src="/sites/default/files/2017/frontpage/img/slider/slider_davidFriendHall_am_lq_mini.jpg" alt="David Friend Hall">
					</div>
					<div class="item"  role="group" aria-roledescription="slide" aria-label="8 of 8">
						<img src="/sites/default/files/2017/frontpage/img/slider/slider_ageOfMammals_am_lq_mini.jpg" alt="The Age of Mammals Mural">
					</div>
					<!-- END SLIDER ITEMS -->
				</div>
				<span id="sliderCtrlContainer"><span class="btnHolder"></span><span class="arrowsHolder"></span><span class="dotsHolder"></span></span>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-7 col-md-offset-5 col-lg-4 col-lg-offset-8" style="height: 0px">
				<div class="sliderAlert" id="alert1">

					<div class="container-fluid">


						<table cellpadding="0" cellspacing="0" border="0" width="100%" role="presentation">
							<tr>
								<td width="60" style="text-align: left;">
									<div style="margin-top: 0" class="h1"><i class="fa fa-comment speech-bubble" aria-hidden="true"></i></div>
								</td>
								<td>
									<p style="padding-top: 5px;">
<!-- ALERT DATE -->
<strong>Friday, October 25</strong>
<!-- /DATE -->
										<span style="float: right"><a href="javascript:dismissAlert('#alert1')"><span class="sr-only">Close</span><i class="fa fa-close" aria-hidden="true"></i></a></span>
									</p>
<!-- ALERT TEXT -->
<p class="slider-alert-text">The third floor of the Peabody will close at noon. The Museum will close at 3 PM.</p>
<!-- /TEXT -->
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
			<h1 class="bigTitle" id="mainHeader">Discover Your World</h1>
			<p class="jumbotron-paragraph">
				<strong>Welcome to the Peabody Museum of Natural History!</strong>
			</p>
			<p class="jumbotron-paragraph">
				We're home to ten scientific collections that tell the story of our Earth, its life, history and cultures. Our exhibitions, events and educational programs have enriched the Yale and New Haven communities, and beyond, since 1866. Through our doors you'll share in the discoveries of generations of scientists and adventurers past, present and future.
			</p>
		</div>
	</div>


	<div class="container" id="topCta">
		<div class="row">
			<div class="col-sm-6 col-xs-12 two-column">
				<p align="center"><a class="btn btn-peabody btn-lg" href="https://shop.peabody.yale.edu/#/Admission" role="button" aria-label="Buy Tickets Online"><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Buy Tickets Online</a></p>
				<p class="jumbotron-paragraph"><strong style="color: #EE0000">NEW!</strong> Skip the line and purchase your admission tickets right from your web browser. Tickets are valid for one year from purchase. Click the button above to get started!</p>
			</div>
			<div class="col-sm-6 col-xs-12 two-column">
				<p align="center"><a class="btn btn-peabody-green btn-lg" href="/members" role="button" aria-label="Become a Member"><i class="fas fa-user"></i>&nbsp;&nbsp;Become a Member</a></p>
				<p class="jumbotron-paragraph">Your support unlocks a world of benefits! FREE unlimited admission and parking at the Peabody; 10% Museum Store discounts; Exclusive invitations to exhibition openings; Discounts on programs and events, store items, and more!</p>
			</div>
		</div>
	</div>

	<div class="container" id="icons">
		<div class="row">
			<div class="col-sm-2 hidden-xs icon-container-col">
				<p align="center" class="icon-container"><img src="/sites/default/files/2017/frontpage/img/icons/icon_ent01.png" alt=""></p>
			</div>
			<div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
				<p align="center" class="icon-container"><img src="/sites/default/files/2017/frontpage/img/icons/icon_inv01.png" alt=""></p>
			</div>
			<div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
				<p align="center" class="icon-container"><img src="/sites/default/files/2017/frontpage/img/icons/icon_vp01.png" alt=""></p>
			</div>
			<div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
				<p align="center" class="icon-container"><img src="/sites/default/files/2017/frontpage/img/icons/icon_bot01.png" alt=""></p>
			</div>
			<div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
				<p align="center" class="icon-container"><img src="/sites/default/files/2017/frontpage/img/icons/icon_inv02.png" alt=""></p>
			</div>
			<div class="col-sm-2 hidden-xs icon-container-col">
				<p align="center" class="icon-container"><img src="/sites/default/files/2017/frontpage/img/icons/icon_ant01.png" alt=""></p>
			</div>
		</div>
		<!-- HIDE THIS WHEN THE SNIPPET GOES LIVE -->
		<!--		<hr />-->
		<!--             -->
	</div>


	<div class="container-fluid peabody-evolved-separator" id="evolved-banner">

		<div id="evolved-banner-inner"></div>

		<div class="jumbotron peabody-evolved-banner" style="padding-right: 0!important">
			<div class="container-fluid">
				<div class="row">
					<div class="col-hidden-xs col-sm-6 col-md-7"></div>
					<div class="col-xs-12 col-sm-6 col-md-5" id="evolving_text">
						<h2 class="blue-shadow">We're evolving!</h2>
						<p id="renoText" class="blue-shadow">Visit our new site, <a href="https://peabodyevolved.yale.edu" title="Peabody Evolved">Peabody Evolved</a>, to learn more about the Peabody’s transformative renovation.</p>
						<p><a class="btn btn-peabody btn-lg" href="https://peabodyevolved.yale.edu" role="button" aria-label="Peabody Evolved, Learn More"><i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">


		<h1 class="mediumTitle" id="upcomingEvents">Featured Exhibitions &amp; Programs</h1>
		<!--<hr />-->

		<div class="row card-row">

			<!-- BEGIN CARDS -->
			
			<!-- CARD 2013953340 -->
			<div class="col-md-6">
				<div class="box-item box faded" id="card_96_2013953340">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image: url('https://peabody.yale.edu/sites/default/files/2017/frontpage/img/cards/events_exhibitions/summercamp2020_IMG_9869_webcard-mini.jpg'); background-position: center center; ">
						<div class="front-content">
							<figcaption><h2 class="box-header">2020 Summer Camps</h2></figcaption>
							<h5 class="box-date box-date-right">Registration Open!</h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header">Registration Open!</h5>
							<h3 class="left plain-case normal-weight mallory-thin exhibit-heading compress-h3" id="card_evex_title96_2013953340">2020 Summer Camps</h3>
							<div class="left plain-case normal-weight mallory-mp-light exhibit-subheading" id="card_evex_subtitle96_2013953340"></div>
							<hr />
							<p>Join us for an exciting Summer of learning and exploration!  Our summer camps for grades 3-7 include a mix of classroom-based activities, collections visits, field trips and more!</p></p>
							<p><i class="far fa-clock"></i> July 6 through August 14, 2020</p>
							<p class="button-row"><a data-link-parent="card_evex_96_2013953340" class="btn btn-peabody back-link" href="/events/camps" role="button" aria-label="More info: Summer Camps 2020">More Info</a></p>
						</div>
					</figure>
				</div>
			</div>
			
			<!-- CARD 1172760170 -->
			<div class="col-md-6" style="display: none">
				<div class="box-item box faded" id="card_97_1172760170">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image: url('https://peabody.yale.edu/sites/default/files/2017/frontpage/img/cards/events_exhibitions/Gray-Tree-Frog-TLeenders-mini.jpg'); background-position: center center; ">
						<div class="front-content">
							<figcaption><h2 class="box-header">Frogwatch Training Workshops</h2></figcaption>
							<h5 class="box-date box-date-right">Evenings in March </h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header">Evening Workshops</h5>
							<h3 class="left plain-case normal-weight mallory-thin exhibit-heading compress-h3" id="card_evex_title97_1172760170">Become a FrogWatch Citizen Scientist!</h3>
							<div class="left plain-case normal-weight mallory-mp-light exhibit-subheading" id="card_evex_subtitle97_1172760170"></div>
							<hr />
							<p>The Museum is looking for volunteers to help monitor frog populations in nearby wetlands during the spring and summer.  Sign up for one of three evening workshops in March!</p>
							<p><i class="far fa-clock"></i> March 4th, 6th, &amp; 13th, 2020</p>
							<p class="button-row"><a data-link-parent="card_evex_97_1172760170" class="btn btn-peabody back-link" href="/events/become-a-frogwatch-citizen-scientist" role="button" title="More info: Frogwatch Training Workshops" aria-label="Register Now: Frogwatch Training Workshops">Register Now</a></p>
						</div>
					</figure>
				</div>
			</div>

			<!-- CARD 9879165194 -->
			<div class="col-md-6" style="display: none">
				<div class="box-item box faded" id="card_97_9879165194">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image: url('https://peabody.yale.edu/sites/default/files/2017/frontpage/img/cards/events_exhibitions/akitu-webcard-2020-02-24-mini.jpg'); background-position: center center; ">
						<div class="front-content">
							<figcaption><h2 class="box-header">Akitu: A Celebration of the Babylonian New Year</h2></figcaption>
							<h5 class="box-date box-date-right">Saturday, March 21 </h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header">Family Day</h5>
							<h3 class="left plain-case normal-weight mallory-thin exhibit-heading compress-h3" id="card_evex_title97_9879165194">Akitu</h3>
							<div class="left plain-case normal-weight mallory-mp-light exhibit-subheading" id="card_evex_subtitle97_9879165194">A Celebration of the Babylonian New Year</div>
							<hr />
							<p>Join us for a fun family day and engage with the daily lives of ancient Mesopotamians in celebration of Akitu, the Babylonian New Year! Experience recipes, demonstrations, activities and more.</p>
							<p><i class="far fa-clock"></i> Saturday, March 21, 10:00 am &ndash; 4:00 pm</p>
							<p class="button-row"><a data-link-parent="card_evex_97_9879165194" class="btn btn-peabody back-link" href="/events/akitu-celebration-babylonian-new-year" role="button" title="More info: Akitu: A Celebration of the Babylonian New Year" aria-label="More Info: Akitu: A Celebration of the Babylonian New Year">More Info</a></p>
						</div>
					</figure>
				</div>
			</div>

			<!-- CARD 6516516195 -->
			<div class="col-md-6" style="display: none">
				<div class="box-item box faded" id="card_97_6516516195">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image: url('https://peabody.yale.edu/sites/default/files/2017/frontpage/img/cards/events_exhibitions/Kirk_Johnson_webcard_2_26_20-mini.jpg'); background-position: left center; ">
						<div class="front-content">
							<figcaption><h2 class="box-header">Polar Crocodiles, Pickled Gorillas...</h2></figcaption>
							<h5 class="box-date box-date-right">Tuesday, March 24</h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header">Special Lecture</h5>
							<h3 class="left plain-case normal-weight mallory-thin exhibit-heading compress-h3" id="card_evex_title97_6516516195">Polar Crocodiles, Pickled Gorillas</h3>
							<div class="left plain-case normal-weight mallory-mp-light exhibit-subheading" id="card_evex_subtitle97_6516516195">and the Future of Natural History Museums</div>
							<hr />
							<p>Big urban natural history museums became popular long ago, yet remain relevant in our digital age. Kirk Johnson, the director of the Smithsonian’s largest museum, will tell us why he thinks these museums will provide solutions to 21st-century challenges.</p>
							<p><i class="far fa-clock"></i> Tuesday, March 24 at 4:30 pm</p>
							<p class="button-row"><a data-link-parent="card_evex_97_6516516195" class="btn btn-peabody back-link" href="events/special-lecture/polar-crocodiles-pickled-gorillas-and-future-natural-history-museums" role="button" title="More info: Special Lecture with Kirk Johnson" aria-label="More Info: Special Lecture with Kirk Johnson">More Info</a></p>
						</div>
					</figure>
				</div>
			</div>
			
			<!-- CARD 1690031384 -->
			<div class="col-md-6">
				<div class="box-item box faded" id="card_75_1690031384">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image: url('https://peabody.yale.edu/sites/default/files/2017/frontpage/img/cards/events_exhibitions/NSI_exh_webcard_2019-mini.jpg'); background-position: right center; ">
						<div class="front-content">
							<figcaption><h2 class="box-header">Seeing Nature Through Art</h2></figcaption>
							<h5 class="box-date box-date-right">On View Now </h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header">Temporary Exhibition</h5>
							<h3 class="left plain-case normal-weight mallory-thin exhibit-heading compress-h3" id="card_evex_title75_1690031384">Seeing Nature Through Art</h3>
							<h5 class="left plain-case normal-weight mallory-mp-light exhibit-subheading" id="card_evex_subtitle75_1690031384">Works of Natural Science Illustration</h5>
							<hr />
							<p>Representing a wide range of artistic styles and media, this impactful exhibit features the work of the Museum’s Natural Science Illustration Program instructors.</p>
							<p><i class="far fa-clock"></i> On view through June 2020</p>
							<p class="button-row"><a data-link-parent="card_evex_75_1690031384" class="btn btn-peabody back-link" href="/exhibits/seeing-nature-through-art" role="button" aria-label="Artists & Info: Seeing Nature Through Art">Artists &amp; Info</a></p>
						</div>
					</figure>
				</div>
			</div>

			<!-- CARD 6 -->
			<div class="col-md-6">
				<div class="box-item box" id="card_event6">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image:url('https://peabody.yale.edu/sites/default/files/2017/frontpage/img/cards/events_exhibitions/NSI_258_WATERCOLOR-II.jpg'); background-position: center;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Adult Art Classes</h2></figcaption>
							<h5 class="box-date box-date-right">Register Now</h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header"><strong>Ongoing</strong></h5>
							<h3 class="left plain-case mallory-thin exhibit-heading" id="exhibit6_heading_back">Adult Art Classes</h3>
							<h5 class="left plain-case mallory-mp-light exhibit-subheading" id="exhibit6_subheading_back">Programs in Natural Science Illustration</h5>
							<hr/>
							<p>Join us for our unique art classes and workshops! Select from a wide range of nature-themed drawing and painting classes to help capture your love of nature.</p>
							<p class="button-row"><a data-link-parent="card_event6" class="btn btn-peabody back-link" href="/education/natural-science-illustration-courses" role="button" aria-label="More info: Natural Science Illustration Program">More Info</a>
							</p>
						</div>
					</figure>
				</div>
			</div>

			<!-- CARD 2 -->
			<div class="col-md-6">
				<div class="box-item box" id="card_event2">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image:url('https://peabody.yale.edu/sites/default/files/2017/frontpage/img/cards/events_exhibitions/ancient_mesopotamia_speaks_NCBS00021_silo-mini.jpg'); background-position: center;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Ancient Mesopotamia Speaks</h2></figcaption>
							<h5 class="box-date box-date-right">On view now</h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header"><strong>Temporary Exhibition</strong></h5>
							<h3 class="left plain-case mallory-thin exhibit-heading" id="exhibit2_heading_back">Ancient Mesopotamia Speaks</h3>
							<h5 class="left plain-case mallory-mp-light exhibit-subheading compress-h5" id="exhibit2_subheading_back">Highlights from the Yale Babylonian Collection</h5>
							<hr />
							<p>Ancient Mesopotamia, “the Land Between the Rivers,” was the birthplace of writing, urban culture, the state, and many other concepts and institutions that shape our world to this day.  This groundbreaking exhibition brings that ancient world to life.</p>
							<p><i class="far fa-clock"></i> On view through June 2020.</p>
							<p class="button-row"><a data-link-parent="card_event2" class="btn btn-peabody back-link" href="/exhibits/ancient-mesopotamia-speaks" role="button" aria-label="More info: Ancient Mesopotamia Speaks">More Info</a></p>
						</div>
					</figure>
				</div>
			</div>

			<!-- CARD 9 -->
			<div class="col-md-6" style="display: none">
				<div class="box-item box" id="card_event9">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image:url('https://peabody.yale.edu/sites/default/files/2017/frontpage/img/cards/events_exhibitions/Gold_event card_2018-4-10-mini.jpg'); background-position: right;">
						<div class="front-content">
							<figcaption><h2 class="box-header">California Gold</h2></figcaption>
							<h5 class="box-date box-date-right">On View Now</h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header"><strong>Special Exhibition</strong></h5>
							<h3 class="left plain-case mallory-thin exhibit-heading" id="exhibit9_heading_back">California Gold</h3>
							<h5 class="left plain-case mallory-mp-light exhibit-subheading" id="exhibit9_subheading_back">Modern Marvels from the Golden State</h5>
							<hr />
							<p>Experience the beauty and splendor of California gold. This very special collection features 23 stunning pieces from the Golden State. </p>
							<p>On view now.</p>
							<p class="button-row"><a data-link-parent="card_event9" class="btn btn-peabody back-link" href="/exhibits/california-gold" role="button"  aria-label="More info: California Gold">More Info</a></p>
						</div>
					</figure>
				</div>
			</div>

			<!-- END CARDS -->

		</div>

		<div class="row">
			<div class="col-md-12">
				<p align="center" style="text-align: center">
				<strong>NOTE:</strong> The Peabody Museum will be closed, and postponing or canceling all public events and tours until <strong>April 15th at the earliest.</strong><br />
					<a href="/about-us/updates/2020-03-12--covid-19" title="More info: Event and tour cancellation">More Info</a>
				</p>
				<p class="button-row"><a class="btn btn-peabody btn-lg" href="/events/upcoming-events" role="button" title="View Calendar"><i class="far fa-calendar-alt"></i> View Calendar</a></p>
			</div>
		</div>

		<hr />

		<!-- 3-column main call-to-action panels -->
		<h1 class="mediumTitle" id="explore">Explore the Peabody</h1>
		<div class="row card-row" id="actionsRow1">
			<div class="col-md-4">
				<div class="box-item box" id="card_cta1">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/EXHIBITS_am.jpg'); background-position:right;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Visit</h2></figcaption>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading">Visit</h5>
							<p>Explore the 4.5-billion-year history of the Earth and its life, all under one roof. From mummies and mastodons to dinosaurs and diamonds, there's something fascinating around every corner of the Peabody. Come see for yourself!</p>
							<p><a href="/exhibits/">Learn more about our exhibitions</a></p>
							<p class="button-row"><a data-link-parent="card_cta1" class="btn btn-peabody back-link" href="https://shop.peabody.yale.edu/#/Admission" role="button" title="Buy Tickets Online">Buy Tickets Online</a>&nbsp;<strong style="color: #EE0000">New!</strong></p>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta2">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/YALESTUDENTS_am.jpg'); background-position:center;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Yale Students</h2></figcaption>
						</div>
					</figure>
					<figure class="back diagonal-back">
						<div class="back-content">
							<div class="back-top back-left">
								<h5 class="event-back-heading-double">Yale Students</h5>
								<p>The Peabody is YOUR natural history museum. Join our community today.</p>
								<p class="button-row"><a data-link-parent="card_cta2" class="btn btn-peabody back-link" href="/yale-students" role="button" aria-label="More info about Peabody student programs">More info</a></p>
							</div>
							<div class="back-bottom back-right" id="card_cta2_customtext">
								<h5 class="event-back-heading-double">Study Gallery</h5>
								<p>Our new exhibition enriches Yale courses each semester specimens and artifacts from our collections.</p>
								<a href="/exhibits/object-study-gallery" aria-label="Learn more about Object Study Gallery" class="btn btn-peabody back-link" data-link-parent="card_cta2b" role="button">Learn more</button></a>
							</div>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta3">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/COLLECTIONS_am.jpg'); background-position:center;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Collections &amp; Research</h2></figcaption>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading">Collections &amp; Research</h5>
							<p>Explore the vast collections and cutting-edge research of the Peabody Museum, or <a href="https://collections.peabody.yale.edu/search/" aria-label="Search the database" class="back-link" data-link-parent="card_cta3">search the database</a> for over 8.5 million objects.</p>
							<p class="button-row"><a data-link-parent="card_cta3" class="btn btn-peabody back-link" href="/collections/the-collections" role="button"  aria-label="Explore the Collections">Explore the Collections</a></p>
						</div>
					</figure>
				</div>
			</div>
		</div>

		<div class="row card-row" id="actionsRow2">
			<div class="col-md-4">
				<div class="box-item box" id="card_cta4">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/CARD_GROUPSALES_SCHOOL-GROUPVISITS_HOMEPAGE.jpg'); background-position:center;">
						<div class="front-content">
							<figcaption><h2 class="box-header">School &amp; Group Visits</h2></figcaption>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading">School &amp; Group Visits</h5>
							<p>Learn about our many offerings and schedule your field trip here. Field trip planning made easy.</p>
							<p><a href="/education/general-information-reservations" aria-label="General information and fees" class="back-link" data-link-parent="card_cta4">General information and fees</a></p>
							<a href="/education/school-program-registration-form" aria-label="Register today for a school or group visit" class="btn btn-peabody back-link" data-link-parent="card_cta4" role="button">Register today</a>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta5">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/CARD_GROUPSALES_BIRTHDAYPARTIES_DINOSAUR-DISCOVERY.jpg'); background-position:center;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Birthday Parties</h2></figcaption>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading" rel="card">Birthday Parties</h5>
							<p>Join us for a birthday party your child will remember at one of the premier university natural history museums in the world. </p>
							<!--							<p><strong>NOTE:</strong> Birthday parties resume in September.</p>-->
							<a href="/education/birthday-parties" aria-label="Register today for a birthday party" class="btn btn-peabody back-link" data-link-parent="card_cta4" role="button">Register today</a>
						</div>
					</figure>
				</div>

			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta6">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/CARD_MEMBERSHIP_HOMEPAGE.jpg'); background-position:center;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Become a Member</h2></figcaption>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading" rel="card">Become a Member</h5>
							<p>Become a member of the Peabody today! Help support our mission, programs and exhibitions, and discover a world of benefits. </p>
							<p class="button-row"><a href="https://shop.peabody.yale.edu/#/Membership" aria-label="Browse plans, Become a member" class="btn btn-peabody back-link" data-link-parent="card_cta7" role="button">Browse plans</a></p>
						</div>
					</figure>
				</div>
			</div>
		</div>

		<div class="row card-row" id="actionsRow3">
			<div class="col-md-4">
				<div class="box-item box" id="card_cta7">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/CARD_RETAIL_HOMEPAGE_WG_2018.jpg'); background-position:center;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Museum Store</h2></figcaption>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading">Museum Store</h5>
							<p>Shop the Peabody Museum store online and find something for every natural history lover!</p>
							<p class="button-row">
								<a href="https://shop.peabody.yale.edu/#/Retail" aria-label="Shop now at the Peabody Museum online store" class="btn btn-peabody back-link" data-link-parent="card_cta7" role="button">Shop Now</a>&nbsp;<strong style="color: #EE0000">New!</strong>
<!--								<strong>Coming soon!</strong>-->
							</p>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta8">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/CONNECT_kz.jpg'); background-position:left;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Connect</h2></figcaption>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<form action="https://yale.us18.list-manage.com/subscribe/post?u=1acb03bb40621ac8dbc99d4bd&amp;id=7346d65d59" method="post" class="form-horizontal form-contact validate" target="_blank" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" novalidate aria-label="Mailing List Form">
								<fieldset rel="card">
									<legend><h5 class="event-back-heading" rel="card">Sign up for our mailing list</h5></legend>
									<!--<h6 class="event-back-heading" rel="card" style="visibility: visible;">(All fields required)</h6>-->

									<div id="signup_textfields" rel="card">
										<div class="form-group" rel="card">
											<div class="col-xs-12" rel="card">
												<label for="mce-FNAME" aria-labelledby="requiredMsg">First Name<i class="fas fa-asterisk"></i></label>
												<input data-form-parent="card_cta8" placeholder="First Name" rel="card" type="text" value="" name="FNAME" class="required form-control input-md" id="mce-FNAME" aria-required="true" required>
											</div>
										</div>
										<div class="form-group" rel="card">
											<div class="col-xs-12" rel="card">
												<label for="mce-LNAME" aria-labelledby="requiredMsg">Last Name<i class="fas fa-asterisk"></i></label>
												<input data-form-parent="card_cta8" placeholder="Last Name" rel="card" type="text" value="" name="LNAME" class="required form-control input-md" id="mce-LNAME" aria-required="true" required>
											</div>
										</div>
										<div class="form-group" rel="card">
											<div class="col-xs-12" rel="card">
												<label for="mce-EMAIL" aria-labelledby="requiredMsg">Email Address<i class="fas fa-asterisk"></i></label>
												<input data-form-parent="card_cta8" placeholder="Email Address" rel="card" type="text" value="" name="EMAIL" class="required email form-control input-md" id="mce-EMAIL" aria-required="true" required>
											</div>
										</div>
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>
									<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1acb03bb40621ac8dbc99d4bd_7346d65d59" tabindex="-1" value="" aria-label="No Fill"></div>

									<div class="form-group" rel="card">
										<div class="col-md-8" rel="card">
											<input type="submit" rel="card" id="mc-embedded-subscribe" data-form-parent="card_cta8" name="subscribe" class="button btn btn-peabody back-submit" title="Sign up for the Peabody mailing list" aria-label="Subscribe to the Peabody mailing list" value="Subscribe" tabindex="0">
											<br>
											<span style="margin-top:3px" id="requiredMsg"><i class="fas fa-asterisk"></i> Required Field</span>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</figure>
				</div>			
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta9">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('/sites/default/files/2017/frontpage/img/cards/actions/SUPPORT_am.jpg'); background-position:right;">
						<div class="front-content">
							<figcaption><h2 class="box-header">Support</h2></figcaption>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading-double">Donate to the Peabody</h5>
							<p>Thanks to donors like you, the Peabody Museum is able to pursue its mission of advancing our understanding of earth’s history and sharing the results of this research with the widest possible audience. </p>
							<p class="button-row"><a href="https://yale.edu/givepeabody" target="_blank" aria-label="Donate now" class="btn btn-peabody back-link" data-link-parent="card_cta9" role="button">Donate now</button></a></p>
						</div>
					</figure>
				</div>
			</div>
		</div>

		<!--<hr />-->


		<!-- Hours & Admission -->
		<div role="table" aria-label="Museum Hours" aria-describedby="tableDesc">
		<div class="row" >
			<div class="col-md-12">
				<h2 class="mediumTitle">Hours &amp; Admission</h2>
				<span id="tableDesc" class="sr-only">Peabody Museum Operating Hours</span>
			</div>
		</div>
			<p style="text-align: center; background: yellow; padding:1em;"><strong>Closed Through April 15 at the earliest</strong></p>
		<div class="row" style="color: #999; font-style: italic;">
			<div class="col-xs-6" role="row">
				<p style="text-align: right;">
					<span class="hours-day" role="rowheader"><strong>Sunday</strong></span><br />
					<span class="hours-day" role="rowheader"><strong>Monday</strong></span><br />
					<span class="hours-day" role="rowheader"><strong>Tuesday</strong></span><br />
					<span class="hours-day" role="rowheader"><strong>Wednesday</strong></span><br />
					<span class="hours-day" role="rowheader"><strong>Thursday</strong></span><br />
					<span class="hours-day" role="rowheader"><strong>Friday</strong></span><br />
					<span class="hours-day" role="rowheader"><strong>Saturday</strong></span>
				</p>
			</div>
			<div class="col-xs-6" role="row">
				<p>
					<span class="hours-time" role="cell">12 pm &ndash; 5 pm</span><br />
					<span class="hours-time hours-time-closed" role="cell">CLOSED</span><br />
					<span class="hours-time" role="cell">10 am &ndash; 5 pm</span><br />
					<span class="hours-time" role="cell">10 am &ndash; 5 pm</span><br />
					<span class="hours-time" role="cell">10 am &ndash; 5 pm</span><br />
					<span class="hours-time" role="cell">10 am &ndash; 5 pm</span><br />
					<span class="hours-time" role="cell">10 am &ndash; 5 pm</span>
				</p>
			</div>
		</div>
	  </div>

		<div class="row">
			<div class="col-md-12">
				<p align="center"><br />Openings subject to inclement weather and holiday schedules.<br />Please check our <a href="/visit/admission-hours" title="Admissions information">admissions</a> page for more information.<br /><br /></p>

				<p align="center">
					<a href="https://www.google.com/maps/place/Yale+Peabody+Museum+of+Natural+History/@41.31611,-72.920938,15z/data=!4m5!3m4!1s0x89e7d9c874e11dd1:0x368793b0d438047!8m2!3d41.315785!4d-72.921048?hl=en" class="btn btn-peabody" target="_blank" aria-label="Directions to the Peabody"><i class="fas fa-directions" aria-hidden="true"></i> Directions</a>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<ul class="social-icons">
					<li class="social-icon-facebook"><a href="https://www.facebook.com/YalePeabodyMuseum/" target="_blank" aria-label="Peabody Museum on Facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li class="social-icon-instagram"><a href="https://www.instagram.com/yalepeabodymuseum/" target="_blank" aria-label="Peabody Museum on Instagram"><i class="fab fa-instagram"></i></a></li>
					<li class="social-icon-twitter"><a href="https://twitter.com/yalepeabody" target="_blank" aria-label="Peabody Museum on Twitter"><i class="fab fa-twitter"></i></a></li>
					<li class="social-icon-youtube"><a href="https://www.youtube.com/user/yalepeabodymuseum" target="_blank" aria-label="Peabody Museum YouTube channel"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>

		<hr />
       </main>
		<footer class="row footer-copyright">
			<div class="col-xs-12 col-sm-2 col-md-1">
				<p class="footer-logo footer-item">
					<a href="https://www.yale.edu" title="Yale University Website"><img src="/sites/default/files/images/yaleWordmark.gif" alt="Yale University Website" width="72" height="36"></a>
				</p>
			</div>
			<div class="col-xs-12 col-sm-10 col-md-11">
				<p class="footer-item footer-text">Copyright &copy; 2020, Yale Peabody Museum of Natural History. All rights reserved.<br /> 170 Whitney Ave, New Haven, CT 06511</p>
				<p class="footer-item footer-text">
					<span id="footerPrivacyTerms">
                        &nbsp;&bull;&nbsp;<a target="_blank" href="https://usability.yale.edu/web-accessibility/accessibility-yale" title="Yale University Accessibility Commitment Policy">Accessibility</a>&nbsp;&bull;&nbsp;<a target="_blank" href="https://www.yale.edu/privacy" title="Yale University Privacy Policy">Privacy Policy</a>&nbsp;&bull;&nbsp;
                    <a href="/about-us/terms-use-what-you-need-know" title="Terms of Use">Terms of Use</a>&nbsp;&bull;&nbsp;
                    </span>
				</p>
			</div>

		</footer>
	</div>
	<!-- /container -->
	
	<!-- use js injector instead -->
	<!--
	<script src="https://10.5.33.98/peabody-homepage-refresh/js/vendor/jquery-1.11.2.min.js"></script>
	<script src="https://10.5.33.98/peabody-homepage-refresh/js/vendor/lodash.min.js"></script>
	<script src="https://10.5.33.98/peabody-homepage-refresh/js/vendor/bootstrap.min.js"></script>
	<script src="https://10.5.33.98/peabody-homepage-refresh/js/vendor/bootstrap-dialog.js"></script>
	<script src="https://10.5.33.98/peabody-homepage-refresh/js/vendor/jquery.mobile-events.js"></script>
	<script src="https://10.5.33.98/peabody-homepage-refresh/js/vendor/moment.js"></script>
	<script type="text/javascript" src="https://10.5.33.98/peabody-homepage-refresh/slick/slick.min.js"></script>
	-->

	
	<?php #echo '<script src="https://10.5.33.98/peabody-homepage-refresh/js/main.js?v=' . $randomtwo . '"></script>'; ?>
	<!-- ------------------------ -->

	<script>
		// For IE11.
		
		/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: https://modernizr.com/download/#-fontface-backgroundsize-borderimage-borderradius-boxshadow-flexbox-hsla-multiplebgs-opacity-rgba-textshadow-cssanimations-csscolumns-generatedcontent-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-applicationcache-canvas-canvastext-draganddrop-hashchange-history-audio-video-indexeddb-input-inputtypes-localstorage-postmessage-sessionstorage-websockets-websqldatabase-webworkers-geolocation-inlinesvg-smil-svg-svgclippaths-touch-webgl-shiv-mq-cssclasses-addtest-prefixed-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function D(a){j.cssText=a}function E(a,b){return D(n.join(a+";")+(b||""))}function F(a,b){return typeof a===b}function G(a,b){return!!~(""+a).indexOf(b)}function H(a,b){for(var d in a){var e=a[d];if(!G(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function I(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:F(f,"function")?f.bind(d||b):f}return!1}function J(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+p.join(d+" ")+d).split(" ");return F(b,"string")||F(b,"undefined")?H(e,b):(e=(a+" "+q.join(d+" ")+d).split(" "),I(e,b,c))}function K(){e.input=function(c){for(var d=0,e=c.length;d<e;d++)u[c[d]]=c[d]in k;return u.list&&(u.list=!!b.createElement("datalist")&&!!a.HTMLDataListElement),u}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),e.inputtypes=function(a){for(var d=0,e,f,h,i=a.length;d<i;d++)k.setAttribute("type",f=a[d]),e=k.type!=="text",e&&(k.value=l,k.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(f)&&k.style.WebkitAppearance!==c?(g.appendChild(k),h=b.defaultView,e=h.getComputedStyle&&h.getComputedStyle(k,null).WebkitAppearance!=="textfield"&&k.offsetHeight!==0,g.removeChild(k)):/^(search|tel)$/.test(f)||(/^(url|email)$/.test(f)?e=k.checkValidity&&k.checkValidity()===!1:e=k.value!=l)),t[a[d]]=!!e;return t}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k=b.createElement("input"),l=":)",m={}.toString,n=" -webkit- -moz- -o- -ms- ".split(" "),o="Webkit Moz O ms",p=o.split(" "),q=o.toLowerCase().split(" "),r={svg:"https://www.w3.org/2000/svg"},s={},t={},u={},v=[],w=v.slice,x,y=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},z=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b)&&c(b).matches||!1;var d;return y("@media "+b+" { #"+h+" { position: absolute; } }",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)["position"]=="absolute"}),d},A=function(){function d(d,e){e=e||b.createElement(a[d]||"div"),d="on"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=F(e[d],"function"),F(e[d],"undefined")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),B={}.hasOwnProperty,C;!F(B,"undefined")&&!F(B.call,"undefined")?C=function(a,b){return B.call(a,b)}:C=function(a,b){return b in a&&F(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=w.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(w.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(w.call(arguments)))};return e}),s.flexbox=function(){return J("flexWrap")},s.canvas=function(){var a=b.createElement("canvas");return!!a.getContext&&!!a.getContext("2d")},s.canvastext=function(){return!!e.canvas&&!!F(b.createElement("canvas").getContext("2d").fillText,"function")},s.webgl=function(){return!!a.WebGLRenderingContext},s.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:y(["@media (",n.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},s.geolocation=function(){return"geolocation"in navigator},s.postmessage=function(){return!!a.postMessage},s.websqldatabase=function(){return!!a.openDatabase},s.indexedDB=function(){return!!J("indexedDB",a)},s.hashchange=function(){return A("hashchange",a)&&(b.documentMode===c||b.documentMode>7)},s.history=function(){return!!a.history&&!!history.pushState},s.draganddrop=function(){var a=b.createElement("div");return"draggable"in a||"ondragstart"in a&&"ondrop"in a},s.websockets=function(){return"WebSocket"in a||"MozWebSocket"in a},s.rgba=function(){return D("background-color:rgba(150,255,150,.5)"),G(j.backgroundColor,"rgba")},s.hsla=function(){return D("background-color:hsla(120,40%,100%,.5)"),G(j.backgroundColor,"rgba")||G(j.backgroundColor,"hsla")},s.multiplebgs=function(){return D("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(j.background)},s.backgroundsize=function(){return J("backgroundSize")},s.borderimage=function(){return J("borderImage")},s.borderradius=function(){return J("borderRadius")},s.boxshadow=function(){return J("boxShadow")},s.textshadow=function(){return b.createElement("div").style.textShadow===""},s.opacity=function(){return E("opacity:.55"),/^0.55$/.test(j.opacity)},s.cssanimations=function(){return J("animationName")},s.csscolumns=function(){return J("columnCount")},s.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";return D((a+"-webkit- ".split(" ").join(b+a)+n.join(c+a)).slice(0,-a.length)),G(j.backgroundImage,"gradient")},s.cssreflections=function(){return J("boxReflect")},s.csstransforms=function(){return!!J("transform")},s.csstransforms3d=function(){var a=!!J("perspective");return a&&"webkitPerspective"in g.style&&y("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},s.csstransitions=function(){return J("transition")},s.fontface=function(){var a;return y('@font-face {font-family:"font";src:url("https://")}',function(c,d){var e=b.getElementById("smodernizr"),f=e.sheet||e.styleSheet,g=f?f.cssRules&&f.cssRules[0]?f.cssRules[0].cssText:f.cssText||"":"";a=/src/i.test(g)&&g.indexOf(d.split(" ")[0])===0}),a},s.generatedcontent=function(){var a;return y(["#",h,"{font:0/0 a}#",h,':after{content:"',l,'";visibility:hidden;font:3px/1 a}'].join(""),function(b){a=b.offsetHeight>=3}),a},s.video=function(){var a=b.createElement("video"),c=!1;try{if(c=!!a.canPlayType)c=new Boolean(c),c.ogg=a.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),c.h264=a.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),c.webm=a.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,"")}catch(d){}return c},s.audio=function(){var a=b.createElement("audio"),c=!1;try{if(c=!!a.canPlayType)c=new Boolean(c),c.ogg=a.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),c.mp3=a.canPlayType("audio/mpeg;").replace(/^no$/,""),c.wav=a.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),c.m4a=(a.canPlayType("audio/x-m4a;")||a.canPlayType("audio/aac;")).replace(/^no$/,"")}catch(d){}return c},s.localstorage=function(){try{return localStorage.setItem(h,h),localStorage.removeItem(h),!0}catch(a){return!1}},s.sessionstorage=function(){try{return sessionStorage.setItem(h,h),sessionStorage.removeItem(h),!0}catch(a){return!1}},s.webworkers=function(){return!!a.Worker},s.applicationcache=function(){return!!a.applicationCache},s.svg=function(){return!!b.createElementNS&&!!b.createElementNS(r.svg,"svg").createSVGRect},s.inlinesvg=function(){var a=b.createElement("div");return a.innerHTML="<svg/>",(a.firstChild&&a.firstChild.namespaceURI)==r.svg},s.smil=function(){return!!b.createElementNS&&/SVGAnimate/.test(m.call(b.createElementNS(r.svg,"animate")))},s.svgclippaths=function(){return!!b.createElementNS&&/SVGClipPath/.test(m.call(b.createElementNS(r.svg,"clipPath")))};for(var L in s)C(s,L)&&(x=L.toLowerCase(),e[x]=s[L](),v.push((e[x]?"":"no-")+x));return e.input||K(),e.addTest=function(a,b){if(typeof a=="object")for(var d in a)C(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},D(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=n,e._domPrefixes=q,e._cssomPrefixes=p,e.mq=z,e.hasEvent=A,e.testProp=function(a){return H([a])},e.testAllProps=J,e.testStyles=y,e.prefixed=function(a,b,c){return b?J(a,b,c):J(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+v.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

/*! Respond.js v1.4.2: min/max-width media query polyfill
 * Copyright 2014 Scott Jehl
 * Licensed under MIT
 * https://j.mp/respondjs */

!function(a){"use strict";a.matchMedia=a.matchMedia||function(a){var b,c=a.documentElement,d=c.firstElementChild||c.firstChild,e=a.createElement("body"),f=a.createElement("div");return f.id="mq-test-1",f.style.cssText="position:absolute;top:-100em",e.style.background="none",e.appendChild(f),function(a){return f.innerHTML='&shy;<style media="'+a+'"> #mq-test-1 { width: 42px; }</style>',c.insertBefore(e,d),b=42===f.offsetWidth,c.removeChild(e),{matches:b,media:a}}}(a.document)}(this),function(a){"use strict";function b(){v(!0)}var c={};a.respond=c,c.update=function(){};var d=[],e=function(){var b=!1;try{b=new a.XMLHttpRequest}catch(c){b=new a.ActiveXObject("Microsoft.XMLHTTP")}return function(){return b}}(),f=function(a,b){var c=e();c&&(c.open("GET",a,!0),c.onreadystatechange=function(){4!==c.readyState||200!==c.status&&304!==c.status||b(c.responseText)},4!==c.readyState&&c.send(null))},g=function(a){return a.replace(c.regex.minmaxwh,"").match(c.regex.other)};if(c.ajax=f,c.queue=d,c.unsupportedmq=g,c.regex={media:/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi,keyframes:/@(?:\-(?:o|moz|webkit)\-)?keyframes[^\{]+\{(?:[^\{\}]*\{[^\}\{]*\})+[^\}]*\}/gi,comments:/\/\*[^*]*\*+([^/][^*]*\*+)*\//gi,urls:/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g,findStyles:/@media *([^\{]+)\{([\S\s]+?)$/,only:/(only\s+)?([a-zA-Z]+)\s?/,minw:/\(\s*min\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/,maxw:/\(\s*max\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/,minmaxwh:/\(\s*m(in|ax)\-(height|width)\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/gi,other:/\([^\)]*\)/g},c.mediaQueriesSupported=a.matchMedia&&null!==a.matchMedia("only all")&&a.matchMedia("only all").matches,!c.mediaQueriesSupported){var h,i,j,k=a.document,l=k.documentElement,m=[],n=[],o=[],p={},q=30,r=k.getElementsByTagName("head")[0]||l,s=k.getElementsByTagName("base")[0],t=r.getElementsByTagName("link"),u=function(){var a,b=k.createElement("div"),c=k.body,d=l.style.fontSize,e=c&&c.style.fontSize,f=!1;return b.style.cssText="position:absolute;font-size:1em;width:1em",c||(c=f=k.createElement("body"),c.style.background="none"),l.style.fontSize="100%",c.style.fontSize="100%",c.appendChild(b),f&&l.insertBefore(c,l.firstChild),a=b.offsetWidth,f?l.removeChild(c):c.removeChild(b),l.style.fontSize=d,e&&(c.style.fontSize=e),a=j=parseFloat(a)},v=function(b){var c="clientWidth",d=l[c],e="CSS1Compat"===k.compatMode&&d||k.body[c]||d,f={},g=t[t.length-1],p=(new Date).getTime();if(b&&h&&q>p-h)return a.clearTimeout(i),i=a.setTimeout(v,q),void 0;h=p;for(var s in m)if(m.hasOwnProperty(s)){var w=m[s],x=w.minw,y=w.maxw,z=null===x,A=null===y,B="em";x&&(x=parseFloat(x)*(x.indexOf(B)>-1?j||u():1)),y&&(y=parseFloat(y)*(y.indexOf(B)>-1?j||u():1)),w.hasquery&&(z&&A||!(z||e>=x)||!(A||y>=e))||(f[w.media]||(f[w.media]=[]),f[w.media].push(n[w.rules]))}for(var C in o)o.hasOwnProperty(C)&&o[C]&&o[C].parentNode===r&&r.removeChild(o[C]);o.length=0;for(var D in f)if(f.hasOwnProperty(D)){var E=k.createElement("style"),F=f[D].join("\n");E.type="text/css",E.media=D,r.insertBefore(E,g.nextSibling),E.styleSheet?E.styleSheet.cssText=F:E.appendChild(k.createTextNode(F)),o.push(E)}},w=function(a,b,d){var e=a.replace(c.regex.comments,"").replace(c.regex.keyframes,"").match(c.regex.media),f=e&&e.length||0;b=b.substring(0,b.lastIndexOf("/"));var h=function(a){return a.replace(c.regex.urls,"$1"+b+"$2$3")},i=!f&&d;b.length&&(b+="/"),i&&(f=1);for(var j=0;f>j;j++){var k,l,o,p;i?(k=d,n.push(h(a))):(k=e[j].match(c.regex.findStyles)&&RegExp.$1,n.push(RegExp.$2&&h(RegExp.$2))),o=k.split(","),p=o.length;for(var q=0;p>q;q++)l=o[q],g(l)||m.push({media:l.split("(")[0].match(c.regex.only)&&RegExp.$2||"all",rules:n.length-1,hasquery:l.indexOf("(")>-1,minw:l.match(c.regex.minw)&&parseFloat(RegExp.$1)+(RegExp.$2||""),maxw:l.match(c.regex.maxw)&&parseFloat(RegExp.$1)+(RegExp.$2||"")})}v()},x=function(){if(d.length){var b=d.shift();f(b.href,function(c){w(c,b.href,b.media),p[b.href]=!0,a.setTimeout(function(){x()},0)})}},y=function(){for(var b=0;b<t.length;b++){var c=t[b],e=c.href,f=c.media,g=c.rel&&"stylesheet"===c.rel.toLowerCase();e&&g&&!p[e]&&(c.styleSheet&&c.styleSheet.rawCssText?(w(c.styleSheet.rawCssText,e,f),p[e]=!0):(!/^([a-zA-Z:]*\/\/)/.test(e)&&!s||e.replace(RegExp.$1,"").split("/")[0]===a.location.host)&&("//"===e.substring(0,2)&&(e=a.location.protocol+e),d.push({href:e,media:f})))}x()};y(),c.update=y,c.getEmValue=u,a.addEventListener?a.addEventListener("resize",b,!1):a.attachEvent&&a.attachEvent("onresize",b)}}(this);
		
		
		Modernizr.addTest('preserve3d', function() {
			return Modernizr.testAllProps('transformStyle', 'preserve-3d');
		});

	</script>

</body>

</html>
