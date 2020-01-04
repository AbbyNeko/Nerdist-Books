<?php
session_start();
include ("db_connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="store.css">
<link rel="stylesheet" type="text/css" href="subsection.css">
<title>Nerdist Books:Shoujo Manga</title>
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
<div id = "shoujo">
<h2> Manga > Shoujo </h2>
<figure><img src="img/manga/chibi1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/chibi2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/chibi3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/ouran1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/ouran2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/ouran3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/ouran4.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/ouran5.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/skip1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/skip2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/skip3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/toradora1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/tora2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/tora3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/vampknight1.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/vampknight2.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
</figcaption></figure>
<figure><img src="img/manga/vampknight3.jpg" alt="" height="150" width="100"/><figcaption>$5.00<br><input type="submit" value="Add to Cart">
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