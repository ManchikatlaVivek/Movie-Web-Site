<?php
$servername="localhost";
$username="vivekmanchikatla";
$password="l";
$dbname="movies"

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	echo "not connected";
}
else
{
	echo "connected";

	//$sql = "create database movieDb";
	// $sql = "create table actor(
		
	// 	)";
	// if(mysqli_query($conn,$sql))
	// {
	// 	echo "created database movies";
	// }
	// else
	// {
	// 	echo "not created movies database";
	// }
}

mysqli_close($conn)
?>

