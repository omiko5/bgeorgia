

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		
	}
}

?>
<div class="jumbotron">
	<center>
		<h1>მოგესალმებით  <?php echo $fname." ".$lname; ?></h1>
	<a href="book.php" class="btn">პაკეტის რეგისტრაცია</a>
</center>
</div>