<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<?php
		require_once('../mysqli_connect.php');
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		echo $username." ".$password;
		
		$queryTable="test";
		$queryUsername = "username";
		$queryPassword = "password";
		
		$query = "SELECT * FROM `$queryTable` WHERE `$queryUsername` = '$username' AND `$queryPassword` = '$password'";
		
		$result = @mysqli_query($dbc, $query);
		
		if($result)
		{
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
					session_save_path('../tmp');
					session_start();
					$_SESSION['user'] = true;
					$_SESSION['username'] = $username;
					$jumpURL = $_SESSION['jumpURL'];
					mysqli_close($dbc);
					if(isset($jumpURL) && $jumpURL != null && $jumpURL != '')
					{
						header('location: '.$jumpURL);
						exit;
					}
					else
					{
						header('location: myaccount.php');
						exit;
					}
				}
			}
			else
			{
				echo 'Not Found...';
			}
		}
	mysqli_close($dbc);
	
	?>

</body>
</html>