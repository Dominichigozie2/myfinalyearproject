<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>property page</title>
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/property.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/loader.css">
</head>

<body>
    <?php
    include "./include/nav.php";
    ?>

    <!-- loader -->
    <div class="loader"></div>
    <!-- loader -->

    <div class="prop-container">
        <div class="row">
            <div class="box-con">
                <?php
                if (isset($_REQUEST['filter'])) {
                    $sloc = $_REQUEST['city'];
                    $sroom = $_REQUEST['room'];
                    $sprice = $_REQUEST['price'];
                    $sname = $_REQUEST['name'];

                    $sql = "SELECT * FROM `property` WHERE utitle = '$sname' AND ulocation = '$sloc' OR uprice = '$sprice' AND uroom = 'sroom'";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {

                ?>
                        <swiper-container class="mySwiper" init="false">
                            <?php
                            if ($result == true) {
                                while ($row = mysqli_fetch_array($result)) {
                                    $_SESSION["uid"] = $row['uid'];
                            ?>
                                    <swiper-slide class="box">
                                        <div class="box-img">
                                            <img src="property/<?php
                                                                echo $row['8'];
                                                                ?>" alt="pimage" class="box-img-img">
                                        </div>
                                        <div class="box-description">
                                            <div class="box-show">
                                                <h5 class="box-name">
                                                    <?php
                                                    echo $row['1'];                               ?><span class="text-muted"><i class="fa fa-location-pin"></i><?php
                                                                                                                                        echo $row['2'];
                                                                                                                                        ?></span></h3>
                                                    <a href="" class="box-btn"><?php
                                                                                echo $row['3'];
                                                                                ?></a>
                                            </div>
                                            <div class="box-hidden">
                                                <ul class="hidden-details">
                                                    <li><?php
                                                        echo $row['6'];
                                                        ?> <span>bath</span></li>
                                                    <li><?php
                                                        echo $row['4'];
                                                        ?><span>room</span></li>
                                                    <li><?php
                                                        echo $row['5'];
                                                        ?> <span>Kitchen</span></li>
                                                    <li><?php
                                                        echo $row['4'];
                                                        ?><span>room</span></li>
                                                </ul>
                                                <div class="box-buttons">
                                                    <a href="propertydetails.php?uid=<?php echo $row['7']; ?>
                                    " class="info-btn">View More</a>
                                                    <a href="#" class="buy-btn">Payments</a>
                                                </div>
                                            </div>
                                        </div>
                                    </swiper-slide>
                    <?php
                                }
                            }
                        } else {
                            echo " <script> alert('No property found')</script>";
                        }
                    }
                    ?>
                        </swiper-container>
            </div>

            <div class="right-cont">
                <h3 class="header">Recently added <span>properties</span></h3>
                <div class="recent-box-cont">
                    <?php
                    $query = ("SELECT * FROM property WHERE uid = uid limit 4");
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        $_SESSION["uid"] = $row['uid'];
                    ?>
                        <div class="recent-box">
                            <div class="recent-image">
                                <img src="./property/<?php echo $row[8];
                                                        ?>" alt="">
                            </div>
                            <div class="recent-details">
                                <h4><?php echo $row[1];
                                    ?></h4>
                                <p><i class="fa fa-location-pin"></i> <?php echo $row[2];
                                                                        ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <a href="#" class="show-more">View All</a>
            </div>

        </div>
    </div>
    <script src="./js/pagination.js"></script>
    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>

</html>