<!-- <!doctype html>
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
	background-color: #FCF0A9;

}

</style>
</head>
<body>
</body>
</html> -->
<?php
$username='root';
$password='root';
$servername='localhost';
$dbname='userDb';

$name=$_POST[name];
$pass=$_POST[pass];

$temp=$name;



$conn = mysqli_connect($servername,$username,$password,$dbname);
//mysqli_close($conn);

/*if(!$conn)
{
	echo "Connection not Established...!";
}


if($name=== "admin" && $pass==="l")
{	
			echo "<p>Welcome Admin</p>";
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
					echo "<p>Welcome "."<b> ".$name."</b>"."</p>";
			      	echo "<p>This information provied in the site is only for Educational Purpose.</p>";
			      	echo "<p>This is not against any individual feelings.</p>";
			      	echo "<p>If you accept the terms mentioned above you can enter the Site.</p>";
			      	echo " <form action=main.php><input type=submit value=Enter>";
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

*/


mysqli_close($conn);
?>

