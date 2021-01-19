
					<ul class='nav nav-tabs'>
					  <li class='nav-item'>
					    <a class='nav-link' href='logged.php?menu=active'>Active</a>
					  </li>
					 
					  <li class='nav-item'>
					    <a class='nav-link' href='logged.php?menu=newwf'>New</a>
					  </li>
					  
					  <li class='nav-item'>
					    <a class='nav-link active' href='logged.php?menu=closed'>Closed</a>
					  </li>
					  
					  <li class='nav-item'>
						    <a class='nav-link' href='logged.php?menu=search'>Search</a>
					  </li>


					  
					  <li class='nav-item'>
					    <a class='nav-link' href='includes/logout.inc.php'>Logout</a>
					  </li>
					  
					</ul>
				
				

  <p></p>  


<div class="container">
  <h2>Closed Workflows</h2>

  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Assigned Date</th>
        <th>Response Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
    	
      <tr> <!-- ROWS  (LOOP)-->
        <td>INV001</td>
        <td>Invoice Payment - ABC</td>
        <td>10-Oct-2020</td>
        <td>10-Oct-2020</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="INV001 - Invoice Payment - ABC">Open</button> </td> <!-- Data-target / data=whatever  (LOOP)-->
      </tr>
      
      
            <tr>
        <td>INV002</td>
        <td>Invoice Payment - EFG</td>
        <td>10-Oct-2020</td>
        <td>10-Oct-2020</td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="INV002">Open</button> </td>
      </tr>
      
      <tr>
        <td>INV003</td>
        <td>Invoice Payment - LLL</td>
        <td>10-Oct-2020</td>
        <td>10-Oct-2020</td>
<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="INV003">Open</button> </td>
      </tr>
      




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body">
      	
		  <div class="form-group">
          
            <label for="recipient-name" class="col-form-label">Workflow ID & Title</label>
            <input type="text"  class="form-control" id="recipient-name" disabled>
            
          </div>

			<iframe src="<?php echo 'menu/wfdetails.php?wfid=INV001&menu=details'?>" width="100%" height="500"> <!-- wfid  (LOOP)-->
				
			</iframe>
		</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
    
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

    </tbody>
  </table>
  

  
   <div class="alert alert-warning">
    <strong>Warning!</strong> Workflows from (DATE) till Today only</a>.
  </div>
  
</div>


<?php
echo "<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>";
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