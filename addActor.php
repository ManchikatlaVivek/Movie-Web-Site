<?php
include('session.php');
$actor_id=$_POST[actor_id];
$fname=$_POST[fname];
$lname=$_POST[lname];
$dob=$_POST[dob];
$no_of_awards=$_POST[no_of_awards];

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
	$sql="INSERT INTO ACTOR VALUES('$actor_id','$fname','$lname','$dob','$no_of_awards')";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
		echo "<h1>Actor Added Successfully</h1>";
		echo "<p> Actor name : " . $fname . $lname ."</p>" ;
		echo "<p> Actor id : ".$actor_id."</p>";
		echo "<p> BirthDay :".$dob."</p>";
		echo "<p> Awards :".$no_of_awards."</p>";
		echo "<form id=home action=admin.php> <input type=submit value=Home></form>";
	}
	else
	{
		echo "<h1>Failed to add Actor</h1>";
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
	background: url("images/au.jpg");
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