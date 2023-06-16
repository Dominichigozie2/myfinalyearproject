<!-- =============

<?php
session_start();
include("config.php");

// if(isset($_REQUEST['log']))
// {
//     $email = $_REQUEST['lmail'];
//     $pass = $_REQUEST['lpass'];

//     if(!empty($email) && !empty($pass)){
//         $sql = "SELECT * FROM user WHERE uemail='$email' && upass = '$pass'";
//         $result = mysqli_query($con, $sql);
//         $row = mysqli_fetch_array($result);
//         if($row){
//             $_SESSION['uid']=$row['uid'];
//             $_SESSION['uemail']=$email;
//             header("location:index.php");
//         }else{
//             echo "<script> alert('email or password does not match')</script>";
//         }
//     }else{
//         echo "<script> alert('Kindly fill all the field')</script>";
//     }
// }

// 
?>
// ================ -->




// <?php
    // ini_set('session.cache_limiter','public');
    // session_cache_limiter(false);
    // session_start();
    // include("config.php");
    // $error= " ";
    // $msg= "";

    // if (!isset($_SESSION['uemail'])) {
    // 	header("location:signup.php");
    // }



    // if(isset($_POST['submit'])){

    //    $title = $_POST['ptitle'];
    //    $loc = $_POST['plocation'];
    //    $price = $_POST['pprice'];
    //    $room = $_POST['proom'];
    //    $kitchen = $_POST['Pkitchen'];
    //    $bath = $_POST['Pbath'];
    //    $water = $_POST['Pwater'];
    //    $sec = $_POST['Psecurity'];
    //    $people = $_POST['Ppeople'];
    //    $lightfee = $_POST['Plightfee'];
    //    $securityfee = $_POST['Psecurityfee'];
    //    $dur = $_POST['Pduration'];

    //    $user_id = $_SESSION['user_id'];
    //    $uid = rand(1111,9999);



    //    $aimg = $_FILES['aimg']['name'];
    //    $aimg1 = $_FILES['aimg1']['name'];
    //    $aimg2 = $_FILES['aimg2']['name'];
    //    $aimg3 = $_FILES['aimg3']['name'];
    //    $aimg4 = $_FILES['aimg4']['name'];

    //    $temp_name = $_FILES['aimg']['tmp_name'];
    //    $temp_name1 = $_FILES['aimg1']['tmp_name'];
    //    $temp_name2 = $_FILES['aimg2']['tmp_name'];
    //    $temp_name3 = $_FILES['aimg3']['tmp_name'];
    //    $temp_name4 = $_FILES['aimg4']['tmp_name'];

    //    move_uploaded_file($temp_name, "property/$aimg");
    //    move_uploaded_file($temp_name1, "property/$aimg1");
    //    move_uploaded_file($temp_name2, "property/$aimg2");
    //    move_uploaded_file($temp_name3, "property/$aimg3");
    //    move_uploaded_file($temp_name4, "property/$aimg4");

    //    $sql = "INSERT INTO property (utitle, ulocation, uprice, uroom,ukitchen,p_id, uid, ubathroom , uwater, usecuritty,upeople,ulightfee,usecurityfee,uduration, ubuildpic, uroompic, ukitchenpic, ubathroompic,uuserpic) VALUES ('$title', '$loc', '$price', '$room', '$kitchen','$user_id','$uid', '$bath','$water','$sec','$people','$lightfee','$securityfee','$dur', '$aimg','$aimg1','$aimg2','$aimg3', '$aimg4')";

    //    $result = mysqli_query($con, $sql);

    //    if($result){
    //     echo "<script>alert('Property inserted Successfully')</script>";
    //    }
    //    else{
    //     echo "<script>alert('Property not insert Successfully')</script>";
    //    }
    // }

    // 
    ?>
<?php
// ini_set('session.cache_limiter','public');
// session_cache_limiter(false);
// session_start();
// include("config.php");
// $error= " ";
// $msg= "";

if (!isset($_SESSION['uemail'])) {
    header("location:signup.php");
}



if (isset($_POST['submit'])) {

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

    $sql = "INSERT INTO proposal(`uname`, `ulocation`, `price`, `room`, `kitchen`, `bath`, `p_id`, `build-p`, `room-p`, `kitch-p`, `bath-p`, `water`, `usecurity`, `people`, `lightf`, `securityf`, `duration`) VALUES ('$title', '$loc', '$price', '$room', '$kitchen','$bath','$user_id', '$aimg','$aimg1','$aimg2','$aimg3','$water','$sec','$people','$lightfee','$securityfee','$dur')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Property inserted Successfully')</script>";
        // header("Location:./addproperty.php");
    } else {
        echo "<script>alert('Property not insert Successfully')</script>";
        // header("Location:./addproperty.php");
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
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>

    <?php
    include("./include/nav.php");
    ?>
    <!-- loader -->
    <div class="loader"></div>
    <!-- loader -->



    <div class="prop-container">
        <h1 class="header">Submit <span>Property</span></h1>
        <div class="form-group">
            <form method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" name="ptitle" required>
                    <label>title</label>
                </div>
                <div class="input-box">
                    <input type="text" name="plocation" required>
                    <label>location</label>
                </div>
                <div class="input-box">
                    <input type="text" name="pprice" required>
                    <label>Rent price</label>
                </div>
                <div class="input-box">
                    <input type="text" name="proom" required>
                    <label>Number of rooms</label>
                </div>
                <h2></h2>
                <h2></h2>
                <h4>Here, Choose Yes / No</h4>
                <h2></h2>
                <!-- <h2></h2>
                <h2></h2> -->
                <div class="input-box">
                    <select name="Pkitchen">
                        <option value="No">Kitchen</option>
                        <option value="Yes"> Yes</option>
                        <option value="No"> No</option>
                    </select>
                </div>

                <div class="input-box">
                    <select name="Pbath" required>
                        <option value="No">Bathroom</option>
                        <option value="Yes"> Yes</option>
                        <option value="No"> No</option>
                    </select>
                </div>

                <div class="input-box">
                    <select name="Pwater" required>
                        <option value="No">Water</option>
                        <option value="Yes"> Yes</option>
                        <option value="No"> No</option>
                    </select>
                </div>

                <div class="input-box">

                    <select name="Psecurity" required>
                        <option value="No">Security</option>
                        <option value="Yes"> Yes</option>
                        <option value="No"> No</option>
                    </select>
                </div>
                <h2></h2>
                <h2></h2>
                <h4>Here, Insert the number of people that can occupy one room</h4>
                <h2></h2>
                <h2></h2>
                <h2></h2>
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
                    picture of the building :
                    <input type="file" name="aimg" required>
                </div>

                <div class="input-box">
                    picture of the room :
                    <input type="file" name="aimg1" required>
                </div>

                <div class="input-box">
                    picture of the kitchen :
                    <input type="file" name="aimg2" required>
                </div>
                <div class="input-box">
                    picture of the bathroom :
                    <input type="file" name="aimg3" required>
                </div>
                <button type="submit" name="submit" class="contact-btn">Submit</button>
            </form>
        </div>
    </div>
    <?php
        include ("./include/footer2.php");
    ?>
    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>

</html>