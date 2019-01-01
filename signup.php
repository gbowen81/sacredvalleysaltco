<?php

	require "svsinc/svsheader.php";

?>

	<main class="flex-column center-hor">
		<div class="signup bg-red">
			<h1 class="centered">Create an Account</h1>
			<p class="centered"><em>All fields are required</em></p>
			<form class="flex-column container" action="login/includes/signup.inc.php" method="post">
				<input type="text" name="firstname" placeholder="First Name">
				<?php
					if (isset($_GET['error']) && ($_GET['error'] == "missingfirstname")) { //This looks for an error in the URL//
						echo '<p class="centered mention"><span>&uarr;&nbsp;First Name is a required field&nbsp;&uarr;</span></p>';
					}
				?>
				<input type="text" name="lastname" placeholder="Last Name">
				<?php
					if (isset($_GET['error']) && ($_GET['error'] == "missinglastname")) { //This looks for an error in the URL//
						echo '<p class="centered mention"><span>&uarr;&nbsp;Last Name is a required field&nbsp;&uarr;</span></p>';
					}
				?>
				<input type="text" name="mail" placeholder="Email">
				<?php
					if (isset($_GET['error']) && ($_GET['error'] == "missingemail")) { //This looks for an error in the URL//
						echo '<p class="centered mention"><span>&uarr;&nbsp;Email is a required field&nbsp;&uarr;</span></p>';
					}
					elseif (isset($_GET['error']) && ($_GET['error'] == "invalidemail")) {
						echo '<p class="centered mention"><span>&uarr;&nbsp;Invalid email address entered&nbsp;&uarr;</span></p>';
					}
				?>
				<input type="password" name="pwd" placeholder="Password">
				<?php
					if (isset($_GET['error']) && ($_GET['error'] == "missingpassword")) { //This looks for an error in the URL//
						echo '<p class="centered mention"><span>&uarr;&nbsp;Password is a required field&nbsp;&uarr;</span></p>';
					}
					elseif (isset($_GET['error']) && ($_GET['error'] == "invalidpassword")) {
						echo '<p class="centered mention"><span>Password must be at least 8 characters long. It may contain letters (upper- and lower-case), numbers, and the following charachters: @!#$%ˆ&*:_</span></p>';
					}
				?>
				<input type="password" name="pwd-repeat" placeholder="Repeat Password">
				<?php
					if (isset($_GET['error']) && ($_GET['error'] == "missingrepeat")) { //This looks for an error in the URL//
						echo '<p class="centered mention"><span>&uarr;&nbsp;You must repeat your password&nbsp;&uarr;<span></p>';
					}
					elseif (isset($_GET['error']) && ($_GET['error'] == "nonmatchingpasswords")) {
						echo '<p class="centered mention"><span>&uarr;&nbsp;The passwords do not match&nbsp;&uarr;<span></p>';
					}
				?>				
				<div class="flex center-hor"><button type="submit" name="signup-submit">Submit</button></div>
			</form>
		</div>
	</main>

<?php

	require "svsinc/svsfooter.php";

?>