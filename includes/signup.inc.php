<?php

if(isset($_POST['signup-submit'])){
	require 'dbh.inc.php';
	$username = $_POST['uid'];
	$password = $_POST['pwd'];
	$email	  = $_POST['mail'];
	$passwordRepeat = $_POST['pwd-repeat'];
	$name = $_POST['uname'];
	
	if(empty($username) || empty($password) || empty($email) || empty($passwordRepeat) || empty($name)) {
		// code ...
		header("Location: ../signup.php?msg=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-z\d_ ]{2,20}$/i","$username")){
	header("Location: ../signup.php?msg=invalidmailuid=".$username);
	exit();
		
	}
	
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: ../signup.php?msg=invalidmail&uid=".$username);
	exit();
		
	}
	else if(!preg_match("/^[a-z\d_ ]{2,20}$/i","$username")){
	header("Location: ../signup.php?msg=invalidname&mail=".$email);
	exit();
		
	}
	

	
	else if($password !== $passwordRepeat){
		header("Location: ../signup.php?msg=passwordcheck&mail=".$email."&uid=".$username);
	}
	
	

	
	else{
		
	$sql = "SELECT user_id FROM user_tbl WHERE user_id=? OR user_email = ?";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
	header("Location: ../signup.php?msg=sqlerror");
	exit();
			
		}
		else{
			mysqli_stmt_bind_param($stmt,"ss", $username, $email); //pass data type - s = string, i = integer, b = blob, d = double
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0){
					header("Location: ../signup.php?msg=usertaken&mail=".$email);
					exit();
			}
			else {
				$sql = "INSERT INTO user_tbl (user_id, pwd, user_email, user_name) VALUES (?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../signup.php?msg=sqlerror");
				exit();
				
			}
			else
			{
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt,"ssss", $username , $hashedPwd, $email, $name ); //pass data type - s = string, i = integer, b = blob, d = double
				mysqli_stmt_execute($stmt);
				header("Location: ../index.php?msg=success");
				exit();
			}
		}
	}
	
	
	
}
mysqli_stmt_close($stmt);
mysql_close($conn);

}

else{
				header("Location: ../signup.php");
				exit();
}
