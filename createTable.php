<?php  
	include ("connecton.php");

	mysql_select_db($dbName);

	$sql = "CREATE TABLE StudentProfiles(
		ID int (11),
		LasttName varchar(20),
		FirstName varchar(30),
		MiddleName varchar(20),
		Course 	varchar(50),
		Year varchar(20),
		Address varchar(150),
		DateIssued date,
		ValidUpTp date,
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