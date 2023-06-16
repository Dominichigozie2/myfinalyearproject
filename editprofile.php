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
   
   $sql = "UPDATE user SET uname ='{$name}', uphone ='{$phone}',uemail ='{$email}',ulocation ='{$location}', udepartment ='{$depart}',uabout ='{$about}' WHERE user_id = $uid";

   $result = mysqli_query($con, $sql);
   
   if($result){
    echo "<script>alert('Property inserted Successfully')</script>";
    header("Location:profile.php");
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

    <link rel="stylesheet" href="./css/addproperty.css">
</head>
<body>

  <?php
      include("./include/nav.php");
  ?>
   <!-- loader -->
   <div class="loader"></div>
   <!-- loader -->



    <div class="container">
        <h1 class="header">Edit <span>Profile</span></h1>
        <div class="form-group">
            <form method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" name="ename" required>
                    <label>Name</label>
                </div>
                <div class="input-box">
                    <input type="text" name="ephone"  required>
                    <label>Phone</label>
                </div>
                <div class="input-box">
                    <input type="email" name="email" required>
                    <label>Mail</label>
                </div>
                <div class="input-box">
                    <input type="text" name="elocation"required>
                    <label>Location</label>
                </div>
                
                    <select name="edepartment" class="input-box bold" required="required">
                        <option value="">Department</option>
                        <option value="elect">Electical Electronics</option>
                        <option value="mech">Mechanical Engineering</option>
                        <option value="cit">Computer Information And Technology</option>
                    </select>
                
                <div class="input-box">
                    
                <select name="ehubby" class="input-box bold" required="required multipart">
                        <option value="">Hubby</option>
                        <option value="football">football</option>
                        <option value="reading">reading</option>
                        <option value="drawing">Drawing</option>
                        <option value="singing">Singing</option>
                        <option value="writing">Writing</option>
                        <option value="movies">Movies</option>
                        <option value="games">Videogames</option>
                        <option value="games">Others</option>
                    </select>
                </div>
                <div class="input-box span-2 textarea-box">
                    <textarea name="eabout" class="textarea-box"></textarea>
                    <label>Please Describe yourself in few words</label>
                </div>
                
                <button type="submit" name="submit" class="contact-btn">Submit</button>
            </form>
        </div>
    </div>

    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>
</html>