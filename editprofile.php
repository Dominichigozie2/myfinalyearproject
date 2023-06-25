<?php 
session_start();
include("config.php");

if(isset($_POST['submit'])){
    $uid = $_GET['uid'];
   $name = $_POST['ename'];
   $phone = $_POST['ephone'];
   $email = $_POST['email'];
   $location = $_POST['elocation'];
   $depart = $_POST['edepartment'];
   $about = $_POST['eabout'];
   $brand = $_POST['brands'];
   
   $sql = "UPDATE user SET uname ='{$name}', uphone ='{$phone}',uemail ='{$email}',ulocation ='{$location}', udepartment ='{$depart}',uabout ='{$about}' WHERE user_id = $uid";

   $result = mysqli_query($con, $sql);
   
   if($result){
    echo "<script>alert('Property inserted Successfully')</script>";
    // header("Location:profile.php");
   }
   else{
    echo "<script>alert('Property not insert Successfully')</script>";

   }

   foreach($brand as $item){
    $query= "INSERT INTO hubby_tb(`ename`, `use_id`) VALUES ('$uid','$item')";
    $query_run = mysqli_query($con,$query);
    
}

    if($query_run){
    echo "<script>alert('hubby inserted Successfully')</script>";
    // header("Location:profile.php");
    }
    else{
    echo "<script>alert('hubby not insert Successfully')</script>";
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

    <link rel="stylesheet" href="./css/edit.css">
</head>
<body>

  <?php
      include("./include/nav.php");
  ?>
   <!-- loader -->
   <div class="loader"></div>
   <!-- loader -->

    <div class="container-co">
        <h1 class="header">Edit <span>Profile</span></h1>
        <div class="form-group">
            <form method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" name="ename"  placeholder="Name" required>
                </div>
                <div class="input-box">
                    <input type="text" name="ephone"  placeholder="Phone"  required>
                </div>
                <div class="input-box">
                    <input type="email"  placeholder="Email" name="email" required>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Location" name="elocation"required>
                </div>
                
                    <select name="edepartment" class="input-box bold" required="required">
                        <option value="">Department</option>
                        <option value="elect">Electical Electronics</option>
                        <option value="mech">Mechanical Engineering</option>
                        <option value="cit">Computer Information And Technology</option>
                    </select>
                
                <div class="radio-box">
                    <div id="hubby">select hubby<i id="arrow" class="fa fa-angle-down"></i> </div>
                    <div class="radio-container" id="hubby-container">
                        <input type="checkbox" name="brands[]" value="Football"> Football <br><br>
                        <input type="checkbox" name="brands[]" value="Singing"> Singing <br><br>
                        <input type="checkbox" name="brands[]" value="Writing"> Writing <br><br>
                        <input type="checkbox" name="brands[]" value="Dancing"> Dancing <br><br>
                        <input type="checkbox" name="brands[]" value="Movies"> Movies <br><br>
                        <input type="checkbox" name="brands[]" value="Reading"> Reading <br><br>
                        <input type="checkbox" name="brands[]" value="other"> others <br><br>
                    </div>
                </div>
                <div class="input-box span-2 textarea-box">
                    <textarea name="eabout" class="textarea-box" placeholder="please describe yourself in few words"></textarea>
                </div>
                
                <button type="submit" name="submit" class="contact-btn">Submit</button>
            </form>
        </div>
    </div>

    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>
</html>