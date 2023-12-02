<?php 
session_start();
include("config.php");
$msg = "";
$error = "";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
   $amount = $_POST['amount'];
   $location = $_POST['location'];
   $gender = $_POST['gender'];
   $dep = $_POST['department'];
   if(!empty($amount) && !empty($gender) && !empty($dep) && !empty($location)){
    $sq ="SELECT * FROM hostelproposal WHERE prop_uid = $id";
    $run_sq =mysqli_query($con, $sq);
    $result = mysqli_num_rows($run_sq);
    if($result < 1){
    $sql = "INSERT INTO hostelproposal (prop_uid, prop_fee, prop_state, prop_dep,prop_gender) VALUES ('$id','$amount','$location','$dep','$gender')";
    $run =mysqli_query($con, $sql);
    if($run){
      $msg = "Proposal Sent";
    }else{
        $error = "Proposal Not Sent";
    }
    }
    else{
        $error = "Proposal Not Sent before";
    }
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
        <h1 class="header">Hostel <span>Proposal</span></h1>
        <br>
        <?php
            echo $msg;
        ?>
        <?php
            echo $error;
        ?>
        <br>
        <div class="form-group">
            <form method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text"  placeholder="Amount (N)" name="amount" required>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Location" name="location"required>
                </div>
                <select name="gender" class="input-box bold" required="required">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <select name="department" class="input-box bold" required="required">
                        <option value="">Department</option>
                        <option value="elect">Electical Electronics</option>
                        <option value="mech">Mechanical Engineering</option>
                        <option value="cit">Computer Information And Technology</option>
                    </select> 
                <button type="submit" name="submit" class="contact-btn">Submit</button>
            </form>
        </div>
    </div>

    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>
</html>