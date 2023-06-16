<?php 
session_start();
include("config.php");

if(isset($_POST['submit'])){
   $id = $_GET['id'];

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
   $uid = rand(1111,9999);
   
   

   $aimg = $_FILES['aimg']['name'];
   $aimg1 = $_FILES['aimg1']['name'];
   $aimg2 = $_FILES['aimg2']['name'];
   $aimg3 = $_FILES['aimg3']['name'];
   $aimg4 = $_FILES['aimg4']['name'];

   $temp_name = $_FILES['aimg']['tmp_name'];
   $temp_name1 = $_FILES['aimg1']['tmp_name'];
   $temp_name2 = $_FILES['aimg2']['tmp_name'];
   $temp_name3 = $_FILES['aimg3']['tmp_name'];
   $temp_name4 = $_FILES['aimg4']['tmp_name'];

   move_uploaded_file($temp_name, "../property/$aimg");
   move_uploaded_file($temp_name1, "../property/$aimg1");
   move_uploaded_file($temp_name2, "../property/$aimg2");
   move_uploaded_file($temp_name3, "../property/$aimg3");
   move_uploaded_file($temp_name4, "../property/$aimg4");

   $sql = "UPDATE proposal SET uname='{$title}', ulocation='{$loc}', price='{$price}', room ='{$room}',kitchen ='{$kitchen}',bath ='{$bath}',water ='{$water}',usecurity ='{$sec}',people ='{$people}',lightf ='{$lightfee}', securityf ='{$securityfee}',duration ='{$dur}', p_id ='{$user_id}', build-p ='{$aimg}', room-p ='{$aimg1}',kitch-p ='{$aimg2}', bath-p ='{$aimg3}' WHERE id ='$id'";

   $result = mysqli_query($con, $sql);
   
   if($result){
    echo "<script>alert('Property inserted Successfully')</script>";
   }
   else{
    echo "<script>alert('Property not insert Successfully')</script>";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Property</title>

    <link rel="stylesheet" href="../css/addproperty.css">
</head>
<body>

  <?php
      include("./include/header.php");
  ?>
   <!-- loader -->
   <div class="loader"></div>
   <!-- loader -->



    <div class="container">
        <h1 class="header">Submit <span>Property</span></h1>
        <div class="form-group">
            <form method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" name="ptitle" required>
                    <label>title</label>
                </div>
                <div class="input-box">
                    <input type="text" name="plocation"  required>
                    <label>location</label>
                </div>
                <div class="input-box">
                    <input type="text" name="pprice" required>
                    <label>Rent price</label>
                </div>
                <div class="input-box">
                    <input type="text" name="proom"required>
                    <label>Number of rooms</label>
                </div>
                
                <div class="input-box">
                    <input type="text" name="Pkitchen" required>
                    <label>kitchen</label>
                </div>
                
                <div class="input-box">
                    <input type="text" name="Pbath" required>
                    <label>bathroom</label>
                </div>
                
                <div class="input-box">
                    <input type="text" name="Pwater" required>
                    <label>water</label>
                </div>
                
                <div class="input-box">
                    <input type="text" name="Psecurity" required>
                    <label>security</label>
                </div>
                
                <div class="input-box">
                    <input type="text" name="Ppeople" required>
                    <label>number of people</label>
                </div>
                
                <div class="input-box">
                    <input type="text" name="Plightfee" required>
                    <label>Light Fee</label>
                </div>
                
                <div class="input-box">
                    <input type="text" name="Psecurityfee" required>
                    <label>Security Fee</label>
                </div>

                <div class="input-box">
                    <input type="text" name="Pduration" required>
                    <label>duration</label>
                </div>

                <h3 class="span-2">Building Images </h3>

                <div class="input-box">
                    picture of the  building :
                    <input type="file" name="aimg">
                </div>
                
                <div class="input-box">
                    picture of the room :
                    <input type="file" name="aimg1">
                </div>
                
                <div class="input-box">
                    picture of the kitchen :
                    <input type="file" name="aimg2">
                </div>
                <div class="input-box">
                    picture of the bathroom :
                    <input type="file" name="aimg3">
                </div>
                
                <div class="input-box">
                    picture of the owner :
                    <input type="file" name="aimg4">
                </div>
                <button type="submit" name="submit" class="contact-btn">Submit</button>
            </form>
        </div>
    </div>

    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>
</html>