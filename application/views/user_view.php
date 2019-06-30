<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User view</title>
</head>
<body>
	<h1>
		<?php
			foreach ($results as $value) {
				echo $value->username. "<br>";
			}
		?>
	</h1>
</body>
</html>