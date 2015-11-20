<!Doctype html>
<html>
<head>
	<title>MOVIE DATABASE</title>
<style>
#footer {
    /*background-color:black;*/
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
.center{ 
     /*  position: fixed;     */
     
       text-align: center;    
       bottom: 0px; 
       width: 100%;
   }
.div2 {
    float:right;
    color:white;
}
.div3 {
    float:bottom;
    color:grey;
}
ul{
	list-style-type: none;
	margin:0;
	padding:10px;
	font-size:22px;
	
}
a{
	text-decoration: none;
	display: block;

}
.nn{	
	border-radius: 15px 50px;
    background: #D6D6D6;
    padding: 20px; 
    width: 150px;
    height: 15px; 
    float:left;
    text-align: center;
}
#header{
	background-color:black;
    color:white;
    text-align:center;
    padding:2px;
    font-size: 1.25em;
}
#nav{
	background-color: grey;
	text-align: center;
	height: 70px;
	padding: 5px;
	}

#genr{
	background-color: indigo;
	text-align: center;
	height: 70px;
	padding: 5px;
	}
footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
body{
	background:url("images/backg.jpg");
}
#wish{
	float: left;
	padding: 6px;
}
#nnn{
	float: right;
	padding: 5px;
}
/*span{
	color: white;
}*/

	</style>
</head>
<body>
	<div id="header">
		 
		<h1>Movie Database</h1>

	</div>
	<div id=nav>
	  <ul>
		<li class="nn"><a href="movies.php">Movies </a></li>
		<li class="nn"><a href="director.php">Director</a></li>
		<li class="nn"><a href="actor.php">Actor </a></li>
		<li class="nn"><a href="awards.php">Awards </a></li>
		<li class="nn"><a href="rating.php">Rate a Movie <a></li>
		<li class="nn"><a href="wishlistuser.php">Wishlist<a></li>
		<li class="nn"><a href="toprated.php">Top Rated</a></li>
	</ul>
	</div>
	<ul>
	<div id="genr">
		<form action="cateogry.php" method="POST">
			<input type="radio" name="genre" value="ACTION"> Action
			<input type="radio" name="genre" value="ROMANCE"> Romance
			<input type="radio" name="genre" value="DRAMA"> Drama
			<input type="radio" name="genre" value="ANIMATION"> Animation
			<input type="radio" name="genre" value="COMEDY"> Comedy
			<input type="radio" name="genre" value="PHILOSOPHY"> Philosophy
			<input type="radio" name="genre" value="FICTION"> Fiction
			<input type="radio" name="genre" value="HORROR"> Horror
			<input type="radio" name="genre" value="ADVENTURE"> Adventure
			<input type="radio" name="genre" value="THRILLER"> Thriller
			<input type="radio" name="genre" value="FANTASY"> Fantasy
			<br>
			<input type="submit" value="Find Movies">
		</form>
</div>
</ul>
<ul>

<br>
	<div id="wish">
	<li class="nnn"><img src="images/1.jpg" width="500px" height="300px"></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="AVENGERS"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
</div>
<div id="wish">
		<li class="nnn"><img src="images/2.jpg" width="510px" height="300px"><br></li>
		<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="BATMAN"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
</div>
		<div id="wish">
	<li class="nnn"><img src="images/3.jpg" width="500px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="RIO"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
	<br><br><br>
</div>
<br>
	<div id="wish">
	<li class="nnn"><img src="images/4.jpg" width="500px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="LEGO"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
</div>

<div id="wish">
	<li class="nnn"><img src="images/ymc2.jpg" width="510px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="YE MAYA CHESAVE"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
</div>

<div id="wish">
	<li class="nnn"><img src="images/araya1.jpg" width="500px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="ARYA"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
	<br><br><br>
</div>
<br>
<div id="wish">
	<li class="nnn"><img src="images/mgd.jpg" width="500px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="MAGADEERA"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
</div>

<div id="wish">
	<li class="nnn"><img src="images/her.jpg" width="510px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="HER"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
</div>
<br>
 <div id="wish">
	<li class="nnn"><img src="images/prm.jpg" width="500px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="PREMAM"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
	<br><br><br>
</div> 

<br>
<div id="wish">
	<li class="nnn"><img src="images/big6.jpg" width="500px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="BIG6"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
</div>


<div id="wish">
	<li class="nnn"><img src="images/temper.jpg" width="510px" height="300px"><br></li>
	<form id="wish1" action="addingtowishlist.php" method="POST">
		<input type="checkbox" name="wishlist" value="TEMPER"><span>Add to my wishlist</span>
		 <input type="submit" value="add to my wishlist">
	</form>
</div>
</ul>

</ul>
<br>

	<div id="footer"><br> <form action="index.php">
   	<input type="submit" value="logout">
   </form></div>

</body>
</html>


<?php
session_start();
//if($_SERVER["REQUEST_METHOD"=="POST"])
//{
//	$genr=$_POST["genre"];
//	echo $genr;
//}

//echo $_SESSION["username"]."<br>";
//echo "skjdfhkjdshfkjsd";
?>