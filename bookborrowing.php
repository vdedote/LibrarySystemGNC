<?php 
	session_start();
	include("connecton.php");
	include("addbook.php");
	$ErrorMessage = "&nbsp";

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
		if (isset($_POST['BookID'])) 
			{
				$ExecuteFunction = AddBook();
					if ($ExecuteFunction != '') 
					{
						$ErrorMessage = $ExecuteFunction;
					}
			}

			if (isset($_POST['due'])) 
			{
				$ExecuteFunction = BorrowBook();
					if ($ExecuteFunction != '') 
					{
						$ErrorMessage = $ExecuteFunction;
					}
			}



	$Books = "SELECT * FROM books";
	$Get = mysql_query($Books);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
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
		            $(this).css("background-color", "#1a1a1a");
		        }   
    		});
    		 $("#menu5").on({
		        mouseenter: function(){
		            $(this).css("background-color", "#0d0d0d");
		        },  
		        mouseleave: function(){
		            $(this).css("background-color", " #000000");
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


		document.getElementById('dateborrowed').value = today;
		}
	</script>



	<!--  <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="LibrarianMenu.php">GNC LIBRARY</a>
			</div>

			<ul class="nav navbar-nav">
				
			</ul>

		</div>
	</nav> -->

	<div class="container-width" style="margin-top: 10px;">
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
						    						  cursor: pointer;" href="LogOut.php"><label style="padding-left: 15px; font-weight: normal;">Log Out</label></a></li>
	 						 </ul>
					</div>
							<!-- <div class="container-fluid" style="margin-top: 20px;">
			  <div class="row">
			    <div class="col-md-7" >
					    <h3>Books:</h3>
					    <table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Book ID</th>
						        <th>Book Title</th>
						        <th>Book Author</th>
						        <th>Date Published</th>
						        <th>Quantity</th>
						        <th>Remark/s:</th>
						      </tr>
						    </thead>
						    <?php
						while ($row = mysql_fetch_array($Get))
						{
					?>
							<tbody>
								<tr>
									<td style="cursor: pointer;" align="center"> <?php echo $row['BookID'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['BookTitle'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['BookAuthor'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['DatePublished'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['Quantity'];?></td>
									<td  style="cursor: pointer;" align="center"> <?php echo $row['Remarks'];?></td>
								</tr>
							</tbody>
					<?php  
						} 
					?>
						  </table> -->
			<!-- 		</div>
					<div class="col-md-2">
						<form method="POST">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					    		<input id="search" type="text" class="form-control" name="Position">
							</div>
						</form>
								<input style="background-image: url(addbook.png);
											  background-repeat: no-repeat;
											  background-size:25px 25px;
											  background-position: 5px;" type="Button" value="Add Book" data-toggle="modal" data-target="#AddBookModal" name="">
								<input style="background-image: url(trash1.png);
											  background-repeat: no-repeat;
											  background-size:25px 25px;
											  background-position: 0px 5px;
											  cursor: not-allowed;" type="Button" value="Delete Book" name="" disabled="true">
								<input style="background-image: url(book.png);
											  background-repeat: no-repeat;
											  background-size:25px 25px;
											  background-position: 0px 5px;
											  cursor: pointer;" type="Button" value="Borrow Book" data-toggle="modal" data-target="#BorrowBookModal" name="" >
					</div>
			</div>
		</div>

		<div class="container"> -->
  <!-- <h2>Modal Example</h2> -->
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
 <!--  <div class="modal fade" id="BorrowBookModal" role="dialog">
    <div class="modal-dialog"> -->
    
      <!-- Modal content-->
 <!--      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Borrow Book</h4>
        </div>
        <div class="modal-body"> -->
        	<form method="POST">
        	<table width="300px" border="1">
        		<table align="center" border="1" width="500px">
        		<th></th>
        		<tbody >
        		<table border="1" width="100px" align="center">
        			<tr>
        				<td> <?php echo $ErrorMessage;?></td>
        			</tr>
        			<tr>
        				<td><label>Student ID:</label></td>
        				<td><input id="txt1" style="padding: 5px 5px 5px 5px; width: 300px;" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" type="number" name="studentID" placeholder="Student ID" required="true"></td>
        			</tr>
        			<tr>
        				<td><label>Book Title:</label></td>
        				<td><input id="txt2" style="padding: 5px 5px 5px 5px; width: 300px;" pattern="[A-Z a-z+{}]{3,100}$" type="text" name="BookTitle" placeholder="Title" required=""></td>
        			</tr>
        		<!-- 	<tr>
        				<td><label>Book Author:</label></td>
        				<td><input type="text" style="padding: 5px 5px 5px 5px; width: 300px; " pattern="[A-Z a-z+{}]{3,20}$" name="BookAuthor" placeholder="Author" required=""></td>
        			</tr> -->
        			<tr>
        				<td><label>Date Borrowed:</label></td>
        				<td><input type="Date" style="padding: 5px 5px 5px 5px; "  id= "dateborrowed" name="dateborrowed" placeholder="Date borrowed" readonly required=""></td>
        			</tr>
        			<tr>
        				<td><label>Due:</label></td>
        				<td><input type="date" style="padding: 5px 5px 5px 5px; width: 300px; " pattern="[A-Z a-z+{}]{3,20}$" id="due" name="due" placeholder="Due" required=""></td>
        			</tr>
        			<tr>
        				<td><label>Remarks:</label></td>
        				<td><input type="text" style="padding: 5px 5px 5px 5px; width: 300px;" pattern="[A-Z a-z+{}]{3,20}$" name="Remarks" placeholder="Remark"></td>
        			</tr>
        			<tr>
        				<td></td>
        				<td>
        				<input style="background-color: #262626;
    								  width:100px;
    								  height: 40px;
    								  color: white;
    								  margin-top: 3px;"	 type="Submit" value="Borrow Book" name="">
        			<!-- 	<input style="background-color: #262626;
    								  width:100px;
    								  height: 40px;
    								  color: white;
    								  margin-top: 3px;" type="Reset" value="Clear" name=""> -->
        				</td>
        			</tr>
        		</tbody>
        		</table
        		>
        		</table>
        	</table>
		          
		        
        	</form>
        <!-- </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div> -->

 <!-- Modal -->
<!--   <div class="modal fade" id="AddBookModal" role="dialog">
    <div class="modal-dialog"> -->
    
      <!-- Modal content-->
      <!-- <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add A New Book</h4>
        </div>
        <div class="modal-body">
        	<form method="POST">
        	<table>
        		<th></th>
        		<tbody>
        			<tr>
        				<td><label>Book ID:</label></td>
        				<td><input id="txt1" style="padding: 5px 5px 5px 5px; width: 300px;" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" type="text" name="BookID" placeholder="Book ID" required="true"></td>
        			</tr>
        			<tr>
        				<td><label>Book Title:</label></td>
        				<td><input id="txt2" style="padding: 5px 5px 5px 5px; width: 300px;" pattern="[A-Z a-z+{}]{3,100}$" type="text" name="BookTitle" placeholder="Title" required=""></td>
        			</tr>
        			<tr>
        				<td><label>Book Author:</label></td>
        				<td><input type="text" style="padding: 5px 5px 5px 5px; width: 300px; " pattern="[A-Z a-z+{}]{3,20}$" name="BookAuthor" placeholder="Author" required=""></td>
        			</tr>
        			<tr>
        				<td><label>Date Published:</label></td>
        				<td><input type="Date" style="padding: 5px 5px 5px 5px; " name="Dpublished" placeholder="Date Published" required=""></td>
        			</tr>
        			<tr>
        				<td><label>Quantity:</label></td>
        				<td><input type="number" style="padding: 5px 5px 5px 5px; width: 300px; " pattern="[A-Z a-z+{}]{3,20}$" name="Quantity" placeholder="Quantity" required=""></td>
        			</tr>
        			<tr>
        				<td><label>Remarks:</label></td>
        				<td><input type="text" style="padding: 5px 5px 5px 5px; width: 300px;" pattern="[A-Z a-z+{}]{3,20}$" name="Remarks" placeholder="Remark"></td>
        			</tr>
        			<tr>
        				<td></td>
        				<td>
        				<input style="background-color: #262626;
    								  width:100px;
    								  height: 40px;
    								  color: white;
    								  margin-top: 3px;"	 type="Submit" value="Add Book" name="">
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
  
</div> -->
</body>
</html>