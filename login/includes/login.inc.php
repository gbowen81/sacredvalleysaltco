<?php

if (isset($_POST['login-submit'])) {

	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

//check for any fields left empty//
	if (empty('$mailuid') || empty('$password')) {
		header("Location: /login.php?error=emptyfields");
		exit();
	}
//prepared statement to retrieve email//
	else {
		$sql = "SELECT * FROM users WHERE emailUsers=?;";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: /login.php?error=sqlerror");
			exit();
		}
//bind entered email to statement//

		else {
			mysqli_stmt_bind_param($stmt, "s", $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			//I think this means that if there's no result, this will be null, and thus not thruthy//
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pwdUsers']); //$pwdCheck will be either 0 or 1//
				if ($pwdCheck == false) {
					header ("Location: /login.php?error=wrongpwd");
				exit();
				}
				elseif($pwdCheck == true) {
					session_start();
					$_SESSION['userId'] = $row['idUsers']; 
					$_SESSION['userFirstName'] = $row['firstnameUsers'];
					$_SESSION['userLastName'] = $row['lastnameUsers'];

					header("Location: /login.php?login=success");
					exit();
				}
				else {
					header ("Location: /login.php?error=wrongpwd");
				exit();
				}

			}

			else {
				header("Location: /login.php?error=nosuchhuser");
			}

		}
	}

}

else {
	header("Location: /login.php");
	exit();
}