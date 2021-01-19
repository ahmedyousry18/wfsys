<?php
include '../header.php';
?>


<ul class='nav nav-tabs'>
	  <li class='nav-item'>
		    <a class='nav-link' href='wfdetails.php?menu=details'>Details</a>
	  </li>
				 
	  <li class='nav-item'>
		    <a class='nav-link' href='wfdetails.php?menu=steps'>Steps</a>
	  </li>
					  
	  <li class='nav-item'>
		    <a class='nav-link' href='wfdetails.php?menu=rfi'>RFI</a>
	  </li>
				  
	  <li class='nav-item'>
		    <a class='nav-link' href='wfdetails.php?menu=attach'>Attachments</a>
	  </li>
</ul>



  
<div class="container">

<h5 class="modal-title" id="exampleModalLabel"></h5>

	<?php
	
	//echo $_GET['wfid'];
	
	?>
	
	
		<?php
	
		if(isset($_GET['menu'])){
		
			if($_GET['menu'] == 'details'){
				
				include "details.php";
					
			}
			
			if($_GET['menu'] == 'steps'){
			
				include "steps.php";

			}
			
			if($_GET['menu'] == 'rfi'){
				
				include "rfi.php";
					
			}
			
			if($_GET['menu'] == 'attach'){
				
				include "attach.php";
					
			}
			


			
			

		}
		
		


?>

	  

</div>

  



