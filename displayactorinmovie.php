<!doctype html>
<html>
<head>
<style>

#footer {
    
    color:white;
    clear:both;
    text-align:center;
   padding:5px;    
}
#values table, #val table{
    border-collapse: collapse;
    border: 1px solid green;
    width: 100%;
}
#header{
    background-color:black;
    color:white;
    text-align:center;
    padding:20px;
    font-size: 3em;
}
/*#row{
    background-color: #FEFCE0;
}*/

th{
    height: 50px;
    border: 1px solid #98bf21;
    background-color: #44FCE0;
    text-align: center;
    font-size: 20px;
    width:6%;
}
td{
   border: 1px solid #98bf21;
    color:white ;
    text-align: left;
    padding:10px;
    width:6%;
    font-size: 20px;
}
body{
  background: url("images/bg2.jpg");
}
#content1{
    background:#6098BD;
    color:black;
}
#content2{
    background:#33BA83;
    color:black;
}
span{
  float: right;
}
#n{
  font-size: 30px;
  color: white;
  /*font-family: */
}
#qw{
  float:right;
}
#qww{
  float:left;
}

</style>
</head>
<body>
    <div id=header>
    Search Results
    <form id="qw" action="main.php" method="post">
        <input type="submit" value="Home">
      </form>
      <form id="qww" action="movies.php" method="post">
        <input type="submit" value="Movie Page">
      </form>
</div>
<div id=content1><br>
<form action="displayactorinmovie.php" method="post" id=b>
<h1>Get Details Of An Actor In The Movie</h1>
Enter Movie Name:
<input type="text" name="moviename"><br><br>
<input type="submit" value="search">
</form><br>
</div>

<div id=content2>
<br>
<form action="displaydirectorinmovie.php" method="post" id=a>
<h1>Get Details Of Director In The Movie</h1>
Enter Movie Name:
<input type="text" name="moviename"><br><br>
<input type="submit" value="search">
</form>
<br>

</div>
</body>
</html>



<?php
include('session.php');
$servername='localhost';
$username='root';
$password='root';
$dbname='movie';
$moviename=$_POST[moviename];

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
 {
 // echo $moviename;	
    $sql="select m.title as movietitle,a.fname as actorfname,a.lname as actorlname,a.dob as actorbday,a.no_of_awards as actorawards from movie as m natural join actor as a where  m.title='$moviename' ";
   
	$result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    	$x=1;
    	
    	while($row=mysqli_fetch_assoc($result))
				{
					if($x==1)
					{
						
					echo "<h1 style=color:white>Actor details for ". $moviename."</h1>";
					echo "<table id=values>";
			    	echo "<th>"."First Name"."</th>"."<th>"."Last Name"."</th>"."<th>"."Birthday"."</th>"."<th>"."No of Awards"."</th>"."<br>";
			    	// echo "</table>";
			    	$x++;
			    	}
					// echo "<table id=values>";
					echo "<tr id=row>"."<td>".$row["actorfname"]."</td>"."<td>".$row["actorlname"]."</td>"."<td>".$row["actorbday"]."</td>"."<td>".$row["actorawards"]."</td>"."</tr>";
					
					// echo $row["movietitle"];
				 }
                  echo "</table>";
    }
    else
    {
        echo "<h1 id=n>"." NO ACTOR FOUND IN THE MOVIE"."</H1>"."<br><br><br><br><br><br><br><br><br><br><br><br><br>";
    }
    echo "<div id=footer> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";
}
mysqli_close($conn);
?>
