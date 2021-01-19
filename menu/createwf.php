<br>

<div class="container">

<form>
  <div class="form-group">
    <label>Human Resources - Time off Request</label>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Time off Request Type</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>During Working Hours</option>
      <option>Arrived Late</option>
	  <option>Leave Early</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  
  <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Attachment</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

<button type="button" class="btn btn-primary">Start Workflow</button>

</form>
<br>

<?php

	include 'menu/viewsteps.php';

?>

</div>