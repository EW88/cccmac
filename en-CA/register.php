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
		$email = $_POST['email'];
		
		echo $username." ".$password." ".$email;
		
		$queryTable="test";
		$queryUsername = "username";
		$queryPassword = "password";
		$queryEmail = "email";
		
		$query = "SELECT * FROM $queryTable WHERE $queryUsername = '$username'";
		
		$result = @mysqli_query($dbc, $query);
		
		if($result)
		{
			if(mysqli_num_rows($result) == 0)
			{
				$query = "SELECT * FROM $queryTable WHERE $queryEmail = '$email'";
		
				$result = @mysqli_query($dbc, $query);
				
				if($result)
				{
					if(mysqli_num_rows($result) == 0)
					{
						$query = "INSERT INTO `$queryTable` (`$queryUsername`, `$queryPassword`, `$queryEmail`)
						VALUES (?, ?, ?)";
						$stmt = mysqli_prepare($dbc, $query);
						
						mysqli_stmt_bind_param($stmt, "sss", $username, $password, $email);
						
						mysqli_stmt_execute($stmt);
						
						$affected_rows = mysqli_stmt_affected_rows($stmt);
						
						if($affected_rows == 1)
						{
							echo 'User Added';
						}
						else 
						{
							echo mysqli_error();
						}
						mysqli_stmt_close($stmt);
					}
					else
					{
						echo 'Email Used';
					}
				}
			}
			else
			{
				echo 'Username Used';
			}
		}
	mysqli_close($dbc);
	
	?>

</body>
</html>