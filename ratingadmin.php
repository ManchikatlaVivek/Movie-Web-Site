<html>
<head> <!-- <h2> movie ratings </h2> -->
<style>
.center{ 
       /*position: fixed;*/     
       text-align: center;    
       bottom: 0px; 
       width: 100%;
   }
#values table, #val table{
    border-collapse: collapse;
    border: 1px solid green;
    width: 100%;
}

th{
    height: 50px;
    border: 1px solid #98bf21;
    background-color: #44FCE0;
    text-align: center;
    padding:5px;
    width:6%;
    font-size: 30px;
}
td{
   border: 1px solid #98bf21;
    color:white;
    text-align: center;
    padding:12px;
    width:6%;
    font-size: 20px;
}

#content1{
    background:#6098BD;
    color:black;
}
#header{
    /*background-color:black;*/
    color:white;
    text-align:center;
    padding:20px;
    font-size: 3em;
}
#qw{
  float:right;
}
body{
  background: url("images/13.jpg");
}
</style>

</head>
<body>
  <div id="header"> Movie Ratings
  <form id="qw" action="admin.php" method="post">
        <input type="submit" value="Home">
      </form>
</div>
	</body>
</html>

<?php
//include('session.php');
session_start();
$servername="localhost";
$username="root";
$password="root";
$dbname="movie";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	echo "not connected";
}
else
{
$sql="SELECT title,ROUND(rating,2) AS rating FROM movie";
	$result=mysqli_query($conn,$sql);
	echo "<table id=values>";
		echo "<th>"."Title"."</th>"."<th>"."Rating"."</th>";
	if(mysqli_num_rows($result)>0)
	{
		
	while($row=mysqli_fetch_assoc($result))
	{
				echo "<tr id=row>"."<td>".$row["title"]."</td>"."<td>".$row["rating"]."</td>"."</tr>";
	}
	echo "</table>";
    }
    else
    {
    	echo "<h2> no entries into movie database</h2>";
    }
    
}
echo "<div class=center> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";
mysqli_close($conn);
?>
