<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="css/font.css">

	<script type="text/javascript" src="js/fullpage.js"></script>

	<!-- 3dfacModel -->
	<link rel="stylesheet" type="text/css" href="3dfac/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="3dfac/css/style0.css" />
	<link rel="stylesheet" type="text/css" href="3dfac/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="3dfac/css/fac-animation.css" />
	<script src="3dfac/js/modernizr-custom.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body>
	<header>
		<div class="wrapper">
			<div class="humberger_btn">
				<div class="humberger_line top"></div>
				<div class="humberger_line mid"></div>
				<div class="humberger_line bot"></div>
			</div>
			<div class="logo">
				<a href="index.php">
					<img src="images/e7logo.png" alt=""> </a>
			</div>
			<div class="login">
				<!-- <a href="#"><img src="images/user-icon.png"></a> -->
				<a href="#">登入</a>
			</div>
			<ul>
				<li>
					<a href="site_info.php"> 場地介紹 </a>
				</li>
				<li>
					<a href="booking.php"> 預約場地 </a>
				</li>
				<li>
					<a href="group.php"> 運動揪團 </a>
				</li>
				<li>
					<a href="about.php"> 關於我們 </a>
				</li>
				<li>
					<a href="chat-robot.php"> 諮詢專區 </a>
				</li>
			</ul>
		</div>
	</header>
	<div id="homePage">
		<div class="section home_pg1">
			<video id="home_bg1_vd" data-src="images/index/EZDOME.mp4" type="video/mp4" autoplay muted loop="true" data-video="0">
			</video>
			<div class="home_pg1_bluebox1">
				<div class="home_pg1_txt">
					<h1>邊緣人?!<br>一起運動吧!</h1>
					<div class="home_pg1_btng">
						<div class="home_pg1_btn">
							<a href="#">預約</a>
						</div>
						<div class="home_pg1_btn">
							<a href="#">揪團</a>
						</div>
					</div>
				</div>
				<div class="home_pg1_yellowbox"></div>
			</div>
			<div class="home_pg1_bluebox2"></div>
			<div class="home_pg1_bluebox3"></div>
		</div>

		<div class="section home_pg2">
			<svg class="hidden">
				<defs>
					<symbol id="icon-stack" viewBox="0 0 32 32">
						<title>stack</title>
						<path class="path1" d="M29.143 11.071l-13.143-6.571-13.143 6.571 13.143 6.571 13.143-6.571zM16 6.681l8.781 4.39-8.781 4.39-8.781-4.39 8.781-4.39zM26.51 14.684l2.633 1.316-13.143 6.571-13.143-6.571 2.633-1.316 10.51 5.255zM26.51 19.612l2.633 1.316-13.143 6.571-13.143-6.571 2.633-1.316 10.51 5.255z"></path>
					</symbol>
					<symbol id="icon-cross" viewBox="0 0 24 24">
						<title>cross</title>
						<path class="path1" d="M18.016 5.125q0.369 0 0.614 0.245t0.245 0.614q0 0.363-0.248 0.611l-5.411 5.405 5.411 5.405q0.248 0.248 0.248 0.611 0 0.369-0.245 0.614t-0.614 0.245q-0.363 0-0.611-0.248l-5.405-5.411-5.405 5.411q-0.248 0.248-0.611 0.248-0.369 0-0.614-0.245t-0.245-0.614q0-0.363 0.248-0.611l5.411-5.405-5.411-5.405q-0.248-0.248-0.248-0.611 0-0.369 0.245-0.614t0.614-0.245q0.363 0 0.611 0.248l5.405 5.411 5.405-5.411q0.248-0.248 0.611-0.248z"></path>
					</symbol>
					<symbol id="icon-angle-up" viewBox="0 0 21 32">
						<title>angle-up</title>
						<path class="path1" d="M19.196 21.143q0 0.232-0.179 0.411l-0.893 0.893q-0.179 0.179-0.411 0.179t-0.411-0.179l-7.018-7.018-7.018 7.018q-0.179 0.179-0.411 0.179t-0.411-0.179l-0.893-0.893q-0.179-0.179-0.179-0.411t0.179-0.411l8.321-8.321q0.179-0.179 0.411-0.179t0.411 0.179l8.321 8.321q0.179 0.179 0.179 0.411z"></path>
					</symbol>
					<symbol id="icon-angle-down" viewBox="0 0 21 32">
						<title>angle-down</title>
						<path class="path1" d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z"></path>
					</symbol>
					<symbol id="icon-net" viewBox="0 0 114.5 102.3">
						<title>net</title>
						<path class="st0" d="M0,36.2V0l114.5,65v37.3 M0,0v21l114.5,66.1V64.9L0,0z" />
					</symbol>
					<symbol id="icon-hoop" viewBox="0 0 99.3 246.3">
						<title>hoop</title>
						<path class="st0" d="M53.3,125v121.2l-7.7-7.6V117.4L53.3,125z" />
						<path class="st1" d="M0.8,3.8L7.4,0l91.9,53l-6.6,3.8L0.8,3.8z" />
						<path class="st2" d="M0.8,94.7V3.8l91.9,53v90.9L0.8,94.7z" />
						<path class="st3" d="M99.2,53v90.9l-6.6,3.8V56.8L99.2,53z" />
						<path class="st4" d="M53.3,125l6.6,3.8v113.7l-6.6,3.8V125z" />
						<path class="st5" d="M53.3,74.4" />
						<path class="st6" d="M49.4,97.6l-9.3,54.6H13.9L3.8,96.4C26.3,117.1,49.4,97.6,49.4,97.6z" />
						<path class="st5" d="M45.6,84l7.7-4.5" />
						<path class="st5" d="M51.6,92.4c0,7.1-11,12.8-24.5,12.8S2.5,99.5,2.5,92.4s11-12.8,24.5-12.8c4.3,0,8.3,0.6,11.8,1.6
							C46.5,83.3,51.6,87.5,51.6,92.4z" />
					</symbol>
					<symbol id="icon-hoopLeft" viewBox="0 0 98.2 231.1">
						<title>hoopLeft</title>
						<path class="st0" d="M0,3.8" />
						<path class="st1" d="M0,3.8l91.9,53l-0.7,74.8L0,79.5V3.8z" />
						<path class="st2" d="M0,3.8L6.5,0l91.9,53l-6.5,3.8L0,3.8z" />
						<path class="st3" d="M98.2,128.8l-6.5,3.8V56.8l6.5-3.8L98.2,128.8z" />
						<path class="st4" d="M41,53h11.4l0,178.1l-11.4,0V53z" />
						<path class="st5" d="M52.5,53l0,178.1l-6.5,0l0.8-178H52.5z" />
					</symbol>
				</defs>
			</svg>
			<div class="container">
				<div class="main">
					<!-- 				<header class="codrops-header">
							<div class="codrops-links">
								<a class="codrops-icon codrops-icon--prev" href="http://tympanus.net/Tutorials/AnimatedAnimals/" title="Previous Demo"><span>Previous Demo</span></a>
								<a class="codrops-icon codrops-icon--drop" href="http://tympanus.net/codrops/?p=26692" title="Back to the article"><span>Back to the Codrops article</span></a>
							</div>
							<h1>Interactive Mall Map</h1>
						</header> -->
					<div class="light"></div>
					<div class="light"></div>
					<div class="light"></div>
					<div class="light"></div>
					<div class="mall">
						<!-- <div class="surroundings">
								<img class="surroundings__map" src="img/surroundings.svg" alt="Surroundings"/>
							</div> -->
						<svg id="e7dome-text" viewBox="0 0 1320 300">
							<!-- Symbol -->
							<symbol id="s-text">
								<text text-anchor="middle" x="50%" y="50%" dy=".35em">
									E7
								</text>
							</symbol>
							<!-- Duplicate symbols -->
							<use xlink:href="#s-text" class="text"></use>
							<use xlink:href="#s-text" class="text"></use>
							<use xlink:href="#s-text" class="text"></use>
						</svg>
						<div class="levels">
							<div class="level level--1" aria-label="Level 1">
								<svg id="bowlingsvg" class="map map--1" viewBox="0 0 419.5 262" style="enable-background:new 0 0 419.5 262;" width="100%"
								 height="100%" preserveAspectRatio="xMidYMid meet">
									<title>Map Level 1</title>
									<g id="Iso_Guide" class="st0">
									</g>
									<g id="ground01">
										<polygon class="st3" points="425.3,262 0,262 0,0 265.8,94.3     " />
										<path class="st4" d="M0,262l425.3-137v137H0z" />
										<path class="st5" d="M425.3,0v125l-99.8,32.1l-59.7-62.8L305.2,0H425.3z" />
										<path class="st6" d="M0,0h305.2l-39.3,94.3L0,0z" />
									</g>
								</svg>
								<div class="level__pins">
									<!--                             <a class="pin pin--1-1" data-category="1" data-space="1.01" href="#" aria-label="Pin for Apple Heart">
											<span class="pin__icon">
												<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
												<svg class="icon icon--logo icon--appleheart"><use xlink:href="#icon-appleheart"></use></svg>
											</span>
										</a> -->

									<a class="pin pin--1-1" data-category="1" data-space="1.01" href="#" aria-label="Pin for Apple Heart">
										<span class="pin__icon">
											<span class="player1f03"><img src="3dfac/img/player1f03.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--1-4" data-category="3" data-space="1.04" href="#" aria-label="Pin for Dress me not">
										<span class="pin__icon">
											<span class="player1f04"><img src="3dfac/img/player1f04.png" alt=""></span>
										</span>
									</a>

									<a class="pin pin--1-2" data-category="1" data-space="1.02" href="#" aria-label="Pin for Crazy Banana">
										<span class="pin__icon">
											<span class="rock1f01"><img src="3dfac/img/rock1f01.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--1-3" data-category="2" data-space="1.03" href="#" aria-label="Pin for Folding Life">
										<span class="pin__icon">
											<span class="wall1f01"><img src="3dfac/img/wall1f01.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--1-5" data-category="4" data-space="1.05" href="#" aria-label="Pin for Meditation Garden">
										<span class="pin__icon">
											<span class="player4f01"><img src="3dfac/img/player4f01.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--1-6" data-category="1" data-space="1.06" href="#" aria-label="Pin for Seed of Life">
										<span class="pin__icon">
											<span class="player4f02"><img src="3dfac/img/player4f02.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--1-8" data-category="1" data-space="1.08" href="#" aria-label="Pin for The Wizard">
										<span class="pin__icon">
											<span class="wall1f01"><img src="3dfac/img/wall1f01.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--1-7" data-category="1" data-space="1.07" href="#" aria-label="Pin for Raw Delight">
										<span class="pin__icon">
											<span class="wall1f01"><img src="3dfac/img/wall1f01.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--1-13" data-category="2" data-space="1.13" href="#" aria-label="Pin for Permaculture Hub">
										<span class="pin__icon">
											<svg class="rock-climbing-path">
												<path fill="none" d="M165.5,89.3L24.3,23.5" />
											</svg>
										</span>
									</a>
								</div>
								<!-- /level__pins -->
							</div>
							<div class="level level--2" aria-label="Level 2">
								<svg class="map map--2" viewBox="0 0 419.5 262" style="enable-background:new 0 0 419.5 262;" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
									<title>Map Level 2</title>
									<g id="Iso_Guide" class="st0">
									</g>
									<g id="Layer_1_1_" class="st0">
										<polygon class="st2" points="6.2,149.3 163.9,240.6 413.3,96.7 255.8,5.8     " />
									</g>
									<g id="Layer_2" class="st0">
										<g id="Badminton-floor" class="st1">
											<path class="st3" d="M387.1,96.6L164,225.4L32.7,149.6L255.8,20.9L387.1,96.6z" />
										</g>
										<g id="Badminton-floor2" class="st1">
											<path class="st4" d="M255.8,36l105,60.6L163.9,210.3L59,149.7L255.8,36z" />
										</g>
										<g id="Badminton-line" class="st1">
											<path class="st5" d="M111.5,119.4l144.3-83.3l105,60.6L163.9,210.3L59,149.7L111.5,119.4z M216.4,179.9l-104.9-60.5 M163.9,149.6
						l91.9-53 M203.3,66.3l105,60.6" />
										</g>
										<g id="grid01" class="st1">
											<path class="st6" d="M147.9,94.9V58.7l114.5,65V161 M147.9,58.7v21l114.5,66.1v-22.2L147.9,58.7z" />
										</g>
										<polygon class="st7" points="6.2,149.3 6.2,164.7 164,255.8 413.3,111.8 413.3,96.7 163.9,240.6     " />
									</g>
									<g id="ground01">
										<g>
											<rect y="-1" class="st8" width="425.3" height="130.3" />
											<line class="st9" x1="0" y1="0" x2="425.3" y2="0" />
											<line class="st9" x1="0" y1="128.8" x2="425.3" y2="128.8" />
											<line class="st10" x1="0" y1="6" x2="425.3" y2="6" />
											<line class="st10" x1="0" y1="122.3" x2="425.3" y2="122.3" />
											<line class="st11" x1="0" y1="12.3" x2="425.3" y2="12.3" />
											<line class="st11" x1="0" y1="115.3" x2="425.3" y2="115.3" />
											<line class="st12" x1="0" y1="28" x2="425.3" y2="28" />
											<line class="st12" x1="0" y1="46.8" x2="425.3" y2="46.8" />
											<line class="st12" x1="0" y1="65.3" x2="425.3" y2="65.3" />
											<line class="st12" x1="0" y1="83.8" x2="425.3" y2="83.8" />
											<line class="st12" x1="0" y1="102.4" x2="425.3" y2="102.4" />
											<rect y="131" class="st8" width="425.3" height="130.3" />
											<line class="st9" x1="0" y1="132" x2="425.3" y2="132" />
											<line class="st9" x1="0" y1="260.8" x2="425.3" y2="260.8" />
											<line class="st10" x1="0" y1="138" x2="425.3" y2="138" />
											<line class="st10" x1="0" y1="254.3" x2="425.3" y2="254.3" />
											<line class="st11" x1="0" y1="144.3" x2="425.3" y2="144.3" />
											<line class="st11" x1="0" y1="247.3" x2="425.3" y2="247.3" />
											<line class="st12" x1="0" y1="160" x2="425.3" y2="160" />
											<line class="st12" x1="0" y1="178.8" x2="425.3" y2="178.8" />
											<line class="st12" x1="0" y1="197.3" x2="425.3" y2="197.3" />
											<line class="st12" x1="0" y1="215.8" x2="425.3" y2="215.8" />
											<line class="st12" x1="0" y1="234.4" x2="425.3" y2="234.4" />
										</g>

									</g>
								</svg>
								<div class="level__pins">
									<a class="pin pin--2-1" data-category="1" data-space="2.01" href="#" aria-label="Pin for Grilled Chipotle">
										<span class="pin__icon">
											<span class="player1f01"><img src="3dfac/img/player1f01.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--2-2" data-category="2" data-space="2.02" href="#" aria-label="Pin for Rocketship Tech">
										<span class="pin__icon">
											<span class="player1f02"><img src="3dfac/img/player1f02.png"></use></span>
										</span>
									</a>
									<a class="pin pin--2-3" data-category="2" data-space="2.03" href="#" aria-label="Pin for Which Bug?">
										<span class="pin__icon">
											<span class="linepath"><img class="ball01" src="3dfac/img/ball01-yellow.png"></span>
										</span>
									</a>
									<a class="pin pin--2-4" data-category="3" data-space="2.04" href="#" aria-label="Pin for Cognitio">
										<span class="pin__icon">
											<span class="linepath"><img class="ball02" src="3dfac/img/ball01-red.png"></use></span>
										</span>
									</a>
									<a class="pin pin--2-5" data-category="1" data-space="2.05" href="#" aria-label="Pin for The Eggplanthead">
										<span class="pin__icon">
											<span class="bottle1"><img src="3dfac/img/bottle.png"></span>
										</span>
									</a>
									<a class="pin pin--2-6" data-category="1" data-space="2.06" href="#" aria-label="Pin for Superfood">
										<span class="pin__icon">
											<span class="bottle2"><img src="3dfac/img/bottle.png"></span>
										</span>
									</a>
									<a class="pin pin--2-7" data-category="3" data-space="2.07" href="#" aria-label="Pin for No Princess">
										<span class="pin__icon">
											<span class="bottle3"><img src="3dfac/img/bottle.png"></use></span>
										</span>
									</a>
									<a class="pin pin--2-8" data-category="3" data-space="2.08" href="#" aria-label="Pin for Tool Exchange">
										<span class="pin__icon">
											<span class="bottle4"><img src="3dfac/img/bottle.png"></use></span>
										</span>
									</a>
									<a class="pin pin--2-9" data-category="1" data-space="1.09" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle5"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-10" data-category="1" data-space="1.10" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle6"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-11" data-category="1" data-space="1.11" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle7"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-12" data-category="1" data-space="1.12" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle8"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-13" data-category="1" data-space="1.13" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle9"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-14" data-category="1" data-space="1.14" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle10"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-15" data-category="1" data-space="1.15" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle11"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-16" data-category="1" data-space="1.16" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle12"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-17" data-category="1" data-space="1.17" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle13"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-18" data-category="1" data-space="1.18" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle14"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-19" data-category="1" data-space="1.19" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle15"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-20" data-category="1" data-space="1.20" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle16"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-21" data-category="1" data-space="1.21" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle17"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-22" data-category="1" data-space="1.22" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle18"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-23" data-category="1" data-space="1.23" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle19"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
									<a class="pin pin--2-24" data-category="1" data-space="1.24" href="#" aria-label="Pin for Smoothies &amp; Soul">
										<span class="pin__icon">
											<span class="pin__icon">
												<span class="bottle20"><img src="3dfac/img/bottle.png"></use></span>
											</span>
										</span>
									</a>
								</div>
								<!-- /level__pins -->
							</div>
							<div class="level level--3" aria-label="Level 3">
								<svg class="map map--3" viewBox="0 0 419.5 262" style="enable-background:new 0 0 419.5 262;" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
									<title>Map Level 3</title>
									<g id="ground01">
										<path class="st8" d="M425.3,262H0.7V0.5h424.6V262z" />
										<rect x="38.8" y="30.5" class="st9" width="340.3" height="201.5" />
										<line class="st5" x1="127.5" y1="30.5" x2="127.5" y2="232" />
										<line class="st5" x1="297.8" y1="30.5" x2="297.8" y2="232" />
										<line class="st5" x1="127.5" y1="131" x2="297.8" y2="131" />
									</g>
								</svg>
								<div class="level__pins">
									<a class="pin pin--3-1" data-category="1" data-space="3.01" href="#" aria-label="Pin for Oolong House">
										<span class="pin__icon">
											<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
											<svg class="icon icon--logo icon--tea"><use xlink:href="#icon-tea"></use></svg>
										</span>
									</a>
									<!--                             <a class="pin pin--3-2" data-category="2" data-space="3.02" href="#" aria-label="Pin for Enlightend Path">
											<span class="pin__icon">
												<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
												<svg class="icon icon--logo icon--pyramid"><use xlink:href="#icon-pyramid"></use></svg>
											</span>
										</a> -->


									<!-- <a class="pin pin--3-2" data-category="2" data-space="3.02" href="#" aria-label="Pin for Enlightend Path">
										<span class="pin__icon">
											<span class="bird3f01"><img class="ball05" src="3dfac/img/bird3f01.png" alt=""></span>
										</span>
									</a> -->

									<!-- <a class="pin pin--3-3" data-category="3" data-space="3.03" href="#" aria-label="Pin for What makes us walk">
										<span class="pin__icon">
											<span class="player2f01"><img src="3dfac/img/player2f01.png" alt=""></span>
										</span>
									</a> -->

									<a class="pin pin--3-4" data-category="3" data-space="3.04" href="#" aria-label="Pin for Your Last Shirt">
										<span class="pin__icon">
											<svg class="net"><use xlink:href="#icon-net"></use></svg>
										</span>
									</a>

									<a class="pin pin--3-5" data-category="4" data-space="3.05" href="#" aria-label="Pin for Breathe">
										<span class="pin__icon">
											<span class="player3f04"><img src="3dfac/img/player3f04.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--3-8" data-category="2" data-space="3.08" href="#" aria-label="Pin for Enlightend Path">
										<span class="pin__icon">
											<span class="bird3f02"><img class="ball07" src="images/about-material/business-man/ball01.png" alt=""></span>
										</span>
									</a>

									<a class="pin pin--4-11" data-category="2" data-space="4.11" href="#" aria-label="Pin for Permaculture Hub">
										<span class="pin__icon">
											<svg class="basball-path">
												<path fill="none" d="M266.4,18.5l-258,242" />
											</svg>
										</span>
									</a>

									<a class="pin pin--3-6" data-category="4" data-space="3.06" href="#" aria-label="Pin for Feel the Grass">
										<span class="pin__icon">
											<span class="player3f03"><img src="3dfac/img/player3f03.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--4-12" data-category="2" data-space="4.12" href="#" aria-label="Pin for Permaculture Hub">
										<span class="pin__icon">
											<svg class="basball-path2">
												<path fill="none"  d="M801,24.2c0,0,45,220-193,199S94-44.8,26,19.2" />
											</svg>
										</span>
									</a>
									<a class="pin pin--3-7" data-category="4" data-space="3.07" href="#" aria-label="Pin for Star Gazer">
										<span class="pin__icon">
											<span class="player3f05"><img src="3dfac/img/player3f05.png" alt=""></span>
										</span>
									</a>
								</div>
								<!-- /level__pins -->
							</div>
							<div class="level level--4" aria-label="Level 4">
								<svg class="map map--4" viewBox="0 0 419.5 262" style="enable-background:new 0 0 419.5 262;" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
									<title>Map Level 4</title>
									<g id="grid01" class="st1">
										<path class="st6" d="M147.9,94.9V58.7l114.5,65V161 M147.9,58.7v21l114.5,66.1v-22.2L147.9,58.7z" />
									</g>
									<polygon class="st7" points="6.2,149.3 6.2,164.7 164,255.8 413.3,111.8 413.3,96.7 163.9,240.6     " />
									</g>
									<g id="ground01">
										<g>
											<g>
												<path class="st8" d="M172.8,131c0-22,17.8-39.8,39.8-39.8V0H0v24.3h37.7c58.7,0,106.7,48,106.7,106.7v0
							c0,58.7-48,106.7-106.7,106.7H0V262h212.7v-91.2C190.7,170.8,172.8,153,172.8,131z" />
												<path class="st8" d="M144.3,131L144.3,131c0-58.7-48-106.7-106.7-106.7H0v73.8l87.7,8v0.5c13.5,0,24.4,10.9,24.4,24.4
							c0,13.5-10.9,24.4-24.4,24.4v0.5l-87.7,8v73.8h37.7C96.3,237.7,144.3,189.7,144.3,131z" />
												<path class="st8" d="M172.8,131c0,22,17.8,39.8,39.8,39.8V91.2C190.7,91.2,172.8,109,172.8,131z" />
												<path class="st8" d="M87.7,155.9v-0.5c-13.5,0-24.4-10.9-24.4-24.4c0-13.5,10.9-24.4,24.4-24.4v-0.5L0,98.1v65.7L87.7,155.9z"
												/>
												<path class="st8" d="M112.1,131c0-13.5-10.9-24.4-24.4-24.4v48.8C101.1,155.4,112.1,144.5,112.1,131z" />
												<path class="st8" d="M63.2,131c0,13.5,10.9,24.4,24.4,24.4v-48.8C74.2,106.6,63.2,117.5,63.2,131z" />
											</g>
											<g>
												<path class="st8" d="M252.8,131c0-22-17.8-39.8-39.8-39.8V0l212.7,0v24.3H388c-58.7,0-106.7,48-106.7,106.7v0
							c0,58.7,48,106.7,106.7,106.7h37.7V262H213v-91.2C235,170.8,252.8,153,252.8,131z" />
												<path class="st8" d="M281.3,131L281.3,131c0-58.7,48-106.7,106.7-106.7h37.7v73.8l-87.7,8v0.5c-13.5,0-24.4,10.9-24.4,24.4
							c0,13.5,10.9,24.4,24.4,24.4v0.5l87.7,8v73.8H388C329.3,237.7,281.3,189.7,281.3,131z" />
												<path class="st8" d="M252.8,131c0,22-17.8,39.8-39.8,39.8V91.2C235,91.2,252.8,109,252.8,131z" />
												<path class="st8" d="M338,155.9v-0.5c13.5,0,24.4-10.9,24.4-24.4c0-13.5-10.9-24.4-24.4-24.4v-0.5l87.7-8v65.7L338,155.9z" />
												<path class="st8" d="M313.6,131c0-13.5,10.9-24.4,24.4-24.4v48.8C324.5,155.4,313.6,144.5,313.6,131z" />
												<path class="st8" d="M362.4,131c0,13.5-10.9,24.4-24.4,24.4v-48.8C351.5,106.6,362.4,117.5,362.4,131z" />
											</g>
										</g>
									</g>
								</svg>
								<div class="level__pins">
									<a class="pin pin--4-8" data-category="2" data-space="4.08" href="#" aria-label="Pin for Permaculture Hub">
										<span class="pin__icon">
											<svg class="basketball-path">
												<path fill="none" d="M52,166.7c0,0,97.3-338.7,241.3,56.7L250.7,308" />
											</svg>
										</span>
									</a>
									<a class="pin pin--4-1" data-category="1" data-space="4.01" href="#" aria-label="Pin for Cold Soup Kitchen">
										<span class="pin__icon">
											<span class="ball4f01"><img class="ball04" src="3dfac/img/ball03.png" alt=""></span>
										</span>
									</a>
									<a class="pin pin--4-2" data-category="2" data-space="4.02" href="#" aria-label="Pin for Docu Dome">
										<span class="pin__icon">
											<svg class="hoopLeft"><use xlink:href="#icon-hoopLeft"></use></svg>
										</span>
									</a>
									<a class="pin pin--4-9" data-category="2" data-space="4.09" href="#" aria-label="Pin for Permaculture Hub">
										<span class="pin__icon">
											<svg class="basketball-path2">
												<path fill="none" d="M204.3,247.2l-154.7-50c23.3-178,142-42.7,142-42.7" />
											</svg>
										</span>
									</a>
									<!-- <a class="pin pin--4-10" data-category="1" data-space="4.010" href="#" aria-label="Pin for Cold Soup Kitchen">
										<span class="pin__icon">
											<span class="ball4f02"><img class="ball04-1" src="3dfac/img/ball03.png" alt=""></span>
										</span>
									</a> -->
									<a class="pin pin--4-3" data-category="3" data-space="4.03" href="#" aria-label="Pin for Little Artist">
										<span class="pin__icon">
											<svg class="hoop"><use xlink:href="#icon-hoop"></use></svg>
										</span>
									</a>
									<a class="pin pin--4-4" data-category="4" data-space="4.04" href="#" aria-label="Pin for Sacred Symmetry">
										<span class="pin__icon">
											<span class="player3f02"><img src="3dfac/img/player3f02.png" alt=""></span>
										</span>
									</a>
									<!-- <a class="pin pin--4-5" data-category="4" data-space="4.05" href="#" aria-label="Pin for Hot Tub Festival">
										<span class="pin__icon">
											<span class="player4f03"><img src="3dfac/img/player4f03.png" alt=""></span>
										</span>
									</a> -->

									<a class="pin pin--4-6" data-category="2" data-space="4.06" href="#" aria-label="Pin for Love 2 Cook">
										<span class="pin__icon">
											<sapn class="player3f01"><img src="3dfac/img/player3f01.png" alt=""></sapn>
										</span>
									</a>
									<a class="pin pin--4-7" data-category="2" data-space="4.07" href="#" aria-label="Pin for Permaculture Hub">
										<span class="pin__icon">
											<span class="board4f01"><img src="3dfac/img/board4f01.png" alt=""></span>
										</span>
									</a>
								</div>
								<!-- /level__pins -->
							</div>
						</div>
						<!-- /levels -->
					</div>
					<!-- /mall -->
					<button class="boxbutton boxbutton--dark open-search" aria-label="Show search" style="display: none;">
						<svg class="icon icon--search">
							<use xlink:href="#icon-search"></use>
						</svg>
					</button>
					<nav class="mallnav mallnav--hidden">
						<button class="boxbutton mallnav__button--up" aria-label="Go up">
							<svg class="icon icon--angle-down">
								<use xlink:href="#icon-angle-up"></use>
							</svg>
						</button>
						<button class="boxbutton boxbutton--dark mallnav__button--all-levels" aria-label="Back to all levels">
							<svg class="icon icon--stack">
								<use xlink:href="#icon-stack"></use>
							</svg>
						</button>
						<button class="boxbutton mallnav__button--down" aria-label="Go down">
							<svg class="icon icon--angle-down">
								<use xlink:href="#icon-angle-down"></use>
							</svg>
						</button>
					</nav>
					<div class="content">
						<div class="content__item" data-space="1.01" data-category="1">
							<h3 class="content__item-title">Apple Heart</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 6:30AM &mdash; 11:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 5738902</span>
								</p>
								<p class="content__desc">Burdock celery - salsify, tomatillo. Bitter gourd horseradish leaves radicchio, celeriac
									miner's lettuce kurrat arugula fluted pumpkin turnip, arracacha water spinach nopal.</p>
							</div>
						</div>
						<div class="content__item" data-space="1.02" data-category="1">
							<h3 class="content__item-title">Crazy Banana</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 7822786</span>
								</p>
								<p class="content__desc">Malva verticillata cichorium intybus zingiber officinale. Capsicum annuum Grossum group
									amorphophallus_paeoniifolius celosia argentea. Brassica oleracea Acephala group brassica rapa pervidis or komatsuna
									group plectranthus spp.</p>
							</div>
						</div>
						<div class="content__item" data-space="1.03" data-category="2">
							<h3 class="content__item-title">Folding Life</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 2385641</span>
								</p>
								<p class="content__desc">Brassica rapa Pekinensis group crassocephalum spp ipomoea aquatica. Brassica napus Napobrassica
									group pachyrhizus ahipa.</p>
							</div>
						</div>
						<div class="content__item" data-space="1.04" data-category="3">
							<h3 class="content__item-title">Dress me not</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 7830091</span>
								</p>
								<p class="content__desc">Glycine max tarhui, chocho arachis hypogaea. Barbarea verna cucurbita spp, eruca sativa
									dioscorea spp solanum lycopersicum var telfairia occidentalis.</p>
							</div>
						</div>
						<div class="content__item" data-space="1.05" data-category="4">
							<h3 class="content__item-title">Meditation Garden</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 6653929</span>
								</p>
								<p class="content__desc">Vernonia calvoana. Talinum fruticosum celosia argentea manihot esculenta beta vulgaris subsp
									maritima lathyrus tuberosus. Vigna acontifolia amorphophallus_paeoniifolius canna spp valerianella locusta.</p>
							</div>
						</div>
						<div class="content__item" data-space="1.06" data-category="1">
							<h3 class="content__item-title">Seed of Life</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 8988650</span>
								</p>
								<p class="content__desc">Ullucus tuberosus psoralea esculenta; brassica rapa chinensis group - cichorium intybus.
									Pisum sativum inula crithmoides brassica napus napobrassica group brassica oleracea taraxacum officinale.</p>
							</div>
						</div>
						<div class="content__item" data-space="1.07" data-category="1">
							<h3 class="content__item-title">Raw Delight</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 6:30AM &mdash; 09:00PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 9121341</span>
								</p>
								<p class="content__desc">Brassica rapa Chinensis group dioscorea spp brassica rapa pekinensis and chinensis groups
									brassica oleracea pachyrhizus erosus.</p>
							</div>
						</div>
						<div class="content__item" data-space="1.08" data-category="1">
							<h3 class="content__item-title">The Wizard</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 8976773</span>
								</p>
								<p class="content__desc">Acmella oleracea brassica rapa chinensis group apios americana taraxacum officinale brassica
									rapa pekinensis group.</p>
							</div>
						</div>
						<div class="content__item" data-space="1.09" data-category="1">
							<h3 class="content__item-title">Smoothies &amp; Soul</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 6577439</span>
								</p>
								<p class="content__desc">Broccoli Rabe kale, beetroot lettuce. Daikon chickweed leek tomatillo, beetroot cress west
									indian gherkin ricebean black-eyed pea fat hen moth bean! Chard lotus root scallion jícama; ulluco. </p>
							</div>
						</div>
						<div class="content__item" data-space="2.01" data-category="1">
							<h3 class="content__item-title">Grilled Chipotle</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 11:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 9866756</span>
								</p>
								<p class="content__desc">Summer purslane horseradish catsear kurrat, winter melon bitter gourd. Tomato, florence
									fennel; garden rocket;</p>
							</div>
						</div>
						<div class="content__item" data-space="2.02" data-category="2">
							<h3 class="content__item-title">Rocketship Tech</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 11:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 4539810</span>
								</p>
								<p class="content__desc">Salsify garlic scallion manioc plectranthus summer purslane water chestnut cucumber radish
									garlic. Daikon winter melon moth bean.</p>
							</div>
						</div>
						<div class="content__item" data-space="2.03" data-category="2">
							<h3 class="content__item-title">Which Bug?</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 8865001</span>
								</p>
								<p class="content__desc">Sorrel garlic pigeon pea fava bean radish scorzonera lentil. Black-eyed pea samphire sorrel;
									lotus root arracacha lima bean celeriac chinese artichoke okra.</p>
							</div>
						</div>
						<div class="content__item" data-space="2.04" data-category="3">
							<h3 class="content__item-title">Cognitio</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 11:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 6738982</span>
								</p>
								<p class="content__desc">Samphire chaya camas chickweed rutabaga. Soko pumpkin; miner's lettuce ulluco arugula. Peanut
									jícama spinach taro squash soko tepary bean, bok choy.</p>
							</div>
						</div>
						<div class="content__item" data-space="2.05" data-category="1">
							<h3 class="content__item-title">The Eggplanthead</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 9:00AM &mdash; 11:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 7846729</span>
								</p>
								<p class="content__desc">Ahipa yacón mustard fat hen fava bean mung bean, leek; beetroot - prussian asparagus. </p>
							</div>
						</div>
						<div class="content__item" data-space="2.06" data-category="1">
							<h3 class="content__item-title">Superfood</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 5630098</span>
								</p>
								<p class="content__desc">Mizuna greens; epazote tigernut chard - common bean! Radish chickweed, garden rocket, chickweed,
									gobo dolichos bean corn salad.</p>
							</div>
						</div>
						<div class="content__item" data-space="2.07" data-category="3">
							<h3 class="content__item-title">No Princess</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 6:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 6650989</span>
								</p>
								<p class="content__desc">Ensete endive fiddlehead endive kurrat - gobo, black-eyed pea bitter gourd pignut. Winter
									melon swiss chard beet greens fiddlehead; guar.</p>
							</div>
						</div>
						<div class="content__item" data-space="2.08" data-category="3">
							<h3 class="content__item-title">Tool Exchange</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 07:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 4409098</span>
								</p>
								<p class="content__desc">Celeriac lima bean, tepary bean sweet potato or kumara nopal wild leek, elephant garlic
									carrot. Bitter gourd, prairie turnip tatsoi canna miner's lettuce bitterleaf lizard's tail broadleaf arrowhead gobo;
									swiss chard pigeon pea leaves.</p>
							</div>
						</div>
						<div class="content__item" data-space="3.01" data-category="1">
							<!-- <h3 class="content__item-title">籃球場</h3> -->
							<div class="content__item-details">
								<p class="content__meta">
									<!-- <span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 8867298</span> -->
								</p>

								<!-- <div class="fac-container">
									<div class="box first">
										<img src="https://picsum.photos/200/200">
									</div>
									<div class="box">
										<span class="icon-cont"><i class="fas fa-money-bill-alt"></i></span>

										<h3>花費點數</h3>
										<span>500</span>
									</div>

									<div class="box">
										<span class="icon-cont"><i class="fas fa-grin-stars"></i></span>

										<h3>場地評價</h3>
										<span>4.6</span>
									</div>

									<div class="box">
										<span class="icon-cont"><i class="fas fa-building"></i></span>

										<h3>場地狀態</h3>
										<span>正常開放</span>
									</div>

									<div class="box">
										<span class="icon-cont"><i class="fas fa-users"></i></span>

										<h3>目前開團</h3>
										<span>3</span>
									</div>
								</div> -->

							</div>
						</div>
						<div class="content__item" data-space="3.02" data-category="2">
							<h3 class="content__item-title">Enlightend Path</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 7756989</span>
								</p>
								<p class="content__desc">Glycine max tarhui, chocho valerianella locusta; cichorium endivia, cucumis sativus. Cyamopsis
									tetragonoloba - acmella oleracea. Lactuca sativa; cucurbita spp.</p>
							</div>
						</div>
						<div class="content__item" data-space="3.03" data-category="3">
							<h3 class="content__item-title">What makes us walk</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 8809098</span>
								</p>
								<p class="content__desc">Valerianella locusta inula crithmoides. Nasturtium officinale; arctium lappa? Achillea millefolium
									eruca sativa benincasa hispida sagittaria latifolia telfairia occidentalis plantago major.</p>
							</div>
						</div>
						<div class="content__item" data-space="3.04" data-category="3">
							<h3 class="content__item-title">Your Last Shirt</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 3365784</span>
								</p>
								<p class="content__desc">Lens culinaris vigna mungo, smallanthus sonchifolius. Cicer arietinum eruca sativa; valerianella
									locusta.
								</p>
							</div>
						</div>
						<div class="content__item" data-space="3.05" data-category="4">
							<h3 class="content__item-title">Breathe</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 4523213</span>
								</p>
								<p class="content__desc">Physalis philadelphica. Benincasa hispida brassica napus napobrassica group lens culinaris
									abelmoschus esculentus.</p>
							</div>
						</div>
						<div class="content__item" data-space="3.06" data-category="4">
							<h3 class="content__item-title">Feel the Grass</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 4768590</span>
								</p>
								<p class="content__desc">Brassica rapa Chinensis group praecitrullus fistulosus pachyrhizus ahipa. Colocasia esculenta
									nasturtium officinale capsicum annuum grossum group, adansonia spp, hypochaeris radicata.</p>
							</div>
						</div>
						<div class="content__item" data-space="3.07" data-category="4">
							<h3 class="content__item-title">Star Gazer</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 6:30AM &mdash; 9:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 4456324</span>
								</p>
								<p class="content__desc">Cucumis anguria phaseolus coccineus lupinus mutabilis scorzonera hispanica cyperus esculentus.</p>
							</div>
						</div>
						<div class="content__item" data-space="4.01" data-category="1">
							<h3 class="content__item-title">Cold Soup Kitchen</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 11:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 6743987</span>
								</p>
								<p class="content__desc">Manihot esculenta phytolacca americana corchorus olitorius, corchorus capsularis. Brassica
									rapa Pervidis or Komatsuna group dioscorea spp lepidium sativum, ipomoea aquatica - brassica rapa chinensis group
									spinacia oleracea. Phaseolus vulgaris macrotyloma uniflorum.</p>
							</div>
						</div>
						<div class="content__item" data-space="4.02" data-category="2">
							<h3 class="content__item-title">Docu Dome</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 13:00PM &mdash; 03:00AM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 2289786</span>
								</p>
								<p class="content__desc">Ipomoea aquatica smallanthus sonchifolius. The Docu Dome presents Sintel by the Blender
									Foundation.
								</p>
								<p class="content__desc">Book tickets <a href="http://tympanus.net/Development/SeatPreview/">here</a>.</p>
							</div>
						</div>
						<div class="content__item" data-space="4.03" data-category="3">
							<h3 class="content__item-title">Little Artist</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 10:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 9987879</span>
								</p>
								<p class="content__desc">Brassica oleracea Gemmifera group conopodium majus. Cichorium intybus brassica rapa subsp
									rapa brassica oleracea gemmifera group abelmoschus esculentus phaseolus vulgaris.</p>
							</div>
						</div>
						<div class="content__item" data-space="4.04" data-category="4">
							<h3 class="content__item-title">Space 16</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 8:30AM &mdash; 11:00PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 6658940</span>
								</p>
								<p class="content__desc">Arctium lappa scorzonera hispanica pteridium aquilinum, athyrium esculentum celosia argentea
									arctium lappa brassica rapa chinensis group. Cucurbita spp.</p>
							</div>
						</div>
						<div class="content__item" data-space="4.05" data-category="4">
							<h3 class="content__item-title">Hot Tub Festival</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 11:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 7843676</span>
								</p>
								<p class="content__desc">Talinum fruticosum glycine max tarhui, chocho. Cyamopsis tetragonoloba crassocephalum spp
									lens culinaris. Vigna umbellata cucurbita spp vigna umbellata.</p>
							</div>
						</div>
						<div class="content__item" data-space="4.06" data-category="2">
							<h3 class="content__item-title">Love 2 Cook</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 09:00PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 7749036</span>
								</p>
								<p class="content__desc">Vigna unguiculata subsp sesquipedalis vicia faba eruca sativa pisum sativum abelmoschus
									esculentus. Chenopodium album glycine max tarhui, chocho. Cordyline fruticosa apium graveolens sinapis alba.</p>
							</div>
						</div>
						<div class="content__item" data-space="4.07" data-category="2">
							<h3 class="content__item-title">Permaculture Hub</h3>
							<div class="content__item-details">
								<p class="content__meta">
									<span class="content__meta-item"><strong>Opening Hours:</strong> 7:30AM &mdash; 12:30PM</span>
									<span class="content__meta-item"><strong>Phone:</strong> (0) 66 7833895</span>
								</p>
								<p class="content__desc">Brassica oleracea phaseolus coccineus talinum fruticosum capsicum annuum cucurbita spp.
									Raphanus sativus Longipinnatus group cucurbita spp, moringa oleifera lathyrus sativus crithmum maritimum.</p>
							</div>
						</div>
						<button class="boxbutton boxbutton--dark content__button content__button--hidden" aria-label="Close details">
							<svg class="icon icon--cross">
								<use xlink:href="#icon-cross"></use>
							</svg>
						</button>
					</div>
					<!-- content -->
				</div>
				<!-- /main -->
				<aside class="spaces-list" id="spaces-list" style="display: none;">
					<div class="search">
						<input class="search__input" placeholder="Search..." />
						<button class="boxbutton boxbutton--darker close-search" aria-label="Close details">
							<svg class="icon icon--cross">
								<use xlink:href="#icon-cross"></use>
							</svg>
						</button>
					</div>
					<span class="label">
						<input id="sort-by-name" class="label__checkbox" type="checkbox" aria-label="Show alphabetically" />
						<label class="label__text">A - Z</label>
					</span>
					<ul class="list grouped-by-category">
						<li class="list__item" data-level="1" data-category="1" data-space="1.08"><a href="#" class="list__link">The Wizard</a></li>
						<li class="list__item" data-level="1" data-category="1" data-space="1.01"><a href="#" class="list__link">Apple Heart</a></li>
						<li class="list__item" data-level="1" data-category="1" data-space="1.02"><a href="#" class="list__link">Crazy Banana</a></li>
						<li class="list__item" data-level="2" data-category="1" data-space="2.05"><a href="#" class="list__link">The Eggplanthead</a></li>
						<li class="list__item" data-level="1" data-category="1" data-space="1.09"><a href="#" class="list__link">Smoothies
								&amp; Soul</a></li>
						<li class="list__item" data-level="1" data-category="1" data-space="1.06"><a href="#" class="list__link">Seed of Life</a></li>
						<li class="list__item" data-level="1" data-category="1" data-space="1.07"><a href="#" class="list__link">Raw Delight</a></li>
						<li class="list__item" data-level="2" data-category="1" data-space="2.01"><a href="#" class="list__link">Grilled Chipotle</a></li>
						<li class="list__item" data-level="3" data-category="1" data-space="3.01"><a href="#" class="list__link">Oolong House</a></li>
						<li class="list__item" data-level="4" data-category="1" data-space="4.01"><a href="#" class="list__link">Cold Soup
								Kitchen
							</a></li>
						<li class="list__item" data-level="2" data-category="1" data-space="2.06"><a href="#" class="list__link">Superfood</a></li>
						<li class="list__item" data-level="4" data-category="2" data-space="4.06"><a href="#" class="list__link">Love 2 Cook</a></li>
						<li class="list__item" data-level="4" data-category="2" data-space="4.07"><a href="#" class="list__link">Permaculture
								Hub
							</a></li>
						<li class="list__item" data-level="1" data-category="2" data-space="1.03"><a href="#" class="list__link">Folding Life</a></li>
						<li class="list__item" data-level="2" data-category="2" data-space="2.02"><a href="#" class="list__link">Rocketship
								Tech
							</a></li>
						<li class="list__item" data-level="2" data-category="2" data-space="2.03"><a href="#" class="list__link">Which Bug?</a></li>
						<li class="list__item" data-level="3" data-category="2" data-space="3.02"><a href="#" class="list__link">Enlightend
								Path
							</a></li>
						<li class="list__item" data-level="4" data-category="2" data-space="4.02"><a href="#" class="list__link">Docu Dome</a></li>
						<li class="list__item" data-level="4" data-category="3" data-space="4.03"><a href="#" class="list__link">Little Artist</a></li>
						<li class="list__item" data-level="3" data-category="3" data-space="3.04"><a href="#" class="list__link">Your Last
								Shirt
							</a></li>
						<li class="list__item" data-level="2" data-category="3" data-space="2.08"><a href="#" class="list__link">Tool Exchange</a></li>
						<li class="list__item" data-level="1" data-category="3" data-space="1.04"><a href="#" class="list__link">Dress me not</a></li>
						<li class="list__item" data-level="2" data-category="3" data-space="2.04"><a href="#" class="list__link">Cognitio</a></li>
						<li class="list__item" data-level="3" data-category="3" data-space="3.03"><a href="#" class="list__link">What makes
								us walk</a></li>
						<li class="list__item" data-level="2" data-category="3" data-space="2.07"><a href="#" class="list__link">No Princess</a></li>
						<li class="list__item" data-level="3" data-category="4" data-space="3.07"><a href="#" class="list__link">Star Gazer</a></li>
						<li class="list__item" data-level="4" data-category="4" data-space="4.04"><a href="#" class="list__link">Space 16</a></li>
						<li class="list__item" data-level="3" data-category="4" data-space="3.05"><a href="#" class="list__link">Breathe</a></li>
						<li class="list__item" data-level="1" data-category="4" data-space="1.05"><a href="#" class="list__link">Meditation
								Garden
							</a></li>
						<li class="list__item" data-level="4" data-category="4" data-space="4.05"><a href="#" class="list__link">Hot Tub Festival</a></li>
						<li class="list__item" data-level="3" data-category="4" data-space="3.06"><a href="#" class="list__link">Feel the Grass</a></li>
					</ul>
				</aside>
				<!-- /spaces-list -->
			</div>
			<!-- /container -->
			<script src="3dfac/js/classie.js"></script>
			<script src="3dfac/js/list.min.js"></script>
			<script src="3dfac/js/main.js"></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
		</div>

		<div class="section home_pg3">
			<div class="home_pg3_svg"></div>
			<div class="wrapper">
				<h2>加入揪團!尋找運動夥伴</h2>
				<div class="teamItem all">
					<a href="#">
						<div class="teamAll">
							<div class="all_img">
								<img src="images/index/date.png">
								<h3>
									揪團日期
								</h3>

							</div>
							<div class="teamMore all">
								<div class="morebg">查看更多</div>
								<div class="moreSkew">></div>
							</div>
						</div>
					</a>
				</div>
				<div class="home_team">
					<ul class="teamGroup">
						<li class="teamItem">
							<a href="#">
								<div class="teamOne">
									<div class="teamDate_top">
										<div class="dateGroup">
											<div class="teamDay">23</div>
											<div class="teamMonth">AUG</div>
										</div>
									</div>
									<div class="teamPic">
										<img src="images//index/bg2.png" alt="">
									</div>
									<div class="teamInfo">
										<div class="teamMore">
											<div class="morebg">更多資訊</div>
											<div class="moreSkew">></div>
										</div>
										<div class="teamName">
											台北帥哥籃球團
										</div>
										<div class="teamDate">
											2018/06/28
										</div>
										<div class="teamMem">
											揪團人數
											<span>3</span>
											/
											<span>6</span>
											人
										</div>
										<div class="teamTxt">
											Lorem ipsum dolor sit amet.
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="teamItem">
							<a href="#">
								<div class="teamOne">
									<div class="teamDate_top">
										<div class="dateGroup">
											<div class="teamDay">23</div>
											<div class="teamMonth">AUG</div>
										</div>
									</div>
									<div class="teamPic">
										<img src="images//index/bg2.png" alt="">
									</div>
									<div class="teamInfo">
										<div class="teamMore">
											<div class="morebg">更多資訊</div>
											<div class="moreSkew">></div>
										</div>
										<div class="teamName">
											台北帥哥籃球團
										</div>
										<div class="teamDate">
											2018/06/28
										</div>
										<div class="teamMem">
											揪團人數
											<span>3</span>
											/
											<span>6</span>
											人
										</div>
										<div class="teamTxt">
											Lorem ipsum dolor sit amet.
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="teamItem">
							<a href="#">
								<div class="teamOne">
									<div class="teamDate_top">
										<div class="dateGroup">
											<div class="teamDay">23</div>
											<div class="teamMonth">AUG</div>
										</div>
									</div>
									<div class="teamPic">
										<img src="images//index/bg2.png" alt="">
									</div>
									<div class="teamInfo">
										<div class="teamMore">
											<div class="morebg">更多資訊</div>
											<div class="moreSkew">></div>
										</div>
										<div class="teamName">
											台北帥哥籃球團
										</div>
										<div class="teamDate">
											2018/06/28
										</div>
										<div class="teamMem">
											揪團人數
											<span>3</span>
											/
											<span>6</span>
											人
										</div>
										<div class="teamTxt">
											Lorem ipsum dolor sit amet.
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="teamItem">
							<a href="#">
								<div class="teamOne">
									<div class="teamDate_top">
										<div class="dateGroup">
											<div class="teamDay">23</div>
											<div class="teamMonth">AUG</div>
										</div>
									</div>
									<div class="teamPic">
										<img src="images//index/bg2.png" alt="">
									</div>
									<div class="teamInfo">
										<div class="teamMore">
											<div class="morebg">更多資訊</div>
											<div class="moreSkew">></div>
										</div>
										<div class="teamName">
											台北帥哥籃球團
										</div>
										<div class="teamDate">
											2018/06/28
										</div>
										<div class="teamMem">
											揪團人數
											<span>3</span>
											/
											<span>6</span>
											人
										</div>
										<div class="teamTxt">
											Lorem ipsum dolor sit amet.
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="section home_pg4">
			<div class="home_pg4_bg"></div>
			<div class="home_pg4_bluebox1">
				<div class="home_pg4_txt">
					<h2>點數儲值</h2>
					<p>文案文案文案</p>
				</div>
				<div class="home_pg4_yellowbox"></div>
				<div class="home_pg4_whitebox"></div>
			</div>
			<div class="home_pg4_bluebox2">
				<h3>POINT</h3>
			</div>
			<div class="wrapper">
				<ul class="pointCard">

				</ul>
			</div>
		</div>
		<div class="section home_pg5">
			<div class="home_pg5_whitebox1"></div>
			<div class="home_pg5_yellowbox1"></div>
			<div class="home_pg5_yellowbox2">
				<div class="home_pg5_whitebox2"></div>
				<h3>E7 DOME</h3>
			</div>
			<div class="wrapper">
				<h2>營業資訊</h2>
				<div class="home_pg5_footer">
					<div id="home_map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7233.962258758776!2d121.19506222667539!3d24.966756662290436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1534423581293"
						 width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7233.962258758776!2d121.19506222667539!3d24.966756662290436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1534423581293"
							 width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<p>營業時間: 06:00 - 23:00</p>
					<p>地 址: 桃園市中壢區中大路300號</p>
					<p>電 話: 03-9876543</p>
				</div>
			</div>
		</div>
	</div>


	<script>
		new fullpage('#homePage', {
			verticalCentered: false,
			anchors: ['firstPage', 'secondPage', 'thirdPage', 'forthPage', 'lastPage'],
			navigation: true,
			// autoScrolling: false,
			afterRender: function () {
			},
			onLeave: function (origin, destination, direction) {
				if (destination.index == 0) {
					$('.home_pg1').removeClass('active');
				}
				if (destination.index == 1) {
					// var bgd1 = $('.map--1');
					// var bgd2 = $('.map--2');
					// var bgd3 = $('.map--3');
					// var bgd4 = $('.map--4');
					// bgd1.hide();
					// bgd2.hide();
					// bgd3.hide();
					// bgd4.hide();
					$('#e7dome-text').hide();
				}
				if (destination.index == 2) {
					// for(var i = 1; i <= 3; i ++){
					// 	$('.teamItem').css({			
					// 		left: 0,
					// 	})
					// }
				}
				if (destination.index == 3) {
					$('.home_pg4').removeClass('active');
				}
				if (destination.index == 4) {
					$('.home_pg5').removeClass('active');
				}
			},
			afterLoad: function (origin, destination, direction) {
				if (destination.index == 0) {
					$('.home_pg1').addClass('active');
					$('#home_bg1_vd')[0].play();

				}
				if (destination.index == 1) {
					$('#e7dome-text').show();
					// var tl = new TimelineMax({ delay: 0 });
					// var t2 = new TimelineMax({ delay: 0.5 });
					// var t3 = new TimelineMax({ delay: 1 });
					// var t4 = new TimelineMax({ delay: 1.5 });

					// var bgd1 = $('.map--1');
					// var bgd2 = $('.map--2');
					// var bgd3 = $('.map--3');
					// var bgd4 = $('.map--4');
					// bgd1.show();
					// bgd2.show();
					// bgd3.show();
					// bgd4.show();

					// tl.from(bgd1, 1, { opacity: 0, scale: 0, transformOrigin: 'center center', ease: Elastic.easeOut.config(1, 0.3) });
					// t2.from(bgd2, 1, { opacity: 0, scale: 0, transformOrigin: 'center center', ease: Elastic.easeOut.config(1, 0.3) });
					// t3.from(bgd3, 1, { opacity: 0, scale: 0, transformOrigin: 'center center', ease: Elastic.easeOut.config(1, 0.3) });
					// t4.from(bgd4, 1, { opacity: 0, scale: 0, transformOrigin: 'center center', ease: Elastic.easeOut.config(1, 0.3) });
				}
				if (destination.index == 2) {

				}
				if (destination.index == 3) {

					$('.home_pg4').addClass('active');
				}
				if (destination.index == 4) {

					$('.home_pg5').addClass('active');
				}
			}
		});
	</script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.teamGroup').slick(
				{
					infinite: false,
					speed: 300,
					slidesToShow: 3,
					slidesToScroll: 3,
					arrows: false,
					dots: true,
					responsive: [
						{
							breakpoint: 768,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1,
								infinite: true,
								dots: true,
							}
						}
					]
				}
			);

		});
	</script>
	<script>
		$(document).ready(function () {
			$.ajax({
				url: 'php/pointlist.php',
				dataType: 'text',
				success: function (data) {
					$('.pointCard').append(data);

					$('.pointCard').slick(
						{
							infinite: false,
							speed: 300,
							slidesToShow: 3,
							arrows: false,
							dots: false,
							responsive: [
								{
									breakpoint: 768,
									settings: {
										slidesToShow: 1,
										slidesToScroll: 1,
										dots: true,
									}
								}
							]
						}
					);
					const tilt = $(".card").tilt({
						maxTilt: 15,
						scale: 1.05,
						perspective: 500,
						// easing: "cubic-bezier(.03,.98,.52,.99)",
						speed: 2500,
						glare: true,
						maxGlare: 0.6,
					});
				}
			});
		});
	</script>
	<script>
		$('.humberger_btn').click(function () {
			$(this).toggleClass('active');
		})
	</script>
</body>

</html>