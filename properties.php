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
    <link rel="stylesheet" href="./css/footer.css">
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
    
                    $query = "SELECT * FROM `property`";

                    $result = mysqli_query($con,$query);

                    $num = mysqli_num_rows($result);
                    $numberPages= 4;
                    $totalPages = ceil($num/$numberPages);
                    for($btn=1;$btn<= $totalPages; $btn++){
                        echo '<button class="btn-b"><a href="properties.php?page='.$btn.'">'.$btn.'</a></button>';
                    }
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        // echo $page;
                    }else{
                        $page = 1;
                    }
                    $startinglimit = ($page-1)*$numberPages;
                    $sql = "SELECT * FROM property WHERE uid = uid LIMIT " .$startinglimit.','.$numberPages;
                    $result = mysqli_query($con,$sql);
                    ?>
                <swiper-container class="mySwiper" init="false">
                    <?php
                    while ($row = mysqli_fetch_array($result)){
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
                                        <input type="submit" name="submit"  
                                        href=""value="Add Cart" class="buy-btn">
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
                                <img src="./property/<?php echo $row[9];
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
    
    <?php
     include ("./include/footer2.php");
    ?>
    <script src="./js/pagination.js"></script>
    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>

</html>