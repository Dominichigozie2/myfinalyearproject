<?php
include("config.php");
$pid = $_GET['id'];


$sql = "DELETE FROM hostelproposal WHERE id = '$pid'";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg= "<script> alert('Deleted successfully')</script>";
	header("Location:propose.php?echo=true");
}
else{
	$msg= "<script> alert('Failed to Delete')</script>";
	header("Location:propose.php?echo=false");
}

mysqli_close($con);
?>