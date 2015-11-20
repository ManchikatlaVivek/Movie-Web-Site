<!Doctype html><!--index.php-->
<html>
<head>
	<title>MOVIE DATABASE</title>
<style>
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
li{	
	border-radius: 15px 50px;
    background: #D6D6D6;
    padding: 20px; 
    width: 180px;
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
footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
body{
	background:url("images/bg.png");
}

	</style>
</head>
<body>
	<div id="header">
		 <div class="div2"><a href="index.php"> <font color="red"> <h2>login</h2> </font></a> </div>
		<h1>Movie Database</h1>

	</div>
	<div id=nav>
	  <ul>
		<li><a href="movies.php">Movies </a></li>
		<li><a href="director.php">Director</a></li>
		<li><a href="actor.php">Actor </a></li>
		<li><a href="awards.php">Awards </a></li>
		<!--<li><a href="rating.php">Rate a Movie <a></li>-->
	</ul>
	</div>
<!-- 	<p style="font-size:20px"> search for movie on base of actor name </p>
	<form action="search_single.php" method="post">
		actor name:
		<input type="text" name="actor" placeholder="actor name"> <br>
		<input type="number" name="nothing" value="0" > <br>
		<input type="submit" value="search">
	</form>
<br> <br>
<p style="font-size:20px"> search for movie on base of director name </p>
	<form action="search_single.php">
		director name:
		<input type="text" name="director" placeholder="director name"><br>
		<input type="number" name="nothing" value="1" > <br>
		<input type="submit" value="search">
	</form>
<br> <br>
<p style="font-size:20px"> search for movie on base of actor name and director name combination</p>
	<form action="search_single.php">
		actor name:
		<input type="text" name="actor" placeholder="actor name"> <br>
		director name:
		<input type="text" name="director" placeholder="director name"> <br>
		<input type="NUMBER" name="nothing" value="2" > <br>
		<input type="submit" value="search">
	</form> -->
<!-- <caption class="div3" align="bottom">Copyright @Vivek Manchikatla</caption> -->
</body>
</html>


</body>