<?php
include("config.php");
$pid = $_GET['id'];
$sql = "DELETE FROM contact_tb WHERE cid = '$pid'";
$result = mysqli_query($con, $sql);
if($result == true)
{
	echo "<script> alert('Deleted successfully')</script>";
	header("Location:contacts.php?echo=true");
}
else{
	echo "<script> alert('Failed to Delete')</script>";
	header("Location:contacts.php?echo=false");
}
mysqli_close($con);
?>