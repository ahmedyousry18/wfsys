<?php

if(isset($_GET['search'])){
	if($_GET['search'] == 'ok'){
		echo "<div class='container'>

  <input class='form-control' id='myInput' type='text' placeholder='Filter'>
  <br>
  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Assigned Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id='myTable'>
    	
      <tr>
        <td>INV001</td>
        <td>Invoice Payment - ABC</td>
        <td>10-Oct-2020</td>
        <td><a href='#'>View</a></td>
      </tr>
            <tr>
        <td>INV002</td>
        <td>Invoice Payment - EFG</td>
        <td>10-Oct-2020</td>
        <td><a href='#'>View</a></td>
      </tr>
      
    </tbody>
  </table>
  
</div>";
	}

}




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