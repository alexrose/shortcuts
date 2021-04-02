<!DOCTYPE HTML>
<html>
	<head>
		<title>Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript>
			<link rel="stylesheet" href="assets/css/noscript.css" />
		</noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<header id="header">
				<div class="inner">
					<a href="/" class="logo">
						<span class="symbol"><img src="images/logo.svg" alt="" /></span>
						<span class="title">Dashboard</span>
					</a>
				</div>
			</header>

			<!-- Main -->
			<div id="main">
				<div class="inner">
					<section class="tiles">

                        <?php
                        $article = "<article class='%s'>
							<span class='image'><img src='%s' alt='' /></span>
							<a href='%s' target='_blank'><h4>%s</h4></a>
						</article>";
                            $xml = simplexml_load_file('sites.xml');
                            foreach ($xml->sites->site as $site) {
                                echo sprintf($article, $site->style, $site->image, $site->link, $site->name);
                            }
                        ?>

					</section>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>