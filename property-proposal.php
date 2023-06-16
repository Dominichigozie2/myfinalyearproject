<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
$error= " ";
$msg= "";

if (!isset($_SESSION['uemail'])) {
	header("location:signup.php");
}



if(isset($_POST['submit'])){

   $title = $_POST['ptitle'];
   $loc = $_POST['plocation'];
   $price = $_POST['pprice'];
   $room = $_POST['proom'];
   $kitchen = $_POST['Pkitchen'];
   $bath = $_POST['Pbath'];
   $water = $_POST['Pwater'];
   $sec = $_POST['Psecurity'];
   $people = $_POST['Ppeople'];
   $lightfee = $_POST['Plightfee'];
   $securityfee = $_POST['Psecurityfee'];
   $dur = $_POST['Pduration'];

   $user_id = $_SESSION['user_id'];
   
   
   

   $aimg = $_FILES['aimg']['name'];
   $aimg1 = $_FILES['aimg1']['name'];
   $aimg2 = $_FILES['aimg2']['name'];
   $aimg3 = $_FILES['aimg3']['name'];

   $temp_name = $_FILES['aimg']['tmp_name'];
   $temp_name1 = $_FILES['aimg1']['tmp_name'];
   $temp_name2 = $_FILES['aimg2']['tmp_name'];
   $temp_name3 = $_FILES['aimg3']['tmp_name'];

   move_uploaded_file($temp_name, "property/$aimg");
   move_uploaded_file($temp_name1, "property/$aimg1");
   move_uploaded_file($temp_name2, "property/$aimg2");
   move_uploaded_file($temp_name3, "property/$aimg3");

   $sql = "INSERT INTO proposal(name, location,price, room, kitchen,p_id,bath, water,security,people,lightf,securityf,duration, build-p, room-p, kitchen-p, bath-p) VALUES ('$title', '$loc', '$price', '$room', '$kitchen','$user_id','$bath','$water','$sec','$people','$lightfee','$securityfee','$dur', '$aimg','$aimg1','$aimg2','$aimg3')";

   $result = mysqli_query($con, $sql);
   
   if($result){
    echo "<script>alert('Property inserted Successfully')</script>";
    header("Location:./addproperty.php");
}
else{
    echo "<script>alert('Property not insert Successfully')</script>";
    header("Location:./addproperty.php");
   }
}

?>