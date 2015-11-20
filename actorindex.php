<!doctype html>
<html>
<head>
<style>
body{
  background: url("images/bg3.jpg");
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
/*#row{
	background-color: #7BC4D1;
}*/
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
    padding:6px;
    width:6%;
    font-size: 20px;
}
span{
    color:yellow;
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
</style>
</head>
<body>
<div id=header>
    Actors List
    <form id="qw" action="index.php" method="post">
        <input type="submit" value="Home">
      </form>
</div>
<div id=content1>
        <br>
<p>Enter the actor name we will show you the movies done by actor</p>
<form action="displaymoviebyactorindex.php" method="post">
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

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
{
    $sql="select * from Actor order by fname asc";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    	$x=1;
    	
    	while($row=mysqli_fetch_assoc($result))
				{
					if($x==1)
					{
					echo "<table id=values>";
			    	echo "<th>"."First Name"."</th>"."<th>"."Last Name"."</th>"."<th>"."Birthday"."</th>"."<th>"."No of Awards"."</th>"."<br>";
			    	// echo "</table>";
			    	$x++;
			    	}
					// echo "<table id=values>";
					
					echo "<tr id=row>"."<td>".$row["fname"]."</td>"."<td>".$row["lname"]."</td>"."<td>".$row["dob"]."</td>"."<td>".$row["no_of_awards"]."</td>"."</tr>";
					 
				}
                echo "</table>";
    }
    else
    {
        echo "<h1>NO ACTORS FOUND</h1><br>";
    }
  
}
mysqli_close($conn);
?>
