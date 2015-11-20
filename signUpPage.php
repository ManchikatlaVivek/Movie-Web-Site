<html>
<head>
<style>
body{
	background:url("images/size.jpg");
}
#parag{
	text-align:center;
	color:white;
	font-size:40px;
}
#flo{
	float:right;
}
#header{
    color:white;
    text-align:center;
    padding:2px;
    font-size: 1.25em;
}
#retry{
	text-align: center;
}
</style>
</head>
<body>
<div id="header">
	<form id="flo" action="index.php">
		<input type="submit" value="continue to website">
	</form>
</div>
</body>
</html>
<?php

$servername='localhost';
$username='root';
$password='root';
$dbname='userDb';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo 'connected';
	echo '<br>';
}
else
{
	echo 'not connected';
}


$name=$_POST[username];
$email=$_POST[email];
$bday=$_POST[bday];
$gender=$_POST[gender];
$pass=$_POST[pass];
$repass=$_POST[repass];
$phone=$_POST[phone];

if($pass!=$repass)
{
	
	//echo $name;
	echo "<p id=parag> Passwords didn't match..!</p> <br>";
	echo "<form id=retry action=register.php> <input type=submit value=Re-try></form>";
	exit();

}


//echo "$gender";

// echo $pass;
// echo '<br>';
// echo $repass;

else
{
	$sql="SELECT * FROM userInfo WHERE username='$name'";
	$result=mysqli_query($conn,$sql);
echo "something";
	if(mysqli_num_rows($result)>0)
{
	echo "<p id=parag> sorry someone have used that username.try again with some other</p>";
	echo "<form id=retry action=register.php> <input type=submit value=Re-try></form>";
	exit();
}


else
{

$sql="SELECT * FROM userInfo WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "<p id=parag> Cannot use same email twice OR someone have already got registered with it</p>";
	echo "<form id=retry action=register.php> <input type=submit value=Re-try></form>";
	exit();
}

else{
	$sql="SELECT * FROM userInfo WHERE mobile='$phone'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "<p id=parag> Cannot use same mobile twice OR someone have already got registered with it</p>";
	echo "<form id=retry action=register.php> <input type=submit value=Re-try></form>";
	exit();
}
else
{




	$sql = "INSERT INTO userInfo VALUES('0','$name','$pass','$phone','$email','$gender','$bday')"; //check quotes...! fish
		if(mysqli_query($conn,$sql))
		{
			echo "<p id=parag> Successfully Signed Up!";
		}
		else
		{
			echo "failed to Sign Up"."</p>";
		}

}
}
}
}

mysqli_close($conn);
?>

