<?php
include("config.php");
$error = "";
$msg = "";
if (isset($_REQUEST['ssubmit'])) {
    $surname = $_REQUEST['surname'];
    $name = $_REQUEST['sname'];
    $othername = $_REQUEST['othername'];
    $email = $_REQUEST['smail'];
    $pass = $_REQUEST['spassword'];
    $phone = $_REQUEST['sphone'];
    $type = $_REQUEST['utype'];
    $gender = $_REQUEST['ugender'];
    $user_id = rand(1111, 9999);

    $aimg1 = $_FILES['aimg1']['name'];

    $temp_name1 = $_FILES['aimg1']['tmp_name'];

    move_uploaded_file($temp_name1, "upload/$aimg1");

    $query = "SELECT * FROM user WHERE uemail = '$email'";
    $res = mysqli_query($con, $query);
    $num = mysqli_num_rows($res);

    if ($num == 1) {
        echo "<script> alert ('Email Id Already exit' )</script>";
    } else {
        if (!empty($name) && !empty($email) && !empty($pass) && !empty($phone) && !empty($type)) {
            $sql = "INSERT INTO user (uname,uemail,upass,uphone,utype,gender, user_id, uimage, surname,othername) VALUES ('$name','$email','$pass','$phone','$type','$gender','$user_id','$aimg1','$surname','$othername')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script> alert('Signup successful') </script>";
            } else {
                echo  "<script> alert('Signup failed') </script>";
            }
        } else {
            echo "<script> alert('please fill all the fields') </script>";
        }
    }
}
?>


<?php
session_start();
include("config.php");

if (isset($_REQUEST['log'])) {
    $email = $_REQUEST['lmail'];
    $pass = $_REQUEST['lpass'];


    if (!empty($email) && !empty($pass)) {
        $sql = "SELECT * FROM user WHERE uemail='$email' && upass = '$pass'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row['utype'] == 'student' || $row['utype'] == 'landlord') {
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['uemail'] = $row['uemail'];
            $_SESSION['utype'] = $row['utype'];
            $_SESSION['user_id'] = $row['user_id'];
            header("location:index.php");
        } else {
            echo "<script> alert('email or password does not match')</script>";
        }
    } else {
        echo "<script> alert('Kindly fill all the field')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
</head>

<body>

    <!-- loader -->
    <div class="loader"></div>
    <!-- loader -->

    <section class="login-signup">
        <div class="form-group">
            <ul class="form-menu" id="btn">
                <button type="button" class="active sign">signup</button>
                <button type="button" class="login">login</button>
            </ul>
            <div class="signup-form">
                <form method="post" enctype="multipart/form-data" id="signup">
                    <div class="group-input">
                        <div class="input-box">
                            <input type="text" name="surname" required>
                            <label>Surname</label>
                            <span><i class="fa fa-user"></i></span>
                        </div>
                        <div class="input-box">
                            <input type="text" name="sname" required>
                            <label>Name</label>
                            <span><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="group-input">
                    <div class="input-box">
                            <input type="text" name="othername" required>
                            <label>Other Names</label>
                            <span><i class="fa fa-user"></i></span>
                        </div>
                     <div class="input-box">
                         <input type="file" name="aimg1" required>
                         <span><i class="fa fa-image"></i></span>
                     </div>
                    </div>
                    <div class="input-box">
                        <input type="email" name="smail" required>
                        <label>email</label>
                        <span><i class="fa fa-envelope"></i></span>
                    </div>
                    <div class="input-box">
                        <input type="password" name="spassword" required>
                        <label>Password</label>
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="input-box">
                        <input type="text" name="sphone" required>
                        <label>Phone</label>
                        <span><i class="fa fa-phone"></i></span>
                    </div>

                    <div class="group-input">
                        <div class="input-box">
                            <select name="utype" required="required">
                                <option value="">Select Role</option>
                                <option value="student">Student</option>
                                <option value="landlord">Property Owner</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <select name="ugender" required="required">
                                <option value="">Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" name="ssubmit" class="signup-btn" value="Signup">

                    <p class="quest">already have an account? <a href="#">Login</a></p>
                </form>















                <!--=============login====================-->
                <!--=============login====================-->
                <form action="#" method="post" id="login">
                    <div class="input-box">
                        <input type="Email" name="lmail" required>
                        <label>Email</label>
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="input-box">
                        <input type="password" name="lpass" required>
                        <label>Password</label>
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="submit" class="signup-btn" name="log">
                    <p class="quest">Don't have an account ? <a href="#">Signup</a></p>
                </form>
                <!--=============login====================-->
            </div>
        </div>
    </section>

    <script src="./js/script.js">
    </script>
    <script src="./js/loader.js"></script>
</body>

</html>