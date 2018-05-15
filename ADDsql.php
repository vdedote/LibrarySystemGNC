<?php 

	include("connecton.php");
	function AddStudent()
	{
		$ErrorMessage = "";
		//Variables for Getting the values inside the Form
		$id    =  $_POST['stdntID'];
		$Lname =  $_POST['lastName'];
		$Fname =  $_POST['firstName'];
		$Mname =  $_POST['middleName'];
		$Course=  $_POST['Course'];
		$Year  =  $_POST['Year'];
		$Address= $_POST['address'];
		$Issued = $_POST['DateIssued'];
		$UpTo  =  $_POST['Validity'];
		$userName = $_POST['Uname'];
		$passWord = $_POST['Pword'];
		$Position = $_POST['Position'];
		$ApprovedBy = $_POST['Authorized'];


		$sqlCheck =  "SELECT * FROM studentprofiles WHERE ID ='$id';";
		$resultCheck = mysql_query($sqlCheck);
			if (mysql_num_rows($resultCheck) > 0) 
			{
				$ErrorMessage = "This ID already exist.";
				# code...
			}
			else
			{
				$sqlCheck1 = "SELECT * FROM studentprofiles WHERE Username ='$userName';";
				$resultCheck1 = mysql_query($sqlCheck1);
					if (mysql_num_rows($resultCheck1) > 0) 
					{
						$ErrorMessage = "This Username already exist.";
						# code...
					}
					else
					{
						$sqlInsert =  "INSERT INTO studentprofiles VALUES ('$id','$Lname','$Fname','$Mname','$Course', '$Year', '$Address','$Issued', '$UpTo','$userName','$passWord', '$ApprovedBy', '$Position');";
						$InsertThis = mysql_query($sqlInsert);
						if (!$InsertThis)
							{
								echo "Error inserting record: ".mysql_error();
							}
								else
								{ 
									echo '<script> document.location.href="StudentList.php"</script>';
								}
					}
			}

			return $ErrorMessage;

	}

	function AddEmployee()
	{
		$ErrorMessage = "";
		//Variables for Getting the values inside the Form
		$Empid    =  $_POST['empID'];
		$empLname =  $_POST['Lname'];
		$empFname =  $_POST['fName'];
		$empMname =  $_POST['mName'];
		$Gender=  $_POST['sex'];
		$Bday  =  $_POST['birthday'];
		$Age  = $_POST['Age'];
		$Position = $_POST['Position'];
		$Address= $_POST['address'];
		$userName = $_POST['Uname'];
		$passWord = $_POST['Pword'];
		$ApprovedBy = $_POST['Authorized'];


		$sqlCheck =  "SELECT * FROM employees WHERE ID ='$Empid';";
		$resultCheck = mysql_query($sqlCheck);
			if (mysql_num_rows($resultCheck) > 0) 
			{
				$ErrorMessage = "This ID already exist.";
				# code...
			}
			else
			{
				$sqlCheck1 = "SELECT * FROM employees WHERE Username ='$userName';";
				$resultCheck1 = mysql_query($sqlCheck1);
					if (mysql_num_rows($resultCheck1) > 0) 
					{
						$ErrorMessage = "This Username already exist.";
						# code...
					}
					else
					{
						$sqlInsert =  "INSERT INTO employees VALUES ('$Empid','$empLname','$empFname','$empMname','$Gender', '$Bday', '$Age','$Position', '$Address','$userName','$passWord', '$ApprovedBy');";
						$InsertThis = mysql_query($sqlInsert);
						if (!$InsertThis)
							{
								echo "Error inserting record: ".mysql_error();
							}
								else
								{ 
									echo '<script> document.location.href="EmployeeList.php"</script>';
								}
					}
			}

			return $ErrorMessage;

	}

	

function EditEmployee()
{

$ErrorMessage = "";
		//Variables for Getting the values inside the Form
		$Empid    =  $_POST['ID'];
		$empLname =  $_POST['Lname'];
		$empFname =  $_POST['fName'];
		$empMname =  $_POST['mName'];
		$Gender=  $_POST['sex'];
		$Bday  =  $_POST['birthday'];
		$Age  = $_POST['Age'];
		$Address= $_POST['address'];
	
		$sqlCheck =  "SELECT * FROM employees WHERE EmployeeID ='$Empid';";
		$resultCheck = mysql_query($sqlCheck);
		$row = mysql_fetch_array($resultCheck);
		

					$id = $row['EmployeeID'];
					$fname = $row['EmpFName'];						
					$mname = $row['EmpMName'];
					$lname = $row['EmpLName'];
					$gen =   $row['Gender'];
					$bday2 = $row['Birthday'];
					$addrs = $row['Address'];
					$age2 = $row['Age'];
					
	if (($empLname ==$lname)&&($mname == $empMname) && ($fname == $empFname)&& ($gen == $Gender)&&($age2 == $Age)&&($bday2 = $Bday)&&($addrs == $Address))
		{
			$ErrorMessage = "you did not change anything!";
			// echo $ErrorMessage;
		}

		else
		{
			
				//updating the values in the accounts
				$sql3= "UPDATE employees SET 
								EmpLName ='$empLname',
								EmpFName ='$empFname',
								EmpMName = '$empMname',
								Address = '$Address',
								Gender = '$Gender',
								Birthday = '$Bday' ,
								Age = $Age
						 WHERE EmployeeID = $Empid";
				// echo "2";
				// echo $sql3;
				$result3 = mysql_query($sql3);
					if($result3>0)
					{
						 header("location:ViewProfile.php");
					// echo "save";
					}
					else
					{
						// echo "not save";
					}
		
		}

	return $ErrorMessage;
}

function EditStudent()
{

$ErrorMessage = "";
		//Variables for Getting the values inside the Form
		$studid    =  $_POST['ID'];
		$studLname =  $_POST['Lname'];
		$studFname =  $_POST['fName'];
		$studMname =  $_POST['mName'];
		
		$Course  =  $_POST['Course'];
		$year  = $_POST['Year'];
		$Address= $_POST['address'];
	
		$sqlCheck =  "SELECT * FROM studentprofiles WHERE ID ='$studid';";
		$resultCheck = mysql_query($sqlCheck);
		$row = mysql_fetch_array($resultCheck);
		

					$id = $row['ID'];
					$fname = $row['FirstName'];						
					$mname = $row['MiddleName'];
					$lname = $row['LasttName'];
					
					$crse = $row['Course'];
					$addrs = $row['Address'];
					$year2 = $row['Year'];
					
	if (($studLname ==$lname)&&($mname == $studMname) && ($fname == $studFname)&&($year2 == $year)&&($crse = $Course)&&($addrs == $Address))
		{
			$ErrorMessage = "you did not change anything!";
			// echo $ErrorMessage;
		}

		else
		{
			
				//updating the values in the accounts
				$sql3= "UPDATE studentprofiles SET 
								LastName ='$studLname',
								FirstName ='$studFname',
								MiddleName = '$studMname',
								Address = '$Address',
								Course = '$Course',
								Year = '$year' 
						 WHERE ID = $studid";
			
				$result3 = mysql_query($sql3);
					if($result3>0)
					{
						 header("location:ViewProfile.php");
					// echo "save";
					}
					else
					{
						// echo "not save";
					}
		
		}

	return $ErrorMessage;
}

?>