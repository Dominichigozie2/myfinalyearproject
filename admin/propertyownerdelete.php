
<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = '$id'";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$sqlOne = "DELETE FROM property WHERE p_id = '$id'";
	$resultOne = mysqli_query($con, $sqlOne);
	if($resultOne == true)
{
	echo "<script> alert('Delete Successful')</script>";
	header("Location:propertyowner.php?echo=true");
}
else{
	echo "<script> alert('Failed to also Delete from property')</script>";
	header("Location:propertyowner.php?echo=falseOne");
}
}
else{
	echo "<script> alert('Failed to Delete')</script>";
	header("Location:propertyowner.php?echo=false");
}

mysqli_close($con);
?>