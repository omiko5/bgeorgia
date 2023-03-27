
<?php
include_once('header.php');
include_once('link.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<center>
    <h1>მომხმარებლის რეგისტრაცია</h1>
</center>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">სახელი :</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">გვარი :</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">სქესი :</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">მამრობითი</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">მდედრობითი</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">პაროლი :</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" >
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">რეგისტრაცია</button>
    </div>
  </div>
</form>
</div>
