<?php
	session_start();
	include("connecton.php");
	function AddBook()
	{
		$ErrorM = "";
		$DisplayNotif = "False";
		$bookID = $_POST['BookID'];
		// $categ  = $_POST['Category'];
		$code 	= $_POST['BookCode'];
		$bookName = $_POST['BookTitle'];
		$bookAuthor= $_POST['BookAuthor'];
		$Published = $_POST['Dpublished'];
		$Quan = $_POST['Quantity'];
		$Rem = $_POST['Remarks'];

		$sqlCheckBook = "SELECT * FROM books WHERE BookID = '$bookID';";
		$runCheck = mysql_query($sqlCheckBook);

		if (mysql_num_rows($runCheck) > 0)
			{
				$ErrorM = "Book Already Exist!";
			}
			else
			{

				$addthisBook = "INSERT INTO books VALUES 
				($bookID,'$code','$bookName', '$bookAuthor', '$Published', $Quan,'$Rem');";
				$insert = mysql_query($addthisBook);
				// echo $addthisBook;
				if (!$insert)
							{
								echo "Error inserting record: ".mysql_error();
							}
								else
								{ 
									// echo '<script> document.location.href="BookInventory.php"</script>';
								}
						
			}
			return $ErrorM;
	}

	function BorrowBook()
	{
		$ErrorMessage = "";
		$studentID = $_POST['StudentID'];
		$transaction = $_POST['Transac'];
		$bookName = $_POST['BookTitle'];
		$dateborrowed= $_POST['dateborrowed'];
		$due= $_POST['due'];
		$Rem = $_POST['Remarks'];

		

						$sqlCheckStud = "SELECT * FROM borrowbook WHERE StudentID = $studentID";
						$runCheckStud = mysql_query($sqlCheckStud);
						// $getRow = mysql_fetch_array($runCheckStud);
						// $sqlCountStud = "SELECT COUNT(*) FROM borrowbook WHERE StudentID = $studentID";
						// $RunCount = mysql_query($sqlCountStud);
						while ($getRow = mysql_fetch_array($runCheckStud)) 
						{
							$counter = $counter + 1;
						}

						if (($counter >= 3)) 
						{
							$ErrorMessage = "Show Notif";
						}

						else
						{
						$sqlCheckBook = "SELECT * FROM books WHERE BookTitle LIKE '%$bookName%';";
						$runCheck = mysql_query($sqlCheckBook);
						$row = mysql_fetch_array($runCheck);
						$quan = $row['Quantity'];
							if (($quan <=0))
							{
								$ErrorMessage = "No book Available!";
															}
							else
							{
								$booktitle = $row['BookTitle'];
								$borrowthisBook = "INSERT INTO borrowbook VALUES 
													( $studentID,
													  $transaction,
													 '$booktitle',
													 '$dateborrowed',
													 '$due',
													 '$Rem');";
						
								$insert = mysql_query($borrowthisBook);
							
								if($insert>0)						
								{
									echo "4";
									$quan = $quan - 1 ; 
									$updatequan = "UPDATE books SET Quantity = $quan WHERE BookTitle = '$booktitle'";
									$update = mysql_query($updatequan);

								}
							}
						}
						return $ErrorMessage;

	}
	function returnbook()
	{
		$StudID = $_POST['StudID'];
		$ErrorMessage = "";
		$Rem = "Returned";

		$ID = $_POST['StudID'];
		$Tcode = $_POST['Transac'];
		$bookname = $_POST['title'];
		$borrowed = $_POST['DateBorrowed'];
		$Deadline = $_POST['due'];
		$Note = $_POST['remarks'];

		$sql = "SELECT * FROM borrowbook WHERE TransacCode = $Tcode";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$title = $row['BookTitle'];
		$remark = $row['Remarks'];

		$sqlreturn2 = "SELECT * FROM books WHERE BookTitle = '$title';";
		// echo "$";
		$select= mysql_query($sqlreturn2);
		$row2 = mysql_fetch_array($select);

			$quan = $row2['Quantity'];
			if($select>0 && $remark != 'Returned')
				{	
			
					$quan = $quan + 1; 
					// echo $quan;
					$sqlreturn3 = "UPDATE books SET Quantity = $quan WHERE BookTitle = '$title'";

					$resutl3= mysql_query($sqlreturn3);

					if($resutl3>0)
						{		
							$sqlreturn = "UPDATE borrowbook SET Remarks = '$Rem' WHERE TransacCode = $Tcode";
							$return1 = mysql_query($sqlreturn);

							$InsertToHisto = "INSERT INTO historyborrow (StudentID,TransacCode,BookTitle,DateBorrowed,Due,Remarks) SELECT StudentID, TransacCode,BookTitle,DateBorrowed,Due,Remarks FROM borrowbook WHERE Remarks = 'Returned';";
							$RunInsertToHisto = mysql_query($InsertToHisto);

							$DeleteData = "DELETE FROM borrowbook WHERE Remarks = 'Returned';";
							$RunDelete = mysql_query($DeleteData);
							header('Location:BorrowedBooks.php');

								
						}
					else 
					{
						
						$DisplayNotif = "True";

					}
				}
				return $DisplayNotif;
									
	}
?>