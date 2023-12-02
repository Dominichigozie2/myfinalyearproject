<?php
include("config.php");
if (isset($_REQUEST['ssubmit'])) {
    $name = $_REQUEST['sname'];
    $email = $_REQUEST['smail'];
    $pass = $_REQUEST['spassword'];
    $phone = $_REQUEST['sphone'];

    $aimg1 = $_FILES['aimg1']['name'];

    $temp_name1 = $_FILES['aimg1']['tmp_name'];

    move_uploaded_file($temp_name1, "user/$aimg1");

    $query = "SELECT * FROM admin_tb WHERE amail = '$email'";
    $res = mysqli_query($con, $query);
    $num = mysqli_num_rows($res);

    $que = "SELECT * FROM admin_tb";
    $result = mysqli_query($con, $que);
    $row = mysqli_num_rows($result);
    
    if ($num == 1) {
        echo "<script> alert ('Email Id Already exit' )</script>";
    } elseif($row < 3){
        if (!empty($name) && !empty($email) && !empty($pass) && !empty($phone)) {
            $sql = "INSERT INTO admin_tb (aname,amail,apass,aphone,aimg) VALUES ('$name','$email','$pass','$phone','$aimg1')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script> alert('Signup successful') </script>";
            } else {
                echo  "<script> alert('Signup failed') </script>";
            }
        } else {
            echo "<script> alert('please fill all the fields') </script>";
        }    
    }else{
        echo "<script> alert('Admin can not be more than three users, kindly delete one user if you want to add another') </script>";
    }
}
?>
 

<?php
session_start();
include("config.php");

if(isset($_REQUEST['log']))
{
    $email = $_REQUEST['lmail'];
    $pass = $_REQUEST['lpass'];
    

    if(!empty($email) && !empty($pass)){
        $sql = "SELECT * FROM admin_tb WHERE amail='$email' && apass = '$pass'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        if($row){
            header("location:dashboard.php");
            $_SESSION['amail'] = $row['amail'];
            $_SESSION['id'] = $row['id'];
        }
        else{
            echo "<script> alert('email or password does not match')</script>";
        }
    }else{
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



    <section class="login-signup">
        <div class="form-group">
            <ul class="form-menu" id="btn">
                <button type="button" class="active sign">signup</button>
                <button type="button" class="login">login</button>
            </ul>
            <div class="signup-form">
            <form method="post" enctype="multipart/form-data" id="signup">
                    <div class="input-box">
                        <input type="text" name="sname" required>
                        <label>Name</label>
                        <span><i class="fa fa-user"></i></span>
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
                    
                    <div class="input-box">
                        <input type="file" name="aimg1" required>
                        <!-- <span><i class="fa fa-phone"></i></span> -->
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

    <script src="../js/script.js">
    </script>
</body>

</html>