<?php
session_start();
include("connecton.php");
if (!isset($_SESSION['ID']))
		{
			header('Location:LoginPage.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Book</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

	<div class="container-width" style="margin-top: 80px;">
		<div class="row">
		<div class="col-md-2"></div>
			<div class="col-md-4" style="background-color:#737373;">
				<h1>Image of the Book if possible</h1>
			</div>
			<div class="col-md-4">
				
				<table class="table-bordered">
					<tr><td align="center" colspan="2"  style="font-size: 30px;">Book Detail</td></tr>
					<?php
								$book = $_GET['BookID'];
							    $Books = "SELECT * FROM books WHERE BookID =".$_GET['BookID'];
								$Get = mysql_query($Books);
						while ($row = mysql_fetch_array($Get))
						{ ?>
					<tbody>
							<tr>
								<td  style="font-size: 25px;">Book Title:</td>
								<td  style="font-size: 20px;"><?php echo $row['BookName'];?></td>
							</tr>
							<tr>
								<td style="font-size: 25px;">Book Author:</td>
								<td style="font-size: 20px;"><?php echo $row['BookAuthor'];?></td>
							</tr>
							<tr>
								<td style="font-size: 25px;">Date Published</td>
								<td style="font-size: 20px;"><?php echo $row['DatePublished'];?></td>
							</tr>
							<tr>
								<td style="font-size: 25px;">Quantity</td>
								<td style="font-size: 20px;"><?php echo $row['Quantity'];?></td>
							</tr>
							<tr>
								<td style="font-size: 25px;">Remarks</td>
								<td style="font-size: 20px;"> <?php echo $row['Remarks'];?></td>
							</tr>
							<tr>
								<td style="font-size: 25px;">Property of</td>
								<td style="font-size: 20px;">Gnc</td>
							</tr>
						</tbody>
					<?php  
						} 
					?>
				</table>
			</div>
			<div class="col-md-2">
				<input type="button" value="Return" onclick="location.href='BorrowBook.php';" name="">
			</div>
		</div>
	</div>

</body>
</html>