<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo e(trans('front/site.title')); ?></title>
		<meta name="keywords" content="A2Z Reviews - Product comparison & review" />
		<meta name="description" content="A2Z Reviews - Product comparison & review">
		<meta name="author" content="sanchez.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo asset('img/favicon.ico'); ?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo asset('img/apple-touch-icon.png'); ?>">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		
		
		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,300italic,300,100italic,100,700,700italic,500italic" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('vendor/font-awesome/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('vendor/simple-line-icons/css/simple-line-icons.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('vendor/owl.carousel/assets/owl.carousel.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('vendor/owl.carousel/assets/owl.theme.default.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('vendor/magnific-popup/magnific-popup.min.css'); ?>">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo asset('css/theme.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('css/theme-elements.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('css/theme-blog.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('css/theme-shop.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('css/theme-animate.css'); ?>">
		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo asset('css/skins/default.css'); ?>">
		
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo asset('css/custom.css'); ?>">
		
		<!-- Head Libs -->
		<?php echo HTML::script('vendor/modernizr/modernizr.min.js'); ?>


	</head>

  <body>

		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": false, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-row header-brand">
						<div class="header-column">
							<div class="header-logo">
								<a href="<?php echo url('index'); ?>">
									<img alt="A2Z Reviews" width="300" height="250" data-sticky-width="200" data-sticky-height="160" data-sticky-top="33" src="<?php echo asset('img/logo.png'); ?>">
								</a>
							</div>
						</div>
						<div class="header-column pull-right">
							<div class="header-row">
								<ul class="header-social-icons social-icons hidden-xs">
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li class="social-icons-digg"><a href="http://digg.com/" target="_blank" title="Digg"><i class="fa fa-digg"></i></a></li>
									<li class="social-icons-google"><a href="http://www.google.com/" target="_blank" title="Linkedin"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header-row">
						<div class="header-nav header-nav-center">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="dropdown">
											<a class="dropdown-toggle" href="<?php echo url('index/computer | Tablet'); ?>">
												Computer & Tablets
											</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/tablet'); ?>">Tablets</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/tablet'); ?>">All Tablets</a></li>
														<li><a href="<?php echo url('index/tablet & 2-in-ls'); ?>">2-in-ls</a></li>
														<li><a href="<?php echo url('index/Kid & Tablets'); ?>">Kids' Tablets</a></li>
														<li><a href="<?php echo url('index/iPad | Tablet Accessories'); ?>">iPad & Tablet Accessories</a></li>
														<li><a href="<?php echo url('index/IPad'); ?>">IPad</a></li>
														<li><a href="<?php echo url('index/E-Reader'); ?>">E-Readers</a></li>
														<li><a href="<?php echo url('index/Refurbished & Tablet'); ?>">Refurbished Tablets</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Laptop'); ?>">Laptops</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/PC | Laptop'); ?>">PC Laptops</a></li>
														<li><a href="<?php echo url('index/MacBook'); ?>">MacBooks</a></li>
														<li><a href="<?php echo url('index/Chromebook'); ?>">Chromebooks</a></li>
														<li><a href="<?php echo url('index/Laptop & Package'); ?>">Laptop Packages</a></li>
														<li><a href="<?php echo url('index/Laptop & 2-in-1s'); ?>">2-in-1s</a></li>
														<li><a href="<?php echo url('index/Gaming & Laptop'); ?>l">Gaming Laptops</a></li>
														<li><a href="<?php echo url('index/Refurbished & Laptop'); ?>">Refurbished Laptops</a></li>
														<li><a href="<?php echo url('index/Laptop & Accessories'); ?>">Laptop Accessories</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/2 in 1s'); ?>">2 in 1s</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/2 in 1s & HP'); ?>">HP</a></li>
														<li><a href="<?php echo url('index/2 in 1s & Microsoft Surface'); ?>">Microsoft Surface</a></li>
														<li><a href="<?php echo url('index/2 in 1s & Lenovo'); ?>">Lenovo</a></li>
														<li><a href="<?php echo url('index/2 in 1s & Dell'); ?>">Dell</a></li>
														<li><a href="<?php echo url('index/2 in 1s & Asus'); ?>">Asus</a></li>
														<li><a href="<?php echo url('index/2 in 1s & Toshiba'); ?>">Toshiba</a></li>
														<li><a href="<?php echo url('index/2 in 1s & Accessories'); ?>">2-in-1 Accessories</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Desktop | All-in-Ones'); ?>">Desktop and All-in-Ones</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Desktop'); ?>">All Desktops</a></li>
														<li><a href="<?php echo url('index/Tower Only'); ?>">Towers Only</a></li>
														<li><a href="<?php echo url('index/Desktop & Package'); ?>">Desktop Packages</a></li>
														<li><a href="<?php echo url('index/All-in-One & Computer'); ?>">All-in-One Computers</a></li>
														<li><a href="<?php echo url('index/Apple iMacs, mini | Mac Pros'); ?>">Apple iMacs, minis & Mac Pros</a></li>
														<li><a href="<?php echo url('index/Gaming & Desktop'); ?>">Gaming Desktops</a></li>
														<li><a href="<?php echo url('index/Refurbished & Desktop'); ?>">Refurbished Desktops</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/PC & Gaming'); ?>">PC Gaming</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Gaming & Desktop'); ?>">Gaming Desktops</a></li>
														<li><a href="<?php echo url('index/Gaming & Monitor'); ?>">Gaming Monitors</a></li>
														<li><a href="<?php echo url('index/Gaming & Laptop'); ?>">Gaming Laptops</a></li>
														<li><a href="<?php echo url('index/PC & Gaming & Peripheral'); ?>">PC Gaming Peripherals</a></li>
														<li><a href="<?php echo url('index/Computer Card & Component'); ?>">Computer Cards & Components</a></li>
														<li><a href="<?php echo url('index/PC & Game'); ?>">PC Games</a></li>
														<li><a href="<?php echo url('index/PC & Game & Download'); ?>">PC Game Downloads</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Monitor'); ?>">Monitors</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Monitor'); ?>">All Monitors</a></li>
														<li><a href="<?php echo url('index/LCD Monitor'); ?>">LCD Monitors</a></li>
														<li><a href="<?php echo url('index/LED Monitor'); ?>">LED Monitors</a></li>
														<li><a href="<?php echo url('index/IPS Monitor'); ?>">IPS Monitors</a></li>
														<li><a href="<?php echo url('index/Gaming Monitor'); ?>">Gaming Monitors</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Network | Wireless'); ?>">Network & Wireless</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Router'); ?>">Routers</a></li>
														<li><a href="<?php echo url('index/DSL | Cable Modem | Gateway'); ?>">DSL & Cable Modems and Gateways</a></li>
														<li><a href="<?php echo url('index/Network Card'); ?>">Network Cards</a></li>
														<li><a href="<?php echo url('index/PC USB Wireless Adapter'); ?>">PC USB Wireless Adapters</a></li>
														<li><a href="<?php echo url('index/PC Range Extender'); ?>">PC Range Extenders</a></li>
														<li><a href="<?php echo url('index/Ethernet Hub | Switch'); ?>">Ethernet Hubs & Switches</a></li>
														<li><a href="<?php echo url('index/Streaming Media Player'); ?>">Streaming Media Players</a></li>
														<li><a href="<?php echo url('index/VoIP'); ?>">VoIP</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Hard Drives | Storage'); ?>">Hard Drives and Storage</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Hard Drive'); ?>">All Hard Drives</a></li>
														<li><a href="<?php echo url('index/External Hard Drive'); ?>">External Hard Drives</a></li>
														<li><a href="<?php echo url('index/Internal Hard Drive'); ?>">Internal Hard Drives</a></li>
														<li><a href="<?php echo url('index/Mac External Hard Drive'); ?>">Mac External Hard Drives</a></li>
														<li><a href="<?php echo url('index/Solid State Drive'); ?>">Solid State Drives</a></li>
														<li><a href="<?php echo url('index/NAS/Personal Cloud Storage'); ?>">NAS/Personal Cloud Storage</a></li>
														<li><a href="<?php echo url('index/USB Flash Drive'); ?>">USB Flash Drives</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Printer'); ?>">Printers</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Printer'); ?>">All Printers</a></li>
														<li><a href="<?php echo url('index/3D Printers | Filament'); ?>">3D Printers & Filament</a></li>
														<li><a href="<?php echo url('index/All-In-One Printer'); ?>">All-In-One Printers</a></li>
														<li><a href="<?php echo url('index/Inkjet Printer'); ?>">Inkjet Printers</a></li>
														<li><a href="<?php echo url('index/Laser Printer'); ?>">Laser Printers</a></li>
														<li><a href="<?php echo url('index/Photo Printer'); ?>">Photo Printers</a></li>
														<li><a href="<?php echo url('index/Portable Printer'); ?>">Portable Printers</a></li>
														<li><a href="<?php echo url('index/Ink | Toner'); ?>">Ink & Toner</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="<?php echo url('index/Electronic'); ?>">
												Electronics
											</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/DSLR Camera'); ?>">DSLR Cameras</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/DSLR Camera'); ?>">All DSLR Cameras</a></li>
														<li><a href="<?php echo url('index/DSLR Body | Len'); ?>">DSLR Body & Lens</a></li>
														<li><a href="<?php echo url('index/DSLR Body Only'); ?>">DSLR Body Only</a></li>
														<li><a href="<?php echo url('index/DSLR Package Deal'); ?>">DSLR Package Deals</a></li>
														<li><a href="<?php echo url('index/Wi-Fi DSLR'); ?>">Wi-Fi DSLRs</a></li>
														<li><a href="<?php echo url('index/Full-Frame DSLR'); ?>">Full-Frame DSLRs</a></li>
														<li><a href="<?php echo url('index/Full-Frame DSLR'); ?>">Full-Frame DSLRs</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Point | Shoot Cameras'); ?>">Point & Shoot Cameras</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Point | Shoot Cameras'); ?>">All Point & Shoot Cameras</a></li>
														<li><a href="<?php echo url('index/Waterproof Point | Shoot'); ?>">Waterproof Point & Shoot</a></li>
														<li><a href="<?php echo url('index/Wi-Fi Point  Shoot'); ?>">Wi-Fi Point & Shoot</a></li>
														<li><a href="<?php echo url('index/Long Zoom Point | Shoot'); ?>">Long Zoom Point & Shoot</a></li>
														<li><a href="<?php echo url('index/Premium Point | Shoot'); ?>">Premium Point & Shoot</a></li>
														<li><a href="<?php echo url('index/Instant Print Point | Shoot'); ?>">Instant Print Point & Shoot</a></li>
														<li><a href="<?php echo url('index/Digital Camera Accessories'); ?>">Digital Camera Accessories</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Camcorder'); ?>">Camcorders</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/4K Camcorder'); ?>">4K Camcorders</a></li>
														<li><a href="<?php echo url('index/Wi-Fi Camcorder'); ?>">Wi-Fi Camcorders</a></li>
														<li><a href="<?php echo url('index/Camcorder Accessories'); ?>">Camcorder Accessories</a></li>
														<li><a href="<?php echo url('index/Action Camcorder'); ?>">All Action Camcorders</a></li>
														<li><a href="<?php echo url('index/Action Camcorder Accessories'); ?>">Action Camcorder Accessories</a></li>
														<li><a href="<?php echo url('index/360 Degree Camera'); ?>">360 Degree Cameras</a></li>
														<li><a href="<?php echo url('index/Aerial Drones with Camera'); ?>">Aerial Drones with Camera</a></li>
														<li><a href="<?php echo url('index/Aerial Drone Accessories'); ?>">Aerial Drone Accessories</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Video Game'); ?>">Video Games</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Xbox One'); ?>">Xbox One</a></li>
														<li><a href="<?php echo url('index/Xbox 360'); ?>">Xbox 360</a></li>
														<li><a href="<?php echo url('index/PlayStation 4'); ?>">PlayStation 4</a></li>
														<li><a href="<?php echo url('index/PlayStation 3'); ?>">PlayStation 3</a></li>
														<li><a href="<?php echo url('index/Wii U'); ?>">Wii U</a></li>
														<li><a href="<?php echo url('index/Nintendo 3D'); ?>">Nintendo 3DS</a></li>
														<li><a href="<?php echo url('index/PC Gaming'); ?>">PC Gaming</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Wearable Technology'); ?>">Wearable Technology</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Activity Tracker | Pedometer'); ?>">Activity Trackers & Pedometers</a></li>
														<li><a href="<?php echo url('index/Apple Watch'); ?>">Apple Watch</a></li>
														<li><a href="<?php echo url('index/Fitness | GPS Watch'); ?>">Fitness & GPS Watches</a></li>
														<li><a href="<?php echo url('index/Headphone'); ?>">Headphones</a></li>
														<li><a href="<?php echo url('index/Smart Sports Equipment'); ?>">Smart Sports Equipment</a></li>
														<li><a href="<?php echo url('index/Smart Tracker Tag'); ?>">Smart Tracker Tags</a></li>
														<li><a href="<?php echo url('index/Smartwatches | Accessories'); ?>">Smartwatches & Accessories</a></li>
														<li><a href="<?php echo url('index/Virtual Reality Headset'); ?>">Virtual Reality Headsets</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Car Electronic | GPS'); ?>">Car Electronics & GPS</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/GPS Navigation | Accessories'); ?>">GPS Navigation & Accessories</a></li>
														<li><a href="<?php echo url('index/Car Audio'); ?>">Car Audio</a></li>
														<li><a href="<?php echo url('index/Car Security | Remote Starters'); ?>">Car Security & Remote Starters</a></li>
														<li><a href="<?php echo url('index/Car Video'); ?>">Car Video</a></li>
														<li><a href="<?php echo url('index/Car Safety | Convenience'); ?>">Car Safety & Convenience</a></li>
														<li><a href="<?php echo url('index/Car Lights | Lighting Accessories'); ?>">Car Lights & Lighting Accessories</a></li>
														<li><a href="<?php echo url('index/Smartphone | iPod Car Connector'); ?>">Smartphone & iPod Car Connectors</a></li>
														<li><a href="<?php echo url('index/Satellite Radio'); ?>">Satellite Radios</a></li>
														<li><a href="<?php echo url('index/Radar Detector'); ?>">Radar Detectors</a></li>
														<li><a href="<?php echo url('index/Car Installation Part | Accessories'); ?>">Car Installation Parts & Accessories</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Television'); ?>">Televisions</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/4K Ultra HD TV'); ?>">4K Ultra HD TVs</a></li>
														<li><a href="<?php echo url('index/Smart TV'); ?>">Smart TVs</a></li>
														<li><a href="<?php echo url('index/Curved TV'); ?>">Curved TVs</a></li>
														<li><a href="<?php echo url('index/LED TV'); ?>">LED TVs</a></li>
														<li><a href="<?php echo url('index/OLED TV'); ?>">OLED TVs</a></li>
														<li><a href="<?php echo url('index/Outdoor TV'); ?>">Outdoor TVs</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/>A/V Component'); ?>">A/V Components</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Blu-ray | DVD Player'); ?>">Blu-ray & DVD Players</a></li>
														<li><a href="<?php echo url('index/Home Audio'); ?>">Home Audio</a></li>
														<li><a href="<?php echo url('index/Receiver | Speaker | Wireless Audio | A/V Component'); ?>">Receivers, Speakers, Wireless Audio & More</a></li>
														<li><a href="<?php echo url('index/Home Theater System'); ?>">Home Theater Systems</a></li>
														<li><a href="<?php echo url('index/Projector'); ?>">Projectors & Screens</a></li>
														<li><a href="<?php echo url('index/Sound Bar'); ?>">Sound Bars</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/tablets'); ?>">Portable Audio</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/tablets'); ?>">iPod & MP3 Players</a></li>
														<li><a href="<?php echo url('index/tablets'); ?>">Headphones</a></li>
														<li><a href="<?php echo url('index/tablets'); ?>">Docks, Radios & Boomboxes</a></li>
														<li><a href="<?php echo url('index/tablets'); ?>">Bluetooth & Wireless Speakerss</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Home Audio'); ?>">Home Audio</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Home Theater System'); ?>">Home Theater Systems</a></li>
														<li><a href="<?php echo url('index/Receiver | Amplifier'); ?>">Receivers & Amplifiers</a></li>
														<li><a href="<?php echo url('index/Speaker'); ?>">Speakers</a></li>
														<li><a href="<?php echo url('index/CD Player & Turntable'); ?>">CD Players & Turntables</a></li>
														<li><a href="<?php echo url('index/Stereo Shelf System'); ?>">Stereo Shelf Systems</a></li>
														<li><a href="<?php echo url('index/Wireless | Multiroom Audio'); ?>">Wireless & Multiroom Audio</a></li>
														<li><a href="<?php echo url('index/Home Audio Accessories'); ?>">Home Audio Accessories</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="<?php echo url('index/Home | Garden'); ?>">
												Home & Garden
											</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Kitchen Appliance'); ?>">Kitchen Appliances</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Small Kitchen Appliances'); ?>">Small Kitchen Appliances</a></li>
														<li><a href="<?php echo url('index/Coffee | Blender | Mixer | Cookware'); ?>">Coffee, Blenders, Mixers, Cookware & More</a></li>
														<li><a href="<?php echo url('index/Refrigerator'); ?>">Refrigerators</a></li>
														<li><a href="<?php echo url('index/Freezer | Ice Maker'); ?>">Freezers & Ice Makers</a></li>
														<li><a href="<?php echo url('index/Wine Refrigerator'); ?>">Wine Refrigerators & Coolers</a></li>
														<li><a href="<?php echo url('index/Dishwasher'); ?>">Dishwashers</a></li>
														<li><a href="<?php echo url('index/Range | Cooktop | Wall Oven'); ?>">Ranges, Cooktops & Wall Ovens</a></li>
														<li><a href="<?php echo url('index/Range Hood'); ?>">Range Hoods</a></li>
														<li><a href="<?php echo url('index/Microwave'); ?>">Microwaves</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Laundry & Garment Care'); ?>">Laundry & Garment Care</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Washer & Dryer'); ?>">Washers & Dryers</a></li>
														<li><a href="<?php echo url('index/Laundry Package'); ?>">Laundry Packages</a></li>
														<li><a href="<?php echo url('index/Iron | Steamer | Sewing Machine'); ?>">Irons, Steamers & Sewing Machines</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Vacuum Cleaner | Floor Care'); ?>">Vacuum Cleaners & Floor Care</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Upright Vacuum'); ?>">Upright Vacuums</a></li>
														<li><a href="<?php echo url('index/Canister Vacuum'); ?>">Canister Vacuums</a></li>
														<li><a href="<?php echo url('index/Handheld | Stick Vacuum'); ?>">Handheld & Stick Vacuums</a></li>
														<li><a href="<?php echo url('index/Robot Vacuum'); ?>">Robot Vacuums</a></li>
														<li><a href="<?php echo url('index/Commercial | Garage Vacuum'); ?>">Commercial & Garage Vacuums</a></li>
														<li><a href="<?php echo url('index/Steam Mop'); ?>">Steam Mops</a></li>
														<li><a href="<?php echo url('index/Carpet Cleaner'); ?>">Carpet Cleaners</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Bath'); ?>">Bath</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Bathtub'); ?>">Bathtubs</a></li>
														<li><a href="<?php echo url('index/Shower Head'); ?>">Shower Heads</a></li>
														<li><a href="<?php echo url('index/Toilet'); ?>">Toilets</a></li>
														<li><a href="<?php echo url('index/Bathroom Fixture'); ?>">Bathroom Fixtures</a></li>
														<li><a href="<?php echo url('index/Bathroom Vanities'); ?>">Bathroom Vanities</a></li>
														<li><a href="<?php echo url('index/Bathroom Faucet'); ?>">Bathroom Faucets</a></li>
														<li><a href="<?php echo url('index/Shower Head'); ?>">Shower Heads</a></li>
														<li><a href="<?php echo url('index/Bath Accessories'); ?>">Bath Accessories</a></li>
														<li><a href="<?php echo url('index/Bath Accessory Set'); ?>">Bath Accessory Sets</a></li>
														<li><a href="<?php echo url('index/Bathroom Mirror'); ?>">Bathroom Mirrors</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Bedroom'); ?>">Bedroom</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Bedding'); ?>">Bedding</a></li>
														<li><a href="<?php echo url('index/Comforter Set'); ?>">Comforter Sets</a></li>
														<li><a href="<?php echo url('index/Duvet Cover Set'); ?>">Duvet Cover Sets</a></li>
														<li><a href="<?php echo url('index/Sheet'); ?>">Sheets</a></li>
														<li><a href="<?php echo url('index/Quilt | Coverlet'); ?>">Quilts & Coverlets</a></li>
														<li><a href="<?php echo url('index/Blanket | Throw'); ?>">Blanket & Throws</a></li>
														<li><a href="<?php echo url('index/Mattress'); ?>">Mattresses</a></li>
														<li><a href="<?php echo url('index/Mattress Pad | Topper'); ?>">Mattress Pads & Toppers</a></li>
														<li><a href="<?php echo url('index/Comforter | Duvet Fill'); ?>">Comforters & Duvet Fills</a></li>
														<li><a href="<?php echo url('index/Pillow'); ?>">Pillows</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Garden'); ?>">Garden</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Fire Pit & Patio Heater'); ?>">Fire Pits & Patio Heaters</a></li>
														<li><a href="<?php echo url('index/Gas BBQ Grill'); ?>">Gas BBQ Grills</a></li>
														<li><a href="<?php echo url('index/Hedge Trimmer'); ?>">Hedge Trimmers</a></li>
														<li><a href="<?php echo url('index/Hot Tub'); ?>">Hot Tubs</a></li>
														<li><a href="<?php echo url('index/Lawn Mower'); ?>">Lawn Mowers</a></li>
														<li><a href="<?php echo url('index/Lawn Tractor'); ?>">Lawn Tractors</a></li>
														<li><a href="<?php echo url('index/Leaf Blower'); ?>">Leaf Blowers</a></li>
														<li><a href="<?php echo url('index/Pressure Washer'); ?>">Pressure Washers</a></li>
														<li><a href="<?php echo url('index/String Trimmer'); ?>">String Trimmers</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Tool'); ?>">Tools</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Chainsaws'); ?>">Chainsaws</a></li>
														<li><a href="<?php echo url('index/Circular Saw'); ?>">Circular Saws</a></li>
														<li><a href="<?php echo url('index/Compound Miter Saw'); ?>">Compound Miter Saws</a></li>
														<li><a href="<?php echo url('index/Cordless Drill'); ?>">Cordless Drills</a></li>
														<li><a href="<?php echo url('index/Flashlight'); ?>">Flashlights</a></li>
														<li><a href="<?php echo url('index/Portable Generator'); ?>">Portable Generators</a></li>
														<li><a href="<?php echo url('index/Table Saw'); ?>">Table Saws</a></li>
														<li><a href="<?php echo url('index/Wet Dry Vac'); ?>">Wet Dry Vacs</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="<?php echo url('index/Auto'); ?>">
												Auto
											</a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo url('index/Car | Garage'); ?>">Car & Garage</a></li>
												<li><a href="<?php echo url('index/Auto GPS'); ?>">Auto GPS</a></li>
												<li><a href="<?php echo url('index/Auto Insurance'); ?>">Auto Insurance</a></li>
												<li><a href="<?php echo url('index/Car Batterie'); ?>">Car Batteries</a></li>
												<li><a href="<?php echo url('index/Garage Door Opener'); ?>">Garage Door Openers</a></li>
												<li><a href="<?php echo url('index/Radar Detector'); ?>">Radar Detectors</a></li>
												<li><a href="<?php echo url('index/Small SUV'); ?>">Small SUVs</a></li>
												<li><a href="<?php echo url('index/Snow Blower'); ?>">Snow Blowers</a></li>
												<li><a href="<?php echo url('index/Snow Tire'); ?>">Snow Tires</a></li>
												<li><a href="<?php echo url('index/SUV Tire | Light Truck Tire'); ?>">SUV Tires - Light Truck Tires</a></li>
												<li><a href="<?php echo url('index/Tire'); ?>">Tires</a></li>
												<li><a href="<?php echo url('index/Wiper Blade'); ?>">Wiper Blades</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="<?php echo url('index/Baby | Kid'); ?>">
												Baby & Kids
											</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Baby Gear'); ?>">Baby Gear</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/>Baby Carrier'); ?>">Baby Carriers</a></li>
														<li><a href="<?php echo url('index/Baby Monitor'); ?>">Baby Monitors</a></li>
														<li><a href="<?php echo url('index/Baby Safety Gate'); ?>">Baby Safety Gates</a></li>
														<li><a href="<?php echo url('index/Baby Swing'); ?>">Baby Swings</a></li>
														<li><a href="<?php echo url('index/High Chair'); ?>">High Chairs</a></li>
														<li><a href="<?php echo url('index/Portable Crib'); ?>">Portable Cribs</a></li>
														<li><a href="<?php echo url('index/Car Seat'); ?>">Car Seats</a></li>
														<li><a href="<?php echo url('index/Booster Seat'); ?>">Booster Seats</a></li>
														<li><a href="<?php echo url('index/Stroller'); ?>">Strollers</a></li>
														<li><a href="<?php echo url('index/Double Stroller'); ?>">Double Strollers</a></li>
														<li><a href="<?php echo url('index/Activity center'); ?>">Activity centers</a></li>
														<li><a href="<?php echo url('index/Bathtub'); ?>">Bathtubs</a></li>
														<li><a href="<?php echo url('index/Bottle'); ?>">Bottles</a></li>
														<li><a href="<?php echo url('index/Baby clothes'); ?>">Baby clothes</a></li>
														<li><a href="<?php echo url('index/Baby food'); ?>">Baby food</a></li>
														<li><a href="<?php echo url('index/Baby formula'); ?>">Baby formulas</a></li>
														<li><a href="<?php echo url('index/Baby jumper'); ?>">Baby jumper</a></li>
														<li><a href="<?php echo url('index/Baby walker'); ?>">Baby walkers</a></li>
														<li><a href="<?php echo url('index/Bouncer seat'); ?>">Bouncer seats</a></li>
														<li><a href="<?php echo url('index/Changing table'); ?>">Changing tables</a></li>
														<li><a href="<?php echo url('index/Diaper'); ?>">Diapers</a></li>
														<li><a href="<?php echo url('index/Diaper bag'); ?>">Diaper bags</a></li>
														<li><a href="<?php echo url('index/Glider | rocking chair'); ?>">Gliders & rocking chairs</a></li>
														<li><a href="<?php echo url('index/High chair'); ?>">High chairs</a></li>
														<li><a href="<?php echo url('index/Play yard'); ?>">Play yards</a></li>
														<li><a href="<?php echo url('index/Safety gate'); ?>">Safety gates</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Children & health'); ?>">Children's health</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Thermometers'); ?>">Thermometers</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/School-age kid | School age kid'); ?>">School-age kids</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Backpack'); ?>">Backpacks</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="<?php echo url('index/Sport | Outdoor'); ?>">
												Sport & Outdoors
											</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Bike'); ?>">Bikes</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Bicycle Lock'); ?>">Bicycle Locks</a></li>
														<li><a href="<?php echo url('index/Folding Bike'); ?>">Folding Bikes</a></li>
														<li><a href="<?php echo url('index/Kids Bike'); ?>">Kids Bikes</a></li>
														<li><a href="<?php echo url('index/Road Bike'); ?>">Road Bikes</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Hiking'); ?>">Hiking</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Binocular'); ?>">Binoculars</a></li>
														<li><a href="<?php echo url('index/Headlamp'); ?>">Headlamps</a></li>
														<li><a href="<?php echo url('index/Hiking Boot'); ?>">Hiking Boots</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Home Gym'); ?>">Home Gym</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Elliptical Trainer'); ?>">Elliptical Trainers</a></li>
														<li><a href="<?php echo url('index/Exercise Bike'); ?>">Exercise Bikes</a></li>
														<li><a href="<?php echo url('index/Home Gym'); ?>">Home Gyms</a></li>
														<li><a href="<?php echo url('index/Stair Climber'); ?>">Stair Climbers</a></li>
														<li><a href="<?php echo url('index/Treadmill'); ?>">Treadmills</a></li>
														<li><a href="<?php echo url('index/Yoga Mat'); ?>">Yoga Mats</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Monitor'); ?>">Monitors</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Fitness Tracker'); ?>">Fitness Trackers</a></li>
														<li><a href="<?php echo url('index/Heart Rate Monitor'); ?>">Heart Rate Monitors</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Inline Skate | Running Shoes | Sports Bra | Yoga Video'); ?>">Other</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Inline Skate'); ?>">Inline Skates</a></li>
														<li><a href="<?php echo url('index/Running Shoes'); ?>">Running Shoes</a></li>
														<li><a href="<?php echo url('index/Sports Bras'); ?>">Sports Bras</a></li>
														<li><a href="<?php echo url('index/Yoga Video'); ?>">Yoga Videos</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown dropdown-reverse">
											<a class="dropdown-toggle" href="<?php echo url('index/Clothing | Accessories'); ?>">
												Clothing & Accessories
											</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Women'); ?>">Women</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Women & Dress'); ?>">Dresses</a></li>
														<li><a href="<?php echo url('index/Women & (Shirt | Top)'); ?>">Shirts & Tops</a></li>
														<li><a href="<?php echo url('index/Women & Hoodies | Sweatshirt'); ?>">Hoodies & Sweatshirts</a></li>
														<li><a href="<?php echo url('index/Women & Short'); ?>">Shorts</a></li>
														<li><a href="<?php echo url('index/Women & Pant'); ?>">Pants</a></li>
														<li><a href="<?php echo url('index/Women & Active Wear'); ?>">Active Wear</a></li>
														<li><a href="<?php echo url('index/Women & Underwear'); ?>">Underwear</a></li>
														<li><a href="<?php echo url('index/Women & Bra'); ?>">Bras</a></li>
														<li><a href="<?php echo url('index/Women & Swimwear'); ?>">Swimwear</a></li>
														<li><a href="<?php echo url('index/Women & Sock'); ?>">Socks</a></li>
														<li><a href="<?php echo url('index/Women & Shoes'); ?>">Shoes</a></li>
														<li><a href="<?php echo url('index/Women & Sandal'); ?>">Sandals</a></li>
														<li><a href="<?php echo url('index/Women & Sneaker'); ?>">Sneakers</a></li>
														<li><a href="<?php echo url('index/Women & Boot'); ?>">Boots</a></li>
														<li><a href="<?php echo url('index/Women & Coat | Women & Jacket'); ?>">Coats & Jackets</a></li>
														<li><a href="<?php echo url('index/Women & Vest'); ?>">Vests</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Men'); ?>">Men</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Men & (Shirt | Top)'); ?>">Shirts & Tops</a></li>
														<li><a href="<?php echo url('index/Men & Hoodies & Sweatshirt'); ?>">Hoodies & Sweatshirts</a></li>
														<li><a href="<?php echo url('index/Men & Short'); ?>">Shorts</a></li>
														<li><a href="<?php echo url('index/Men & Pant'); ?>">Pants</a></li>
														<li><a href="<?php echo url('index/Men & Active Wear'); ?>">Active Wear</a></li>
														<li><a href="<?php echo url('index/Men & Underwear'); ?>">Underwear</a></li>
														<li><a href="<?php echo url('index/Men & Swimwear'); ?>">Swimwear</a></li>
														<li><a href="<?php echo url('index/Men & Sock'); ?>">Socks</a></li>
														<li><a href="<?php echo url('index/Men & Shoes'); ?>">Shoes</a></li>
														<li><a href="<?php echo url('index/Men & Sneaker'); ?>">Sneakers</a></li>
														<li><a href="<?php echo url('index/Men & Boot'); ?>">Boots</a></li>
														<li><a href="<?php echo url('index/Men & (Coat | Jacket)'); ?>">Coats & Jackets</a></li>
														<li><a href="<?php echo url('index/Men & Vest'); ?>">Vests</a></li>
														<li><a href="<?php echo url('index/Men & Tie'); ?>">Ties</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Kid'); ?>">Kids</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Kid & Dress'); ?>">Dresses</a></li>
														<li><a href="<?php echo url('index/Kid & (Shirt | Top)'); ?>">Shirts & Tops</a></li>
														<li><a href="<?php echo url('index/Kid & Hoodies & Sweatshirt'); ?>">Hoodies & Sweatshirts</a></li>
														<li><a href="<?php echo url('index/Kid & Short'); ?>">Shorts</a></li>
														<li><a href="<?php echo url('index/Kid & Pant'); ?>">Pants</a></li>
														<li><a href="<?php echo url('index/Kid & Active Wear'); ?>">Active Wear</a></li>
														<li><a href="<?php echo url('index/Kid & Underwear'); ?>">Underwear</a></li>
														<li><a href="<?php echo url('index/Kid & Swimwear'); ?>">Swimwear</a></li>
														<li><a href="<?php echo url('index/Kid & Sock'); ?>">Socks</a></li>
														<li><a href="<?php echo url('index/Kid & Shoes'); ?>">Shoes</a></li>
														<li><a href="<?php echo url('index/Kid & Sandal'); ?>">Sandals</a></li>
														<li><a href="<?php echo url('index/Kid & Sneaker'); ?>">Sneakers</a></li>
														<li><a href="<?php echo url('index/Kid & Boot'); ?>">Boots</a></li>
														<li><a href="<?php echo url('index/Kid & Coat & Jacket'); ?>">Coats & Jackets</a></li>
														<li><a href="<?php echo url('index/Kid & Vest'); ?>">Vests</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="<?php echo url('index/Accessories'); ?>">Accessories</a>
													<ul class="dropdown-menu">
														<li><a href="<?php echo url('index/Handbag'); ?>">Handbags</a></li>
														<li><a href="<?php echo url('index/Backpack'); ?>">Backpacks</a></li>
														<li><a href="<?php echo url('index/Luggage'); ?>">Luggage</a></li>
														<li><a href="<?php echo url('index/Wallet | Accessories'); ?>">Wallets & Accessories</a></li>
														<li><a href="<?php echo url('index/Duffle Bag'); ?>">Duffle Bags</a></li>
														<li><a href="<?php echo url('index/Messenger Bag'); ?>">Messenger Bags</a></li>
														<li><a href="<?php echo url('index/Hat'); ?>">Hats</a></li>
														<li><a href="<?php echo url('index/Glove'); ?>">Gloves</a></li>
														<li><a href="<?php echo url('index/Scarves | scarf'); ?>">Scarves</a></li>
														<li><a href="<?php echo url('index/Belt'); ?>">Belts</a></li>
														<li><a href="<?php echo url('index/Tech Accessories'); ?>">Tech Accessories</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<?php echo $__env->yieldContent('header'); ?>
			</header>
			
			<div role="main" class="main">
				<?php echo $__env->yieldContent('main'); ?>
			</div>
			
			<footer id="footer">
				<?php echo $__env->yieldContent('footer'); ?>
				<div class="footer-top">
					<p>@ 2016. All Rights Reserved.</p>
				</div>
				<div class="footer-links footer-copyright">
					<nav id="sub-menu">
						<ul>
							<li><a href="#">Computer & Tablet Reviews</a></li>
							<li><a href="#">Electronics Reviews</a></li>
							<li><a href="#">Home & Garden Reviews</a></li>
							<li><a href="#">Auto Reviews</a></li>
							<li><a href="#">Baby & Kids Reviews</a></li>
							<li><a href="#">Sports & Outdoors Reviews</a></li>
							<li><a href="#">Clothing & Accessories Reviews</a></li>
						</ul>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">TOS</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">How it Works</a></li>
						</ul>
					</nav>
				</div>
			</footer>
		</div>
		
		<!-- Vendor -->
		<?php echo HTML::script('vendor/jquery/jquery.min.js'); ?>

		<?php echo HTML::script('vendor/jquery.appear/jquery.appear.min.js'); ?>

		<?php echo HTML::script('vendor/jquery.easing/jquery.easing.min.js'); ?>

		<?php echo HTML::script('vendor/jquery-cookie/jquery-cookie.min.js'); ?>

		<?php echo HTML::script('vendor/bootstrap/js/bootstrap.min.js'); ?>

		<?php echo HTML::script('vendor/common/common.min.js'); ?>

		<?php echo HTML::script('vendor/jquery.validation/jquery.validation.min.js'); ?>

		<?php echo HTML::script('vendor/jquery.stellar/jquery.stellar.min.js'); ?>

		<?php echo HTML::script('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js'); ?>

		<?php echo HTML::script('vendor/jquery.gmap/jquery.gmap.min.js'); ?>

		<?php echo HTML::script('vendor/jquery.lazyload/jquery.lazyload.min.js'); ?>

		<?php echo HTML::script('vendor/isotope/jquery.isotope.min.js'); ?>

		<?php echo HTML::script('vendor/owl.carousel/owl.carousel.min.js'); ?>

		<?php echo HTML::script('vendor/magnific-popup/jquery.magnific-popup.min.js'); ?>

		<?php echo HTML::script('vendor/vide/vide.min.js'); ?>


		<!-- Theme Custom -->
		<?php echo HTML::script('js/theme.js'); ?>


		<!-- Current Page Vendor and Views -->
		<?php echo HTML::script('vendor/rs-plugin/js/jquery.themepunch.tools.min.js'); ?>

		<?php echo HTML::script('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>

		<?php echo HTML::script('vendor/circle-flip-slideshow/js/jquery.flipshow.min.js'); ?>

		<?php echo HTML::script('js/views/view.home.js'); ?>

		<?php echo HTML::script('js/custom.js'); ?>


		<!-- Theme Initialization Files -->
		<?php echo HTML::script('js/theme.init.js'); ?>

		
		<?php echo $__env->yieldContent('scripts'); ?>

  </body>
</html>