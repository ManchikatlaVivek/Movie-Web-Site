<!doctype html>
<html>
<head>
<style>
#qw{
  float:right;
}
body{
  background: url("images/bg6.jpg");
}
#footer {
    
    color:white;
    
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
    padding:6px;
    width:6%;
    font-size: 30px;
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
</style>
</head>
<body>
  <div id=header>
    Wishlist
    <form id="qw" action="main.php" method="post">
        <input type="submit" value="Home">
      </form>
  </div>
</body>
</html>

<?php
session_start();
$nam=$_SESSION["username"];
// echo $nam;
$servername='localhost';
$usernam='root';
$password='root';
$dbname='movie';
$conn=mysqli_connect($servername,$usernam,$password,$dbname);

if(!$conn){
	echo "not connected";
}
else
{
	$sql="SELECT * FROM WISHLIST where username='$nam' ";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "<table id=values>";
		echo "<th>"."MOVIE TITLE"."</th>";
	  while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr id=row>"."<td>".$row["TITLE"]."</td>"."</tr>";
			
		}
    echo "</table>";
	}

}
echo "<div id=footer> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";

mysqli_close();
?>


