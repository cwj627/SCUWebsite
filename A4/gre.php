<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>GRE Word of the Day</h1>
	<?php
	$f = file('words.txt');
	$line = $f[rand(0, count($f))];
	list($word, $part, $definition) = explode("\t", $line);

	print("<i>$word</i> - <b>$part</b><br>");
	print("<p>$definition</p>")

	$count = file('count.txt');
	$count = (int)$count + 1;
	print("<p>This page has been visited $count times</p>");
	file_put_contents('count.txt', $count);
	?>

</body>
</html>