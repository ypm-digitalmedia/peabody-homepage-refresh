<?php header("access-control-allow-origin: *"); ?>


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
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"> -->
	<meta charset="utf-8">
	<title>Yale Peabody Museum of Natural History</title>
	<meta name="description" content="">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="http://peabody.yale.edu/sites/default/files/favicon.ico" type="image/x-icon" />
	<!--	<link rel="stylesheet" href="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/fonts/fontAwesome5/css/font-awesome.d6.css" />-->
	<link rel="stylesheet" href="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/fonts/fontAwesome5/css/all.d6.css" />
	<link rel="stylesheet" type="text/css" href="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/slick/slick.css" />
	<link rel="stylesheet" href="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/css/bootstrap-dialog.css" />
	<style>
		body {
			padding-top: 50px;
			padding-bottom: 20px;
		}

	</style>
	<link rel="stylesheet" href="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/css/fonts_d6.css" />
	<?php echo '<link rel="stylesheet" href="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/css/main.css?v=' . $randomone . '" />'; ?>

	<script src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
			<a href="http://peabody.yale.edu" title="Peabody Museum: Home" aria-label="Peabody Museum: Home"><img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/torosaurus.png" width="275" class="toro" />
                <img class="wordmark" src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/peabodyWordmarkSingle.png" /></a>
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
							<li><a href="https://shop.peabody.yale.edu/#/Admission" title="Buy Tickets Online" aria-label="Buy Tickets Online"><strong style="color: red; text-transform: uppercase;">NEW!</strong>&nbsp;&nbsp;Buy Tickets</a></li>
							<li><a href="http://peabody.yale.edu/members" title="Become a Member" aria-label="Become a Member">Become a Member</a></li>
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
							<li><a href="http://peabody.yale.edu/events/camps" title="Camps" aria-label="Camps">Camps</a></li>
							<li><a href="http://peabody.yale.edu/events/upcoming-events" title="Upcoming Events" aria-label="Upcoming Events">Upcoming Events</a></li>
							<li><a href="http://peabody.yale.edu/events/talks" title="Talks" aria-label="Talks">Talks</a></li>
							<li><a href="http://peabody.yale.edu/visit/facility-rental" title="Facility Rental" aria-label="Facility Rental">Facility Rental</a></li>
							<li><a href="http://calendar.yale.edu" target="_blank" title="Other Events at Yale" aria-label="Other Events at Yale">Other Events at Yale</a></li>
							<li><a href="http://peabody.yale.edu/events/email-sign" title="Email Sign-up" aria-label="Email Sign-up">Email Sign-up</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Exhibits" aria-label="Exhibits">Exhibits</a>
						<ul class="dropdown-menu">
							<li><a href="http://peabody.yale.edu/exhibits/temporary-special-exhibits" title="Temporary & Special Exhibits" aria-label="Temporary & Special Exhibits">Temporary &amp; Special Exhibits</a></li>
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
							<li><a href="http://peabody.yale.edu/collections/office-collections-and-research" title="Office of Collections and Research" aria-label="Office of Collections and Research">Office of Collections &amp; Research</a></li>
							<li><a href="http://peabody.yale.edu/collections/facilities" title="Facilities" aria-label="Facilities">Facilities</a></li>
							<li><a href="http://peabody.yale.edu/collections/collections-policies" title="Collections Policies" aria-label="Collections Policies">Collections Policies</a></li>
							<li><a href="http://peabody.yale.edu/collections/opportunities" title="Opportunities" aria-label="Opportunities">Opportunities</a></li>
							<li><a href="http://peabody.yale.edu/scientific-publications" title="Scientific Publications" aria-label="Scientific Publications">Scientific Publications</a></li>
							<li><a href="http://peabody.yale.edu/education/specimen-identifications" title="Specimen Identifications" aria-label="Specimen Identifications">Specimen Identifications</a></li>
							<li><a href="http://peabody.yale.edu/collections/systems-database-admin" title="Systems/Database Admin" aria-label="Systems/Database Admin">Systems/Database Admin</a></li>
							<li><a href="http://peabody.yale.edu/collections/informatics" title="Informatics" aria-label="Informatics">Informatics</a></li>
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
							<li><a href="https://yale.edu/givepeabody" target="_blank" title="Make a Donation Now" aria-label="Make a Donation Now">Make a Donation Now!</a></li>
							<li><a href="http://peabody.yale.edu/support/we-appreciate-our-supporters" title="Past Supporters" aria-label="Past Supporters">Past Supporters</a></li>
							<li><a href="http://peabody.yale.edu/support/peabody-renovation" title="Peabody Renovation" aria-label="Peabody Renovation">Peabody Renovation</a></li>
							<li><a href="http://peabody.yale.edu/support/giving-opportunities-planned-giving" title="Giving Opportunities and Planned Giving" aria-label="Giving Opportunities and Planned Giving">Giving Opportunities &amp; Planned Giving</a></li>
							<li><a href="http://peabody.yale.edu/members" title="Become a Member" aria-label="Become a Member">Become a Member</a></li>
							<li><a href="http://peabody.yale.edu/support/current-past-projects" title="Current and Past Projects" aria-label="Current and Past Projects">Current &amp; Past Projects</a></li>
							<li><a href="http://peabody.yale.edu/volunteer" title="Become a Volunteer" aria-label="Become a Volunteer">Become a Volunteer</a></li>
							<li><a href="http://peabody.yale.edu/support/peabody-institutional-partners" title="Peabody Institutional Partners" aria-label="Peabody Institutional Partners">Peabody Institutional Partners</a></li>
							<li><a href="http://peabody.yale.edu/support/peabody-overview" title="Peabody Overview" aria-label="Peabody Overview">Peabody Overview</a></li>
							<li><a href="http://peabody.yale.edu/members/1866-society" title="1866 Society" aria-label="1866 Society">1866 Society</a></li>
							<li><a href="http://peabody.yale.edu/members/peabody-museum-charitable-donation-policy" title="Charitable Donation Policy" aria-label="Charitable Donation Policy">Charitable Donation Policy</a></li>

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
						<img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/slider/slider_exteriorToro_am_lq_mini.jpg" alt="Museum Exterior with Torosaurus Statue" aria-label="Museum Exterior with Torosaurus Statue">
					</div>
					<div class="item">
						<img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/slider/slider_giantSquid_am_lq_mini.jpg" alt="Giant Squid in Lobby" aria-label="Giant Squid in Lobby">
					</div>
					<div class="item">
						<img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/slider/slider_olmecHead_ALT_kz_lq_mini.jpg" alt="Olmec Head" aria-label="Olmec Head">
					</div>
					<div class="item">
						<img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/slider/slider_fluidCollection_kz_lq_mini.jpg" alt="Fluid Collections Storage" aria-label="Fluid Collections Storage">
					</div>
					<div class="item">
						<img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/slider/slider_horseFossils_kz_lq_mini.jpg" alt="Horse Fossils" aria-label="Horse Fossils">
					</div>
					<div class="item">
						<img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/slider/slider_jungleDiorama_am_lq_mini.jpg" alt="Jungle Diorama" aria-label="Jungle Diorama">
					</div>
					<div class="item">
						<img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/slider/slider_davidFriendHall_am_lq_mini.jpg" alt="David Friend Hall" aria-label="David Friend Hall">
					</div>
					<div class="item">
						<img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/slider/slider_ageOfMammals_am_lq_mini.jpg" alt="The Age of Mammals Mural" aria-label="The Age of Mammals Mural">
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
										<strong>November 2, 2018</strong>
										<span style="float: right"><a href="javascript:dismissAlert('#alert1')"><i class="fa fa-close" aria-hidden="true"></i></a></span>
									</p>
									<p class="slider-alert-text">David Friend Hall will be closed from 12&ndash;2 pm.</p>
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
				<p align="center"><a class="btn btn-peabody btn-lg" href="https://shop.peabody.yale.edu/#/Admission" role="button" title="Buy Tickets Online" aria-label="Buy Tickets Online"><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Buy Tickets Online</a></p>
				<p class="jumbotron-paragraph"><strong style="color: red">NEW!</strong> Skip the line and purchase your admission tickets right from your web browser. Tickets are valid for one year from purchase. Click the button above to get started!</p>
			</div>
			<div class="col-sm-6 col-xs-12 two-column">
				<p align="center"><a class="btn btn-peabody-green btn-lg" href="http://peabody.yale.edu/members" role="button" title="Become a Member" aria-label="Become a Member"><i class="fas fa-user"></i>&nbsp;&nbsp;Become a Member</a></p>
				<p class="jumbotron-paragraph">Your support unlocks a world of benefits! FREE unlimited admission and parking at the Peabody; 10% Museum Store discounts; Exclusive invitations to exhibition openings; Discounts on camps, programs and events... and more!</p>
			</div>
		</div>
	</div>

	<div class="container" id="icons">
		<div class="row">
			<div class="col-sm-2 hidden-xs icon-container-col">
				<p align="center" class="icon-container"><img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/icons/icon_ent01.png"></p>
			</div>
			<div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
				<p align="center" class="icon-container"><img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/icons/icon_inv01.png"></p>
			</div>
			<div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
				<p align="center" class="icon-container"><img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/icons/icon_vp01.png"></p>
			</div>
			<div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
				<p align="center" class="icon-container"><img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/icons/icon_bot01.png"></p>
			</div>
			<div class="col-sm-2 col-xs-3 icon-container-col icon-container-col-mobile">
				<p align="center" class="icon-container"><img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/icons/icon_inv02.png"></p>
			</div>
			<div class="col-sm-2 hidden-xs icon-container-col">
				<p align="center" class="icon-container"><img src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/icons/icon_ant01.png"></p>
			</div>
		</div>
		<!-- HIDE THIS WHEN THE SNIPPET GOES LIVE -->
		<!--		<hr />-->
		<!--             -->
	</div>


	<div class="container-fluid peabody-evolved-separator" id="evolved-banner" aria-hidden="true">

		<div id="evolved-banner-inner"></div>

		<div class="jumbotron peabody-evolved-banner" style="padding-right: 0!important">
			<div class="container-fluid">
				<div class="row">
					<div class="col-hidden-xs col-sm-6 col-md-7"></div>
					<div class="col-xs-12 col-sm-6 col-md-5" id="evolving_text">
						<h2 class="blue-shadow">We're evolving!</h2>
						<p id="renoText" class="blue-shadow">Visit our new site, <a href="http://peabodyevolved.yale.edu" title="Peabody Evolved" aria-label="Peabody Evolved">Peabody Evolved</a>, to learn more about the Peabody’s transformative renovation.</p>
						<p><a class="btn btn-peabody btn-lg" href="http://peabodyevolved.yale.edu" role="button" title="Peabody Evolved" aria-label="Peabody Evolved"><i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;Learn More</a></p>
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



			<!-- CARD 1  -->
			<div class="col-md-6">
				<div class="box-item box" id="card_event1_alt">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/events_exhibitions/MLK_web_card_2018-11-19-mini.jpg'); background-position: left;">
						<div class="front-content">
							<h2 class="box-header">2019 MLK Day</h2>
							<h5 class="box-date box-date-right">Sunday &amp; Monday, January 20 &amp; 21</h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header"><strong>23nd Annual Celebration</strong></h5>
							<h3 class="left plain-case mallory-thin exhibit-heading compress-h3" id="exhibit1_alt_heading_back">Dr. Martin Luther King, Jr.'s</h3>
							<h5 class="left plain-case mallory-mp-light exhibit-subheading" id="exhibit1_alt_subheading_back">Legacy of Environmental &amp; Social Justice 2019</h5>
							<hr />
							<p>Join us for our 23nd annual 2-day celebration, including music &amp; dance, hands-on activities, professional poetry slam and much more!</p>
							<p>Sunday &amp; Monday, January 20 &amp; 21</p>
							<p class="button-row"><a data-link-parent="card_event1_alt" class="btn btn-peabody back-link" href="http://peabody.yale.edu/events/dr-martin-luther-king-jrs-legacy-environmental-and-social-justice" role="button" title="More info: Dr. Martin Luther King, Jr.'s Legacy of Environmental & Social Justice 2018" aria-label="More info: Dr. Martin Luther King, Jr.'s Legacy of Environmental & Social Justice 2018">More Info</a></p>
						</div>
					</figure>
				</div>
			</div>

			<!-- CARD 6 -->
			<div class="col-md-6">
				<div class="box-item box" id="card_event6">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/events_exhibitions/YPM_NSI_EventCard_2017-mini.jpg'); background-position: center;">
						<div class="front-content">
							<h2 class="box-header">Adult Art Classes</h2>
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
							<p class="button-row"><a data-link-parent="card_event6" class="btn btn-peabody back-link" href="http://peabody.yale.edu/education/natural-science-illustration-courses" role="button" title="More info: Natural Science Illustration Program" aria-label="More info: Natural Science Illustration Program">More Info</a>
							</p>
						</div>
					</figure>
				</div>
			</div>

			<!-- CARD 2 -->
			<div class="col-md-6">
				<div class="box-item box" id="card_event2">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/events_exhibitions/artists_eye_web_cardREV-mini.jpg'); background-position: left;">
						<div class="front-content">
							<h2 class="box-header">The Artist's Eye: Figurines of the Paleolithic</h2>
							<h5 class="box-date box-date-right">On View Now</h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header"><strong>Temporary Exhibition</strong></h5>
							<h3 class="left plain-case mallory-thin exhibit-heading" id="exhibit2_heading_back">The Artist's Eye</h3>
							<h5 class="left plain-case mallory-mp-light exhibit-subheading" id="exhibit2_subheading_back">Figurines of the Paleolithic</h5>
							<hr />
							<p>Featuring sculptures inspired by figures created between 40,000 and 15,000 BCE, which are some of the first 3D representations of the female form ever discovered.</p>
							<p>August 11, 2018 &ndash; March 17, 2019</p>
							<p class="button-row"><a class="btn btn-peabody" href="http://peabody.yale.edu/exhibits/the-artists-eye" role="button" title="More info: The Artist's Eye" aria-label="More info: The Artist's Eye">More Info</a></p>
						</div>
					</figure>
				</div>
			</div>

			<!-- CARD 3 -->
			<div class="col-md-6">
				<div class="box-item box" id="card_event3">
					<figure class="front photo-front photo-front-shadow-topbottom" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/events_exhibitions/Gold_event card_2018-4-10-mini.jpg'); background-position: right;">
						<div class="front-content">
							<h2 class="box-header">California Gold</h2>
							<h5 class="box-date box-date-right">On View Now</h5>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="box-header"><strong>Special Exhibition</strong></h5>
							<h3 class="left plain-case mallory-thin exhibit-heading" id="exhibit3_heading_back">California Gold</h3>
							<h5 class="left plain-case mallory-mp-light exhibit-subheading" id="exhibit3_subheading_back">Modern Marvels from the Golden State</h5>
							<hr />
							<p>Experience the beauty and splendor of California gold. This very special collection features 23 stunning pieces from the Golden State. </p>
							<p>On view now.</p>
							<p class="button-row"><a data-link-parent="card_event3" class="btn btn-peabody back-link" href="http://peabody.yale.edu/exhibits/california-gold" role="button" title="More info: California Gold" aria-label="More info: California Gold">More Info</a></p>
						</div>
					</figure>
				</div>
			</div>

			<!-- END CARDS -->

		</div>

		<div class="row">
			<div class="col-md-12">
				<p class="button-row"><a class="btn btn-peabody btn-lg" href="http://peabody.yale.edu/events/upcoming-events" role="button" title="View Calendar" aria-label="View Calendar"><i class="far fa-calendar-alt"></i> View Calendar</a></p>
			</div>
		</div>

		<hr />

		<!-- 3-column main call-to-action panels -->
		<h1 class="mediumTitle" id="explore">Explore the Peabody</h1>
		<div class="row card-row" id="actionsRow1">
			<div class="col-md-4">
				<div class="box-item box" id="card_cta1">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/EXHIBITS_am.jpg'); background-position:right;">
						<div class="front-content">
							<h2 class="box-header">Visit</h2>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading">Visit</h5>
							<p>Explore the 4.5-billion-year history of the Earth and its life, all under one roof. From mummies and mastodons to dinosaurs and diamonds, there's something fascinating around every corner of the Peabody. Come see for yourself!</p>
							<p><a href="http://peabody.yale.edu/exhibits/">Learn more about our exhibitions</a></p>
							<p class="button-row"><a data-link-parent="card_cta1" class="btn btn-peabody back-link" href="https://shop.peabody.yale.edu/#/Admission" role="button" title="Buy Tickets Online" aria-label="Buy Tickets Online">Buy Tickets Online</a>&nbsp;<strong style="color: red">New!</strong></p>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta2">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/YALESTUDENTS_am.jpg'); background-position:center;">
						<div class="front-content">
							<h2 class="box-header">Yale Students</h2>
						</div>
					</figure>
					<figure class="back diagonal-back">
						<div class="back-content">
							<div class="back-top back-left">
								<h5 class="event-back-heading-double">Yale Students</h5>
								<p>The Peabody is YOUR natural history museum. Join our community today.</p>
								<p class="button-row"><a data-link-parent="card_cta2" class="btn btn-peabody back-link" href="http://peabody.yale.edu/yale-students" role="button" title="Learn more about Peabody student programs" aria-label="Learn more about Peabody student programs">More info</a></p>
							</div>
							<div class="back-bottom back-right" id="card_cta2_customtext">
								<h5 class="event-back-heading-double">Study Gallery</h5>
								<p>Our new exhibition enriches Yale courses each semester specimens and artifacts from our collections.</p>
								<a href="http://peabody.yale.edu/exhibits/object-study-gallery" title="Object Study Gallery" aria-label="Object Study Gallery" class="btn btn-peabody back-link" data-link-parent="card_cta2b" role="button">Learn more</button></a>
							</div>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta3">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/COLLECTIONS_am.jpg'); background-position:center;">
						<div class="front-content">
							<h2 class="box-header">Collections &amp; Research</h2>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading">Collections &amp; Research</h5>
							<p>Explore the vast collections and cutting-edge research of the Peabody Museum, or <a href="http://collections.peabody.yale.edu/search/" aria-label="Search the collections database" title="Search the collections database" class="back-link" data-link-parent="card_cta3">search the database</a> for over 8.5 million objects.</p>
							<p class="button-row"><a data-link-parent="card_cta3" class="btn btn-peabody back-link" href="http://peabody.yale.edu/collections/the-collections" role="button" title="Explore the Collections" aria-label="Explore the Collections">Explore the Collections</a></p>
						</div>
					</figure>
				</div>
			</div>
		</div>

		<div class="row card-row" id="actionsRow2">
			<div class="col-md-4">
				<div class="box-item box" id="card_cta4">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/CARD_GROUPSALES_SCHOOL-GROUPVISITS_HOMEPAGE.jpg'); background-position:center;">
						<div class="front-content">
							<h2 class="box-header">School &amp; Group Visits</h2>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading">School &amp; Group Visits</h5>
							<p>Learn about our many offerings and schedule your field trip here. Field trip planning made easy.</p>
							<p><a href="http://peabody.yale.edu/education/general-information-reservations" title="Field trip information and fees" aria-label="Field trip information and fees" class="back-link" data-link-parent="card_cta4">General information and fees</a></p>
							<a href="http://peabody.yale.edu/education/school-program-registration-form" title="Register for a school or group visit" aria-label="Register for a school or group visit" class="btn btn-peabody back-link" data-link-parent="card_cta4" role="button">Register today</a>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta5">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/CARD_GROUPSALES_BIRTHDAYPARTIES_DINOSAUR-DISCOVERY.jpg'); background-position:center;">
						<div class="front-content">
							<h2 class="box-header">Birthday Parties</h2>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading" rel="card">Birthday Parties</h5>
							<p>Join us for a birthday party your child will remember at one of the premier university natural history museums in the world. </p>
							<!--							<p><strong>NOTE:</strong> Birthday parties resume in September.</p>-->
							<a href="http://peabody.yale.edu/education/birthday-parties" title="Request a birthday party" aria-label="Request a birthday party" class="btn btn-peabody back-link" data-link-parent="card_cta4" role="button">Register today</a>
						</div>
					</figure>
				</div>

			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta6">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/CARD_MEMBERSHIP_HOMEPAGE.jpg'); background-position:center;">
						<div class="front-content">
							<h2 class="box-header">Become a Member</h2>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading" rel="card">Become a Member</h5>
							<p>Become a member of the Peabody today! Help support our mission, programs and exhibitions, and discover a world of benefits. </p>
							<p class="button-row"><a href="https://shop.peabody.yale.edu/#/Membership" title="Become a member" aria-label="Become a member" class="btn btn-peabody back-link" data-link-parent="card_cta7" role="button">Browse plans</a>&nbsp;<strong style="color: red">New!</strong></p>
						</div>
					</figure>
				</div>
			</div>
		</div>

		<div class="row card-row" id="actionsRow3">
			<div class="col-md-4">
				<div class="box-item box" id="card_cta7">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/CARD_RETAIL_HOMEPAGE_WG_2018.jpg'); background-position:center;">
						<div class="front-content">
							<h2 class="box-header">Museum Store</h2>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading">Museum Store</h5>
							<p>Shop the Peabody Museum store online and find something for every natural history lover!</p>
							<p class="button-row">
								<!--                                <a href="https://shop.peabody.yale.edu/#/Retail" title="Shop the Peabody Museum online store" aria-label="Shop the Peabody Museum online store" class="btn btn-peabody back-link" data-link-parent="card_cta7" role="button">Shop Now</a>-->
								<strong>Coming soon!</strong>
							</p>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-item box" id="card_cta8">
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/CONNECT_kz.jpg'); background-position:left;">
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
												<input rel="card" data-form-parent="card_cta8" id="first_name" name="first_name" placeholder="First Name" class="form-control input-md" required="" type="text">
											</div>
										</div>
										<div class="form-group" rel="card">
											<div class="col-xs-12" rel="card">
												<input data-form-parent="card_cta8" rel="card" id="last_name" name="last_name" placeholder="Last Name" class="form-control input-md" required="" type="text">
											</div>
										</div>
										<div class="form-group" rel="card">
											<div class="col-xs-12" rel="card">
												<input rel="card" data-form-parent="card_cta8" id="email" name="email" placeholder="Email Address" class="form-control input-md" required="" type="text" onchange="checkEmail(this.value)" onkeyup="checkEmail(this.value)">
											</div>
										</div>
									</div>

									<div class="form-group" rel="card">
										<label class="col-md-4 control-label" for="submit" rel="card"></label>
										<div class="col-md-8" rel="card">
											<button rel="card" id="submit" data-form-parent="card_cta8" name="submit" type="submit" class="btn btn-peabody disabled back-submit" title="Sign up for the Peabody mailing list" aria-label="Sign up for the Peabody mailing list">Sign Up</button>
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
					<figure class="front photo-front photo-front-shadow" style="background-image:url('http://sprout027.sprout.yale.edu/peabody-homepage-refresh/img/cards/actions/SUPPORT_am.jpg'); background-position:right;">
						<div class="front-content">
							<h2 class="box-header">Support</h2>
						</div>
					</figure>
					<figure class="back">
						<div class="back-content">
							<h5 class="event-back-heading-double">Donate to the Peabody</h5>
							<p>Thanks to donors like you, the Peabody Museum is able to pursue its mission of advancing our understanding of earth’s history and sharing the results of this research with the widest possible audience. </p>
							<p class="button-row"><a href="https://yale.edu/givepeabody" target="_blank" title="Donate now" aria-label="Donate now" class="btn btn-peabody back-link" data-link-parent="card_cta9" role="button">Donate now</button></a></p>
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
				<p align="center"><br />Openings subject to inclement weather and holiday schedules.<br />Please check our <a href="http://peabody.yale.edu/visit/admission-hours" title="Admissions information" aria-label="Admissions information">admissions</a> page for more information.<br /><br /></p>

				<p align="center">
					<a href="https://www.google.com/maps/place/Yale+Peabody+Museum+of+Natural+History/@41.31611,-72.920938,15z/data=!4m5!3m4!1s0x89e7d9c874e11dd1:0x368793b0d438047!8m2!3d41.315785!4d-72.921048?hl=en" class="btn btn-peabody" target="_blank" title="Directions to the Peabody" aria-label="Directions to the Peabody"><i class="fas fa-directions" aria-hidden="true"></i> Directions</a>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<ul class="social-icons">
					<li class="social-icon-facebook"><a href="https://www.facebook.com/YalePeabodyMuseum/" target="_blank" title="Peabody Museum on Facebook" aria-label="Peabody Museum on Facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li class="social-icon-instagram"><a href="https://www.instagram.com/yalepeabodymuseum/" target="_blank" title="Peabody Museum on Instagram" aria-label="Peabody Museum on Instagram"><i class="fab fa-instagram"></i></a></li>
					<li class="social-icon-twitter"><a href="https://twitter.com/yalepeabody" target="_blank" title="Peabody Museum on Twitter" aria-label="Peabody Museum on Twitter"><i class="fab fa-twitter"></i></a></li>
					<li class="social-icon-youtube"><a href="https://www.youtube.com/user/yalepeabodymuseum" target="_blank" title="Peabody Museum's YouTube channel" aria-label="Peabody Museum YouTube channel"><i class="fab fa-youtube"></i></a></li>
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
				<p class="footer-item footer-text">Copyright &copy; 2018, Yale Peabody Museum of Natural History. All rights reserved.<br /> 170 Whitney Ave, New Haven, CT 06511</p>
				<p class="footer-item footer-text">
					<span id="footerPrivacyTerms">
                        &nbsp;&bull;&nbsp;<a target="_blank" href="https://usability.yale.edu/web-accessibility/accessibility-yale" title="Yale University Accessibility Commitment Policy" aria-label="Yale University Accessibility Commitment Policy">Accessibility</a>&nbsp;&bull;&nbsp;<a target="_blank" href="http://www.yale.edu/privacy" title="Yale University Privacy Policy" aria-label="Yale University Privacy Policy">Privacy Policy</a>&nbsp;&bull;&nbsp;
                    <a href="http://peabody.yale.edu/about-us/terms-use-what-you-need-know" title="Terms of Use" aria-label="Terms of Use">Terms of Use</a>&nbsp;&bull;&nbsp;
                    </span>
				</p>
			</div>

		</footer>
	</div>
	<!-- /container -->

	<script src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/js/vendor/jquery-1.11.2.min.js"></script>
	<script src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/js/vendor/lodash.min.js"></script>
	<script src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/js/vendor/bootstrap.min.js"></script>
	<script src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/js/vendor/bootstrap-dialog.js"></script>
	<script src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/js/vendor/jquery.mobile-events.js"></script>
	<script src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/js/vendor/moment.js"></script>
	<script type="text/javascript" src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/slick/slick.min.js"></script>


	<?php echo '<script src="http://sprout027.sprout.yale.edu/peabody-homepage-refresh/js/main.js?v=' . $randomtwo . '"></script>'; ?>

</body>

</html>
