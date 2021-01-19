
					<ul class='nav nav-tabs'>
					  <li class='nav-item'>
					    <a class='nav-link' href='logged.php?menu=active'>Active</a>
					  </li>
					 
					  <li class='nav-item'>
					    <a class='nav-link' href='logged.php?menu=newwf'>New</a>
					  </li>
					  
					  <li class='nav-item'>
					    <a class='nav-link' href='logged.php?menu=closed'>Closed</a>
					  </li>
					  
					  <li class='nav-item'>
					    <a class='nav-link active' href='logged.php?menu=search'>Search</a>
					  </li>
					  
					  <li class='nav-item'>
					    <a class='nav-link' href='includes/logout.inc.php'>Logout</a>
					  </li>
					  
					</ul>
				
				

  <p></p>  

<form action="logged.php?menu=search&search=ok" method="POST">
<div class="container">
  <h2>Search Workflows</h2>
  
  
<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Workflow Title">
    </div>
    
    <div class="col">
       <select id="inputState" class="form-control">
        <option selected>Workflow Type</option>
        <option>...</option>
      </select>
    </div>
    
    <div class="col">
       <select id="inputState" class="form-control">
        <option selected>Workflow Template</option>
        <option>...</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Date From">
    </div>
    
    <div class="col">
      <input type="text" class="form-control" placeholder="Date To">
    </div>
    
    <div class="col">
       <select id="inputState" class="form-control">
        <option selected>Action</option>
        <option>...</option>
      </select>
    </div>
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary btn-lg">Search</button>
  <button type="clear" value="clearresult" class="btn btn-primary btn-lg">Clear</button>
  </form>
  <br>

</div>

<br>

<?php
	
		include "searchresult.php";	

?>



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