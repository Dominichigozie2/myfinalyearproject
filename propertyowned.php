<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/property.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <?php
    include "./include/nav.php";
    $query = "SELECT * FROM property WHERE p_id = $id";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $rid = $row['pid'];
    }
    ?>
    <div class="prop-container">

        <div class="row">
            <div class="box-con">
                <?php
                $id = $_GET["id"];
                $query = "SELECT * FROM `property`";

                $result = mysqli_query($con, $query);

                $num = mysqli_num_rows($result);
                $numberPages = 4;
                $totalPages = ceil($num / $numberPages);
                for ($btn = 1; $btn <= $totalPages; $btn++) {
                    echo '<button class="btn-b"><a href="properties.php?page=' . $btn . '">' . $btn . '</a></button>';
                }
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    // echo $page;
                } else {
                    $page = 1;
                }
                $startinglimit = ($page - 1) * $numberPages;
                $sql = "SELECT * FROM property WHERE p_id = $id LIMIT " . $startinglimit . ',' . $numberPages;
                $result = mysqli_query($con, $sql);
                ?>
                <swiper-container class="mySwiper" init="false">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <swiper-slide class="box">
                            <form method="post" action="cart.php">
                                <div class="box-img">
                                    <img src="property/<?php
                                                        echo $row['9'];
                                                        ?>" alt="pimage" class="box-img-img">
                                </div>
                                <div class="box-description">
                                    <div class="box-show">
                                        <h5 class="box-name"><?php
                                                                echo $row['1'];
                                                                ?><span class="text-muted"><i class="fa fa-location-pin"></i><?php
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
                                            <a href="propertydetails.php?id=<?php echo $row['0']; ?>
                                    " class="info-btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </swiper-slide>
                    <?php
                    }

                    ?>
                </swiper-container>
            </div>
            <div class="right-cont">
                <h3 class="header">Students added <span>to properties</span></h3>
                <div class="recent-box-cont">
                    <?php
                    $sql = "SELECT * FROM allocation_tb WHERE property_id = '$rid'";
                    $res = mysqli_query($con, $sql);
                    while($roll = mysqli_fetch_assoc($res)){
                        echo $roll["property_id"];
                    }
                    ?>
                        <div class="recent-box">
                            <div class="recent-image">
                                <img src="./property/young-attractive-woman-smiling-feeling-healthy-hair-flying-wind_176420-37515.webp" alt="">
                            </div>
                            <div class="recent-details">
                                <h4>Dominic</h4>
                                <p><i class="fa fa-location-pin"></i>Obosi</p>
                            </div>
                        </div>
                </div>
            <?php
                    // }
            ?>
            </div>

        </div>
    </div>
    <?php
    include("./include/footer2.php");
    ?>

</body>

</html>