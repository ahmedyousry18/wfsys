<br>

<div class="container">

  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Parameter</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody id="myTable">
    	
      <tr>
        <td>Parameter 1</a></td>
        <td>Value 1</td>
      </tr>
      <tr>
        <td>Parameter 2</a></td>
        <td>Value 2</td>
      </tr>
      
    </tbody>
  </table>
  
</div>

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