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

    	while($row=mysqli_fetch_assoc($result))
				{
					echo "<table >";
					
					echo "<td>".$row["actor_id"]."</td>"."<td>".$row["fname"]."</td>"."<td>".$row["lname"]."</td>"."<td>".$row["dob"]."</td>"."<td>".$row["no_of_awards"]."</td>";
					echo "</table>";
				}
    }
}
?>