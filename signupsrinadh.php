
<?php
require_once("./connect.php");
$name=$_POST[username];
$email=$_POST[email];
$bday=$_POST[bday];
$gender=$_POST[gender];
$pass=$_POST[pass];
$repass=$_POST[repass];
$phone=$_POST[phone];

if($pass!=$repass)
{
	echo $name;
	echo "Passwords didn't match..!";

}

//echo "$gender";

// echo $pass;
// echo '<br>';
// echo $repass;

else
{



	$sql = "INSERT INTO userInfo VALUES('0','$name','$pass','$phone','$email','$gender','$bday')"; //check quotes...! fish
		if(mysqli_query($conn,$sql))
		{
			echo " Successfully Signed Up!";
		}
		else
		{
			echo "failed to Sign Up";
		}

}

mysqli_close($conn);
?>

<html>
<body>
	<form action="loginPage.php">
		<input type="submit" value="back"><br>
	</form>
</body>
</html>