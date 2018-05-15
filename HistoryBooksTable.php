<?php 
	include("connecton.php");

	mysql_select_db($dbName);

	$sql = "CREATE TABLE HistoryBorrow(
		StudentID int (11),
		TransacCode int (11),
		BookCateg varchar(50),
		BookTitle varchar(50),
		DateBorrowed date,
		Due date,
		Remarks varchar(30)
		);";
	
	$result = mysql_query($sql);
		if (!$result)
			echo "Error creating table!".mysql_error();
		else
			echo "Table created successully!";

	mysql_close($con);

?>