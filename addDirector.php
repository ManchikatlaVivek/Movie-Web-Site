<?php
include('session.php');
$director_id=$_POST[director_id];
$fname=$_POST[fname];
$lname=$_POST[lname];
$dob=$_POST[dob];
$gender=$_POST[gender];

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
	$sql="INSERT INTO director VALUES('$director_id','$fname','$lname','$dob','$gender')";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
		echo "<h1>Director Added Successfully</h1>";
		echo "<p> director id : ".$director_id."</p>";
		echo "<p> director name : " . $fname . $lname ."</p>" ;
		echo "<p> BirthDay :".$dob ."</p>";
		echo "<p> gender :".$gender."</p>";
		echo "<form id=home action=admin.php> <input type=submit value=Home></form>";
	}
	else
	{
		echo "<h1>Failed to Add the Director</h1>";
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
	background: url("images/avatar.jpeg");
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