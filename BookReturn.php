<!DOCTYPE html>
<html>
<head>
	<title>Return Book</title>
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
});
	</script>

</head>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="StudentMenu.php">GNC LIBRARY</a>
			</div>

			<ul class="nav navbar-nav">
			</ul>
		</div>
	</nav>

	<div class="container-width" style="margin-top: 50px;">
				<div class="row">
					<div class="col-md-3">
						  	<ul style="background-color: #1a1a1a; color:white; height:600px; " class="nav nav-pills nav-stacked nav-stacked-fixed-top">
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
						    						  " href=""><label style="padding-left: 16px; font-weight: normal;">Edit Profile</label></a>
						    </li>
						    

						    <li><a id="menu3" style=" background-image: url(logout.png);
						    						  background-position: 5px ;
													  background-size: 20px 20px;
						    						  background-repeat: no-repeat;
						    						  color:white; 
						    						  cursor: pointer;" href="LogOut.php"><label style="padding-left: 15px; font-weight: normal;">Log Out</label></a></li>
	 						 </ul>
					</div>
						<div class="container-fluid" style="margin-top: 20px;">
			  <div class="row">
			    <div class="col-md-6" >
					    <h3>My Books:</h3>
					    <table class="table">
						    <thead>
						      <tr>
						      	<th></th>
						        <th>Book ID</th>
						        <th>Book Title</th>
						        <th>Book Author</th>
						        <th>Date Published</th>
						        <th>Quantity</th>
						        <th>Remark/s:</th>
						      </tr>
						    </thead>
						    <?php
						// while ($row = mysql_fetch_array($Get))
						// {
					?>
							<tbody>
								<tr>
									<!-- <td><input type="radio" name="Selected"></td> -->
									<td align="center"> <?php echo $row['BookID'];?></td>
									<td align="center"> <?php echo $row['BookName'];?></td>
									<td align="center"> <?php echo $row['BookAuthor'];?></td>
									<td align="center"> <?php echo $row['DatePublished'];?></td>
									<td align="center"> <?php echo $row['Quantity'];?></td>
									<td align="center"> <?php echo $row['Remarks'];?></td>
								</tr>
							</tbody>
					<?php  
						// } 
					?>
						  </table>
					</div>
			</div>
		</div>
</body>
</html>