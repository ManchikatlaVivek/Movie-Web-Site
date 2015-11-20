<?php
include('session.php');
$movie_id=$_POST[movie_id];
$actor_id=$_POST[actor_id];
$director_id=$_POST[director_id];
$title=$_POST[title];
$genre=$_POST[genre];
$year=$_POST[year];
$rating=$_POST[rating];
$runtime=$_POST[runtime];
$collections=$_POST[collections];


$username='root';
$password='root';
$servername='localhost';
$dbname='movie';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	echo "not connected to database..!";
}
else
{
	$sql="INSERT INTO MOVIE VALUES('$movie_id','$actor_id','$director_id','$title','$genre','$year','$rating','$runtime','$collections')";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
		echo "<h1> Movie Added Successfully</h1>";
		echo "<p> Movie Title : " . $title ."</p>" ;
		echo "<p> Movie id:"."  ".$movie_id."</p>";
		echo "<p> Actor id : ".$actor_id."</p>";
		echo "<p> Director id :" . $director_id."</p>";
		echo "<p> Year :".$year."</p>";
		echo "<form id=home action=admin.php> <input type=submit value=Home></form>";
		}
		
	
	else
	{
		echo "<h1>Failed to Add the Movie</h1>";
		echo "<form id=home action=admin.php> <input type=submit value=Home></form>";
	}
}
mysqli_close($conn);
?>

<!doctype html>
<html>
<head>
	<style >
body{
	background: url("images/ad.png");
}
#home{
	color: white;
}
p{
	font-size: 30px;
	color: white;
	}
h1{
	font-size: 30px;
	color:white;
	
}
	</style>
	</head>
	<body></body>
	</html>