<!-- Author : Fadhlan Ridhwanallah-->

<?php
session_start();
	include("./credentials.php");
	$db = new PDO(DB_DSN, DB_USER, DB_PASS);
	$error=''; // Variabel untuk menyimpan pesan error
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
		}
		else
		{
			// Variabel username dan password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// SQL query untuk memeriksa apakah pemilih terdapat di database?
			//$result = $db->query("SELECT * FROM pemilih WHERE password='$password' AND nim='$username'")->fetch();
			$result = $db->prepare('SELECT * FROM user WHERE user_password = :password AND username = :username		');
			$result->bindValue(':password',$password);
			$result->bindValue(':username', $username);
			$result->execute();

			$result = $result->fetch(PDO::FETCH_ASSOC);

			if ($result['username']!=NULL) {
			$_SESSION['login_user']=$username; // Membuat Sesi/session
				header("location: user/home.php");
			} else {
				echo "<script type=\"text/javascript\">window.alert('Wrong username or password');</script>";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>
			<center>
						  <form method="POST" action="" style="width:500px">

									<div class="imgcontainer">
							    	<img src="img_avatar2.png" alt="logo" class="avatar">
							  	</div>
									<input name="username" class="form-control" placeholder="Username" required autofocus>
									<input type="password" name="password" class="form-control" placeholder="Password" required>
									<button class="btn btn-lg btn-primary btn-block btn-login" name="submit" type="submit">Log in</button>
						  </form>
			</center>
	</body>
</html>
