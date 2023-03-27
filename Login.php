

<?php
include_once('header.php');
include_once('link.php');

?>

<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="login_code.php">
	<center>
    <h1>ავტორიზაცია</h1>
</center>
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">პაროლი:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" >
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">შესვლა</button>
    </div>
  </div>
</form>
</div>