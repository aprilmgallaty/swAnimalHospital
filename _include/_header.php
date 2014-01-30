<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Quality compassionate veterinary care for ferrets, rabbits, rodents, hedgehogs, reptiles and other exotic pets, located in Beaverton, Oregon, west of Portland" />
	
	<title><?php if(!empty($title)){print $title; } ?></title>
    
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  	
	<link rel="stylesheet" href="<?php echo CSS_URL . "reset.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "style.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "header.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "indexMiddle.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "coupon.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "couponPrint.css"; ?>" type="text/css" media="print" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "clinicInfo.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "doctors.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "locate.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "shop.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "donate.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "contact.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "animalInfo.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "links.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "footer.css"; ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "animalInfoPrint.css"; ?>" type="text/css" media="print" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
	
	<?php
		if (!isset($_COOKIE['mobileToFull']) || ($_COOKIE['mobileToFull'] != '1')) {
			?>
			<link rel="stylesheet" media="screen and (max-device-width: 480px)" href="<?php echo CSS_URL . "mobile.css"; ?>" />
			<?php
		}
	?>

	
	<!--<link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'>-->
	<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
	
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
	<script src="<?php echo JS_URL . "smartpreload.js"; ?>"></script>
	
	<script type="text/javascript">
		var imgArray = [
			"<?php echo IMG_URL . "07_homePageGallery/iguana320x360.png"; ?>",				// must be image 1
			"<?php echo IMG_URL . "07_homePageGallery/prairieDog320x360.png"; ?>",			// must be image 2
			"<?php echo IMG_URL . "07_homePageGallery/ferret320x360.png"; ?>",				// must be image 3
			"<?php echo IMG_URL . "07_homePageGallery/LeopardGecko320x360.png"; ?>",		// must be image 4
			"<?php echo IMG_URL . "07_homePageGallery/hedgehog320x360.png"; ?>",			// must be image 5
			"<?php echo IMG_URL . "07_homePageGallery/rabbit320x360.png"; ?>",				// must be image 6
			"<?php echo IMG_URL . "07_homePageGallery/chinchillaRabbit320x360.png"; ?>",	// must be image 7
			"<?php echo IMG_URL . "07_homePageGallery/hamster320x360.png"; ?>",				// must be image 8
			"<?php echo IMG_URL . "07_homePageGallery/chameleon320x360.png"; ?>",			// must be image 9
			"<?php echo IMG_URL . "02_animals/beardedDragon400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/boxTurtle400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/chameleon400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/chinchilla400x400.jpg"; ?>",
			"<?php echo IMG_URL . "01_main/coupon269x300.jpg"; ?>",
			"<?php echo IMG_URL . "01_main/printCoupon469x549.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/ferret400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/guineaPig400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/hamster400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/hedgehog400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/iguana400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/leopardGecko400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/prairieDog400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/rabbit400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/rat400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/skunk400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/snake400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/sugarGlider400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/tortoise400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/veggies400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/waterDragon400x400.jpg"; ?>",
			"<?php echo IMG_URL . "02_animals/waterTurtle400x400.jpg"; ?>",
			"<?php echo IMG_URL . "03_doctors/mb1225x300.gif"; ?>",
			"<?php echo IMG_URL . "03_doctors/ms1225x300.gif"; ?>",
			"<?php echo IMG_URL . "04_books/book_small269x400.jpg"; ?>",
			"<?php echo IMG_URL . "04_books/battleEden298x400.png"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/beardeddragon250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/chinchilla250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/chameleon250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/ferret250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/guineapig250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/gecko250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/hamster250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/iguana250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/hedgehog250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/rabbit250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/snake250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/rat250x101.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/sugarglider.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/waterdragon.jpg"; ?>",
			"<?php echo IMG_URL . "05_bumperStickers/bumperstickers_small/tortoise.jpg"; ?>"
		];
			
		$(document).ready(function() {
			$(document).smartpreload({ images: imgArray, oneachimageload: onimageload, onloadall: onallimagesloaded });

			function onimageload(src)
			{
				for (var i=0; i<imgArray.length; i++) {
					if (imgArray[i] == src) {
						$("#imgLoader" + (i+1)).attr("src", src);
						break;
					}
				}
			}
			
			function onallimagesloaded()
			{
			}
		});
	</script>	
	<script>
		$(function() {
			if ($(".mobileAddy").css("display") == "none") {
				$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
				$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
				$( ".animalTabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
				$( ".animalTabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
				$("#animalMainSection").tabs();
			}
		});
	</script>
	<script>
		function printAnimalInfo(animalName) {
			var tabs = $( "#" + animalName + " .animalListings .ui-tabs-panel" );
			var activeIndex = 0;
			for (i=0; i<tabs.length; i++) {
				if (tabs[i].style.display != "none") {
					activeIndex = i;
				}
				$(tabs[i]).css( "display", "" );
			}
			print();
			for (i=0; i<tabs.length; i++) {
				if (i != activeIndex) {
					$(tabs[i]).css( "display", "none" );
				}
			}
		}
	</script>
	
</head>

<body>
	<section id="content" itemscope itemtype="http://schema.org/VeterinaryCare">
		<div id="background">
			
	<header>
		
		<section id="logo">
			<a href="<?php echo TOP_URL . "index.php"; ?>" itemprop="url"><img src="<?php echo IMG_URL . "01_main/Logo2012_123x143.jpg"; ?>" width="123" height="143" alt="logo" id="logoImg" itemprop="logo" /></a>
				<h1 itemprop="name">Southwest Animal Hospital</h1>
					<h2 itemprop="description">The Exotic Animal Practice</h2>
						<h3 class="screenAddy">6139 SW Murray Blvd. | Beaverton, OR  | 503-643-2137 (p) | 503-626-7392 (f)</h3>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<h3 class="mobileAddy"><span itemprop="streetAddress">6139 SW Murray Blvd.</span></h3>
							<h3 class="mobileAddy"><span itemprop="addressLocality">Beaverton</span>, <span itemprop="addressRegion">OR</span></h3>
						</div>
						<h3 class="mobileAddy"><a href="tel:+15036432137"><span itemprop="telephone">503-643-2137</span></a> (p) | <span itemprop="faxNumber">503-626-7392</span> (f)</h3>
						<h3 class="mobileAddy"><a href="https://www.facebook.com/pages/Southwest-Animal-Hospital/201294845746" target="_blank">Find us on Facebook</a></h3>
					<div id="sprite1">
					<div id="fb">
						<a href="https://www.facebook.com/pages/Southwest-Animal-Hospital/201294845746" target="_blank"></a>
					</div>
					</div>
		</section>

		<article id="navBorder">
		<nav>
			<ul>
				<li><a href="<?php echo TOP_URL . "index.php"; ?>">Home</a></li>
				<li><a href="<?php echo FILES_URL . "doctors.php"; ?>">The Doctors</a></li>
				<li><a href="<?php echo FILES_URL . "clinicInfo.php"; ?>">Clinic Info</a></li>
				<li><a href="<?php echo FILES_URL . "animalInfo.php"; ?>">Exotic Pet Care Tips</a></li>
				<li><a href="<?php echo FILES_URL . "shop.php"; ?>">Shop</a></li>
				<li><a href="<?php echo FILES_URL . "links.php"; ?>">Links</a></li>
				<li><a href="<?php echo FILES_URL . "donate.php"; ?>">Donate</a></li>
				<li><a href="<?php echo FILES_URL . "contact.php"; ?>">Contact</a></li>
			</ul>
		</nav>
		</article>
	</header>
	

