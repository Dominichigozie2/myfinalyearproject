<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(isset($_SESSION['amail']))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="./css/profile.css">
</head>
<body>
    <?php
        include "./include/header.php";
    ?>
    <div class="container profile-container">
        <div class="user-personal-info">
        <?php
        $id = $_SESSION['amail'];
        $sql = "SELECT * FROM admin_tb WHERE amail = '$id' ";
        $query = mysqli_query($con,$sql);
        if($row = mysqli_fetch_array($query)){
        ?>  
            <div class="imgae-box">
                <img src="./user/<?php
                    echo $row['5'];
                ?>" alt=""/>
            </div>
            <div class="user-details">
                <h1 class="user-name"><?php
                    echo $row['1'];
                ?>
                    <span><?php
                    echo "Admin";
                ?></span>
                </h1>
                <h2 class="mail"><?php
                    echo $row['3'];
                ?></h2>
                <h3><?php
                    echo $row['4'];
                ?></h3> 
            </div>
            <?php
        }
            ?>
        </div>
    </div>
</body>
</html>