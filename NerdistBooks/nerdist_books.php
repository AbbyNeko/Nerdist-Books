<?php
session_start();
include ("db_connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="store.css">
<title>Nerdist Books</title>
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
<?php


?>

<img id="banner" src="img/banner/banner1.jpg" alt=""/>
<div class="welcome">
<?php

if(!isset($_SESSION['loggedin'])) {
	echo "<h3>Click <a href='login.php'>here</a> to login.</h3>";
}

else if (isset($_SESSION['loggedin'])) {
	echo "<h3>You are currently logged in.</h3>";
}
?>

<?php

if(empty($_COOKIE['homepagevisits'])) {
setcookie("homepagevisits", 1, time() + (60 * 10), "/");
echo "<h3>Welcome Newcomer from Earth.</h3>";
}

else if(isset($_COOKIE['homepagevisits'])) {
	$cookieValue = $_COOKIE["homepagevisits"];
	setcookie("homepagevisits", $cookieValue+1, time() + (60 * 10), "/");
	echo "<h3>You have visited this site ".$cookieValue." times.</h3><form method='post'><input type='submit' id='delete' name='delete' class='delete' value='Delete Cookie'></form>";
}

if(isset($_POST['delete'])) {
	setcookie("homepagevisits", null, time() - (60 * 60 * 60 * 600), "/");	
}


?>
<h1>Welcome to Nerdist Books</h1><br>
<h2>Always delivering the latest in popular novels, 
comics and manga</h2>
</div>

<div class="update">
<h4>Site Updates</h4>
<ul>
<li>Updated navigation to CSS3</li>
<li>Now available on iPad</li>
<li>New Feature: Subscribe to Series</li>
</ul>
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
<!--IMAGE SOURCES 

www.vizmanga.com (Naruto)
http://shonenjump.viz.com/naruto (naruto)
http://fma.wikia.com/wiki/List_of_Fullmetal_Alchemist_Volumes_and_Chapters
http://the-velvet-room.com/archive/index.php?thread-971-109.html fma
http://fma.aucifer.com/image_show.php?ID=12&Pic=2 (fma)
http://comicattack.net/2010/03/bbwouran1_2/ (ouran1)
http://www.basugasubakuhatsu.com/blog/2007/11/06/ouran-high-school-host-club-vol-23-mini-manga-review/  (ouran2
http://www.amazon.com/Ouran-High-School-Host-Club/dp/1421500620
ouran3
 http://opentrolley.com.sg/series/ouran-high-school-host-club 
ouran4
http://www.tower.com/ouran-high-school-host-club-vol-5-bisco-hatori-paperback/wapi/101286943
ouran5
http://www.comicvine.com/ouran-high-school-host-club-6-vol-6/4000-155954/
(ouran6-8)
http://www.comicvine.com/ouran-high-school-host-club-6-vol-6/4000-155954/
http://www.goodreads.com/book/show/282282.Skip_Beat_Vol_01
http://plamoya.com/en/skip-beat-vol-2-manga-p-30453.html
http://www.amazon.com/Vampire-Knight-Volume-Matsuri-Hino/dp/1421508222
https://everythingotaku.wordpress.com/2011/09/05/vampire-knight-2/
http://www.goodreads.com/book/show/784222.Vampire_Knight_Vol_3
https://en.wikipedia.org/wiki/Chibi_Vampire
http://www.fanpop.com/clubs/chibi-vampire-manga/images/25093973/title/chibi-vampire-volume-2-photo
http://www.fanpop.com/clubs/chibi-vampire-manga/images/31062519/title/chibi-vampire-volume-3-photo
http://www.amazon.com/Skip-Beat-Vol-Yoshiki-Nakamura/dp/1421505878
http://www.gomanga.com/books/toradora!/141
tora1 tora2
http://anime.astronerdboy.com/2011/11/toradora-manga-volume-03-review.html
tora3
http://bleach.wikia.com/wiki/Chapters
bleach 1 2
https://www.reddit.com/r/bleach/comments/32zvqq/what_is_your_favorite_bleach_volume_cover/
bleach34
http://tokyoghoul.wikia.com/wiki/Tokyo_Ghoul_(manga)
toky1 and 3
http://www.comicvine.com/tokyo-ghoul-2-volume-2/4000-455383/
tokyoghoul2
http://www.animesou.com/?p=995
bakuman1
http://bakuman.wikia.com/wiki/Category:Volumes
bakuman2
http://bakuman-fans.livejournal.com/46220.html
bakuman3


https://en.wikipedia.org/wiki/List_of_Black_Butler_chapters
kuro1
http://www.yenpress.com/black-butler/
kuro2
http://kuroshitsuji.wikia.com/wiki/Volume_3
kuro3


		COMICS
Spidermanwallpaper 
http://hdwallpapersfactory.com/cartoon/spider-man-marvel-comics-desktop-hd-wallpaper-730993/
http://marvel.com/comics/characters/1009610/spider-man
http://marvel.wikia.com/wiki/Timestorm_2009-2099:_Spider-Man_Vol_1_1
http://marvel.wikia.com/wiki/Ultimate_Comics_Spider-Man_Vol_2_22
http://99funtastic.blogspot.com/2015/06/list-of-superman-comics-new-superman.html
http://dc.wikia.com/wiki/Superman_Vol_2_154
http://www.comicbookmovie.com/fansites/KingAvengerMarvel/news/?a=54920
http://comicsbulletin.com/superman-the-triangle-years-part-six-the-last-hurrah/
http://www.bleedingcool.com/2011/10/07/batman-1-best-seller-in-september-as-dc-comics-take-seventeen-of-top-twenty/
https://unstablemolecules.wordpress.com/2012/04/30/review-batman-the-dark-knight-8/
http://www.examiner.com/article/manga-vs-american-comic-books-what-s-the-difference
batman3
http://www.comicvine.com/articles/best-comic-covers-of-the-week-31512/1100-146234/
batman4
http://www.ew.com/article/2012/06/10/batman-10-comic-sneak-peek
batman5
http://marvel.com/comics/issue/43462/all-new_x-men_2012_1
http://www.comicvine.com/articles/first-look-all-new-x-men-5/1100-145591/
xmen2
http://www.comicvine.com/x-men/4060-3173/forums/ranking-system-for-the-x-men-story-arcs-1549053/
xmen4
http://marvel.wikia.com/wiki/Deadpool_Vol_2_26
http://marvel.wikia.com/wiki/Deadpool_Vol_2_11
http://marvel.wikia.com/wiki/Deadpool_Vol_2_53
http://www.newkadia.com/?Deadpool_Comic-Book-Covers=1111132428%7C41
http://www.deadpoolbugle.com/2012/02/comic-deadpool-50-out-282012.html
http://www.comicvine.com/catwoman/4050-42722/
http://www.comicvine.com/catwoman/4050-42722/
https://sonsofcorax.wordpress.com/2014/01/30/catwoman-27-comics-review/
http://www.openlettersmonthly.com/stevereads/2012/09/comics-the-women-of-the-new-52/
http://www.razorfine.com/comics/new-52-detective-comics-23-1/
poison ivy
http://www.comicvine.com/harley-quinn/4050-69322/
https://www.pinterest.com/pin/413346072022550794/
harley2
http://www.goodreads.com/book/show/22536565-harley-quinn-7
http://dc.wikia.com/wiki/Batman_Vol_2_23.1:_The_Joker


BOOKS
http://www.amazon.com/Fault-Our-Stars-John-Green/dp/014242417X/ref=sr_1_1?s=books&ie=UTF8&qid=1441427087&sr=1-1&keywords=the+fault+in+our+stars
many provide by Amazon.com 

BANNER
https://www.komar.de/en/products/photomurals/marvel.html?tx_komarproducts_category%5BpUid%5D=683&tx_komarproducts_category%5Bindex%5D=16&tx_komarproducts_category%5Baction%5D=showCategory&tx_komarproducts_category%5Bcontroller%5D=Product&cHash=26677c037dc9d321d60269359f49219c
http://www.raegunramblings.com/category/top-10/page/2
http://www.mangareader.net/youko-x-boku-ss/2/35
http://www.twilightvisions.com/images/background/anime/DokugaShinWallpaper.png
http://perksofbeinganotakuwallflower.blogspot.com/-->