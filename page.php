<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/reset.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Maven+Pro" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
	<title>Eivydo Petrylos Portfolio</title>
</head>
<body onload="startTime()">
	<div class="row">
		<div class="container-fluid">
			<header>
				<nav>
					<span class="items-box">
						<span class="item">
							<a href="page.php">
								PORTFOLIO
							</a>
						</span>
						<span class="item">
							<a href="pages/pvz.php">
								DARBŲ PAVYZDŽIAI
							</a>
						</span>
					</span>
					<span id="styling">
						<svg height="70" width="80">
								<polygon points="0,0 40,70 80,0 40,13" style="fill:none;stroke:#ececec;stroke-width:2" />
						</svg>
					</span>
					<span class="items-box">
						<span class="item">
							<a href="pages/contacts.php">
								KONTAKTAI
							</a>
						</span>
						<span class="item">
							<a href="pages/explain.php">
								BENDRAM SUVOKIMUI
							</a>
						</span>
					</span>
					<div id="clock"></div>
				</nav>
			</header>
			<div id="trikampis">
				<span class="bulgarke">
					<div class="divider"></div>
				</span>
				<div id="triangle"></div>
				<span class="bulgarke">
					<div class="divider"></div>
				</span>
			</div>
			<main>
				<aside>
					<span class="logo_img">
						<img src="images/c++.png" alt="c++ logo">
					</span>
		<!-- 		<span class="logo_img">
						<img src="images/php.png" alt="php logo">
					</span>
					<span class="logo_img">
						<img src="images/js.png" alt="javascrip logo">
					</span>
					<span class="logo_img">
						<img src="images/html.png" alt="html5 logo">
					</span>
					<span class="logo_img">
						<img src="images/css.png" alt="css logo">
					</span>
					<span class="logo_img">
						<img src="images/myadminsql.png" alt="php my admin logo">
					</span>
					<span class="logo_img">
						<img src="#" alt="to be created">
					</span>
					<span class="logo_img">
						<img src="#" alt="to be created">
					</span>
					<span class="logo_img">
						<img src="#" alt="to be created">
					</span>
					<span class="logo_img">
						<img src="#" alt="to be created">
					</span> -->
				</aside>
				<hr>
				<div class="helper1">
					<div class="about col-lg-11">
						<img class="profile col-lg-3 col-md-3 col-sm-12" src="#" alt="profile foto">
						<span class="about-by-img col-lg-9 col-md-9 col-sm-12">
							<section>
								<h1>
									<!-- Eivydas Petryla -->
									Smith Anderson
								</h1>
								<h2 id="about">
									<!-- Programuotojas, dizaineris, inžinierius-remontininkas -->
									Ilustrator & Character Designer
								</h2>
							</section>
							<article>
								<h3>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reh3henderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Einam alaus?
								</h3>
								<span class="social">
									<a target="_blank" href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
									<a target="_blank" href="#">
										<i class="fa fa-google-plus" aria-hidden="true"></i>
									</a>
									<a target="_blank" href="#">
										<i class="fa fa-linkedin" aria-hidden="true"></i>
									</a>
									<a target="_blank" href="#">
										<i class="fa fa-gitlab" aria-hidden="true"></i>
									</a>
									<a target="_blank" href="#">
										<i class="fa fa-github" aria-hidden="true"></i>
									</a>
								</span>
							</article>
						</span>
					</div>
				</div>
			</main>
			<footer>
				<div class="footer-top col-lg-12">
					<div class="contact">
						<div class="single">
							<div class="txt-bold">
								<!-- Get In Touch -->
							Susisiekime
							</div>
							<div class="txt-semiBold">
								<!-- In order to get in touch use the contact form below: -->
								Norėdami su manimi susiekti užpildykite žemiau nurodytus duomenis:
							</div>
						</div>
						<div class="structure-helper">
							<form class"col-lg-8 col-md-8 col-sm-12">
								<input type="text" name="name" placeholder="Jūsų vardas">
								<input type="text" name="email" placeholder="Jūsų elektroninio pašto adresas">
								<input type="text" name="subject" placeholder="Tema">
								<textarea rows="6" name="content" placeholder="Jūsų žinutė"></textarea>
								<button type="submit" class="btn">Siųsti</button>
							</form>
							<div class="text col-lg-3 col-md-3 col-sm-12">
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Einam alaus?
								</div>
								<div class="instaTac">
									<a id="phone" href="tel:+37065555555">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<span>+370 65 555 555</span>
									</a>
									<a id="email" href="mailto:epastas@tekejas.lt">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<span>epastas@tekejas.lt</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom col-lg-12 col-md-12 col-sm-12">
					Nevok mano dizaino ir mes sutarsim ;)
				</div>
			</footer>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/js.js"></script>
</body>
</html>