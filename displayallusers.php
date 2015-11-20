<!doctype html>
<html>
<head>
<style>
 span{
    color:yellow;
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
    font-size: 25px;
}
td{
   border: 1px solid #98bf21;
    color:black;
    text-align: left;
    padding:6px;
    width:5%;
    font-size: 25px;
}
body{
    background: url("images/users.jpg");
}
#qw{
    float: right;
}


#content1{
    background:#6098BD;
    color:black;
}
</style>
</head>
<body>
   <div id="header"> Users List
  <form id="qw" action="admin.php" method="post">
        <input type="submit" value="Home">
      </form>
</div>
<div id=content1>
    <br>
<form action="deleteuser.php" method="post">
<h1>DELETE A USER</h1>
<input type="text" name="username" placeholder="UserName"><br><br>
<input type="submit" value="Delete">
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
$dbname='userDb';

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
{
    $sql="select * from userInfo";
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
                    echo "<th>"."User Id"."</th>"."<th>"."User Name"."</th>"."<th>"."Mobile Number"."</th>"."<th>"."Email"."</th>"."<th>"."Gender"."</th>"."<th>"."Date Of Birth"."</th>"."<br>" ; 
                    // echo "</table>";
                    $x++;
                    }
                    // echo "<table id=values>";   
                       echo "<tr id=row>"   ;
                       echo "<td>".$row["id"]."</td>"."<td>".$row["username"]."</td>"."<td>".$row["mobile"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["bday"]."</td>";
                       echo "</tr>";                   
                   
                }
                 echo "</table>";
    }
    else
    {
        echo "<h1> NO USERS FOUND</H1><br>";

    }
    echo "<div id=footer> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";
    
}
mysqli_close($conn);
?>
