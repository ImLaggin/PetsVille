<?php 
	// this is a document that contains the details about the database used, the server, its root and password
	include 'config.php';

	error_reporting(0);
	// begins the session 
	session_start();
	// this line tells the compiler if the username is set, then the location should be shifted to the login page
	if (isset($_SESSION['username'])) {
		header("Location: index.php");
	}
	// this section is exeuted if the user clicks on the submit button 
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];				//assigning a variable for the username
		$email = $_POST['email'];					//assigning a variable for the email
		$password = md5($_POST['password']);		//assigning a variable for the password
		$cpassword = md5($_POST['cpassword']);		//assigning a variable for the confirm password

		if ($password == $cpassword) {													//checking if entered password and confirm password match
			$sql = "SELECT * FROM customers WHERE email='$email'";						//checking if entered email alrady exists
			$result = mysqli_query($conn, $sql);										//validating connection					
			if (!$result->num_rows > 0) {												 
				$sql = "INSERT INTO customers (username, email, password)				
						VALUES ('$username', '$email', '$password')";					//inserting the user entered values into the table
				$result = mysqli_query($conn, $sql);
				if ($result) {															//executed if entry was successful
					echo "<script>alert('Wow! User Registration Completed.')</script>";	//show alert that the registration was successful
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
				} else {
					echo "<script>alert('Woops! Something Wrong Went.')</script>";		//error shown if connection with database fails 
				}
			} else {
				echo "<script>alert('Woops! Email Already Exists.')</script>";			//error shown if email entered already exists
			}
			
		} else {
			echo "<script>alert('Passwords Dont Match.')</script>";						//error shown if the password doesnot match with the confirm password
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Petsville Registration</title>

		<!-- Bootstrap layout used to make the form -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- External CSS -->
		<link rel="stylesheet" type="text/css" href="stylephp.css">
		
	</head>
	<body>
	<img src="petsvillelogo.jpg" style="align-items:left; width: 600px; height:545px">
		<!-- style.css contains the properties of this container class along with some bootstrap atributes -->
		<div class="container">
			<!-- POST method is used in this document -->
			<form action="" method="POST" class="login-email">
				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Registration</p>
				<!-- Taking in the username -->
				<div class="input-group">
					<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
				</div>
				<!-- Taking in the email -->
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<!-- Taking in the password -->
				<div class="input-group">
					<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				</div>
				<!-- Taking in the confirm password -->
				<div class="input-group">
					<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
				</div>
				<!-- Submit action button -->
				<div class="input-group">
					<button name="submit" class="btn">Register</button>
				</div>
				<!-- A link that redirects users to the login page if they have already registered -->
				<p class="login-register-text">Have an account? Click here to <a href="index.php">Login</a>.</p>
			</form>
		</div>
	</body>
</html>