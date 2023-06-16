<?php
include("config.php");
$pid = $_GET['id'];



$sql = "DELETE FROM `allocation_tb` WHERE property_id = '$pid'";
$deleteresult = mysqli_query($con, $sql);

if ($deleteresult) {
	echo "Allocation records deleted successfully.";
} else {
	echo "Failed to delete allocation records.";
}

$sql = "DELETE FROM property WHERE pid = '$pid'";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg= "<script> alert('Deleted successfully')</script>";
	header("Location:property.php");
}
else{
	$msg= "<script> alert('Failed to Delete')</script>";
	header("Location:property.php");
}

mysqli_close($con);
?>