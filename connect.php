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
?>