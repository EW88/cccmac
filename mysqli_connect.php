<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<?php
		DEFINE ('DB_USER', 'wyc125');
		DEFINE ('DB_PASSWORD', 'wyc125');
		DEFINE ('DB_HOST', 'localhost');
		DEFINE ('DB_NAME', 'testdatabase');
		
		$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
		OR die('Could not connect to MySQL: ' .mysqli_connect_error());
	?>

</body>
</html>