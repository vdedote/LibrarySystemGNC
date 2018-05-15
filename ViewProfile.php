<?php 
	session_start();
	include("connecton.php");
	// include("ADDsql.php");
		if (!isset($_SESSION['ID']))
		{
			header('Location:LoginPage.php');	
		}


	elseif (($_SESSION['type'] == 'Librarian')||($_SESSION['type'] == 'Library Clerk')||($_SESSION['type'] == 'Teacher'))
	{
		$ShowUserName = "SELECT * FROM employees WHERE EmployeeID = ".$_SESSION['ID'];
		$Exec = mysql_query($ShowUserName);
		$user = mysql_fetch_array($Exec);
	
	}
	elseif (($_SESSION['type'] == 'Student'))
	{
		$ShowUserName = "SELECT * FROM studentprofiles WHERE ID = ".$_SESSION['ID'];
		$Exec = mysql_query($ShowUserName);
		$user = mysql_fetch_array($Exec);
	}
		// if (isset($_POST['uname']))&&($_POST['Position'])!= 'Student') 
		// 	{
		// 		$ExecuteFunction = EditEmployee();
		// 			if ($ExecuteFunction != '') 
		// 			{
		// 				$ErrorMessage = $ExecuteFunction;
		// 			}
		// 	}
		// 	elseif (isset($_POST['lname'])) 
		// 	{
		// 		$ExecuteFunction = EditStudent();
		// 			if ($ExecuteFunction != '') 
		// 			{
		// 				$ErrorMessage = $ExecuteFunction;
		// 			}
		// 	}

		$ListAccount = "SELECT * FROM employees";
	$Get = mysql_query($ListAccount);



