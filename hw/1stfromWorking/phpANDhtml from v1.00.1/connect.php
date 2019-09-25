<?php
 $dbPassword="phpfunda";
 $dbUserName="phpfunda";
 $dbServer="localhost";
 $dbName="phpfundamentals";
$connection=new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);
 

if ($connection->connect_errno)
 {
     exit("Database connection Failed reason:- " .connection_errno);
 }
 else {
     echo "all ok and connected <br>";
    
 }
?>
<?php
#table name authors;
?>