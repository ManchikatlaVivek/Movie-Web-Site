<!doctype html>
<html>
<head>
<style>
 span{
    color:yellow;
}
body{
  background: url("images/bg2.jpg");
}

#footer {
    
    color:white;
    clear:both;
    text-align:center;
   padding:5px;    
}
#header{
    background-color:black;
    color:white;
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
    background-color: #44FCE0;
    text-align: center;
    padding:5px;
    width:6%;
    font-size: 20px;
}
td{
   border: 1px solid #98bf21;
    color:white;
    text-align: left;
    padding:6px;
    width:5%;
    font-size: 20px;
}

#row{
    /*background-color: #FEFCE0;*/
}
#content1{
    background:#6098BD;
    color:black;
}
#content2{
    background:#33BA83;
    color:black;
}
span{
  float: right;
}
#qw{
  float:right;
}

</style>
</head>
<body>
    <div id=header>
       Movies List 
       <form id="qw" action="admin.php" method="post">
        <input type="submit" value="Home">
      </form>
    </div>  

    <div id=content1>
        <br>
<form action="displayactorinmovieadmin.php" method="post">
<h1>Get Details Of An Actor In The Movie</h1>
Enter Movie Name:
<input type="text" name="moviename"><br>
<input type="submit" value="search">
</form>
<br>
</div>
<div id=content2>
    <br>
    
<form action="displaydirectorinmovieadmin.php" method="post">
<h1>Get Details Of Director In a Movie</h1>
Enter Movie Name:
<input type="text" name="moviename"><br>
<input type="submit" value="search">
</form>
<br>
</div>

</body>
</html>

<?php
//include('session.php');
session_start(); 
//echo $temp;
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
    $sql="select title,a.fname as actorfname,a.lname as actorlname,d.fname as directorfname,d.lname as directorlname,m.genre as genre,m.year as year,m.rating as rating,m.runtime as runtime,m.collections as collections from movie as m,actor as a,director as d where m.actor_id=a.actor_id and d.director_id=m.director_id";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $x=1;
        $y=1;
    	while($row=mysqli_fetch_assoc($result))
				{
                    if($x==1)
                    {

                     echo "<table id=values>";
                    echo "<th>"."Ttile"."</th>"."<th>"."Actor First Name"."<th>"."Actor Last Name"."<th>"."Director First Name"."</th>"."<th>"."Director Last Name"."</th>"."<th>"."Genre"."</th>"."<th>"."Year"."</th>"."<th>"."Rating"."</th>"."<th>"."runtime"."</th>"."<th>"."Collections"."</th>"."<br>";
                    // echo "</table>";
                    $x++;
                    // echo "<table id=values>";
                    }
						
                   	   echo "<tr id=row>"	;
					   echo "<td>".$row["title"]."</td>"."<td>".$row["actorfname"]."</td>"."<td>".$row["actorlname"]."</td>"."<td>".$row["directorfname"]."</td>"."<td>".$row["directorlname"]."</td>"."<td>".$row["genre"]."</td>"."<td>".$row["year"]."</td>"."<td>".$row["rating"]."</td>"."<td>".$row["runtime"]."</td>"."<td>".$row["collections"]."</td>";
					   echo "</tr>";                   
                    
				}
                echo "</table>";
    }
    else
    {
        echo "<h1> NO MOVIES FOUND</H1><br>";
    }
    echo "<div id=footer> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";
}
?>
