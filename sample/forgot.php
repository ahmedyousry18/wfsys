<?php

require 'header.php';

?>


			<?php
				require 'includes/dbh.inc.php';	
					
				echo "
							<main>
			<div class='limiter'>
		<div class='container-login100'>
			<div class='wrap-login100 p-t-50 p-b-90'>
				<form class='login100-form validate-form flex-sb flex-w' action='includes\passrec.inc.php' method='POST'>
					<span class='login100-form-title p-b-51'>
						Forgot Password
					</span>

					
					<div class='wrap-input100 validate-input m-b-16' data-validate = 'Email is required'>
						<input class='input100' type='text' name='mail' placeholder='Email'>
						<span class='focus-input100'></span>
					</div>
					
					
					
					
					<div class='flex-sb-m w-full p-t-3 p-b-24'>

							<a href='signup.php' class='txt1'>
								Sign-up?
							</a>
						<div>
							<a href='index.php' class='txt1'>
								Log in?
							</a>
							
							
						</div>
						
						
	
					</div>
					<div class='container-login100-form-btn m-t-17'>
						<button type='submit' name='passrec-submit' class='login100-form-btn'>
							Submit
						</button>
					</div>
				</form>
				";
				
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
				
				echo "</main>";
			
				
				?>
				
			
		</div>
	</div>
	



	<div id="dropDownSelect1"></div>
	
	
	
	
		
		
		


<?php

require 'footer.php';

?>