<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    session_start();
    include ("config.php");
    // $user_id = $_SESSION['user_id'];
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>property page</title>
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/notify.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
<?php
    include "./include/nav.php";
?>
<!-- ==========Loader=========== -->
<div class="loader"></div>
<!-- ==========Loader=========== -->
<section>
    <div class="container">
        <?php
            $sql = "SELECT * FROM notifications WHERE no_id = $id";
            $result = mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($result)){
        ?>
        <div class="message-container">
            <div class="user">
                <i class="fa fa-user"></i>
            </div>
            <br>
            <div class="message-content">
            <?php
                echo $row['3'];
            ?>
            </div>
            <br>
            <small class="date"><?php
                echo $row['4'];
            ?></small>
        </div>
        <?php
            }
        ?>
    </div>
</section>
<?php
     include ("./include/footer2.php");
    ?>
    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>
</html>