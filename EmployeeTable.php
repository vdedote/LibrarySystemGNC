<?php 
	include("connecton.php");

	mysql_select_db($dbName);

	$sql = "CREATE TABLE Employees(
		EmployeeID int (11),
		EmpLName varchar(20),
		EmpFName varchar(30),
		EmpMName varchar(20),
		Gender 	 varchar(7),
		Birthday date,
		Age 	 int(3),
		Position varchar(40),
		Address varchar(150),
		Username varchar(15),
		Password varchar(20),
		ApprovedBy varchar(30)
		);";
	
	$result = mysql_query($sql);
		if (!$result)
			echo "Error creating table!".mysql_error();
		else
			echo "Table created successully!";

	mysql_close($con);

?>