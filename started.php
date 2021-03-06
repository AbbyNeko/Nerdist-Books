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
<title>Nerdist Books: How It All Started</title>
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
<div id="started">
<h2>How It All Started</h2>
<p>
One morning, when Gregor Samsa woke from troubled dreams, 
he found himself transformed in his bed into a horrible vermin. 
He lay on his armour-like back, and if he lifted his head a little
 he could see his brown belly, slightly domed and divided by arches
 into stiff sections. The bedding was hardly able to cover it and seemed
 ready to slide off any moment. His many legs, pitifully thin compared with
 the size of the rest of him, waved about helplessly as he looked.
 "What's happened to me?" he thought. It wasn't a dream. His room,
 a proper human room although a little too small, lay peacefully between
 its four familiar walls. A collection of textile samples lay spread out on the
 table - Samsa was a travelling salesman - and above it there hung a picture that
 he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.
 It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a
 heavy fur muff that covered the whole of her lower arm towards the viewer. 
Gregor then turned to look out the window at the dull weather.
</p>
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