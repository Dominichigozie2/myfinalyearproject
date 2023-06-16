
<?php
include("config.php");
$uid = $_GET['uid'];

$sql = "DELETE FROM user WHERE uid = '$uid'";
$result = mysqli_query($con, $sql);
if($result == true)
{
	echo "<script> alert('Deleted successfully')</script>";
	header("Location:users.php?echo=true");
}
else{
	echo "<script> alert('Failed to Delete')</script>";
	header("Location:users.php?echo=false");
}
mysqli_close($con);
?>