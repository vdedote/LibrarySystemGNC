<?php
session_start();
		include("ADDsql.php");
		$ErrorMessage = "&nbsp";

		if (!isset($_SESSION['ID']))
		{
			header('Location:LoginPage.php');
			// echo $_SESSION['ID'];	
		}

			if (isset($_POST['empID'])) 
			{
				$ExecuteFunction = AddEmployee();
					if ($ExecuteFunction != '') 
					{
						$ErrorMessage = $ExecuteFunction;
					}
			}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="EmpAddForm.css">

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
			
			var age = today_y - bdate_y;
    		if (((today_m - bdate_m) < 0) || ((today_m - bdate_m) == 0 && today_d < bdate_d))
    			age = age -1;

			var txtAge = document.getElementById("age");
			txtAge.value = age;
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
				<li  style="border-left:1px solid #bbb; font-size: 15px;"><a href="LibrarianMenu.php">HOME</a></li>
				<li class="dropdown active" style=" font-size: 15px;">
					<a class="dropdown-toggle" data-toggle ="dropdown" href="#">ADD ACCOUNT <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a style="background-image: url(add.png);
									background-repeat: no-repeat;
									background-size: 25px 25px;
									cursor: pointer;
									/*background-position: 5px 0px 3px 5px;*/ " href="AddForm.php"><label style="padding-left: 4px;">New Student account</label></a></li>
									<li class="divider"></li>
						<li class="active"><a style="background-image: url(add.png);
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
	</nav>

	<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>
			</div>
		</div>

		<div class="container-fluid" style="margin-top: 80px;">
					<div class="row">
						<div class="col-md-1"></div>
					    <div class="col-md-4" style="background-color:lavender;">
					    	<h3>Registration Form: (Employee)</h3>
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
					         type="number" class="form-control" id="employeeid" name ="empID" placeholder="Employee ID"
					        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" required>
					      </div>
				    </div>

				    <div class="form-group">
					      <div class="col-sm-6" class="form-control">          
					         <!-- <input type="text" class="form-control" id="Course" placeholder="-Course-"> -->
					         <select style="cursor: pointer;
					         background-image: url(employee.png); 
					         background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 5px 25px;" name="Position" class="form-control">
								<option name=LC>Library Clerk</option>
								<option name=tchr>Teacher</option>
								<option name=CPE>Librarian</option>
							</select> 
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
					        type="text" class="form-control" id="Lname" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" title="NO SPECIAL CHARACTERS and NUMBERS" name="Lname" placeholder="Enter Last Name">
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
					         type="text" class="form-control" id="Fname" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" title="NO SPECIAL CHARACTERS and NUMBERS" name = "fName" placeholder="Enter First Name">
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
					         type="text" class="form-control" id="Mname" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" title="NO SPECIAL CHARACTERS and NUMBERS" name = "mName" placeholder="Enter Middle Name">
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
				     	<div class="col-sm-4">
					     	<label>Gender:</label>
					     	<input name="sex" id="Male" type="radio" value="Male" name="sex" required>Male
				     	</div>

				     	<div class="col-sm-4">
				     		<input name="sex" id="Female" type="radio" value="Female" name="sex" required>Female
				     	</div>
				    </div>

				    <div class="form-group">
				    	 <div class="col-sm-6">          
					        <input
					         style="background-image: url(date.png); 
					        background-repeat: no-repeat;
					         background-size: 25px 25px;
					         background-position: 2px 5px;
					         padding: 10px 5px 10px 30px;"
					         type="date" class="form-control" id="BDAY" name = "birthday">
					      </div>
					      <div class="col-sm-6">
					      	<input type="number" id="age" name="Age" placeholder="Age" class="form-control">
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
				    		 type="text" name="Uname" class = "form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" placeholder="Enter Username">
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
				    		 type="Password" name="Pword" class = "form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$"  placeholder="Enter Password">
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

</body>
</html>