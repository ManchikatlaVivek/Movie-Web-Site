<!doctype html>
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
    padding:6px;
    width:6%;
    font-size: 20px;
}
#content1{
    background:#6098BD;
    color:black;
}
#content2{
    background:#33BA83;
    color:black;
}
#header{
	
	background-color:black;
    color:white;
    text-align:center;
    padding:2px;
    font-size: 5em;
}
body{
  background: url("images/bg4.jpg");
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
    <form id="qw" action="admin.php" method="post">
        <input type="submit" value="Home">
      </form>
      <form id="qww" action="awardsadmin.php" method="post">
        <input type="submit" value="Award Page">
      </form>
	</div>
	<div id=content1>
		<br>
<form action="displayawardsbyactoradmin.php" method="post">
<h1>Search Awards for Actor</h1>
Enter the Actor First Name:<input type="text" name="actorname"><br><br>
<input type="submit" value="search">
</form>
<br>
</div>
<div id=content2>
	<br>
<form action="displayawardsbydirectoradmin.php" method="post">
<h1>Search Awards for Director</h1>
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

$name=$_POST[actorname];


$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
{
    $sql="select aw.awardname as awardname, m.title as movietitle, a.fname as actorfname, a.lname as actorlname, aw.year as awardyear,aw.category as awardcategory,aw.type as awardtype  from awards as aw , movie as m , actor as a where aw.movie_id=m.movie_id and m.actor_id=a.actor_id and a.fname='$name'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {  	

    	$x=1;
    	while($row=mysqli_fetch_assoc($result))
				{
					
					
					if($x===1)
						{
							echo "<table id=values>";
							echo "<th>"."Award Category"."</th>"."<th>"."Movie Title"."</th>"."<th>"."Actor Fname"."</th>"."<th>"."Actor Lname"."</th>". "<th>"."Awarded Year"."</th>"."<br>";
							// echo "</table>";
							$x++;
						}
						if($row["awardtype"]==='ACTOR')
							{	
								
								// echo "<table  id=values>";
								echo "<tr id=row>"."<td>".$row["awardcategory"]."</td>" ."<td>".$row["movietitle"]." </td> " ."<td>".$row["actorfname"]." </td> " ."<td>".$row["actorlname"]."</td>"."<td>".$row["awardyear"]." </td>"."</tr>" ;
								
							}
					// echo $row["awardtype"] ." <br>";
						// if($row["awardtype"]=='DIRECTOR')
						// {
							
						// 	echo "<table id=value>";
						// 	echo "<tr id=row>"."<td>".$row["awardcategory"]." </td>". "<td>".$row["movietitle"]." </td> "."<td>".$row["directorfname"]." </td> "."<td>".$row["directorlname"]." </td> "."<td>".$row["awardyear"]."</td>"."</tr> " ."<br>";
						// 	echo "</table>";
						// }
				}
				echo "</table>";
    }
    else
    {
        echo "<h1 style=color:white> NO AWARDS WERE GIVEN TO THE ACTOR</H1><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    }
echo "<div id=footer> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";
}
mysqli_close($conn);
?>

