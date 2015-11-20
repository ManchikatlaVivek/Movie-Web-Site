<?php
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
$sql="SELECT * FROM WISHLIST";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "<table id=values>";
		echo "<th>"."Username"."</th>"."<th>"."Movie Title"."</th>";
	while($row=mysqli_fetch_assoc($result))
	{
			echo "<tr id=row>"."<td>",$row["USERNAME"]."</td>"."<td>".$row["TITLE"]."</td>"."</tr>";
	}
}
else
{
	echo "NO MOVIE IS ENROLLED AS A WISHLIST OF USERS";
}

}


?>


<html>
<head>
<style>
.center{ 
       /*position: fixed;*/     
       text-align: center;    
       bottom: 0px; 
       width: 100%;
   }
   #values{
   	width:100px;
   	height:50px;
   }
#values table, #val table{
    border-collapse: collapse;
    border: 1px solid green;
    width: 100%;
}
#row{
    background-color: palegreen;
}
span{
    color:yellow;
}
th{
    height: 50px;
    border: 1px solid #98bf21;
    background-color: green;
    text-align: center;
    padding:5px;
    width:6%;
}
td{
   border: 1px solid #98bf21;
    color:black;
    text-align: left;
    padding:12px;
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
    font-size: 3em;
}
</style>
</head>
<body>

</body>
</html>