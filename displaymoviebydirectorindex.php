<html>
<head>
<style>
body{
  background: url("images/bg1.jpg");
}
#footer {
    
    color:white;
    clear:both;
    text-align:center;
   padding:5px;    
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
    padding:11px;
    font-size: 30px;
    width:6%;
}
#content1{
    background:#6098BD;
    color:black;
}
#header{
    background-color:black;
    color:white;
    text-align:center;
    padding:20px;
    font-size: 5em;
}
#qw{
  float:right;
}
#qww{
  float:left;
}

</style>
</head>
<body>
    <div id=header>
        Search Results
        <form id="qw" action="index.php" method="post">
        <input type="submit" value="Home">
      </form>
      <form id="qww" action="directorindex.php" method="post">
        <input type="submit" value="Director Page">
      </form>
    </div>
    <div id=content1>
        <br>
<p>Enter the director we will show you the movies done by the director</p>
<form action="displaymoviebydirectorindex.php" method="post">
<h1>Search Movies By Director</h1>
Enter the Director First Name:<input type="text" name="directorname"><br><br>
<input type="submit" value="search">
</form>
<br>
</div>

</body>
</html>


<?php
include('session.php');
$servername='localhost';
$username='root';
$password='root';
$dbname='movie';
$directorname=$_POST[directorname];

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
 {
 // echo $moviename;	
    $sql="select d.fname as directorfname,d.lname as directorlname,title,m.genre as genre,m.year as year,m.rating as rating,m.runtime as runtime,m.collections as collections from movie as m,director as d where m.director_id=d.director_id and d.fname='$directorname' ";
   
   
	$result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    	$x=1;
    	
    	while($row=mysqli_fetch_assoc($result))
				{
					if($x==1)
					{
						
					echo "<h1 style=color:white>"."Movies by the Director ".$row["directorfname"]."  ".$row["directorlname"]."</h1>";
					echo "<table id=values>";
			    	echo "<th>"."Title"."</th>"."<th>"."Genre"."</th>"."<th>"."Year"."</th>"."<th>"."Rating"."</th>"."<th>"."Runtime"."</th>"."<th>"."Collections"."</th>"."<br>";
			    	// echo "</table>";
			    	$x++;
			    	}
					// echo "<table id=values>";
					// echo "<br>";
					echo "<tr id=row>"."<td>".$row["title"]."</td>"."<td>".$row["genre"]."</td>"."<td>".$row["year"]."</td>"."<td>".$row["rating"]."</td>"."<td>".$row["runtime"]."</td>"."<td>".$row["collections"]."</td>"."</tr>";
					 
					// echo $row["movietitle"];
				 }
                 echo "</table>";
    }
    else
    {
        echo "<h1 style=color:white> NO MOVIES FOUND FOR THE DIRECOTOR</H1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    }
    
}
mysqli_close($conn);
?>
<!doctype html>
