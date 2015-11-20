wishlist<?php
session_start();
// include('session.php');

$username='root';
$password='root';
$servername='localhost';
$dbname='movie';
$nam=$_SESSION["username"];
//echo $nam;
$sun=$_POST["wishlist"];
//echo $sun;
if($sun=="")
{
	echo "<h1>MOVIE NOT SELECTED<br></h1>";
	echo "<h2>Please select a movie before adding to wishlist</h2>";
	echo "<form id=home action=main.php><input type=submit value=Home></form>";
	echo "<form id=log action=index.php><input type=submit value=logout></form>";
}

else{
//echo "fekjehkjfhkjdhsjkfdhskjdfsbkjdsb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	echo "not connected";
}
else
{
	$sql="SELECT * FROM movie WHERE title='$sun'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{

		//echo "echo";
		$sql="INSERT INTO WISHLIST VALUES ('$nam','$sun')";
	$result=mysqli_query($conn,$sql);
	echo "<h1 id=yes> Movie". " ". $sun ." " ."Added to your Wishlist </h1>";
	echo "<br>";
	echo "<form id=home action=main.php><input type=submit value=Home></form>";
	}
	else
	{
		//$row=mysqli_num_rows($result);
		//echo $row;
		echo "<h1>MOVIE".$sun." IS NOT ENROLLED INTO THE DATABASE</h1>";
		echo "<br>";
	echo "<form id=home action=main.php><input type=submit value=Home></form>";
	

	}
	
}
}
mysqli_close($conn);

?>



<html>
<head>
<style>
.center{ 
       position: fixed;     
       text-align: center;    
       bottom: 0px; 
       width: 100%;
   }
.div2 {
    float:right;
    color:white;
}
.div3 {
    float:bottom;
    color:grey;
}
#yes{
	text-align: center;
}
ul{
	list-style-type: none;
	margin:0;
	padding:10px;
	font-size:22px;
	
}
a{
	text-decoration: none;
	display: block;

}
#log{
	text-align:center;
	position:fixed;
	padding:5px;
	clear:both;
}
.nn{	
	border-radius: 15px 50px;
    background: #D6D6D6;
    padding: 20px; 
    width: 180px;
    height: 15px; 
    float:left;
    text-align: center;
}
#header{
	background-color:black;
    color:white;
    text-align:center;
    padding:2px;
    font-size: 1.25em;
}

#nav{
	background-color: grey;
	text-align: center;
	height: 70px;
	padding: 5px;
	}
footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
body{
	background:url("images/bob.jpg");
}
#wish{
	float: right;
}
#home{
text-align: center;
float:right;
}

</style>
</head>



<body>
</body>
</html>
