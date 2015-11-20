<?php
//echo "server";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$gen=$_POST["genre"];
//echo $gen;
}
//echo $gen;
//echo $gen;
session_start();
$servername='localhost';
$username='root';
$password='root';
$dbname='movie';
$conn=mysqli_connect($servername,$username,$password,$dbname);
//=$_POST["genre"]
if(!$conn){
	echo "not connected";
}
else
{
  echo "<div id=home>
      <form action=main.php>
      <input type=submit value=home>
      </form> 
      </div>";
  echo "<p id=paragraph> Movies Based on    ".$gen."</p>";
  
$sql="SELECT title,a.fname as actorfname,a.lname as actorlname,d.fname as directorfname,d.lname as directorlname,m.genre as genre,m.year as year,m.rating as rating,m.runtime as runtime,m.collections as collections FROM movie as m,actor as a,director as d WHERE genre='$gen' and m.actor_id=a.actor_id and d.director_id=m.director_id";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    	echo "<table id=values>";
                    echo "<th>"."Ttile"."</th>"."<th>"."Actor First Name"."<th>"."Actor Last Name"."<th>"."Director First Name"."</th>"."<th>"."Director Last Name"."</th>"."<th>"."Genre"."</th>"."<th>"."Year"."</th>"."<th>"."Rating"."</th>"."<th>"."runtime"."</th>"."<th>"."Collections"."</th>"."<br>";
        while($row=mysqli_fetch_assoc($result))
		{

			 echo "<tr id=row>"	;
					   echo "<td>".$row["title"]."</td>"."<td>".$row["actorfname"]."</td>"."<td>".$row["actorlname"]."</td>"."<td>".$row["directorfname"]."</td>"."<td>".$row["directorlname"]."</td>"."<td>".$row["genre"]."</td>"."<td>".$row["year"]."</td>"."<td>".$row["rating"]."</td>"."<td>".$row["runtime"]."</td>"."<td>".$row["collections"]."</td>";
					   echo "</tr>";
			}
			echo "</table>";
			echo "<div text-align=center id=footer>
      <form action=index.php>
      <input type=submit value=logout>
      </form> </div>";
    }
	else
	{
    echo "<p id=cateog> No Movie in Your Selected".$gen."</p>";
		//echo "no entry into such category";
		echo "<div id=footer>
      <form action=index.php>
      <input type=submit value=logout>
      </form> 
      </div>";
	}
}

?>



<html>
<head>
	<style>
  #home{
    float:right;
    padding:5px;
  }
  body{
   background:url("images/cate.jpeg");
  }
 span{
    color:yellow;
}
.center{ 
       /*position: fixed;*/     
       text-align: center;    
       bottom: 0px; 
       width: 100%;
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
}
td{
   border: 1px solid #98bf21;
    color:black;
    text-align: left;
    padding:6px;
    width:5%;
}

#row{
    background-color: #FEFCE0;
}
#content1{
    background:#6098BD;
    color:black;
}
#content2{
    background:#33BA83;
    color:black;
}
#paragraph{
  background-color:navy;
  margin:0px;
  size:20px;
  padding:20px;
  color:white;
  font-size:50px;
  text-align:center;
}
#cateog{
font-size:25px;
color:white;

}
</style>
	</head>
	<body>
    <!--<div id="home">
      <form action="main.php">
      <input type="submit" value="home">
      </form> </div>-->
	</body>
</html>