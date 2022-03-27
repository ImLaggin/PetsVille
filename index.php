<?php 
	// this is a document that contains the details about the database used, the server, its root and password
	include 'config.php';
	// begins the session 
	session_start();

	error_reporting(0);
	// this line tells the compiler if the username is set, then the location should be shifted to the home page  
	if (isset($_SESSION['username'])) {
		header("Location: petsville.php");	
	}
	// this section is exeuted if the user clicks on the submit button 
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];					//assigning a variable for the email	
		$password = md5($_POST['password']);		//assigning a variable for the password

		$sql = "SELECT * FROM customers WHERE email='$email' AND password='$password'";	// checking if email and password match
		$result = mysqli_query($conn, $sql);											// validating connection
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);											//fetching the result form the database
			$_SESSION['username'] = $row['username'];									//assigning username of the corresponding email as session username
			header("Location: petsville.php");											//location to be redirected to if the above conditions are met
		} else {
			echo "<script>alert('Woops! Email or Password is Wrong.')</script>";		//Error validation if credentials are wrong
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Petsville Login</title>
		<!-- Bootstrap layout used to make the form -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- External CSS -->
		<link rel="stylesheet" type="text/css" href="stylephp.css">
	</head>

	<body>
		<!-- stylephp.css contains the properties of this container class along with some bootstrap atributes -->
		<div class="container">
			<!-- POST method is used in this document -->
			<form action="" method="POST" class="login-email">
				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
				<!-- Taking in the email -->
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<!-- Taking in the password -->
				<div class="input-group">
					<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				</div>
				<!-- Submit action button -->
				<div class="input-group">
					<button name="submit" class="btn">Login</button>
				</div>
				<!-- A link that redirects users to the registration page if they are a new user -->
				<p class="login-register-text">First Time? Click Here to <a href="register.php">Register</a>.</p>
			</form>
		</div>
	</body>
</html>