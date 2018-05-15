<?php 
	include("connecton.php");

	mysql_select_db($dbName);

	$sql = "CREATE TABLE Authors(
		BookID int (11),
		FirstName varchar (50),
		MiddleName varchar (50),		
		LastName varchar(50)
		);";
	
	$result = mysql_query($sql);
		if (!$result)
			echo "Error creating table!".mysql_error();
		else
			echo "Table created successully!";

	mysql_close($con);

?>