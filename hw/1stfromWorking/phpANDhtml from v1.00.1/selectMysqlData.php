<?php
require "connect.php";

?>
<?php

$query = "Select * From authors";
$resultobj = $connection->query($query);
if ($resultobj->num_rows>0)
    echo "<center>";
    echo "<table border=5px>";
    echo "<caption><b>Authors Details</b></caption>";
    echo "<th>Authors ID</th>";
    echo "<th>FIRST NAME</th>";
    echo "<th>LAST NAME</th>";
    echo "<th>PEN NAME</th>";
 while($single=$resultobj->fetch_assoc()){
      echo "<tr>";      
       echo "<td>".$single['id']."</td>";
       echo "<td>".$single['first_name']."</td>";
       echo "<td>".$single['last_name']."</td>";
       echo "<td>".$single['pen_name']."</td>";
 }
   
 ?>  
 
 
 <?php

 // echo "Authors:". $single['first_name']."".$single['last_name']." Pen name:- ".$single['pen_name'] ."<br>";
     
?>