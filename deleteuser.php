<!doctype html>
<html>
<head>
<style>
 body{
    background: url("images/users.jpg");
}
.center{ 
       /*position: fixed;*/     
       text-align: center;    
       bottom: 0px; 
       width: 100%;
   }
.footer{ 
       position: fixed;     
       text-align: center;    
       bottom: 0px; 
       width: 100%;
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
    text-align: center;
    padding:6px;
    width:5%;
    font-size: 25px;
}

#row{
    background-color: #FEFCE0;
}
#content1{
    background:#6098BD;
    color:black;
}
#qw{
  float: right;
}
#qww{
  float: left;
}
</style>
</head>
<body>
  <div id="header"> Users List
  <form id="qw" action="admin.php" method="post">
        <input type="submit" value="Home">
      </form>
    <form id ="qww" action="displayallusers.php">
    <input type="submit" value="All Users">
     </form>
</div>
<div id=content1>
    <br>
<form action="deleteuser.php" method="post">
<h1>DELETE A USER</h1>
<input type="text" name="username" placeholder="UserName"><br>
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
$user=$_POST[username];
$temp=$user;

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
    
}
else
{

   $sql="SELECT * FROM userInfo WHERE username='$user'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0)
   {
    $sql="DELETE FROM userInfo WHERE username='$user'";
    mysqli_query($conn,$sql);
        echo "<h1>successfully removed the user</h1><br>";
        // echo "<a href=displayallusers.php>See the Users</a>";
}
else
{
    echo "<h1>No such Username  ". $temp."</h1>";
    echo "<br>";
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
}
echo "<div class=center> <form action=index.php>
    <input type=submit value=logout>
   </form></div>";
}
mysqli_close($conn);




?>
