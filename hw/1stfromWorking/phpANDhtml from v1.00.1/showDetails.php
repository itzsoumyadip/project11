<?php 
 require("connect.php");
 
$aid1=$_POST['aid2'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pname=$_POST['pname'];
$query ="update authors set first_name='$fname', last_name='$lname', pen_name ='$pname' where id='$aid1' ";

$resultobj = $connection->query($query) or die ("employee details can mot updated");
echo "<br>";
echo "$fname $lname".",s"." "."Data update successfully";
?>