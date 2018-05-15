<?php 
	session_start();
	include("connecton.php");

	if (!isset($_SESSION['ID']))
		{
			header('Location:LoginPage.php');
		}
	else
	{
		$ShowUserName = "SELECT * FROM studentprofiles WHERE ID = ".$_SESSION['ID'];
		$Exec = mysql_query($ShowUserName);
		$NameStud = mysql_fetch_array($Exec);
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="StudentMenu.css">
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
		            $(this).css("background-color", "#333333");
		        }   
    		});
    		$("#panel5").on({
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
		    		$("#panel4").slideUp("slow");
		    		$("#panel5").slideUp("slow");
		    	});
		    	$("#panel3").click(function()
		    	{
		    		$("#panel4").slideToggle("slow");
		    		$("#panel5").slideToggle("slow");
		    	});
});
	</script>
</head>
<body onLoad="$('#my-modal').modal('show');">


		<!-- <div id="my-modal" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title">Welcome!</h4>
		            </div>
		            <div class="modal-body">
		                Mr. <?php echo $NameStud['FirstName'];?> Have a Great Day!
		            </div>
		            <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		        </div>
		    </div> 
		</div> -->


	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="StudentMenu.php">GNC LIBRARY</a>
			</div>

			<ul class="nav navbar-nav">
				<!-- <li style="border-left:1px solid #bbb;"><a href="#">WELCOME!</a></li> -->
				<!-- <li style="border-right: 1px solid #bbb;"><a href="#">Option1</a></li>
				<li style="border-right: 1px solid #bbb;"><a href="#">Option2</a></li> --> 
			</ul>


			<!-- <ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle = "dropdown" href="#"> <span class="glyphicon glyphicon-cog	Try it"></span>Settings<span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<li class="dropdown-header">My Profile</li>
					<li><a href="#"> <span class="glyphicon glyphicon-user"></span>View Profile</a></li>
					<li><a href="#"> <span class="glyphicon glyphicon-pencil"></span> Edit Profile</a></li>
					<li class="divider"></li>
					<li><a href="LogOut.php"> <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
				</li>
			</ul> -->
		</div>
	</nav>

			<div class="container-width" style="margin-top: 50px;">
				<div class="row">
					<div class="col-md-3">
						  	<ul style="background-color: #1a1a1a; color:white; height:600px; " class="nav nav-pills nav-stacked nav-stacked-fixed-top">
						  	<li><a id="welcome" style="background-color: #000000;
						    						  background-image: url(myprofile.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; href=""><label style="padding-left: 23px; font-weight: normal;">Welcome, <?php echo $NameStud['FirstName'];?>!</a></label></li>
						    <li><a id="home" style="background-color: #1a1a1a; color:white;background-image: url(home.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;" href="StudentMenu.php"><label style="padding-left: 20px; font-weight: normal;">Home</label></a></li></a></li>
						    <li>
						      <a id="menu1" style="background-color: #1a1a1a; color:white;" class="dropdown-toggle" data-toggle="dropdown" href="#">Books <span class="caret"></span></a>
						    </li>
						    <li>
						    	<a id="panel" style="background-color:#262626;
						    						  background-image: url(book.png);
						    						  background-position: 5px ;
													  background-size: 28px 28px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; 
						    						  " href="BorrowBook.php"><label style="padding-left: 20px; font-weight: normal;">Borrow a Book</label></a>
						    </li>
						    <li>
						    	<a id="panel1" style="background-color:#262626;
						    						  background-image: url(book.png);
						    						  background-position: 5px ;
													  background-size: 28px 28px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; 
						    						  " href="BookReturn.php"><label style="padding-left: 20px; font-weight: normal;">Return a Book</label></a>
						    </li>
						    <li><a id="menu2" style="background-color: #1a1a1a; color:white;" href="#">My Account <span class="caret"></span> </a></li>
						    <li>
						    	<a id="panel2"  style="background-color:#262626;
						    						  background-image: url(view.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; 
						    						  " href=""><label style="padding-left: 15px; font-weight: normal;">View Profile</label></a>
						    </li>
						  
						    <li>
						    	<a id="panel3"  style="background-color:#262626;
						    						  background-image: url(edit4.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer; 
						    						  " href="#"><label style="padding-left: 16px; font-weight: normal;">Edit Profile</label><span class="caret"></span> </a>
						    </li>
						    <li>
						    	<a id="panel4"  style="background-color:#333333;
						    						  background-image: url(changeuser.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;
						    						  display: none;" href=""><label style="padding-left: 16px; font-weight: normal;">Change Username</label></a>
						    </li>
						     <li>
						    	<a id="panel5"  style="background-color:#333333;
						    						  background-image: url(changepass1.png);
						    						  background-position: 5px ;
													  background-size: 30px 30px;
						    						  background-repeat: no-repeat;
						    						  color:white;
						    						  cursor: pointer;
						    						  display: none;" href=""><label style="padding-left: 16px; font-weight: normal;">Change Password</label></a>
						    </li>

						    <li><a id="menu3" style=" background-image: url(logout.png);
						    						  background-position: 5px ;
													  background-size: 20px 20px;
						    						  background-repeat: no-repeat;
						    						  color:white; 
						    						  cursor: pointer;" href="LogOut.php"><label style="padding-left: 15px; font-weight: normal;">Log Out</label></a></li>
	 						 </ul>
					</div>
					<div class="col-md-5">
						<h3>My Borrowed Books:</h3>
						<table class="table table-hover">
							<thead>
						      <tr>
						        <th>Book ID</th>
						        <th>Book Name</th>
						        <th>Author</th>
						        <th>Due</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>B175</td>
						        <td>English1</td>
						        <td>Leon Scott</td>
						        <td>11/28/16</td>
						      </tr>
						      
						    </tbody>
						  </table>
						</table>
					</div>
				</div>
			</div>


			<footer style=" color: white; background-color:#1a1a1a; ">de Dote:Library System Inc.</footer>

</body>
</html>