<?php

require 'header.php';

?>



<?php



if(!isset($_SESSION['user_id'])){
		header("Location: index.php");
		exit();
}



?>


	<?php
	
		if(isset($_GET['menu'])  || isset($_GET['link'])){
		
			if($_GET['menu'] == 'active'){
				
				include "menu/active.php";
					
			}
			
			if($_GET['menu'] == 'closed'){
			
				include "menu/closed.php";

			}
			
			if($_GET['menu'] == 'search'){
				
				include "menu/search.php";
					
			}
			
			if($_GET['menu'] == 'newwf'){
				
				include "menu/newwf.php";
					
			}
			
			if($_GET['menu'] == 'view'){
				
				include "menu/closed.php";
				include "menu/wfstepsall.php";
					
			}
			


			
			

		}
		
		


?>


<?php

require 'footer.php';

?>