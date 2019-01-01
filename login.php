<?php

	require "login/login-header.php";
?>



	<main>
		<?php
			if(isset($_SESSION['userFirstName'])) {
				echo '<p>Your are logged in.</p>';
			}
			else {
				echo '<p>You are logged out.</p>';
			}
		?>	
		
	</main>





<?php

	require "login/login-footer.php";

?>
