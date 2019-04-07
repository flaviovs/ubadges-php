<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>ubadges example</title>
	<link href="dist/ubadges.css" rel="stylesheet">
	<style>
	 .sample {
	     display: inline-block;
	     margin: 0.5em;
	 }
	</style>
    </head>
    <body>
	<p>Sample icons variations: <?= number_format(22 * 81 * 22) ?></p>
	<?php
	const D1 = 22;
	const D2 = 81;
	const D3 = 22;

	function get_random_initials()
	{
	    return chr(rand(65, 90)) . chr(rand(65, 90));
	}

	for ($d1 = 1; $d1 <= D1; $d1++) {
	    for ($d2 = 1; $d2 <= D2; $d2++) {
		for ($d3 = 1; $d3 <= D3; $d3++) {
		    echo "<span class=\"sample\">"
		       . "<span class=\"ub ub_1-$d1 ub_2-$d2 ub_3-$d3\">"
		       . get_random_initials()
		       . "</span>"
		       . "</span>\n";
		}
	    }
	}
	?>
    </body>
</html>
