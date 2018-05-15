<?php 
	include("connecton.php");
	session_start();
		
				$sqlCheck = "SELECT * FROM studentprofiles WHERE ID = ".$_SESSION['ID'];
				$runQuery = mysql_query($sqlCheck);
			
				$ThisPos = mysql_fetch_array($runQuery);
			
				if ($ThisPos['Position'] == 'Student') 
				{
					date_default_timezone_set('Asia/Hong_Kong');
					$Logtime = date_default_timezone_get();			
					// $studID = $ThisPos['ID'];
					$user = $ThisPos['Username'];
					$Logout= date('Y-m-d H:i:s', time());			
				
					$sql2 = "UPDATE loghistory SET LogOut = '$Logout' WHERE Username = '$user' and LogOut = '0000-00-00 00:00:00'";
					$result2 = mysql_query($sql2);

					if($result2>0){



					// remove all session variables
					session_unset(); 
					// destroy the session 
					session_destroy(); 
					echo '<script> window.location.href="LoginPage.php"</script>';
					exit();
				}
					else
				{
					// echo $studID;
					// echo $Logout;
					echo $sql2;

				}

				}
			
				$sqlCheck1 = "SELECT * FROM employees WHERE EmployeeID = ".$_SESSION['ID'];
				$runQuery1 = mysql_query($sqlCheck1);
				$ThisPos1 = mysql_fetch_array($runQuery1);
			
				if ($ThisPos1['Position'] == 'Librarian') 
				{
					date_default_timezone_set('Asia/Hong_Kong');
					$Logtime = date_default_timezone_get();			
					// $employeeid = $ThisPos1['EmployeeID'];
					$user = $ThisPos1['Username'];
					$Logout= date('Y-m-d H:i:s', time());			
				
					$sql2 = "UPDATE loghistory SET LogOut = '$Logout' WHERE Username = '$user' and LogOut = '0000-00-00 00:00:00'";
					$result2 = mysql_query($sql2);

					// remove all session variables
					session_unset(); 
					// destroy the session 
					session_destroy(); 
					echo '<script> window.location.href="LoginPage.php"</script>';
					exit();
				}
				
				if ($ThisPos1['Position'] == 'Library Clerk')
				{
					date_default_timezone_set('Asia/Hong_Kong');
					$Logtime = date_default_timezone_get();			
					// $employeeid = $ThisPos1['EmployeeID'];
					$user = $ThisPos1['Username'];
					$Logout= date('Y-m-d H:i:s', time());			
				
					$sql2 = "UPDATE loghistory SET LogOut = '$Logout' WHERE Username = '$user' and LogOut = '0000-00-00 00:00:00'";
					$result2 = mysql_query($sql2);

					// remove all session variables
					session_unset(); 
					// destroy the session 
					session_destroy(); 
					echo '<script> window.location.href="LoginPage.php"</script>';
					exit();
				}
			

	
		

	// // remove all session variables
	// session_unset(); 
	// // destroy the session 
	// session_destroy(); 

	// header("Location:LoginPage.php");
	// exit();
 ?>