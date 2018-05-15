<?php 
	session_start();
		include("ADDsql.php");
		$ErrorMessage = "&nbsp";

		if (!isset($_SESSION['ID']))
		{
			header('Location:LoginPage.php');
			// echo $_SESSION['ID'];	
		}

			if (isset($_POST['stdntID'])) 
			{
				$ExecuteFunction = AddStudent();
					if ($ExecuteFunction != '') 
					{
						$ErrorMessage = $ExecuteFunction;
					}
			}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="AddForm.css">
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
				<li  style="border-left:1px solid #bbb; font-size: 15px;"><a href="LibrarianMenu.php">HOME</a></li>
				<li class="dropdown active" style=" font-size: 15px;">
					<a class="dropdown-toggle" data-toggle ="dropdown" href="#">ADD ACCOUNT <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="active"><a style="background-image: url(add.png);
									background-repeat: no-repeat;
									background-size: 25px 25px;
									cursor: pointer;
									/*background-position: 5px 0px 3px 5px;*/ " href="AddForm.php"><label style="padding-left: 4px;">New Student account</label></a></li>
									<li class="divider"></li>
						<li ><a style="background-image: url(add.png);
									background-repeat: no-repeat;
									background-size: 25px 25px;
									cursor: pointer;
									/*background-position: 5px 0px 3px 5px;*/" href="EmpAddForm.php"><label style="padding-left: 4px;">New Employee account</label></a></li>
					</ul>
				</li>
				<!-- <li style="border-left:1px solid #bbb;"><a href="#">WELCOME!</a></li> -->
				<!-- <li style="border-right: 1px solid #bbb;"><a href="#">Option1</a></li>
				<li style="border-right: 1px solid #bbb;"><a href="#">Option2</a></li> --> 
			</ul>
		</div>
	</nav

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>
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


		<div class="container-fluid" style="margin-top: 80px;">
					<div class="row">
						<div class="col-md-1"></div>
					    <div class="col-md-4" style="background-color:lavender;">
					    	<h3>Registration Form: (Student)</h3>
					    </div>
					</div>
				</div>

		<div class="container-fluid">
			  <div class="row">
			  	<div class="col-md-1"></div>
			    <div class="col-md-4" style="background-color:lavender;">
				    <form class="form-horizontal" method="POST">
				    
				    <div class="form-group">
				     
					      <div class="col-sm-12">
					        <input
					         style="background-image: url(id.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
					         type="number" class="form-control" id="StudentID" name ="stdntID" placeholder="Student ID"
					        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" required>
					      </div>
				    </div>

				    <div class="form-group">
				    	<div class="col-sm-6">
				    		<input 
				    		 style="background-image: url(user.png); 
					         background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;
					         cursor: not-allowed;"
				    		type="text" class="form-control" value="Student" name="Position" readonly>
				    	</div>
				    </div>
				    
				    <div class="form-group">
				     
					      <div class="col-sm-12">        
					        <input 
					        style="background-image: url(user.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
					        type="text" class="form-control" id="Lname" pattern="[A-Z a-z+{}]{3,20}" title="NO SPECIAL CHARACTERS and NUMBERS" name="lastName" placeholder="Enter Last Name">
					      </div>
				    </div>

				    <div class="form-group">
				     
					      <div class="col-sm-12">          
					        <input
					         style="background-image: url(user.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
					         type="text" class="form-control" id="Fname" pattern="[A-Z a-z+{}]{3,20}" title="NO SPECIAL CHARACTERS and NUMBERS" name = "firstName" placeholder="Enter First Name">
					      </div>
				    </div>

				     <div class="form-group">
				     
					      <div class="col-sm-12">          
					        <input
					         style="background-image: url(user.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
					         type="text" class="form-control" id="Mname" pattern="[A-Z a-z+{}]{3,20}" title="NO SPECIAL CHARACTERS and NUMBERS" name = "middleName" placeholder="Enter Middle Name">
					      </div>
				    </div>

				    <div class="form-group">
				     
					      <div class="col-sm-6" class="form-control">          
					         <!-- <input type="text" class="form-control" id="Course" placeholder="-Course-"> -->
					         <select style="cursor: pointer;"  name="Course" class="form-control">
								<option name=BSCS>BS Computer Science </option>
								<option name=BSIT>BS Information Technology </option>
								<option name=CPE>BS Computer Engineeriing</option>
							</select> 
					      </div>
					      <div class="col-sm-6">
					      	<!-- <input type="text" class="form-control" id="Year" placeholder="-Year-"> -->
					      	<select style="cursor: pointer;" name="Year" class="form-control">
					      		<option name=first>First Year</option>
					      		<option name=second>Second Year</option>
					      		<option name=third>Third Year</option>
					      		<option name=fourth>Fourth Year</option>
					      	</select>
					      </div>
				    </div>

				    <div class="form-group">
				     
					      <div class="col-sm-12">          
					        <input
					         style="background-image: url(address.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
					         type="textarea" class="form-control" id="Address" name = "address" placeholder="Enter Address">
					      </div>
				    </div>

				    <div class="form-group">
				     	<div class="col-sm-6">
				     		<p>Date Issued:</p>
				     	</div>
				     	<div class="col-sm-6">
				     		<p>Valid up to:</p>
				     	</div>
					      <div class="col-sm-6">          
					        <input
					         style="background-image: url(date.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;
					         cursor: not-allowed;"
					         type="date" class="form-control" id="dteissued" name = "DateIssued" placeholder="-Date Issued-" readonly>
					      </div>


					      <div class="col-sm-6">          
					        <input
					         style="background-image: url(date.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
					         type="date" class="form-control" id="validUpto" name = "Validity" placeholder="-Valid Up To-">
					      </div>
				    </div>

				    <div class="form-group">
				    	<div class="col-sm-12">
				    		<input
				    		 style="background-image: url(user.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
				    		 type="text" name="Uname" class = "form-control" placeholder="Enter Username">
				    	</div>
				    </div>

				    <div class="form-group">
				    	<div class="col-sm-12">
				    		<input
				    		 style="background-image: url(pass.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
				    		 type="Password" name="Pword" class = "form-control"  placeholder="Enter Password">
				    	</div>
				    </div>

				    <div class="form-group">
				    	<div class="col-sm-12">
				    		<h4>Approved By:</h4>
				    	</div>
				     	<div class="col-sm-12">
					     <input type="text" class="form-control" id="SignedBy" name="Authorized" placeholder="-Signed by-" 
					     <?php
					     	echo(" readonly = \"true\" value = \"".$FirstName.$Space.$LastName."\"");
					     ?>

					     >
					    </div>
				    </div>

				    <div class="form-group">        
				      <div class="col-sm-2">
				        <input type="Submit" name="">
				      </div>
				      <div class="col-md-1"></div>
				      <div class="col-sm-2">
				      	<input type="Reset" value="Reset" name="">
				      </div>
				      <div class="col-md-1"></div>
				      <div class="col-sm-2">
				      	<input type="Button" value="Return" onclick="location.href='LibrarianMenu.php';" name="">
				      </div>
				    </div>

				  </form>
			    </div>

			  <!--  <div class="col-md-4">
			   		<img src="Library.jpg"  class="img-rounded" style="width:50%;">

			   		
			   </div>

			   <div class="col-md-3">
			   		<img src="Admin.jpg"  class="img-rounded" style="width:50%;">
			   </div> -->

</body>
</html>