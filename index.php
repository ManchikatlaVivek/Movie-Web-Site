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
	color:blue;

}
#log{
	border-radius: 30px 30px;
    background: #D6D6D6;
    padding: 13px; 
    width: 70px;
    height: 15px;

}
li{	
	border-radius: 15px 50px;
    background: #D6D6D6;
    padding: 13px; 
    width: 180px;
    height: 15px;
    float:left; 
    /*float:left;*/
    text-align: center;
}
#header{
	/*background-color:black;*/
    color:crimson;
    text-align:center;
    padding:2px;
    font-size: 1.25em;
}
#nav{
	/*background-color: grey;*/

	
	height: 70px;
	padding: 2px 3px 5px 240px;
	}
footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
body{
	background:url("images/ind.jpg");
}
#movie{
	text-align: center;
}

	</style>
</head>
<body>
	<div id="header">
		 <div class="div2"><a href="login.php" id="log">Login</font></a> </div>
		<h1>Welcome</h1>

	</div>
	<div id=nav>
	  <ul>
		<li><a href="moviesindex.php">Movies </a></li>
		<li><a href="directorindex.php">Director</a></li>
		<li><a href="actorindex.php">Actor </a></li>
		<li><a href="awardsindex.php">Awards </a></li>
		<li><a href="topratedindex.php">Top Rated Movies </a> </li>
		
	</ul>
	</div>



</body>
</html>


</body>