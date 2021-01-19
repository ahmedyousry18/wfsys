<?php


if (isset($_POST['login-submit'])){
	require 'dbh.inc.php';
	
	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];
	
	if (empty($mailuid) || empty($password)){
		header("Location: ../index.php?msg=emptyfields");
		exit();
		
		
	}
	else{
		
		$sql = "SELECT * FROM user_tbl WHERE user_id = ? OR user_email = ? ";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../index.php?msg=sqlerror");
		exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($password, $row['pwd']);
				if($pwdCheck == false){
					header("Location: ../index.php?msg=wrongpwd");
					exit();
				}
				elseif($pwdCheck == true){
					session_start();
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_email'] = $row['user_email'];
					$_SESSION['user_name'] = $row['user_name'];
					header("Location: ../logged.php?menu=active");
					exit();
				}
				else{
					header("Location: ../index.php?msg=wrongpwd");
					exit();
				}
				
				
			}
			else
			{
			header("Location: ../index.php?msg=nouser");
			exit();
			}
		}
	}
}
else
{
		header("Location: ../index.php");
		exit();
}