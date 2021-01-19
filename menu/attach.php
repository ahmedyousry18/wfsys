<br>

<div class="container">

  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Filename</th>
        <th>Upload Date</th>
        <th>Description</th>
        <th>Owner</th>
      </tr>
    </thead>
    <tbody id="myTable">
    	
      <tr>
        <td><a href='#'>file.pdf</a></td>
        <td>10-Oct-2020</td>
        <td>file.pdf uploaded</td>
        <td>admin</a></td>
      </tr>
      <tr>
        <td><a href='#'>file1.docx</a></td>
        <td>10-Oct-2020</td>
        <td>file1.docx uploaded</td>
        <td>Ahmed Yousry</a></td>
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