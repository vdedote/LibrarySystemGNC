<?php 
	session_start();
	include("connecton.php");
	include("ADDsql.php");
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

		if (isset($_POST['stdntID'])) 
			{
				$ExecuteFunction = AddStudent();
					if ($ExecuteFunction != '') 
					{
						$ErrorMessage = $ExecuteFunction;
					}
			}

		$ListAccount = "SELECT * FROM studentprofiles";
		$Get = mysql_query($ListAccount);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student's List</title>
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
</head>
<body onload="SetDate();">
	<script type="text/javascript">
		function SetDate()
		{
		var date = new Date();

		var day = date.getDate();
		var month = date.getMonth() + 1;
		var year = date.getFullYear();

		if (month < 10) month = "0" + month;
		if (day < 10) day = "0" + day;

		var today = year + "-" + month + "-" + day;


		document.getElementById('dteissued').value = today;
		}
	</script>
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
						      <a id="menu5" style="background-color: #1a1a1a; color:white;" class="dropdown-toggle" data-toggle="dropdown" href="#">Books<span class="caret"></span></a>
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
						    						  " href="editProfile.php"><label style="padding-left: 16px; font-weight: normal;">Edit Profile</label><span class="caret"></span> </a>
						    </li>
						     <li>
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
						    </li>

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
						    						  cursor: pointer;" href="LogOut.php"><label style="padding-left: 15px; font-weight: normal;">Log Out</label>
						   </a></li>
						
	 						 </ul>
					</div>
		<div class="container-fluid" style="margin-top: 20px;">
			  <div class="row">
			    <div class="col-md-6" >
					    <h3>Student's Account:</h3>
					    <table class="table table-hover">
					<thead>
						<tr>
							<th align="center">Student ID</th>
							<th align="center">Last Name</th>
							<th align="center">First Name</th>
							<th align="center">Middle Name</th>
							<th align="center">Course</th>
							<th align="center">Year</th>
							<th align="center">Address</th>
						</tr>
					</thead>
					<?php
						while ($row = mysql_fetch_array($Get))
						{
					?>
							<tbody>
								<tr>
									<td style="cursor: pointer;" align="center"> <?php echo $row['ID'];?></td>
									<td style="cursor: pointer;" align="center"> <?php echo $row['LasttName'];?></td>
									<td style="cursor: pointer;" align="center"> <?php echo $row['FirstName'];?></td>
									<td style="cursor: pointer;" align="center"> <?php echo $row['MiddleName'];?></td>
									<td style="cursor: pointer;" align="center"> <?php echo $row['Course'];?></td>
									<td style="cursor: pointer;" align="center"> <?php echo $row['Year'];?></td>
									<td style="cursor: pointer;" align="center"> <?php echo $row['Address'];?> </td>
								</tr>
							</tbody>
					<?php  
						} 
					?>
				</table>
					</div>
					<div class="col-md-3">
						<form method="POST">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					    		<input id="search" type="text" class="form-control" name="Position">

							</div>

					    		<input style="background-image: url(employee.png);
											  background-repeat: no-repeat;
											  background-size:25px 25px;
											  background-position: 5px;" type="Button" value="Add Student" data-toggle="modal" data-target="#AddBookModal" name="">
						</form>
					</div>
			</div>
		</div>

		<?php
		if (isset($_SESSION['ID'])) 
		{
			$sqlCheck1 = "SELECT * FROM employees WHERE EmployeeID = ".$_SESSION['ID'];
				$runQuery1 = mysql_query($sqlCheck1);
				$ThisPos1 = mysql_fetch_array($runQuery1);
				$FirstName = $ThisPos1['EmpFName'];
				$Space = " ";
				$LastName = $ThisPos1['EmpLName'];
		}

		?>

		 <!-- Modal -->
  <div class="modal fade" id="AddBookModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Student</h4>
        </div>
        <div class="modal-body">
        	<form method="POST">
        	<table>
        		<th></th>
        		<tbody>
        			<tr>
        				<td><label>Student ID:</label></td>
        				<td><input id="txt1" style="background-image: url(user.png); 
					         background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;
					         cursor: not-allowed;width: 300px;" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" type="text" name="stdntID" placeholder="Student ID" required="true"></td>
        			</tr>
        			<tr>
        				<td></td>
        		
        					    <div class="form-group">
				    	<div class="col-sm-6">
				    	<td>	<input 
				    		 style="background-image: url(user.png); 
					         background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					        padding: 5px 5px 5px 30px;
					         cursor: not-allowed;width: 300px;"
				    		type="text" class="form-control" value="Student" name="Position" readonly>
				    </td>	</div>
				    </div>

        				
        			</tr>
        			<tr>
        				<td><label>Last Name:</label></td>
        				<td><input id="txt2"  style="background-image: url(user.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;" pattern="[A-Z a-z+{}]{3,100}$" type="text" name="lastName" placeholder="Last Name" required=""></td>
        			</tr>
        			<tr>
        				<td><label>First Name:</label></td>
        				<td><input type="text" style="background-image: url(user.png);background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					        padding: 5px 5px 5px 30px;width: 300px;" pattern="[A-Z a-z+{}]{3,20}$" name="firstName" placeholder="First Name" required=""></td>
        			</tr>
        			<tr>
        				<td><label>Middle Name:</label></td>
        				<td><input type="text" style="background-image: url(user.png);background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;" name="middleName" placeholder="Middle Name" required=""></td>
        			</tr>
        			<tr>
        				<td><label>Course:</label></td>

				     
					      <div class="col-sm-6" class="form-control">          
					   
					       <td>	  <select style="cursor: pointer;width: 300px;"  name="Course" class="form-control">
							<option name=BSCS>BS Computer Science </option>
								<option name=BSIT>BS Information Technology </option>
								<option name=CPE>BS Computer Engineeriing</option>
							</select> </td>
					      </div>
					     
				    </div>
