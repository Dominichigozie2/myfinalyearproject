<?php

ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
$error = " ";
$msg = "";

$id = $_GET['id'];


if (isset($_POST['Add'])) {

    $aimg1 = $_FILES['aimg1']['name'];

    $temp_name1 = $_FILES['aimg1']['tmp_name'];

    move_uploaded_file($temp_name1, "upload/$aimg1");
    
         $sql = "UPDATE user SET uimage ='{$aimg1}' WHERE user_id = $id";
        $result=mysqli_query( $con, $sql);
        if($result){
           echo "<script> alert('Image updated')</script>";
           header("location:profile.php?echo=true");
        }else{
           echo "<script> alert('Updating Image Failed')</script>";
           header("location:profile.php?echo=false");
        }
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>property page</title>
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/editprop.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <?php
    include "./include/nav.php";
    ?>
    <div class="edit-container">

        <form method="post" action="#">
            <div class="input-box">
                <input type="file" name="aimg1" required>
            </div>

            <button type="submit" name="Add" class="edit-btn">Edit Image</button>
        </form>
    </div>

</body>

</html>