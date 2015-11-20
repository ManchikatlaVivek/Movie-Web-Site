<!doctype html>
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
#qw{
  float:right;
}
/*#row{
    background-color: #CEF4FF;
}*/
th{
    height: 50px;
    border: 1px solid #98bf21;
    background-color: #44FCE0;
    text-align: center;
    padding:5px;
    font-size: 30px;
    width:6%;
}
td{
   border: 1px solid #98bf21;
    color:white;
    text-align: center;
    font-size: 30px;
    padding:6px;
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

</style>
</head>
<body>
    <div id=header>
        Directors List
        <form id="qw" action="index.php" method="post">
        <input type="submit" value="Home">
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

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
{
    $sql="select * from director order by fname asc";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $x=1;

    	while($row=mysqli_fetch_assoc($result))
				{
                    if($x==1)
                    {

                    echo "<table id=values>";
                    echo "<th>"."First Name"."</th>"."<th>"."Last Name"."</th>"."<th>"."Gender"."</th>"."<th>"."Birthday"."<br>";
                    // echo "</table>";
                    $x++;
                    }
					// echo "<table id=values>";
					echo "<tr id=row>"."<td>".$row["fname"]."</td>"."<td>".$row["lname"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["dob"]."</td>"."</tr>";
					
				}
                echo "</table>";
    }
   mysqli_close();
}
?>
