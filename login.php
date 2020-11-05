<?php
session_start();
include ("db_connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="store.css">
<link rel="stylesheet" type="text/css" href="content.css">
<title>Nerdist Books: Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<!--top navigation-->
<ul class="nav1">
  <?php
  if(isset($_SESSION['loggedin'])) {
  include 'logout.php';
  }
  ?>  
   <li><a href="books.php">Books<span class="arrow">&#9660;</span></a>
   <ul class="sub-menu1">
   <li><a href="action.php">Action</a></li>
   <li><a href="fantasy.php">Fantasy</a></li>
  <li><a href="romance.php">Romance/Drama</a></li>
  <li><a href="scifi.php">Sci-Fi</a></li>
  <li><a href="horror.php">Horror</a></li>
  <li><a href="bookseries.php">Series A-Z</a></li>
   </ul>
   </li>
   
    <li><a href="comics.php">Comics<span class="arrow">&#9660;</span></a>
  <ul class="sub-menu2">
  <li><a href="bestsellcomics.php">Bestselling</a></li>
  <li><a href="supersort.php">Superheroes</a></li>
  <li><a href="villainsort.php">Villains</a></li>
  <li><a href="antihero.php">Anti-Heroes</a></li>
  </ul>
  </li>
  
    <li><a href="manga.php">Manga<span class="arrow">&#9660;</span></a>
  <ul class="sub-menu3">
  <li><a href="shounen.php">Shounen</a></li>
  <li><a href="shoujo.php">Shoujo</a></li>
  </ul>
  </li>
  
  <li id="right-item2"><a href="cart.php">CART</a></li>
  <?php include 'loggedin.php' ?> 
</ul>
   
   <!--logo-->

<a href="nerdist_books.php"><img class="logo" src="img/icons/logo.PNG" alt=""/></a>
   
   
<!---CONTENT-->

<div id="logon">

<form id="sign_in" method="POST">
  <h3><br><br>Log In</h3>
  Username
  <input type="text" name="logusername">
  <br><br>
  Password
  <input type="password" name="logpassword"><br><br>
   <input type="submit" class="login" name="login" id="login" value="Log In">

<?php
if((isset($_POST['login'])) && (!isset($_SESSION['loggedin']))) {
    $loguser = $_POST['logusername'];
    $logpw = $_POST['logpassword'];
    $logpw = sha1($logpw);
    $sql = "SELECT * FROM accounts WHERE username='".$loguser."' AND pw='".$logpw."' LIMIT 1";
    $result = mysql_query($sql, $connection);
    if (mysql_num_rows($result) == 1){
      $row = mysql_fetch_row($result);
      $_SESSION['loggedin'] = true;
      $_SESSION['logged_user'] = $loguser;
      $_SESSION['user'] = $row[2];
      $_SESSION['pw'] = $row[3];
      echo "<br><br>You are now logged in. You are the user, " . $_SESSION['logged_user'] . ". You will be redirected to the homepage in 3 seconds.";
    }
    else{
      echo "<br><br>Invalid username and password";
    }
  }

  if (isset($_SESSION['loggedin'])) {
    header("Refresh: 3; url=nerdist_books.php");
  }

?>
</form>

<form id="register" method="POST" action="signup.php">
  <h3><br><br>Sign Up</h3>
  First Name*
  <input type="text" name="firstname">
  <br><br>
  Username*
  <input type="text" name="username"><br><br>
  Password*
  <input type="password" name="password"><br><br>
  Re-type Password*
   <input type="password" name="repassword"><br><br>
   Email*
   <input type="text" name="email"><br><br>
   Phone Number*
   <input type="text" name="phone"><br><br>
   Address*
   <input type="text" name="address"><br><br>
   City*
   <input type="text" name="city"><br><br>
   State*
   <input type="text" name="state" size="2" maxlength="2"><br><br>
   Zipcode*
   <input type="text" name="zipcode" size="5" maxlength="5"><br><br>

  <input type="submit" id="account" name="account" value="Create Account">

</form>
</div>
<!---end CONTENT-->

<!--bottom navigation-->   
<div class="nav2">
<ul class="bottom">
<li><a href="contact.php">Contact Us</a></li>
<li><a href="faq.php">FAQ</a></li>
<li><a href="aboutus.php">About Our Company</a></li>
<li><a href="started.php">How It All Started</a></li>
</ul>

<p class="footer">Website Design by AbyLDesign<br>Logo courtesy of cpauldesign <br>Menu Font provided by <a href="www.fontfabric.com">FontFabric.com</a><br>
RSS Feed Icon by Akiura Licensed Under <a href="http://creativecommons.org/licenses/by/2.5/">CC (Attribution 2.5 Generic)</a></p>

<a href="xmlfeed.html"><img class="feed" src="img/icons/rssfeed.png" alt="" width="30" height="30"/></a>
</div>

</body>

</html>