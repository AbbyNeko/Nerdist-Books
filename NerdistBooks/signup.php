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

<form id="register" method="POST" action="signup.php" >
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
  <input type="submit" id="account" name="account" value="Create Account"><br><br>
</form>

<form>
<?php

if(isset($_POST['account'])) {
  $name = $_POST['firstname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $zip = $_POST['zipcode'];
  $pw = $_POST['password'];
  $pw = sha1($pw);
  $repw = $_POST['repassword'];
  $repw = sha1($repw);
  $phone = $_POST['phone'];

if(empty($name)) {
  $error= "<b>Error:</b> Name needs to be filled.<br>";
  echo $error;
}

if(empty($email)) {
  $error = "<b>Error:</b> Email needs to be filled. <br>";
  echo $error;
}

if(empty($phone)) {
  $error ="<b>Error:</b> Phone Number needs to be filled. <br>";
  echo $error;
}

else if(!preg_match("/^[0-9]{10}$/", $phone)) {  // ^ = begin  $ = ends with
  $error = "<b>Error:</b> Phone Number must only be in numbers and exactly 10 characters long. <br>";
  echo $error;
}

if(preg_match("/\D/", $phone)) {
  $phone =preg_replace('/\D+/', '' , $phone);
  }


if(empty($username)) {
  $error= "<b>Error:</b> Username needs to be filled.<br>";
  echo $error;
}

if(empty($pw)) {
  $error = "<b>Error:</b> Password needs to be filled.<br>";
  echo $error;
}

if(empty($repw)) {
  $error = "<b>Error:</b> Re-Password needs to be filled.<br>";
  echo $error;
}

else if($pw != $repw) {
  $error = "<b>Error:</b> Password and Re-Password do not match!<br>";
  echo $error;
}

if(empty($address)) {
  $error = "<b>Error:</b> Address needs to be filled.<br>";
  echo $error;
}

else if(!preg_match("/^[0-9].+[a-zA-Z]$/", $address)) {
  $error = "<b>Error:</b> Address must begin with a number and end with a letter.<br>";  
  echo $error;
}

if(empty($state)) {
  $error = "<b>Error:</b> State needs to be filled.<br>";  
  echo $error;
}


else if(!preg_match("/^[a-zA-Z]{2}$/", $state)) {
  $error = "<b>Error:</b> State must only contain letters and be exactly 2 characters long.<br>";
  echo $error;
}

if(empty($city)) {
  $error = "<b>Error:</b> City needs to be filled.<br>";
  echo $error;
}

else if(!preg_match("/[a-zA-Z]{3,}$/", $city)) {
  $error = "<b>Error:</b> City needs to be more than two letters long.<br>";
  echo $error;
}

if(empty($zip)) {
  $error = "<b>Error:</b> Zipcode needs to be filled.<br>";
  echo $error;
}

else if(!preg_match("/^[0-9]{5}$/", $zip)) {  // ^ = begin  $ = ends with
  $error = "<b>Error:</b> Zipcode must only be in numbers and be exactly 5 characters long. <br>";
  echo $error;
}

 $sql = "SELECT * FROM accounts WHERE username='".$username."' LIMIT 1";
  $result = mysql_query($sql, $connection);
if(mysql_num_rows($result) == 1){
    $error = "Account already exists. Please try a new username.";
      }

else if(empty($error)) {
  $sql = "INSERT INTO accounts (name, username, pw) VALUES('$name', '$username','$pw')";
   mysql_query($sql,$connection);
   echo "<script>document.getElementById('sign_in').style.display = 'none';
   document.getElementById('register').style.display = 'none';
                </script>";
  $accountInfo = array($name, $username, $pw, $repw, $phone, $address, $city, $state, $zip);
  print_r($accountInfo);
  echo "<br><br><p style='color:white;'>You have successfully created an account, ".$accountInfo[1].". You will be redirected to the homepage in 5 seconds.</p>";
  header('refresh: 5; url=nerdist_books.php');
  exit;
}

}

?>
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