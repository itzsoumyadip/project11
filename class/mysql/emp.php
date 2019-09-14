<?php

require ('connect.php');
$eid=$_POST["eid"];
$ename=$_POST["ename"];
$doj=$_POST["doj"];
$sal=$_POST["sal"];
$write="INSERT INTO emp1 VALUES('$eid','$ename','$doj','$sal')"; /// insert into (TABLENAME )Values  (TABLE PARAMETER)
$con=$connect;
$result=$con->query($write)or die("failure to insert data");
echo " one row inserted";
echo "<br> $result";
?>