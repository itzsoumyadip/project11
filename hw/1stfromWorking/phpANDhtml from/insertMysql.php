<?php
require "connect.php";

?>

<?php
 $aname =$_POST['aname'];
 $aid= $_POST['aid'];
 $lname=$_POST['lname'];
$pname=$_POST['pname'];

$query="Insert into authors values('$aid','$aname','$lname','$pname')";
$connection->query($query) or die("failure to insert data ");
echo "one row inserted";
header ('location:authors.html');
?>