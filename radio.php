<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$ser=$_POST["sex"];
echo $ser;
}
?>

<!Doctype html>
<html>
<head>
	</head>
	<body>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			male:<input type="radio" name="sex" value="male"><br>
			female:<input type="radio" name="sex" value="female"><br>
			<input type="submit" value="submit">
		</form>
	</body>
	</html>