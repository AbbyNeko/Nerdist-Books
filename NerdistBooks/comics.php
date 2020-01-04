<?php
session_start();
include ("db_connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="store.css">
<link rel="stylesheet" type="text/css" href="books.css">
<title>Nerdist Books: Comics</title>
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
	<?php	include 'loggedin.php' ?>
</ul>

<!--logo-->

<a href="nerdist_books.php"><img class="logo" src="img/icons/logo.PNG" alt=""/></a>
   
   
<!---CONTENT-->
<div id = "comics">
<h2> Comics</h2>
<figure><img src="img/comics/batman1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/batman2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/batman3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/batman4.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/batman5.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/catwoman1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/catwoman2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/catwoman3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/catwoman4.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/deadpool1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/deadpool2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/deadpool3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/deadpool4.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/deadpool5.png" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/harley1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/harley2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/harley3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/joker.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/poisonivy.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/spiderman1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/spiderman2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/spiderman3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/spiderman4.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/spiderman5.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/superman1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/superman2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/superman3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/superman4.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/xmen1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/xmen2.jpeg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/xmen3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/comics/xmen4.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>

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