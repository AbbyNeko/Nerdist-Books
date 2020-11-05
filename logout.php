
<form method='post'><input type='submit' name='logout' id='logout' class='logout' value='Log Out'></input>
</form>

<?php
function logout() {
	if((isset($_POST['logout'])) && (isset($_SESSION['loggedin']))) {
		$_SESSION['loggedin'] = false;
		session_unset();
        header("Refresh: 0; url=nerdist_books.php");
	}
}

logout();

?>