<!DOCTYPE html>
<html lang="en">

<head>
	<title>My Professional</title>
	<link rel="icon" href="../favicon.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">

	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/aos.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<style>
		html {
			scroll-behavior: smooth;
		}
	</style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/">404</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>

					<?php if (isset($educations) && count($educations) > 0) : ?>
						<li class="nav-item"><a href="#education-section" class="nav-link"><span>Education</span></a></li>
					<?php endif; ?>
					<?php if (isset($workExperience) && count($workExperience) > 0) : ?>
						<li class="nav-item"><a href="#wexp-section" class="nav-link"><span>Work experience</span></a></li>
					<?php endif; ?>

					<li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>

					<?php if (isset($projects) && count($projects) > 0) : ?>
						<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
					<?php endif; ?>

					<?php if (isset($blogs) && count($blogs) > 0) : ?>
						<li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
					<?php endif; ?>

					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid m-0 p-0">
		<?php require_once $web_content ?>
	</div>

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">

				<?php if (isset($user['description']) && !empty($user['description'])) : ?>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">About</h2>
							<p><?= htmlspecialchars($user['description']) ?></p>
							<?php if (isset($user['social_network']) && !empty($user['social_network'])) : ?>
								<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
									<li class="ftco-animate"><a href="<?= htmlspecialchars($user['social_network']) ?>"><span class="icon-facebook"></span></a></li>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
							<li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>

							<?php if (isset($educations) && count($educations) > 0) : ?>
								<li><a href="#education-section"><span class="icon-long-arrow-right mr-2"></span>Education</a></li>
							<?php endif; ?>
							<?php if (isset($workExperience) && count($workExperience) > 0) : ?>
								<li><a href="#wexp-section"><span class="icon-long-arrow-right mr-2"></span>Work experience</a></li>
							<?php endif; ?>

							<li><a href="#skills-section"><span class="icon-long-arrow-right mr-2"></span>Skills</a></li>

							<?php if (isset($projects) && count($projects) > 0) : ?>
								<li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
							<?php endif; ?>

							<?php if (isset($blogs) && count($blogs) > 0) : ?>
								<li><a href="#blog-section"><span class="icon-long-arrow-right mr-2"></span>Our blog</a></li>
							<?php endif; ?>

							<li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<?php if (isset($user['address']) && !empty($user['address'])) : ?>
									<li><span class="icon icon-map-marker"></span><span class="text"><?= htmlspecialchars($user['address']) ?></span></li>
								<?php endif; ?>

								<?php if (isset($user['phone']) && !empty($user['phone'])) : ?>
									<li><a href="telto:<?= htmlspecialchars($user['phone']) ?>"><span class="icon icon-phone"></span><span class="text"><?= htmlspecialchars($user['phone']) ?></span></a></li>
								<?php endif; ?>

								<?php if (isset($user['email']) && !empty($user['email'])) : ?>
									<li><a href="mailto:<?= htmlspecialchars($user['email']) ?>"><span class="icon icon-envelope"></span><span class="text"><?= htmlspecialchars($user['email']) ?></span></a></li>
								<?php endif; ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script> <b style="color: #1c7fe1;">404 Notfound</b>. All rights reserved
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>


	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery-migrate-3.0.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.stellar.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/aos.js"></script>
	<script src="../js/jquery.animateNumber.min.js"></script>
	<script src="../js/scrollax.min.js"></script>

	<script src="../js/main.js"></script>

</body>

</html>