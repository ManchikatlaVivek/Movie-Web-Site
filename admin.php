
<html>
<head>
<style >

.center{ 
       /*position: fixed;     */
       text-align: center;    
       bottom: 0px; 
       width: 100%;
   }
.addMovie{
	border-radius: 15px 50px 30px 5px;
    background:#D1D1E0;
    padding: 20px; 
    width: 115px;
    height: 25px; 
    float:left;
    text-align: center;
}
.addActor{
    border-radius: 15px 50px 30px 5px;
    background: #E0E0D1;
    padding: 20px; 
    width: 170px;
    height: 25px; 
    float:left;
    text-align: center;
}
.addDirector{
    border-radius: 15px 50px 30px 5px;
    background: #E7EFF7;
    padding: 20px; 
    width: 150px;
    height: 25px; 
    float:left;
    text-align: center;
}
.addAward {
    border-radius: 15px 50px 30px 5px;
    background: #F4E7D3;
    padding: 20px; 
    width: 140px;
    height: 25px; 
    float: left;
    text-align: center:;
} 
#a{
	
    float: center;
    
}
#h{
	text-align: center;
}
#header{
	/*background-color:black;*/
    color:white;
    text-align:center;
    padding:20px;
    font-size: 5em;
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
    width: 170px;
    height: 15px; 
    float:left;
    text-align: center;
}
#nav{
	/*background-color: grey;*/
	text-align: center;
	height: 70px;
	padding: 5px;
	}
	body
	{
		background: url("images/admin.jpg");
	}
</style>
</head>
<body>
<div id=header>	Welcome Admin </div>
<div id=nav>
	  <ul>
		<li><a href="moviesadmin.php">Movies List </a></li>
		<li><a href="directoradmin.php">Directors List</a></li>
		<li><a href="actoradmin.php">Actors List </a></li>
		<li><a href="awardsadmin.php">Awards List</a></li>
		<li><a href="ratingadmin.php">User Ratings<a></li>
		<li><a href="displayallusers.php">Display All Users</a></li>
		<li><a href="wishlist.php">Users Wishlist </a></li>
	</ul>
	</div><br><br><br><br>


<form  action="addMovie.php" method="post">
	<fieldset>
		<p class="addMovie"> movie_id :<br><input type="text" name="movie_id"> </p> 
		 <p class="addMovie">title :<br><input type="text" name="title">   </p>
		
		<p class="addMovie"> director_id :<br><input type="text" name="director_id"></p>
		 <p class="addMovie">actor_id :<br><input type="text" name="actor_id">   </p>
		
		 <p class="addMovie">genre :<br> <input type="text" name="genre">  </p>
		 <p class="addMovie">year :<br>  <input type="text" name="year">   </p>
		 <p class="addMovie">rating :<br><input type="number" step="0.1" name="rating" min=0 max=5>   </p>
		 <p class="addMovie">runtime :<br><input type="text" name="runtime">   </p>
		 <p class="addMovie">collections :<br> <input type="text" name="collections"> </p>  
		<p class="addMovie"> <input type="submit" value="Add Movie"></p>
		</fieldset>
	</form>
	<br><br><br><br>

<form action="addAward.php" method="post">
	<fieldset>
		<p class="addAward">awardname:<br><input type="text" name="awardname"></p>
		<p class="addAward">movie_id :<br><input type="text" name="movie_id"> </p>
		<p class="addAward">year :<br>  <input type="text" name="year">   </p>
		<p class="addAward">category:<br>  <input type="text" name="category">   </p>
		<p class="addAward">type:<br>  <input type="text" name="type">   </p>
		<p class="addAward"><input type="submit" value="Add Award"></p>
	</fieldset>
</form>

<br><br><br><br>


<form method="post" action="addActor.php">
	<fieldset>
		<p class="addActor">actor_id:<br><input type="text" name="actor_id"> </p>  
		<p class="addActor">fname:<br><input type="text" name="fname"> </p>  
		<p class="addActor">lname:<br><input type="text" name="lname"> </p>  
		<p class="addActor">dob:<br><input type="date" name="dob" max="2015-10-31">  </p> 
		<p class="addActor">no_of_awards:<br><input type="text" name="no_of_awards"> </p>  
		<p class="addActor"><input type="submit" value="Add Actor">
	</fieldset>
</form>
<br><br><br><br>

<form method="post" action="addDirector.php">
	<fieldset>
		<p class="addDirector">director_id:<br><input type="text" name="director_id"> </p>  
		<p class="addDirector">fname:<br><input type="text" name="fname">   </p>
		<p class="addDirector">lname:<br><input type="text" name="lname">  </p>
		<p class="addDirector">dob:<br><input type="date" name="dob" max="2015-10-31">   </p>
		<p class="addDirector"><select name="gender">
			 <option value="M">Male</option>
			 <option value="F">Female</option>
		</select><br></p>
		<p class="addDirector"><input type="submit" value="Add Director"></p>
	</fieldset>
</form><br><br>


      <!-- <center> <a id="logout" href=index.php> logout </a> </center> -->
   <div class="center"> <form action="index.php">
   	<input type="submit" value="logout">
   </form></div>

</body>
</html>
<?php
//include('session.php');
//echo $name;
//echo "kfjnds";

?>