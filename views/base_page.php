<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Color Compass | <?=$meta_title;?></title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Condensed" rel="stylesheet">
		<link rel="stylesheet" href="/css/foundation.min.css">
		<link rel="stylesheet" href="/css/styles.css">
		<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="/js/foundation.min.js"></script>
	</head>
	<body>
		<div class="row header">
			<div class="small-12 medium-6 medium-centered column">
				<a href="/"><img src="/images/ccc-logo-shadow.png" alt="Color Compass Corporation"></a>
			</div>
			<div class="small-12 column">
				<div class="title-bar" data-responsive-toggle="top_menu" data-hide-for="medium">
					<button class="menu-icon" type="button" data-toggle></button>
					<div class="title-bar-title">Menu</div>
				</div>
				<div class="top-bar" id="top_menu">
					<ul class="dropdown vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown">
						<li><a href="/">Home</a></li>
						<li class="divider">|</li>
						<li class="shas-submenu">
							<a href="">Company</a>
							<ul class="submenu menu vertical" data-submenu>
								<li><a href="/about">About Us</a></li>
								<li><a href="/history">History</a></li>
								<li><a href="/executive">Leadership Team</a></li>
								<li><a href="/mission">Mission/Vision</a></li>
							</ul>
						</li>
						<li class="divider">|</li>
						<li class="has-submenu">
							<a href="">Divisions</a>
							<ul class="submenu menu vertical" data-submenu>
								<li><a href="http://www.carlsonbodyshopsupply.com" target="_blank">Carlson Body Shop</a></li>
								<li><a href="http://www.chaseautobodysupplies.com" target="_blank">Chase Auto Body</a></li>
								<li><a href="http://www.pbedistributors.com" target="_blank">PBE Distributors</a></li>
								<li><a href="http://www.rockymountainsales.ca" target="_blank">Rocky Mountain</a></li>
								<li><a href="http://www.whiteandpeters.com" target="_blank">White &amp; Peters</a></li>
							</ul>
						</li>
						<li class="divider">|</li>
						<li><a href="/news">News</a></li>
						<li class="divider">|</li>
						<li><a href="/community">Community</a></li>
						<li class="divider">|</li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>
				</div>
			</div>
		<?=$content;?>
		<div class="row footer">
			<div class="large-4 columns">
				<h5>Color Compass Corporation</h5>
				<p class="smaller">&copy; <?=date('Y');?> by Color Compass Corporation</p>
				<p class="social"><a href="https://www.linkedin.com/company/color-compass-corporation" target="_blank"><img src="/images/linkedinicon.png" alt="Color Compass Corporation LinkedIn" title="Color Compass Corporation LinkedIn"></a>
				<a href="https://twitter.com/ColorCompass" target="_blank"><img src="/images/twittericon.png" alt="Color Compass Corporation Twitter" title="Color Compass Corporation Twitter"></a>
				<a href="https://www.facebook.com/Color-Compass-Corporation-660498810765347/" target="_blank"><img src="/images/facebookicon.png" alt="Color Compass Corporation FaceBook" title="Color Compass Corporation FaceBook"></a>
				<a href="https://plus.google.com/118393445120103564064/posts" target="_blank"><img src="/images/googleplusicon.png" alt="Color Compass Corporation Google +" title="Color Compass Corporation Google +"></a>
				<a href="https://www.instagram.com/color_compass/" target="_blank"><img src="/images/instagramicon.png" alt="Color Compass Corporation Instagram" title="Color Compass Corporation Instagram"></a></p>
			</div>
			<div class="large-3 large-offset-2 columns">
				<h5>Vancouver Office</h5>
				<p>
					1368 United Blvd.<br>
					Coquitlam BC, Canada<br>
					V3K 6Y2<br>
					604.540.7200
				</p>
			</div>
			<div class="large-3 columns">
				<h5>Edmonton Office</h5>
				<p>
					5308 - 97 Street<br>
					Edmonton AB, Canada<br>
					T6E 5W5<br>
					780.438.0838
				</p>
			</div>
		</div>
		<script>
			$(document).foundation();
			$(document).ready(function() {
				$('.intro h2').fadeIn(2200);
			});
		</script>
	</body>
</html>