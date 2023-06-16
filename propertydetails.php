<?php 
ini_set('session.cache_limiter','public');
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
    <title>About Page</title>
   <link rel="stylesheet" href="./css/swiper-element-bundle.min.css"> 
   <link rel="stylesheet" href="./css/nav.css">
   <link rel="stylesheet" href="./css/propertydetails.css">
   <link rel="stylesheet" href="./css/loader.css">
   <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
    <?php
        include "./include/nav.php";
    ?>



    <!-- preloader -->
    <div class="loader"></div>
    <!-- preloader -->
    <swiper-container class="mySwiper fade-out" init="true">
    <?php
    $id = $_GET['id'];

    $sql = "SELECT * FROM property WHERE pid = $id";
    $result= mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)){
    ?>
      <swiper-slide class="box">
            <img src="./property/<?php
            echo $row['9'];
            ?>" alt="">
        </swiper-slide>
        <swiper-slide class="box">
            <img src="./property/<?php
            echo $row['10'];
            ?>" alt="">
        </swiper-slide>
        <swiper-slide class="box">
            <img src="./property/<?php
            echo $row['11'];
            ?>" alt="">
        </swiper-slide>
        <swiper-slide class="box">
            <img src="./property/<?php
            echo $row['12'];
            ?>" alt="">
        </swiper-slide>
        <?php
          }
        ?>
    </swiper-container>

    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM property WHERE pid = $id";
    $result= mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)){
    ?>
<div class="building-container">
    <h1>Building Info</h1>
    <div class="house-info">
        <li>house Name <span><?php
        echo $row['1'];
        ?>
        </span></li>
        <li>Location <span><?php
        echo $row['2'];
        ?></span></li>
        <li>Number of rooms <span><?php
        echo $row['4'];
        ?></span></li>
        <li>numer of bathroom <span><?php
        echo $row['6'];
        ?></span></li>
        <li>Roommates <span><?php
        echo $row['16'];
        ?></span></li>
        <li>Security <span><?php
        echo $row['15'];
        ?></span></li>
        <li>Kitchen <span><?php
        echo $row['5'];
        ?></span></li>
        <li>Bathroom <span><?php
        echo $row['6'];
        ?></span></li>
        <li>water <span><?php
        echo $row['14'];
        ?></span></li>
        <li>Duration <span><?php
        echo $row['19'];
        ?></span></li>
        <li>house_id <span><?php
        echo $row['7'];
        ?></span></li>
    </div>
    <h1>Building fees</h1>
    <div class="house-fee">
        <li>house rent <span><?php
        echo $row['3'];
        ?></span></li>
        <li>Light <span><?php
        echo $row['17'];
        ?></span></li>
        <li>Security <span>2000</span></li>
        <a href="./payment.php" class="pay-btn">Payment</a>
    </div>
            <?php
              }
            ?>
    <div class="owner-info">
        <?php
          $id = $_GET['id'];
          
          $sql = "SELECT property.*, user.* FROM property, user WHERE property.p_id = user.user_id AND pid = $id";
          $result= mysqli_query($con, $sql);
          while($row = mysqli_fetch_assoc($result)){
          ?>
              <div class="owner-image">
                  <img src="./upload/<?php
                  echo $row['uimage'];
                  ?>" alt="">
              </div>
        <div class="owner-details">
            <h2 class="name"><?php
                echo $row['uname'];
            ?></h2>
            <br>
            <h3 class="number">07046586037</h3>
        </div>
        <?php
          }
        ?>
    </div>

</div>


<?php
     include ("./include/footer2.php");
    ?>
 <script src="./js/swiper-element-bundle.min.js">
    
    const swiperEl = document.querySelector('.mySwiper')
        Object.assign(swiperEl, {
            slidesPerView: 2,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                "@0.00": {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                "@0.75": {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                "@1.00": {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                "@1.50": {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
        swiperEl.initialize();
 </script>
 
 <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>
</html?