?>
<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src = "jquery-3.1.1.min"></script>
	<script src = "jquery-3.1.1.min"></script>
	<link rel="stylesheet" type="text/css" href="BookInventory.css">
	<script>
		$(document).ready(function(){
		     $("#welcome").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #000000");
		        }   
    		});
		    $("#home").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#1a1a1a");
		        }   
    		});
		    $("#menu1").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#1a1a1a");
		        }   
    		});
    		 $("#menu2").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#1a1a1a");
		        }   
    		});
    		 $("#menu3").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#1a1a1a");
		        }   
    		});
    		 $("#menu4").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#000000");
		        }   
    		});
    		 $("#menu5").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#1a1a1a");
		        }   
    		});
    		  $("#menu6").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#1a1a1a");
		        }   
    		});
    		$("#panel").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #262626");
		        }   
    		});
    		$("#panel1").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #262626");
		        }   
    		});
    		$("#panel2").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #262626");
		        }   
    		});
    		$("#panel3").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #262626");
		        }   
    		});
    		$("#panel4").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #262626");
		        }   
    		});
    		$("#panel5").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #262626");
		        }   
    		});
    		$("#panel6").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #262626");
		        }   
    		});
    		$("#panel7").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #262626");
		        }   
    		});

		});
	</script>

	<script>
		$(document).ready(function(){

		    	$("#menu1").click(function()
		    	{
			        $("#panel").slideToggle("slow");
			        $("#panel1").slideToggle("slow");
		    	});
		    	$("#menu2").click(function()
		    	{
		    		$("#panel2").slideToggle("slow");
		    		$("#panel3").slideToggle("slow");
		    	});
		    	$("#menu4").click(function()
		    	{
		    		$("#panel4").slideToggle("slow");
		    		$("#panel5").slideToggle("slow");
		    	});
		    	$("#menu5").click(function()
		    	{
		    		$("#panel6").slideToggle("slow");
		    		$("#panel7").slideToggle("slow");
		    	});
});
	</script>


	<script type="text/javascript" language = "javascript">
	    function today_getDate()
        {
        	var today = new Date();
			return today;
        }

        function date_limitToday()
        {
        	var currentDate = new Date();
			currentDate = today_getDate();

        	var dd = currentDate.getDate()-1;
			var mm = currentDate.getMonth()+1; //January is 0!
			var yyyy = currentDate.getFullYear();
			if(dd<10)
				{
			        dd='0'+dd;
				} 
			   
			if(mm<10)
				{
			        mm='0'+mm;
			    } 

			    yyyy = yyyy-6;
			currentDate = yyyy+'-'+mm+'-'+dd;
        		
			document.getElementById("BDAY").setAttribute("max", currentDate);
        }

   		function age_compute()
   		{
   			
   			var today = new Date();
			var today_d = today.getDate();
			var today_m = today.getMonth() + 1; //January is 0!
			var today_y = today.getFullYear();
			
			var dateInput = document.getElementById('BDAY').value;
			var bDate = new Date(dateInput);
			
			var bdate_d = bDate.getDate();
			var bdate_m = bDate.getMonth() + 1; //January is 0!
			var bdate_y = bDate.getFullYear();
			
			var age1 = today_y - bdate_y;
    		if (((today_m - bdate_m) < 0) || ((today_m - bdate_m) == 0 && today_d < bdate_d))
    			age1 = age1 -1;

			var txtAge = document.getElementById("age");
			txtAge.value = age1;
   		}
	</script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="LibrarianMenu.php">GNC LIBRARY</a>
			</div>

			<ul class="nav navbar-nav">
				
			</ul>

		</div>
	</nav>

	<div class="container-width" style="margin-top: 50px;">
				<div class="row">
					<div class="col-md-3">
						  	<ul style="background-color: #1a1a1a; color:white; height:700px; " class="nav nav-pills nav-stacked nav-stacked-fixed-top">
						  	<!-- <li><a id="welcome" style="background-color: #000000;
						    						  background-image: url(myprofile.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;" href=""><label style="padding-left: 23px; font-weight: normal;">Welcome, <?php echo $NameEmp['EmpFName'];?>!</a></label></li> -->
						    <li><a id="home" style="background-color: #1a1a1a; color:white;background-image: url(home.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;" href="LibrarianMenu.php"><label style="padding-left: 20px; font-weight: normal;">Home</label></a></li>
						     <li>
						      <a id="menu5" style="background-color:  #1a1a1a; color:white;" class="dropdown-toggle" data-toggle="dropdown" href="#">Books<span class="caret"></span></a>
						    </li>
						    <li>
						    	<a id="panel6" style="background-color:#262626;
						    						  background-image: url(book.png);
						    						  background-position: 5px ;
													  background-size: 28px 28px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;
						    						  display: none; 
						    						  " href="BookInventory.php"><label style="padding-left: 20px; font-weight: normal;">Book Inventory</label></a>
						    </li>
						    <li>
						    	<a id="panel7" style="background-color:#262626;
						    						  background-image: url(book.png);
						    						  background-position: 5px ;
													  background-size: 28px 28px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;
						    						  display: none; 
						    						  " href="BorrowedBooks.php"><label style="padding-left: 20px; font-weight: normal;">Borrowed Books</label></a>
						    </li>
						  			    
					<?php
             			 if (($user['Position'] == 'Librarian')||($user['Position'] == 'Library Clerk'))
              
						echo'	    
							 <li>
						      <a id="menu4" style="background-color: #1a1a1a; color:white;" class="dropdown-toggle" data-toggle="dropdown" href="#">Accounts List <span class="caret"></span></a>
						    </li>
						    <li>
						    	<a id="panel4" style="background-color:#262626;
						    						  background-image: url(list.png);
						    						  background-position: 5px ;
													  background-size: 28px 28px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; 
						    						  " href="StudentList.php"><label style="padding-left: 20px; font-weight: normal;">Student Accounts</label></a>
						    </li>' 
					?>
			<?php
              if ($user['Position'] == 'Librarian')
              
					echo'
						    <li>
						    	<a id="panel5" style="background-color:#262626;
						    						  background-image: url(list.png);
						    						  background-position: 5px ;
													  background-size: 28px 28px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; 
						    						  " href="EmployeeList.php"><label style="padding-left: 20px; font-weight: normal;">Employee Accounts</label></a> 
				'?>
						    <li><a id="menu2" style="background-color: #1a1a1a; color:white;" href="#">My Account <span class="caret"></span> </a></li>
						    <li>
						    	<a id="panel2"  style="background-color:#262626;
						    						  background-image: url(view.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; 
						    						  " href="ViewProfile.php"><label style="padding-left: 15px; font-weight: normal;">View Profile</label></a>
						    </li>
						  
						    <li>
						    	<a id="panel3"  style="background-color:#262626;
						    						  background-image: url(edit4.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; 
						    						  " href="editProfile.php"><label style="padding-left: 16px; font-weight: normal;">Edit Profile</label></a>
						    </li>
						<!--      <li>
						    	<a id="panel8"  style="background-color:#333333;
						    						  background-image: url(changeuser.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;
						    						  display: none;" href=""><label style="padding-left: 16px; font-weight: normal;">Change Username</label></a>
						    </li>
						     <li>
						    	<a id="panel9"  style="background-color:#333333;
						    						  background-image: url(changepass1.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;
						    						  display: none;" href=""><label style="padding-left: 16px; font-weight: normal;">Change Password</label></a>
						    </li> -->

					 <?php
             			 if (($user['Position'] == 'Librarian'))
						echo' 	    
						    <li><a id="menu6" style=" background-image: url(history1.png);
						    						 background-color: #1a1a1a;
						    						  background-position: 5px ;
													  background-size: 20px 20px;
						    						  background-repeat: no-repeat;
						    						  color:white; 
						    						  cursor: pointer;" href="LogHistory.php"><label style="padding-left: 15px; font-weight: normal;">Log History</label>
						    </a></li>
						    '?>
						    <li><a id="menu3" style=" background-image: url(logout.png);
						    						 background-color: #1a1a1a;
						    						  background-position: 5px ;
													  background-size: 20px 20px;
						    						  background-repeat: no-repeat;
						    						  color:white; 
						    						  cursor: pointer;" href="LogOut.php"><label style="padding-left: 15px; font-weight: normal;">Log Out</label></a></li>
	 						 </ul>
					</div>
<?php		



			if ((isset($_SESSION['ID']))&&($_SESSION['type']!= 'Student')) 
			{
				$sqlCheck1 = "SELECT * FROM employees WHERE EmployeeID = ".$_SESSION['ID'];
				$runQuery1 = mysql_query($sqlCheck1);
				$ThisPos1 = mysql_fetch_array($runQuery1);
		
					$id = $ThisPos1['EmployeeID'];
					$psit = $ThisPos1['Position'];
					$fname = $ThisPos1['EmpFName'];						
					$mname = $ThisPos1['EmpMName'];
					$lname = $ThisPos1['EmpLName'];
					$gen =   $ThisPos1['Gender'];
					$bday2 = $ThisPos1['Birthday'];
					$addrs = $ThisPos1['Address'];
					$age = $ThisPos1['Age'];
					$uname = $ThisPos1['Username'];
					$upass = $ThisPos1['Password'];
					$apr = $ThisPos1['ApprovedBy'];


			
			}
			else
			{
				$sqlCheck1 = "SELECT * FROM studentprofiles WHERE ID = ".$_SESSION['ID'];
				$runQuery1 = mysql_query($sqlCheck1);
				$ThisPos1 = mysql_fetch_array($runQuery1);
		
					$id = $ThisPos1['ID'];
					$psit = $ThisPos1['Position'];
					$fname = $ThisPos1['FirstName'];						
					$mname = $ThisPos1['MiddleName'];
					$lname = $ThisPos1['LasttName'];
					$crse = $ThisPos1['Course'];
					$year1 = $ThisPos1['Year'];
					$addrs = $ThisPos1['Address'];
					$dtId = $ThisPos1['DateIssued'];
					$vald = $ThisPos1['ValidUpTp'];
					$uname = $ThisPos1['Username'];
					$upass = $ThisPos1['Password'];
					$apr = $ThisPos1['Creator'];
			}		

		?>

		<form method="POST">
        	<table>
        		<th></th>
        		<tbody>
        			<tr>
        			 	<td>
        				<?php echo($_SESSION['type']!= 'Student')?'<label>Employee ID:</label>': '<label>Student ID:</label>'  ?>
					    </td>  
        				<td><input id="txt1" style="background-image: url(user.png); background-size: 25px 25px;
					         background-position: 2px 5px;
					          background-repeat: no-repeat;
					         padding: 5px 5px 5px 30px; width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" type="text" name="ID"  value="<?php  echo $id;?>" readonly required="true"></td>
					      
        			</tr>

        			<tr>
<?php 
		if($_SESSION['type']!= 'Student')
		{


			echo'
        			
					         <td><label>Position:</label></td>
					        <td><input type = "text" style="cursor: pointer;
					         background-image: url(employee.png); 
					         background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" name="Position" value = "' .$psit. '" readonly>
					       </td>
						';
		}
		else
		{
			echo"
						<td><label>Position:</label></td>
        		
        			
				    	<td>	<input 
				    		 style='background-image: url(user.png); 
					         background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					        padding: 5px 5px 5px 30px;
					         cursor: not-allowed;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;'
				    		type=\"text\" class=\"form-control\" value=\"$psit\" name=\"Position\" readonly>
				    </td>";
		}
		?>	   
        			</tr>
        			<tr>
        				<td><label>Last Name:</label></td>
        				<td><input id="txt2" style="background-image: url(user.png); background-repeat: no-repeat; background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px; width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" pattern="[A-Z a-z+{}]{3,100}$" type="text" name="Lname" placeholder="Last Name" value="<?php  echo $lname;?>" readonly required=""></td>
        			</tr>
        			<tr>
        				<td><label>First Name:</label></td>
        				<td><input type="text" style="background-image: url(user.png); background-repeat: no-repeat; background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px; color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" pattern="[A-Z a-z+{}]{3,20}$" name="fName" placeholder="First Name" value="<?php  echo $fname;?>" readonly required=""></td>
        			</tr>
        			<tr>
        				<td><label>Middle Name:</label></td>
        				<td><input type="text" style="background-image: url(user.png); background-repeat: no-repeat; background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" name="mName" value="<?php  echo $mname;?>" readonly placeholder="Middle Name" required=""></td>
        			</tr>
<?php 
		if($_SESSION['type']== 'Student')
		{
?>
        			<tr>
        					<td><label>Course:</label></td>


						<div class="col-sm-6" class="form-control">          

						<td>	
						<input type ="text" style="background-size: 25px 25px;
						background-position: 2px 5px;
						padding: 5px 5px 5px 30px;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" class="form-control" name="Course" value ="<?php echo $crse;?>" >

						</td>
						</div>
					     
        			</tr>
        			<tr>
        				<td><label>Year:</label></td>
        				<td>
					      	<input type="text" style=" background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" name="Year" class="form-control" value="<?php  echo $year1;?>" >
					      	
					    </td>
        			</tr>
        <?php			
        		}
        ?>
      <!--   <option value="1"<?php echo ($region == '1') ? ' selected="selected"' : ''; ?>>MDU</option> -->
        			<tr>
        			<tr>
        					<td><label>Address:</label></td>
					       <td> 
					     <!--   <input
					         style="background-image: url(address.png); background-repeat: no-repeat; background-size: 25px 25px; background-position: 2px 5px; padding: 5px 5px 5px 30px;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" type="textarea" class="form-control" id="Address" name = "address" value="<?php  echo $addrs;?>" readonly > -->
					 <textarea
					         style="background-image: url(address.png); background-repeat: no-repeat; background-size: 25px 25px; background-position: 2px 5px; padding: 5px 5px 5px 30px;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;"  class="form-control" id="Address" name = "address" readonly><?php  echo $addrs;?></textarea>

					         </td>
					  
        			</tr>
         			
<?php 
		if($_SESSION['type']!= 'Student')
		{
?>		
		   
					<tr>
					
						<td><label>Gender:</label></td>
					     	<td><input name="sex" style="color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" id="Male" type="radio" required value="Male"<?php echo($gen == "Male")?'checked': '' ?> >Male
				     	
				     		<input name="sex" style="color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" id="Female" type="radio" required value="Female" <?php echo($gen == "Female")?'checked': ''?>  >Female
				     		</td>
				     
					</tr>
<?php
				}
?>

<?php 
		if($_SESSION['type']!= 'Student')
		{
			echo'
        			<tr>
				    	 <td><label>Birthday:</label> </td>
				    	 <td>      
					        <input
					         style="background-image: url(date.png); 
					        background-repeat: no-repeat;
					        background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;
					         color:gray; background-color: rgb(235,235,228); cursor: not-allowed;"
					         type="date" class="form-control" id="BDAY" name = "birthday"   onclick=" today_getDate();" onblur="age_compute();" value="' .$bday2. '" ></td> 
					      </div>
					      
					     <tr>
					     <td><label>Age:</label> </td>
					      <td>
					      	<input type="number" id="age" name="Age" placeholder="Age" class="form-control" value="' .$age. '"  readonly style="background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;"></td>
					     </tr>
				';
			}
			else
			{
				echo ' <tr>
        				<td><label>Date issued:</label></td>
        				<td><input type="date" style="background-image: url(date.png);background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px; color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" id="dteissued"  name="DateIssued" value ="' .$dtId. '" readonly></td>
        			</tr>
        			<tr>
        				<td><label>Valid up to:</label></td>
        				<td><input type="date" style="background-image: url(date.png); background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" name="Validity" value = "' .$vald. '"></td>
        			</tr>';
			}
				?>
        			</tr>
        			<tr>
        				<td><label>Username:</label></td>
        				<td><input type="text" style="background-image: url(user.png);  background-repeat: no-repeat;background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px; width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" pattern="[A-Z a-z+{}]{3,20}$" name="Uname" value="<?php  echo $uname;?>" readonly placeholder="Username"></td>
        			</tr>
        			<tr>
        				<td><label>Password:</label></td>
        				<td><input type="password" style="background-image: url(pass.png); background-repeat: no-repeat; background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px; width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" pattern="[A-Z a-z+{}]{3,20}$" name="Pword" value="<?php  echo $upass;?>" readonly placeholder="Password"
        				></td>
        			</tr>
        			<tr>
        				<td><label>Approved By:</label></td>
        				<td><input type="text" style="background-image: url(user.png); background-repeat: no-repeat;background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px; width: 300px; color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" pattern="[A-Z a-z+{}]{3,20}$" name="Authorized" placeholder=""
        					value="<?php  echo $apr;?>" readonly
        				></td>
        			</tr>

        	
        		</tbody>
        	</table>

    <!--     	 <select style="cursor: pointer;width: 300px;color:gray; background-color: rgb(235,235,228); cursor: not-allowed;"  name="Course" class="form-control" readonly>
<option value=""></option>
<option value="BS Computer Science"<?php if ($crse == 'BS Computer Science'){ echo 'selected="selected"';}?>>BS Computer Science </option>
<option value="BS Information Technology"<?php if($crse == 'BS Information Technology'){echo'selected="selected"'; }?>>BS Information Technology </option>
<option value="BS Computer Engineeriing"<?php if($crse == 'Computer Engineeriing'){ echo 'selected="selected"'; }  ?>>BS Computer Engineeriing </option>
</select> -->

        <!-- 	 <select name="Course" class="form-control" >

<option value="BS Computer Science"<?php if ($crse == 'BS Computer Science'){echo 'selected';}?>>BS Computer Science </option>
<option value="BS Information Technology"<?php if($crse == 'BS Information Technology'){echo'selected'; }?>>BS Information Technology </option>
<option value="BS Computer Engineeriing"<?php if($crse == 'Computer Engineeriing'){ echo 'selected'; }  ?>>BS Computer Engineeriing </option>
</select> -->

</body>
</html>