<?php
if(isset($_SESSION['loggedin'])) {
	echo "<li id='right-item'><a href='myaccount.php'>Your Account</a></li>";
}

else  {
echo "<li id='right-item'><a href='login.php'>Sign Up/Log In</a></li>";
}


?>