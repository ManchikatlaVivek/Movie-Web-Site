<?php
include('session.php');
$awardname=$_POST[awardname];
$movie_id=$_POST[movie_id];
$year=$_POST[year];
$category=$_POST[category];
$type=$_POST[type];


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
	$sql="INSERT INTO awards VALUES('$awardname','$movie_id','$year','$category','$type')";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
		echo "<h1>	Movie Awarded the Award</h1>";
		echo "<p>	Award name : " . $awardname ."</p>" ;
		echo "<p>	Awarded to Movie id : ".$movie_id."</p>";
		echo "<p>	In The Year :".$year."</p>";
		echo  "<p> 	Of Category :" .$category."</p>";
		echo "<form id=home action=admin.php> <input type=submit value=Home></form>";
		}
	else
	{
		echo "<h1 id=fail>Movie didn't Recieve Any Award</h1>";
		echo "<form id=home action=admin.php> <input type=submit value=Home></form>";
	}
}
mysqli_close($conn);
?>
<!doctype html>
<html>
<head>
	<style >
	#fail{
		text-align: center;
	}
body{
	background: url("images/minion.jpg");
}
#home{
	color: white;
	text-align: center;
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