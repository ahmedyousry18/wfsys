<br>

<div class="container">

  <form action='action.php' method='POST'>
  <div class="form-group">
    <label>Action to: Step 1 - Verify Invoice</label>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">All required documents available?</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Yes</option>
      <option>No</option>

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  

  <div class="form-group">
    <label for="exampleFormControlFile1">Attachment</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
<button type="submit" name="action_btn" class="btn btn-danger">Reject</button>
<button type="submit" name="rfi_btn" class="btn btn-info">Request for Information</button>
<?php

	if(isset($_POST['rfi_btn']))
	{
		header("Location: wfactive.php?menu=action&btn=rfi");
		
		

	}




?>


</form>

</div>

