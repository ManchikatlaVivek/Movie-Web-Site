<html>
<head>
<style>
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
    font-size: 20px;
}
td{
   border: 1px solid #98bf21;
    color:white;
    text-align: center;
    padding:12px;
    width:6%;
    font-size: 20px;
}
body{
  background: url("images/bg3.jpg");
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
    <form id="qw" action="main.php" method="post">
        <input type="submit" value="Home">
      </form>
      <form id="qww" action="actor.php" method="post">
        <input type="submit" value="Actor Page">
      </form>
</div>
<div id=content1>
    <br>
<p>Enter the actor name we will show you the movies done by actor</p>
<form action="displaymoviebyactor.php" method="post">
<h1>Search Movies By Actor</h1>
Enter the Actor First Name:<input type="text" name="actorname"><br><br>
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
$actorname=$_POST[actorname];

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
 {
 // echo $moviename;	
    $sql="select a.fname as actorfname,a.lname as actorlname,title,m.genre as genre,m.year as year,m.rating as rating,m.runtime as runtime,m.collections as collections from movie as m,actor as a where m.actor_id=a.actor_id and a.fname='$actorname' ";
   
   
	$result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    	$x=1;
    	
    	while($row=mysqli_fetch_assoc($result))
				{
					if($x==1)
					{
						
					echo "<h1 style=color:white>"."Movies by the Actor ".$row["actorfname"]."  ".$row["actorlname"]."</h1>";
					echo "<table id=values>";
			    	echo "<th>"."Title"."</th>"."<th>"."Genre"."</th>"."<th>"."Year"."</th>"."<th>"."Rating"."</th>"."<th>"."Runtime"."</th>"."<th>"."Collections"."</th>";
			    	// echo "</table>";
			    	$x++;
			    	}
					// echo "<table id=values>";
					// echo "<br>";
					echo  " <tr id=row>"."<td>".$row["title"]."</td>"."<td>".$row["genre"]."</td>"."<td>".$row["year"]."</td>"."<td>".$row["rating"]."</td>"."<td>".$row["runtime"]."</td>"."<td>".$row["collections"]."</td>"."</tr>";
					
					// echo $row["movietitle"];
				 }
                  echo "</table>";
    }
    else
    {
        echo "<h1 style=color:white> NO MOVIES FOUND FOR THE ACTOR</H1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    }
echo "<div id=footer> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";}
mysqli_close($conn);
?>
<!doctype html>
