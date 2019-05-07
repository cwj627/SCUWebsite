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
			<?php
		$movie = $_GET['film'];
		$file_path = $movie."/info.txt";
		list($movie_name, $year, $score) = file($file_path);

		function readReview($index, $movie)
			{
			    $count_review = glob("./" . $movie . "/review*.txt");

				for (; $index < count($count_review); $index += 2) {
			        if ($index > count($count_review)) {
			            return;
			        }
			   
			      
			        list($content, $pic, $author, $company) = file($count_review[$index]);

			        print "<div class=\"review\">";
			        print "<p class=\"quotebubble\">";
			        print "<img src= \"" . strtolower($pic) . ".gif \"" . "alt=\"Rotten\"/>";
			        print "<q>" . $content . "</q>";
			        print "</p>";
			        print "<p>";
			        print "<img src=\"critic.gif\" alt=\"Critic\"/>";
			        print $author . "<br/>";
			        print "<span class=\"publication\">" . $company . "</span>";
			        print "</p>";
			        print "</div>";
			    }
			}
		?>
		<div id="topbanner">
			<img src="banner.png" alt="Rancid Tomatoes" />
		</div>
		<h1><?=$movie_name?>(<?=trim($year)?>)</h1>
	
		<div id="overall">
			<div id="generaloverview">
				<?php
				$movie_name = $_GET['film'];
				print("<img src=" . $movie_name . "/overview.png" . ">");
				?>
			
				<dl>
                <?php
                $movie = $_GET['film'];
                $overview = file("./" . $movie . "/overview.txt");
                foreach ($overview as $def) {
                    list($a, $b) = explode(":", $def);
                    print("<dt>" . $a. "</dt>");
                    print("<dd>" . $b. "</dd>");
                }
                ?>

				
				</dl>
			</div>

	
			<div id="reviews">
				<div id="rottenpane">
					<?php
					if($score>59){
					?>
					<img src="freshbig.png" alt="Fresh" />
					<?php
				}
				else{
					?>
					<img src="rottenbig.png" alt="Rotten" />
					<?php
				}
				?>
					<span class="rating"><?=$score."%"?></span>
				</div>
				

				<div class="column">

					 <?php
            		readReview(0, $movie);
            		?>
				</div>
				<div class="column">
					<?php
		            readReview(1, $movie);
		            ?>
			</div>

			<p id="footer">(1-10) of 88</p>
		</div>

		<div id="w3c">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="http://webster.cs.washington.edu/w3c-html.png" alt="Valid HTML5" /></a> <br />
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="http://webster.cs.washington.edu/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>
