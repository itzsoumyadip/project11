<?php

require('connect.php');
$select="SELECT * FROM emp1";
$con=$connect;
$result=$con->query($select);
echo "<table border=5>";
echo "<th>"."EMPLOYEE ID"."</th>";
echo "<th>"."EMPLOYEE Name"."</th>";
echo "<th>"."EMPLOYEE DOJ"."</th>";
echo "<th>"."EMPLOYEE Salary"."</th>";
if($result->num_rows>0)
{
	while ($row=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$row["EMP_ID"]."</td>";
		echo "<td>".$row["EMP_NAME"]."</td>";
		echo "<td>".$row["DOJ"]."</td>";
		echo "<td>".$row["SAL"]."</td>";
	}
	
}else{
	echo "Data not found";
}
?>



<form  action="emp.php" method="POST">
	
Employee ID: <input type="text" name="eid"><BR><BR><BR>
Employee NAME: <input type="text" name="ename"><BR><BR><BR>
Employee DOJ: <input  type="Date" name="doj"><BR><BR><BR>
Employee SALARY: <input type="text" name="sal"><BR><BR><BR>

<input type="submit" value="submit">

</form>