<?php 
	session_start();
	include("connecton.php");
	include("addbook.php");
	$ShowNotif = "&nbsp";

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



			$Books = "SELECT * FROM borrowbook";
			$Get = mysql_query($Books);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Borrowed Books</title>
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

	<script src= "https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
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
		♣            $(this).css("background-color", "#1a1a1a");
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


		<div class="container-fluid" style="margin-top: 20px;">
			  <div class="row">
			    <div class="col-md-7" >
					    <h3>Borrowed Books:</h3>

						<table id="myTable" class="table"  cellspacing="0" width="100%">	
						    <thead>
						      <tr>
						      	<th>Student ID</th>
						      	<th>CODE</th>
						        <th>Book Title</th>
						        <th>Date Borrowed</th>
						        <th>Due:</th>
						        <th>Remark/s:</th>

						      </tr>


						    </thead>

						 <?php
							    
						while ($row = mysql_fetch_array($Get))
						{
					?>
							<tbody>
								<tr>
									<td align="center"> <?php echo $row['StudentID'];?></td>
									<td align="center"> <?php echo $row['TransacCode'];?></td>
									<td align="center"> <?php echo $row['BookTitle'];?></td>
									<td align="center"> <?php echo $row['DateBorrowed'];?></td>
									<td align="center"> <?php echo $row['Due'];?></td>
									<td align="center"> <?php echo $row['Remarks'];?></td>
									<td align="left"><?php echo " <a href = ReturnForm.php?last=".$row['StudentID']."> Return </a>"; ?> <td>  

								</tr>
							</tbody>
					<?php  
						} 
					?>

					 <!-- oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" -->
					  <!-- maxlength="9" min = "0" -->
						  </table>
					</div>
					<div class="col-md-2">

					   <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					    		<input id="myInput"  onkeyup="myFunction()" type="text" class="form-control" name="Position" placeholder="StudentID/Code">
							</div>
						<div>
							<input type="Button" style="background-image: url(history1.png);
													  background-position: 5px ;
													  background-size: 18px 18px;
						    						  background-repeat: no-repeat;" name="" value="Borrow History"  onclick="location.href='HistoryBooks.php';">
						</div>
						
					 <form method="POST">
						<!-- 	<input  type="text" id="myInput" onkeyup="myFunction()" > -->
							<!-- <input type="text" name="Transac Code" placeholder="Transaction Code" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" required="true">
							<input type="Submit" name=""> -->
					    		<!-- <input style="background-image: url(return1.png);
											  background-repeat: no-repeat;
											  background-size:20px 20px;
											  background-position: 5px;" type="Button" value="Return Book" data-toggle="modal" data-target="#ReturnBookModal" name=""> -->
						</form>
 				</div>
			</div>
		</div>
			</div>
		</div>

</div>


<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  var td2;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[1];
    if ((td)||(td2)) {
      if ((td.innerHTML.toUpperCase().indexOf(filter) > -1)||(td2.innerHTML.toUpperCase().indexOf(filter) > -1)) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
	
</body>
</html>