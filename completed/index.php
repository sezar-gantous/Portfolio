<!DOCTYPE HTML>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if !IE]><!--><html><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Sezar Gantous's online portfolio</title>

	<!-- Viewport meta tag to prevent iPhone from scaling our page -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="./css/bootstrap-responsive.css" />
	<link rel="stylesheet" href="./css/style.css" />

	<!-- Normalize hide address bar for iOS and Android -->
	<script src="./js/hideaddressbar.js"></script>

	<!-- Add media query support for IE8 and under. Must place media queries in external stylesheet -->
	<script src="./js/respond.min.js"></script>

	<!-- Using picturefill to load conditional images and matchmedia to provide support for IE8 and below + older browsers -->
	<script src="./js/picturefill.js"></script>
	<script src="./js/matchmedia.js"></script>

		<!--[if lt IE 9]>
		<script src="./js/html5.js"></script>
		<![endif]-->
		
		<!--[if lt IE 9]>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
		<![endif]-->
		
		<!--[if IE 8]>
		<script src="./js/checkbox.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
		<script src="./js/selectivizr-min.js"></script>
		<![endif]-->

	</head>

	<body lang="en">
		<div id="container-nav">
			<section id="nav" class="group wrapper">
				<h3>Sezar Gantous</h3>
				<!-- Checkbox Hack markup -->
				<input type="checkbox" id="toggle" />
				<label for="toggle" onclick>Menu</label>
				<!-- /Checkbox Hack markup -->
				<nav>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#resume">Resume</a></li>
						<li><a href="https://github.com/sezar-gantous?tab=repositories">My GitHub</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
				

			</section>
		</div>
		<div id="container-header" >
			<header id="masthead" class="wrapper">
				
				<h2>
					Software/Web Developer
				</h2>

				<figure id="Sezar"> 
					<div data-picture data-alt="Sezar Gantous">
						<div data-src="img/headshot-s.png"></div>
						<div data-src="img/headshot-s.png" data-media="(min-width: 45em)"></div>
						<div data-src="img/headshot-l.png" data-media="(min-width: 60em)"></div>
						<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
						<noscript>
							<img src="img/headshot-s.png" alt="Sezar Gantous">
						</noscript>
					</div>
				</figure>
				
			</header>

			<h2 class="pre">
				private static void Life(myLife){
				foreach(var sec in myLife){
				sec.MyLifeExperiances++;
				sec.MyLifeSkills+=2;
				sec.MyProgrammingSkills+=3;
				sec.MySleepingHours-=4;
			    } }
	         </h2>
				
</div>
<div id="container-content">
	<article id="content">

		<!-- Classes removed / #portfolio -->
		<!-- Element(s)/Classes added from Bootstrap's Scaffolding -->

		<section id="portfolio" class="container-fluid">

			<header>
				<h3>My Portfolio</h3>
				<p class="extraHeading">
					Lastest Stuff. See Full Porfolio <a href="portfolio.html">here</a>
				</p>
			</header>

			<div class="row-fluid">
				
				<article class="span4">
					<h4>Contract for Atlantic Courier &amp; Cartage LTD</h4>
					<a target="_blank" href="http://atlanticcourier.ca/">
						<figure>
							<img src="img/atlanticcourier.png" alt="Atlantic Courier &amp; Cartage LTD" />
						</figure>
					</a>
					</article>
				
				<article class="span4">
					<h4>Contract for For My Munchkin</h4>
					<a target="_blank" href="http://fmm.souloverswag.com">
						<figure>
							<img src="img/fmm.png" alt="For My Munchkin" />
						</figure>
					</a>
				</article>

				<article class="span4">
					<h4> Contract for Soul over Swag</h4>
					<a target="_blank" href="http://souloverswag.com">
						<figure>
							<img src="img/souloverswag.png" alt="soul over swag" />
						</figure>
					</a>
				</article>		

			</div>

		

			</div>

		</section>

		<section id="resume" class="group">
			
			<header class="wrapper">
				<h3>My Resume</h3>
				<p class="extraHeading"> See Full Resume <a href="resume.html">here</a></p>
			</header>
			<article class="wrapper">	
				<div class="box">
					<h4>Currently</h4>

					<h5>Full Stack Web Developer</h5>

					<h6>Contract - Diversified Communications Canada</h6>

					<p>
						Working with the Development/IT Team on a new platform. Main responsibility is developing modules and plugins for all current joomla sites that will bridge with the new system. Furthermore, other responsibilities includes creating a new responsive user interface and modern user experience.
					</p>
				</div>
			</article>
			<article class="wrapper">	
				<div class="box">
				<div class="box">
					<h4>Sep 2015 - Nov 2015</h4>

					<h5>Web App Developer</h5>

					<h6>Contract - Atlantic Courier &amp; Cartage LTD</h6>

					<p>
						Building a new, updated web site in which it will be responsive and follows Agile mothology.
	      				It also includes setting up caching, domain, hosting and SEO.
					</p>
				</div>
			</article>

			<article class="wrapper">
				<div class="box">
					<h4>Comuper Languages</h4>

					<ul>
						<li>
							Java, Android, C, C++, JavaScript/jQuery,
						</li>
						<li>
							AJAX, AngularJS, Ruby, Ruby on Rails,
						</li>
						<li> 
							objective-c, PHP, Perl,HTML5, CSS3,
						</li>
						<li>
							ASP.NET/C#/Visual Basic, SQL/mysql/json DB
						</li>
					</ul>
				</div>
			</article>
			<footer class="wrapper">
				<p> Send me an email to contact me below</p>
			</footer>
			
		</section>
		
	</article>
</div>
<div id="container-footer">
	<form id="contact" class="has-error">
		<fieldset class="wrapper">
			<legend>Contact</legend>
			<ul class="group">
				<li class="name">
					<label for="name">Your Name</label>
					<input type="text" id="name" name="name" required="required" />
				</li>
				<li class="email">
					<label for="email">Your Email</label>
					<input type="email" id="email" name="email" />
				</li>
				<li class="message">
					<label for="message">Say Hello</label>
					<textarea id="message" name="message"></textarea>
				</li>
			</ul>
			<input class="send" type="submit" name="submit" value="Send" />
		</fieldset>
	</form>           
	<footer id="colophon" class="wrapper">
		<p>©2015 all rights reserved. </p>
	</footer>
</div>	
</body>
</html>