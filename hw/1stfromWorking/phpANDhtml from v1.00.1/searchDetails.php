<?php 
 require("connect.php");
 

 
$aid1=$_POST['id1'];
$con=$connection;
$query = "Select * From authors WHERE id='$aid1'";
echo "<br>";
$resultobj = $connection->query($query);
print_r($resultobj);
if ($resultobj->num_rows>0){
       
    while ($row=$resultobj->fetch_assoc()) {
                  $aid=$row["id"];
                  $fname=$row["first_name"];
                  $lname=$row["last_name"];
                  $pname=$row["pen_name"];
             echo "<form action=\"showDetails.php \" method=\"POST\">";
             echo  "Authors ID:   "."  "."<input type=\"text\" name=\"aid2\" value=\"$aid\" readonly>"."<br>";      
             echo  "Authors FName:"."  "."<input type=\"text\" name=\"fname\" value=\"$fname\" >"."<br>";
             echo  "Authors Lname:"."  "."<input type=\"text\" name=\"lname\" value=\"$lname\" >"."<br>";
             echo  "Pen Name:     "."  "."<input type=\"text\" name=\"pname\" value=\"$pname\">"."<br>";
             echo "<input type=\"submit\" value=\"UPDATE RECORD \">";
             echo "</form>";
            }
        }
else
    echo "<h1> NO data </h1>";
?>