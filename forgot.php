<?php

require 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Workflow System - Forgot Password</title>


</head>
<body>
<div class="login-form">
    <form action="includes/passrec.inc.php" method="post">
        <h2 class="text-center">Password Recovery</h2>       
        <div class="form-group">
            <input type="text" name="mail" class="form-control" placeholder="Email" required="required">
        </div>


        
        <div class="form-group">
            <button type="submit" name="passrec-submit" class="btn btn-primary btn-block">Recover</button>
        </div>
        
        	          <a href="index.php">Login?</a>
        	          <a href="signup.php"class="pull-right">Create an Account</a>
    


    </form>
    

       <div class="clearfix">
                <?php
	if(isset($_GET['msg'])){
					$errresult = $_GET['msg'];
					if($_GET['msg'] == $errresult){
						
						$sql = "SELECT * FROM msg_tbl INNER JOIN alert_tbl ON msg_tbl.alert_id=alert_tbl.alert_ID WHERE msg_get_result = ?";
						$stmt = mysqli_stmt_init($conn);
						
						if(!mysqli_stmt_prepare($stmt,$sql)){
							header("Location: ../index.php?msg=sqlerror");
							exit();
							}
							else
						{
							mysqli_stmt_bind_param($stmt,"s", $errresult);
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);
							if($row = mysqli_fetch_assoc($result))
							{
						
								echo "<br><div class=","'",$row['alert_class'],"'", $row['msg_text'], "</div>";
								
								exit();
						}

					}
				}
				if($_GET['msg'] == "sqlerror"){
					echo "  <br><div class='alert alert-danger'>
    							
    							SQL Error!
								</div>
								</div>";
				}
				}
?>
    </div>
   
</div>
</body>
</html>                                		