</td>
        			</tr>
        			<tr>
        				<td><label>Year:</label></td>
        				<td>
        				
					      	<select style="cursor: pointer;" name="Year" class="form-control">
					      		<option name=first>First Year</option>
					      		<option name=second>Second Year</option>
					      		<option name=third>Third Year</option>
					      		<option name=fourth>Fourth Year</option>
					      	</select>
					      </div>
					    </td>
        			</tr>
        			<tr>
        				
        				<td><label>Address:</label></td>
					       <td> <input
					         style="background-image: url(address.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					        padding: 5px 5px 5px 30px;width: 300px;"
					         type="textarea" class="form-control" id="Address" name = "address" pattern="[A-Z a-z+{}]{3,20}$" placeholder="Address"></td>
					        
        			</tr>
        			<tr>
        				<td><label>Date issued:</label></td>
        				<td><input type="date" style="background-image: url(date.png);background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px; color:gray; background-color: rgb(235,235,228); cursor: not-allowed;" id="dteissued"  name="DateIssued" placeholder="Date Issued" readonly></td>
        			</tr>
        			<tr>
        				<td><label>Valid up to:</label></td>
        				<td><input type="date" style="background-image: url(date.png); background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;" name="Validity" placeholder="Valid"></td>
        			</tr>
        			<tr>
        				<td><label>Username:</label></td>
        				<td><input type="text" style="background-image: url(user.png); background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;" pattern="[A-Z a-z+{}]{3,20}$" name="Uname" placeholder="Username"></td>
        			</tr>
        			<tr>
        				<td><label>Password:</label></td>
        				<td><input type="password" style="background-image: url(pass.png);background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px;width: 300px;" pattern="[A-Z a-z+{}]{3,20}$" name="Pword" placeholder="Password"
        				></td>
        			</tr>
        			<tr>
        				<td><label>Approve:</label></td>
        				<td><input type="text" style="background-image: url(user.png); background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 5px 5px 5px 30px; color:gray; background-color: rgb(235,235,228); cursor: not-allowed;width: 300px;" pattern="[A-Z a-z+{}]{3,20}$" name="Authorized" placeholder=""
        					 <?php
					     	echo(" readonly = \"true\" value = \"".$FirstName.$Space.$LastName."\"");
					     ?>
        				></td>
        			</tr>

        			<tr>
        				<td></td>
        				<td>
        				<input style="background-color: #262626;
    								  width:100px;
    								  height: 40px;
    								  color: white;
    								  margin-top: 3px;"	 type="Submit" value="Add Student" name="">
        				<input style="background-color: #262626;
    								  width:100px;
    								  height: 40px;
    								  color: white;
    								  margin-top: 3px;" type="Reset" value="Clear" name="">
        				</td>
        			</tr>
        		</tbody>
        	</table>
		          
		        
        	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>