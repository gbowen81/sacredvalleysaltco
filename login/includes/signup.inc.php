<?php

//Did the user get here by clicking the submit button?//
if (isset($_POST['signup-submit'])) {

	require 'dbh.inc.php';

	//fetch info from form - each value inside the POST method is the name of the form input//
	$first = $_POST['firstname'];
	$last = $_POST['lastname'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	//basic error handling//

	if (empty($first)) {
		//If any of those fields are empty, the user will be sent to the URL with the mail field already filled in from their prior entry//
		header("Location: /signup.php?error=missingfirstname&firstname=".$first."&lastname=".$last."&mail=".$email);
		//Stop further code from running on an error//
		exit();
	}

	elseif (empty($last)) {
		//If any of those fields are empty, the user will be sent to the URL with the mail field already filled in from their prior entry//
		header("Location: /signup.php?error=missinglastname&firstname=".$first."&lastname=".$last."&mail=".$email);
		//Stop further code from running on an error//
		exit();
	}
	elseif (empty($email)) {
		//If any of those fields are empty, the user will be sent to the URL with the mail field already filled in from their prior entry//
		header("Location: /signup.php?error=missingemail&firstname=".$first."&lastname=".$last."&mail=".$email);
		//Stop further code from running on an error//
		exit();
	}
	elseif (empty($password)) {
		//If any of those fields are empty, the user will be sent to the URL with the mail field already filled in from their prior entry//
		header("Location: /signup.php?error=missingpassword&firstname=".$first."&lastname=".$last."&mail=".$email);
		//Stop further code from running on an error//
		exit();
	}
	elseif (empty($passwordRepeat)) {
		//If any of those fields are empty, the user will be sent to the URL with the mail field already filled in from their prior entry//
		header("Location: /signup.php?error=missingrepeat&firstname=".$first."&lastname=".$last."&mail=".$email);
		//Stop further code from running on an error//
		exit();
	}
	//check to see if entered email is invalid//
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: /signup.php?error=invalidemail");
		exit();
	}
	//check to see if good password has been entered//
	elseif (!preg_match("/^([a-zA-Z0-9@!#$%ˆ&*:_]{8,255})$/", $password)) {
		header("Location: /signup.php?error=invalidpassword&firstname=".$first."&lastname=".$last."&mail=".$email);
		exit();
	}
	//check to see if passwords match//
	elseif ($password !== $passwordRepeat) {
		header("Location: /signup.php?error=nonmatchingpasswords&firstname=".$first."&lastname=".$last."&mail=".$email);
		exit();
	}
	//check to see if email address has already been used//
	else {
		$sql = "SELECT emailUsers FROM users WHERE emailUsers=?"; //Use ? for prepared statement//

		$stmt = mysqli_stmt_init($conn);

		//error handling for database connection//
		//If function doesnt work//
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: /signup.php?error=sqlerror");
			exit();
		}
		else {
			//bind the parameters
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);

			//Did we get a match in the database? - store the result//
			mysqli_stmt_store_result($stmt);

			//How many results do we have inside $stmt//
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: /signup.php?error=emailtaken");
			exit();
			}
			else {
				//Add values into the database//
				$sql = "INSERT INTO users (firstnameUsers, lastnameUsers, emailUsers, pwdUsers) VALUES (?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);

				//error handling for database connection//
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: /signup.php?error=sqlerror");
					exit();
				}
				else {
					//hash password//
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "ssss", $first, $last, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);

					header("Location: /signup.php?signup=success");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}

//Send user back to signup page if accessed this page without clicking signup button//
else {
	header("Location: /signup.php");
	exit();
}
