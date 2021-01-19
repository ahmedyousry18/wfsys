
					<ul class='nav nav-tabs'>
					  <li class='nav-item'>
					    <a class='nav-link' href='logged.php?menu=active'>Active</a>
					  </li>
					 
					  <li class='nav-item'>
					    <a class='nav-link active' href='logged.php?menu=newwf'>New</a>
					  </li>
					  
					  <li class='nav-item'>
					    <a class='nav-link' href='logged.php?menu=closed'>Closed</a>
					  </li>
					  
					  <li class='nav-item'>
					    <a class='nav-link' href='logged.php?menu=search'>Search</a>
					  </li>
					  
					  <li class='nav-item'>
					    <a class='nav-link' href='includes/logout.inc.php'>Logout</a>
					  </li>
					  
					</ul>
				
				

  <p></p>  

<form action="logged.php?menu=newwf&selected=ok" method="POST">
<div class="container">
  <h2>New Workflow</h2>
  
  
<div class="row">

    <div class="col">
       <select id="inputState" class="form-control">
        <option selected>Workflow Type</option>
        <option>Finance</option>
        <option>Human Resources</option>
      </select>
    </div>
    
    <div class="col">
       <select id="inputState" class="form-control">
        <option selected>Workflow Template</option>
        <option>Annual Leave Request</option>
        <option>Time off Request</option>
      </select>
    </div>
  </div>
  <br>
  
  <br>
  
  <button type="submit" class="btn btn-primary btn-lg">Apply</button>
  


  
  
  </form>
  <br>
  
      <?php
  if(isset($_GET['selected']))
  {
  	if($_GET['selected'] == 'ok')
  	{
  		include 'menu/createwf.php';
  	}
  		
  	}
  ?>

</div>



<br>





<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>