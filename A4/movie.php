<!DOCTYPE html>
<html>
	<!--
	Web Programming Step by Step, Homework 2: Movie Review
	SOLUTION, DO NOT DISTRIBUTE!
	-->
	<head>
		<title>TMNT - Rancid Tomatoes</title>

		<link href="movie.css" type="text/css" rel="stylesheet" />
		<link href="rotten.gif" type="image/gif" rel="shortcut icon" />

		<!-- not-required feature: meta tags -->
		<meta charset="utf-8" />
		<meta name="author" content="Marty Stepp" />
		<meta name="description"
		 content="Homework assignment focusing on Cascading Style Sheets for layout." />
		<meta name="keywords" content="web programming, html, css" />
	</head>

	<body>
		<div id="topbanner">
			<img src="banner.png" alt="Rancid Tomatoes" />
		</div>

		<?php
		$movie = 'princessbride';
		$file_path = "$movie./info.txt";
		list($movie_name, $year, $score) = file($file_path);

		?>




		<h1><?= $movie_name ?>(<?= $year?>)</h1>
		
		<div id="overall">
			<div id="generaloverview">
				<img src="overview.png" alt="general overview" />
			
				<dl>
					<dt>STARRING</dt>
					<dd>Patrick Stewart <br /> Mako <br /> Sarah Michelle Gellar <br /> Kevin Smith</dd>

					<dt>DIRECTOR</dt>
					<dd>Kevin Munroe</dd>

					<dt>RATING</dt>
					<dd>PG</dd>

					<dt>THEATRICAL RELEASE</dt>
					<dd>Mar 23, 2007</dd>

					<dt>MOVIE SYNOPSIS</dt>
					<dd>After the defeat of their old arch nemesis, The Shredder, the Turtles have grown apart as a family.</dd>

					<dt>MPAA RATING</dt>
					<dd>PG, for animated action violence, some scary cartoon images and mild language</dd>

					<dt>RELEASE COMPANY</dt>
					<dd>Warner Bros.</dd>

					<dt>RUNTIME</dt>
					<dd>90 mins</dd>

					<dt>GENRE</dt>
					<dd>Action/Adventure, Comedies, Childrens, Martial Arts, Superheroes, Ninjas, Animated Characters</dd>

					<dt>BOX OFFICE</dt>
					<dd>$54,132,596</dd>

					<dt>LINKS</dt>
					<dd>
						<ul>
							<li><a href="http://www.ninjaturtles.com/">The Official TMNT Site</a></li>
							<li><a href="http://www.rottentomatoes.com/m/teenage_mutant_ninja_turtles/">RT Review</a></li>
							<li><a href="http://www.rottentomatoes.com/">RT Home</a></li>
						</ul>
					</dd>
				</dl>
			</div>

			<div id="reviews">
				<div id="rottenpane">
					<img src="rottenbig.png" alt="Rotten" />
					<span class="rating">33%</span>
				</div>
				
				<div class="column">
					<div class="review">
						<p class="quotebubble">
							<img src="rotten.gif" alt="Rotten" />
							<q>Ditching the cheeky, self-aware wink that helped to excuse the concept's inherent corniness, the movie attempts to look polished and 'cool,' but the been-there animation can't compete with the then-cutting-edge puppetry of the 1990 live-action movie.</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							Peter Debruge <br />
							<span class="publication">Variety</span>
						</p>
					</div>

					<div class="review">
						<p class="quotebubble">
							<img src="fresh.gif" alt="Fresh" />
							<q>TMNT is a fun, action-filled adventure that will satisfy longtime fans and generate a legion of new ones.</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							Todd Gilchrist <br />
							<span class="publication">IGN Movies</span>
						</p>
					</div>

					<div class="review">
						<p class="quotebubble">
							<img src="rotten.gif" alt="Rotten" />
							<q>It stinks!</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							Jay Sherman (unemployed)
						</p>
					</div>

					<div class="review">
						<p class="quotebubble">
							<img src="rotten.gif" alt="Rotten" />
							<q>The rubber suits are gone and they've been redone with fancy computer technology, but that hasn't stopped them from becoming dull.</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							Joshua Tyler <br />
							<span class="publication">CinemaBlend.com</span>
						</p>
					</div>

					<div class="review">
						<p class="quotebubble">
							<img src="rotten.gif" alt="Rotten" />
							<q>YOUR REVIEW HERE</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							NAME <br />
							<span class="publication">PUBLICATION</span>
						</p>
					</div>
				</div>

				<div class="column">
					<div class="review">
						<p class="quotebubble">
							<img src="rotten.gif" alt="Rotten" />
							<q>The turtles themselves may look prettier, but are no smarter; torn irreparably from their countercultural roots, our superheroes on the half shell have been firmly co-opted by the industry their creators once sought to spoof.</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							Jeannette Catsoulis <br />
							<span class="publication">New York Times</span>
						</p>
					</div>

					<div class="review">
						<p class="quotebubble">
							<img src="rotten.gif" alt="Rotten" />
							<q>Impersonally animated and arbitrarily plotted, the story appears to have been made up as the filmmakers went along.</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							Ed Gonzalez <br />
							<span class="publication">Slant Magazine</span>
						</p>
					</div>

					<div class="review">
						<p class="quotebubble">
							<img src="fresh.gif" alt="Fresh" />
							<q>The striking use of image and motion allows each sequence to leave an impression. It's an accomplished restart to this franchise.</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							Mark Palermo <br />
							<span class="publication">Coast (Halifax, Nova Scotia)</span>
						</p>
					</div>

					<div class="review">
						<p class="quotebubble">
							<img src="rotten.gif" alt="Rotten" />
							<q>The script feels like it was computer generated. This mechanical presentation lacks the cheesy charm of the three live action films.</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							Steve Rhodes <br />
							<span class="publication">Internet Reviews</span>
						</p>
					</div>

					<div class="review">
						<p class="quotebubble">
							<img src="rotten.gif" alt="Rotten" />
							<q>YOUR REVIEW HERE</q>
						</p>

						<p>
							<img src="critic.gif" alt="Critic" />
							NAME <br />
							<span class="publication">PUBLICATION</span>
						</p>
					</div>
				</div>
			</div>

			<p id="footer">(1-10) of 88</p>
		</div>

		<div id="w3c">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="http://webster.cs.washington.edu/w3c-html.png" alt="Valid HTML5" /></a> <br />
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="http://webster.cs.washington.edu/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>
