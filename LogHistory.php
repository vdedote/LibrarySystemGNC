<?php
	session_start();
	include("connecton.php");
	include("ADDsql.php");

// $errormessage = "";
	if (!isset($_SESSION['ID']))
		{
			header('Location:LoginPage.php');
			// echo $_SESSION['ID'];	
		}
		
	$sql = "SELECT * FROM loghistory";
	$result= mysql_query($sql);
 

 // if(isset($_GET['search']))
 //  {
 //     $result = SearchLog();
 //      if($result != '')
 //      {
 //      $errormessage = $result;
 //      } 
 //  }   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log History</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="LogHistory.css">


	<script src= "https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="LibrarianMenu.php">GNC LIBRARY</a>
			</div>

			<ul class="nav navbar-nav">
			<li  style="border-left:1px solid #bbb; font-size: 15px;"><a href="LibrarianMenu.php">HOME</a></li>
				<!-- <li style="border-left:1px solid #bbb;"><a href="#">WELCOME!</a></li> -->
				<!-- <li style="border-right: 1px solid #bbb;"><a href="#">Option1</a></li>
				<li style="border-right: 1px solid #bbb;"><a href="#">Option2</a></li> --> 
			</ul>
		</div>
	</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7" style="background-color:lavender;">

					<!-- <table class="table table-hover"> -->
					<!-- <table id="example" > -->
					<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Usernames..">

						<table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">	
						<thead>
						      <tr>
						        <th>LOG ID</th>
						        <th>EMPLOYEE ID</th>
						        <th>POSITION</th>
						        <th>USERNAME</th>
						        <th>LOG-IN</th>
						        <th>LOG-OUT</th>
						      </tr>
						</thead>
						<?php
							while ($row = mysql_fetch_array($result))
						    {
						?>
								<tbody>
									<tr>
									 	 <td align="center" > <?php echo $row['HistoryId'];?> </td>
										 <td align="center" > <?php echo $row['Employeeid'];?> </td>
										 <td align="center" > <?php echo $row['Position'];?> </td>
										 <td align="center" > <?php echo $row['Username'];?> </td>
										 <td align="center" > <?php echo $row['LogIn'];?>    </td> 
										 <td align="center" > <?php echo $row['LogOut'];?> </td>		 
									</tr> 
								</tbody>
					<?php  } 
						?>
					</table>
				</div>
				<!-- <div class="col-md-4"> -->
		<!-- 		<form method="GET"> -->
					<!-- <div class="input-group">
				    	
				    		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				    		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
						 </div>			<input style="background-color: #262626;
    								  width:100px;
    								  height: 40px;
    								  color: white;
    								  margin-top: 3px;"	 type="Submit" value="Search" name=""> -->
				<!--    
				</form> -->
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  // var td2;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    // td2 = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<!-- </script> -->
<!-- <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );</script> -->
			</div>
				
			</div>
		</div>

</body>
</html>