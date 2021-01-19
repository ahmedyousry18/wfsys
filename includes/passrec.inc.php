<?php

if(isset($_POST['passrec-submit'])){
	require 'dbh.inc.php';
	$email = $_POST['mail'];
	
	
	if(empty($email)){
		// code ...
		header("Location: ../forgot.php?msg=emptyfields");
		exit();
	}
	
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: ../forgot.php?msg=invalidmail");
	exit();
		
	}
	
	else{
		
	$sql = "SELECT * FROM user_tbl WHERE user_email = ?";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
	header("Location: ../forgot.php?msg=sqlerror");
	exit();
			
		}
		else{
			mysqli_stmt_bind_param($stmt,"s", $email); //pass data type - s = string, i = integer, b = blob, d = double
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			#echo $resultCheck;
			if($resultCheck > 0){
					header("Location: ../forgot.php?msg=passrecsuccess");
					exit();
					
			}
			else {
					header("Location: ../forgot.php?msg=passrecfailed");
				exit();
					
				
			
		
			}
	}
	
	
	
}

mysqli_stmt_close($stmt);
mysql_close($conn);

}
else
{
	header("Location: ../index.php");
}