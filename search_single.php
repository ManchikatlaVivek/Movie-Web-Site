<?php
include('session.php');
$servername='localhost';
$username='root';
$password='root';
$dbname='movie';

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	echo "not connected";
	
}
else
{
	echo $_POST[nothing];
echo "<br>";

	if($_POST[nothing]==0)
	{
	$actor=$_POST[actor];
	//echo $actor;
	$sql="SELECT movie.title,movie.movie_id,movie.actor_id,movie.director_id,movie.genre,movie.year,movie.runtime,movie.rating,movie.collections FROM movie natural join actor WHERE actor.fname='$actor'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{

				while($row=mysqli_fetch_assoc($result))
				{
					echo $row["title"]." ".$row["movie_id"]."  ".$row["actor_id"]."  ".$row["director_id"]." ".$row["genre"]."  ".$row["year"]."  ".$row["rating"]."  ".$row["runtime"]."  ".$row["collections"];
					echo "<br>";
				}
			}
			else
			{
				echo "no movies found";
			}
	
			echo "<br>";
}

else if($_POST[nothing]==1)
	{
	$director=$_POST[director];
	//echo $actor;
	$sql="SELECT movie.title,movie.movie_id,movie.actor_id,movie.director_id,movie.genre,movie.year,movie.runtime,movie.rating,movie.collections FROM movie natural join director WHERE director.fname='$director'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{

				while($row=mysqli_fetch_assoc($result))
				{
					echo $row["title"]." ".$row["movie_id"]."  ".$row["actor_id"]."  ".$row["director_id"]." ".$row["genre"]."  ".$row["year"]."  ".$row["rating"]."  ".$row["runtime"]."  ".$row["collections"];
					echo "<br>";
				}
			}
			else
			{
				echo "no movies found";
			}
	
			echo "<br>";
}
else if($_POST[nothing]==2)
	{
	$actor=$_POST[actor];
	$director=$_POST[director];
	//echo $actor;
	$sql="SELECT movie.title,movie.movie_id,movie.actor_id,movie.director_id,movie.genre,movie.year,movie.runtime,movie.rating,movie.collections FROM movie,actor,director WHERE actor.fname='$actor' and director.fname='$director'and actor.actor_id=movie.actor_id and director.director_id=movie.director_id";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{

				while($row=mysqli_fetch_assoc($result))
				{
					echo $row["title"]." ".$row["movie_id"]."  ".$row["actor_id"]."  ".$row["director_id"]." ".$row["genre"]."  ".$row["year"]."  ".$row["rating"]."  ".$row["runtime"]."  ".$row["collections"];
					echo "<br>";
				}
			}
			else
			{
				echo "no movies found";
			}
	
			echo "<br>";
}
else
{
	echo "nothing";
}




}
mysqli_close($conn);
?>