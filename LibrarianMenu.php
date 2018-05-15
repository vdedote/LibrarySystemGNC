<?php 
	session_start();
	include("connecton.php");

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

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>GNC Library</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="LibrarianMenu.css">
	<script src = "jquery-3.1.1.min"></script>
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
		            $(this).css("background-color", "#1a1a1a");
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
    		$("#panel8").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#333333");
		        }   
    		});
    		$("#panel9").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", "#333333");
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
		    		$("#panel8").slideUp("slow");
		    		$("#panel9").slideUp("slow");

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
		    	$("#panel3").click(function()
		    	{
		    		$("#panel8").slideToggle("slow");
		    		$("#panel9").slideToggle("slow");
		    	});
});
	</script>

		<script>
		$(document).ready(function()
		{
    		$("#ReportsButton").click(function()
    		{
        		$("#myReports").modal();
    		});
		});
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
						
					</li>
					
			</ul>


		</div>
	</nav>
			</div>
 <div class="container-width" style="margin-top: 50px;">
				<div class="row">
					<div class="col-md-3">
						  	<ul style="background-color: #1a1a1a; color:white; height:900px; " class="nav nav-pills nav-stacked nav-stacked-fixed-top">
						  	<li><a id="welcome" style="background-color: #000000;
						    						  background-image: url(myprofile.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;" href=""><label style="padding-left: 23px; font-weight: normal;">Welcome, 
						    						  <?php if($user['Position']=='Student'):
						    						  echo $user['FirstName'];
						    						  else:echo $user['EmpFName']; endif?>!</a></label></li>
						    <li><a id="home" style="background-color: #1a1a1a; color:white;background-image: url(home.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;" href="LibrarianMenu.php"><label style="padding-left: 20px; font-weight: normal;">Home</label></a></li>
						     
						<?php
							 if (($user['Position'] == 'Librarian')||($user['Position'] == 'Library Clerk'))
							 echo "<li>
							      <a id='menu5' style='background-color: #1a1a1a; color:white;' class='dropdown-toggle' data-toggle='dropdown' href='#'>Books<span class='caret'></span></a>
							    </li>
							    <li>
							    	<a id='panel6' style='background-color:#262626;
							    						  background-image: url(book.png);
							    						  background-position: 5px ;
														  background-size: 28px 28px;
							    						  background-repeat: no-repeat;
							    						  color:white;
							    						  cursor: pointer;
							    						  display: none; 
							    						  'href='BookInventory.php'><label style='padding-left: 20px; font-weight: normal;'>Book Inventory</label></a>
							    </li>
							    <li>
							    	<a id='panel7' style='background-color:#262626;
							    						  background-image: url(book.png);
							    						  background-position: 5px ;
														  background-size: 28px 28px;
							    						  background-repeat: no-repeat;
							    						  color:white;
							    						  cursor: pointer;
							    						  display: none; 
							    						  'href='BorrowedBooks.php'><label style='padding-left: 20px; font-weight: normal;''>Borrowed Books</label></a>
							    </li>";
						?>

	
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
			    <div class="col-md-6">
				    <div class="jumbotron">
					    <h2>Guagua National Colleges Library</h2> 
					    <p>is a collection of sources of information and similar resources, made accessible to a defined community for reference or borrowing.It provides physical or digital access to material, and may be a physical building or room, or a virtual space, or both.</p> 
					</div>
			    </div>
			    <div class="col-md-2">
			    	<input type="Button" value="Daily Reports" id="ReportsButton">
			    </div>
			    <!-- style="background-color:lavender;" -->

		

			    <?php
			    
			    	$Today = date('Y-m-d');

			    	$GetDue = "SELECT * FROM borrowbook WHERE Due = '$Today'";
			    	$result = mysql_query($GetDue);
			    	
			    ?>

			    <div class="col-md-6" >
					   <h3>Books:</h3>
					   <label>Due Today</label>
					    <table class="table table-hover" id="myTable">
						    <thead>
						      <tr>
						        <th>Student ID</th>
						        <th>Transaction Code:</th>
						        <th>Book Title</th>
						        <th>Date Borrowed</th>
						        <th>Due Date</th>
						        <th>Remark/s:</th>
						      </tr>
						    </thead>
						    <?php
							 while ($row = mysql_fetch_array($result))
							{
							?>
							<tbody>
								<tr>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['StudentID'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['TransacCode'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['BookTitle'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['DateBorrowed'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['Due'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['Remarks'];?></td>
								</tr>
							</tbody>
					<?php  
						} 
					?>
						  </table>
					</div>
			</div>
		</div>

		<div class="container">
		  	<!-- Trigger the modal with a button -->
		  <!-- <button type="button" class="btn btn-default btn-lg" id="myLoginBtn">Login</button> -->

		  <!-- Modal -->
		  <div class="modal fade" id="myReports" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4>Daily Reports <?php $Mydate = date('m-d-Y'); echo "$Mydate";?></h4>
		        </div>
		        <div class="modal-body" style="padding:40px 50px;">
		        <table>
		        	<tbody>
		        		<tr>
		        			<td><label>Number of Registered Students</label></td>
		        			<td>:</td>
		        			<td><?php 
		        			$countStudents = "SELECT COUNT(*) AS total FROM studentprofiles";
		        			$GetStuds = mysql_query($countStudents);
		        			$data = mysql_fetch_assoc($GetStuds);
		        			echo $data['total']; 

		        			?></td>
		        		</tr>
		        		<tr>
		        			<td><label>Number of Books Stored</label></td>
		        			<td>:</td>
		        			<td><?php 
		        			$countBooks = "SELECT COUNT(*) AS total FROM books";
		        			$GetBooks = mysql_query($countBooks);
		        			$data = mysql_fetch_assoc($GetBooks);
		        			echo $data['total']; 

		        			?></td>
		        		</tr>
		        		<tr>
		        			<td><label>Number of Books Borrowed</label></td>
		        			<td>:</td>
		        			<td><?php 
		        			$countBorrowed = "SELECT COUNT(*) AS total FROM borrowbook";
		        			$GetBorrow = mysql_query($countBorrowed);
		        			$data = mysql_fetch_assoc($GetBorrow);
		        			echo $data['total']; 

		        			?></td>
		        		</tr>
		        		<tr>
		        			<td><label>Total Number of Books Returned</label></td>
		        			<td>:</td>
		        			<td><?php 
		        			$countReturn = "SELECT COUNT(*) AS total FROM historyborrow";
		        			$GetReturn = mysql_query($countReturn);
		        			$data = mysql_fetch_assoc($GetReturn);
		        			echo $data['total']; 

		        			?></td>
		        		</tr>
		        	</tbody>
		        </table>
		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Exit</button>
		        </div>
		      </div>
		      
		    </div>
		  </div> 
		</div>
			     
		<!-- <footer style=" color: white; background-color:#1a1a1a; ">de Dote:Library System Inc.</footer>	 -->     
</body>
</html>