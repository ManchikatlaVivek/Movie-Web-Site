<!doctype html>
<html>
<head>
<style>
 span{
    color:yellow;
}
body{
  background: url("images/film.jpeg");
}

#footer {
    
    color:white;
    clear:both;
    text-align:center;
   padding:5px;    
}
#header{
    
    color:green;
    text-align:center;
    padding:20px;
    font-size: 3em;
}
#values table, #val table{
    border-collapse: collapse;
    border: 1px solid green;
    width: 100%;
}
th{
    height: 50px;
    border: 1px solid #98bf21;
    background-color: orange;
    text-align: center;
    padding:5px;
    width:6%;
    font-size: 20px;
}
td{
   border: 1px solid #98bf21;
    color:black;
    text-align: center;
    padding:6px;
    width:5%;
    font-size: 20px;
}


#qw{
  float:right;
}

</style>
</head>
<body>
    <div id=header>
       Top Rated Movies List 
       <form id="qw" action="main.php" method="post">
        <input type="submit" value="Home">
      </form>
    </div>  

</body>
</html>

<?php
include('session.php');
$servername='localhost';
$username='root';
$password='root';
$dbname='movie';
//$moviename=$_POST[moviename];

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
{
	// echo "connected";
	$sql="SELECT title,ROUND(rating,2) AS rating,year FROM movie where rating>3.5 order by rating desc";
	$result=mysqli_query($conn,$sql);
			echo "<table id=values>";
		echo "<th>"."Title"."</th>"."<th>"."Rating"."</th>"."<th>"."Year"."</th>";
	if(mysqli_num_rows($result)>0)
	{
		
	while($row=mysqli_fetch_assoc($result))
	{
				echo "<tr id=row>"."<td>".$row["title"]."</td>"."<td>".$row["rating"]."</td>"."<td>".$row["year"]."</td>"
				."</tr>";
	}
	echo "</table>";
	}


}
echo "<div id=footer> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";
mysqli_close($conn);
?>

