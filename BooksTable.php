<?php 
	include("connecton.php");

	mysql_select_db($dbName);

	$sql = "CREATE TABLE Books(
		BookID int (11),
		BookCode varchar (13),
		BookCateg varchar(40),
		BookTitle varchar(30),
		BookAuthor varchar(300),
		DatePublished date,
		Quantity int(5),
		Remarks varchar(30)
		);";
	
	$result = mysql_query($sql);
		if (!$result)
			echo "Error creating table!".mysql_error();
		else
			echo "Table created successully!";

	mysql_close($con);

?>