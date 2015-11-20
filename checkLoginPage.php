<!doctype html>
<html>
<head>
<style >
p{
	text-align: center;
	font-size: 2em;
	
}
form{
	text-align: center;

}
body{
	background: url("images/login.png");

}

</style>
</head>
<body>
</body>
</html>
<?php
session_start();
// include('session.php');

$username='root';
$password='root';
$servername='localhost';
$dbname='userDb';

$name=$_POST[name];
$pass=$_POST[pass];
$_SESSION["username"]=$name;
// echo $name;
//echo $pass;
//echo $_SESSION["username"];

$conn = mysqli_connect($servername,$username,$password,$dbname);
//mysqli_close($conn);

if(!$conn)
{
	echo "Connection not Established...!";
}


if($name=== "admin" && $pass==="l")
{	
			echo "<p><h1 style=text-align:center>WELCOME ADMIN</h1></p><br><br><br><br>";
	      	echo "<p>This information provied in the site is only for Educational Purpose.</p>";
	      	echo "<p>This is not against any individual feelings.</p>";
	      	echo "<p>If you accept the terms mentioned above you can enter the Site.</p>";
			echo "<form action=admin.php><input type=submit value=Enter>";
}
else
{

	$sql = "SELECT * FROM userInfo WHERE username='$name'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
			while($row=mysqli_fetch_assoc($result))
			{

				if($pass === $row["password"])
				{
					echo "<p><h1 style=text-align:center> WELCOME ".$name."</h1> </p><br>";
			      	echo "<p>This information provied in the site is only for Educational Purpose.</p>";
			      	echo "<p>This is not against any individual feelings.</p>";
			      	echo "<p>If you accept the terms mentioned above you can enter the Site.</p>";
			      	echo " <form action=main.php><input type=submit value=Enter>";
			      	break;
				}

				else
				{
					"Not a Valid Password for the User";
				}
			}
	} 
	else 
	{
	    echo "<p>Incorrect Username or Password<p>";
	    echo " <form action=login.php><input type=submit value=Re-Login>";

	}
}




mysqli_close($conn);

// session_destroy();
?>

