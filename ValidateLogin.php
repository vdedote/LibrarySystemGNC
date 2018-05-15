<?php
	include("connecton.php");
		function LogUser()
		{
			$ErrorMessage = "";
			$DisplayNotif = "False";
			$LogUname= $_POST['Lusername'];
			$LogPass = $_POST['Lpassword'];

			$sqlCheckUser = "SELECT ID,Username, Password, Position FROM studentprofiles WHERE Username = '$LogUname';"; 
			
			$runCheck = mysql_query($sqlCheckUser);

				if ($runCheck > 0) 
					{
						// echo "0";
						$row = mysql_fetch_array($runCheck);
							if ($row['Password'] == $LogPass) 
							{
								// echo "1";
								$_SESSION['ID'] = $row['ID'];
								$_SESSION['type'] = $row['Position'];

								date_default_timezone_set('Asia/Hong_Kong');
								$Logtime = date_default_timezone_get();			

								$LogIn = date('Y-m-d H:i:s', time());				
								$Employeeid = $row['ID'];
								$Usern = $row['Username'];
								$Pos = $row['Position'];
						
								$sql2 = "INSERT INTO loghistory VALUES ('', $Employeeid,'$Pos','$Usern', '$LogIn','')";
								$result2 = mysql_query($sql2);

								// header("Location:StudentMenu.php");
								// echo '<script> window.location.href="StudentMenu.php";</script>';
								echo '<script> window.location.href="LibrarianMenu.php"</script>';
							}
							else
							{
								$ErrorMessage = "Incorrect Username or Password!";
								$DisplayNotif = "True";
							}
					}


					$sqlCheckUser1 =" SELECT EmployeeID,Username, Password, Position FROM employees WHERE Username = '$LogUname';";
					$runCheck1= mysql_query($sqlCheckUser1);
					
					if ($runCheck1 > 0) 
						{
							// echo "2";
							$row1= mysql_fetch_array($runCheck1);
							if ($row1['Password'] == $LogPass) 
							{
								
								$_SESSION['ID'] = $row1['EmployeeID'];
								$_SESSION['type'] = $row1['Position'];
								// header("Location:ClerkMenu.php");
								date_default_timezone_set('Asia/Hong_Kong');
								$Logtime = date_default_timezone_get();			

								$LogIn = date('Y-m-d H:i:s', time());				
								$Employeeid = $row1['EmployeeID'];
								$Usern = $row1['Username'];
								$Pos = $row1['Position'];
						
								$sql2 = "INSERT INTO loghistory VALUES ('', $Employeeid,'$Pos','$Usern', '$LogIn','')";
								$result2 = mysql_query($sql2);
								// echo '<script> window.location.href="ClerkMenu.php"</script>';
								echo '<script> window.location.href="LibrarianMenu.php"</script>';
								}
								else 
								{
									$ErrorMessage = "Incorrect Username or Password!";
									$DisplayNotif = "True";
								}							
							}
						//}
	
				
		

				return $ErrorMessage;
		}
 ?>