<?php 
	session_start();
	include("ValidateLogin.php");
		$ErrorMessage = "&nbsp";
		$DisplayNotif = "&nbsp";

		
		if (isset($_SESSION['ID'])) 
		{		
				$sqlCheck = "SELECT * FROM studentprofiles WHERE ID = ".$_SESSION['ID'];
				$runQuery = mysql_query($sqlCheck);
			
				$ThisPos = mysql_fetch_array($runQuery);
			
				if ($ThisPos['Position'] == 'Student') 
				{
					echo '<script> window.location.href="StudentMenu.php";</script>';
				}
			
				$sqlCheck1 = "SELECT * FROM employees WHERE EmployeeID = ".$_SESSION['ID'];
				$runQuery1 = mysql_query($sqlCheck1);
				$ThisPos1 = mysql_fetch_array($runQuery1);
			
				if ($ThisPos1['Position'] == 'Librarian') 
				{
					echo '<script> window.location.href="LibrarianMenu.php"</script>';
				}
				
				if ($ThisPos1['Position'] == 'Library Clerk')
				{
					echo '<script> window.location.href="ClerkMenu.php"</script>';
				}
			

	
		}

		if (isset($_POST['Lusername']))
		{
			$Execute = LogUser();
			if ($Execute != '') 
			{
				$ErrorMessage = $Execute;
			}
		}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="LoginPage.css">
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

	 <style>
  		.modal-header, h4 
  		{
	      background-color: #262626;
	      color:white !important;
	      text-align: center;
	      font-size: 25px;
  		}
  		.modal-footer
  		{
      		background-color: #f9f9f9;
  		}
  		#NotifForFail
  		{
  			margin-top: 10%;
  		}
  	</style>

	<script>
		$(document).ready(function()
		{
    		$("#myLoginBtn").click(function()
    		{
        		$("#myModal").modal();
    		});
		});
	</script>
	<script>
		$(document).ready(function()
		{
    		$("#AboutUsBtn").click(function()
    		{
        		$("#myModalContact").modal();
    		});
		});
	</script>
	<script>
		$(document).ready(function()
		{
    		$("#AboutGnc").click(function()
    		{
        		$("#myModalGNC").modal();
    		});
		});
	</script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Guagua National Colleges</a>
			</div>
				<ul class="nav navbar-nav">
				
				</ul>
						
		</div>
	</nav>

			<?php	
				if ($ErrorMessage<>"&nbsp") 
				{
					 echo "<div class='container-fluid'>

						  <div class='row'>
						    <div class='col-sm-4'></div>
							    <div id='NotifForFail' class='col-md-4'>
							    		<div class='alert alert-danger alert-dismissable fade in'>
					    					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    					<strong>Notice:</strong>Incorrect Username or Password.
					  					</div>
							    </div>
						    <div class='col-sm-4'></div>
						  </div>
						</div>";
				}
			?>		

	<div id="LogInBorder">
	<!-- <br> -->
		<!-- <?php if($ErrorMessage<>"&nbsp") {echo"<label style = 'color:red; border-bottom: 2px solid red;'>".$ErrorMessage."</label>";} ?> -->
					<input align="center" type="Button" value="LogIn"  id="myLoginBtn" >
					<br>
					<input  type="Button"  value="Sign Up">
					<br>
					<input 	type="Button" name="" value="About GNC" id="AboutGnc">
					<br>
					<input 	type="Button" name="" value="Contact Us" id="AboutUsBtn">
	</div>

		<div class="container">
		  	<!-- Trigger the modal with a button -->
		  <!-- <button type="button" class="btn btn-default btn-lg" id="myLoginBtn">Login</button> -->

		  <!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4>Enter Username & Password</h4>
		        </div>
		        <div class="modal-body" style="padding:40px 50px;">
		          <form role="form" method="POST">
		            <div class="form-group">
		              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
		              <input type="text" class="form-control" id="usrname" placeholder="Enter Username" name="Lusername">
		            </div>
		            <div class="form-group">
		              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
		              <input type="password" class="form-control" id="psw" placeholder="Enter Password" name="Lpassword">
		            </div>
		              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
		          </form>
		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Exit</button>
		        </div>
		      </div>
		      
		    </div>
		  </div> 
		</div>


		<div class="container">
		  	<!-- Trigger the modal with a button -->
		  <!-- <button type="button" class="btn btn-default btn-lg" id="myLoginBtn">Login</button> -->

		  <!-- Modal -->
		  <div class="modal fade" id="myModalContact" role="dialog">
		    <div class="modal-dialog modal-sm">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4>Contact Us</h4>
		        </div>
		        <div class="modal-body" style="padding:40px 50px;">
		          	<label>Developers:</label>
		          	<br>
		          	<label>Gwendel Von C. de Dote</label>
		          	<br>
		          	<label>Mara Theresa G. Morales</label>
		          	<br>
		          	<label>Jhervy Chester L. Morales</label>
		          	<br>
		          	<label>Ivan Louisse Lapid</label>
		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Exit</button>
		        </div>
		      </div>
		      
		    </div>
		  </div> 
		</div>

		<div class="container">
		  	<!-- Trigger the modal with a button -->
		  <!-- <button type="button" class="btn btn-default btn-lg" id="myLoginBtn">Login</button> -->

		  <!-- Modal -->
		  <div class="modal fade" id="myModalGNC" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4>Guagua National Colleges</h4>
		        </div>
		        <div class="modal-body" style="padding:40px 50px;">
		          	<label>ay isang kolehiyong paaralan na matatagpuan sa Guagua, Pampanga, Pilipinas. <br>
					Ito ay itinatag noong 1918 at kasalukuyang pinamumunuan ni Ret.Brig.Gen. Ret.Brig.Gen. Rafael D. Goseco</label>
		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Exit</button>
		        </div>
		      </div>
		      
		    </div>
		  </div> 
		</div>


</body>
</html>