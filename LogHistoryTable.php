<?php
	include("connecton.php");

	$sql = "CREATE TABLE LogHistory (
		HistoryId int AUTO_INCREMENT,
		Employeeid int (9),
		Position varchar(20),
		Username varchar(20),
		LogIn datetime,
		LogOut datetime,

		 Primary Key (HistoryId)
		);";

	$result = mysql_query($sql);
		if (!$result)
			echo "Error creating table!".mysql_error();
		else
			echo "Table created successully!";

	mysql_close($con);
?>