<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add to cart</title>
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>
<body>
    <?php
        include "./include/nav.php";
     ?> 
    <!-- nav -->
    <!-- loader  -->
    <div class="loader"></div>
    <!-- loader -->
    <div class="container">

    



    <swiper-container class="mySwiper" navigation="true">
    <?php
     $user_id = $_SESSION['uid'];
    //  $user_id = $_REQUEST['uid'];
    
     $query = ("SELECT * FROM property WHERE uid = $user_id");
     $result = mysqli_query($con, $query);
     while ($row = mysqli_fetch_array($result)) {
        if( $user_id == $row['uid']){
     ?>
        <swiper-slide><img src="./property/<?php
            echo $row[8];
        ?>" alt="">
            <h1>Building</h1>
        </swiper-slide>
        <swiper-slide><img src="./property/<?php
            echo $row[9];
        ?>" alt="">
            <h1>Room</h1>
        </swiper-slide>
        <swiper-slide><img src="./property/<?php
            echo $row[10];
        ?>" alt="">
            <h1>Kitchen</h1>
        </swiper-slide>
        <swiper-slide><img src="./property/<?php
            echo $row[11];
        ?>" alt="">
            <h1>Bathroom</h1>
        </swiper-slide>
        </swiper-container>
        <?php
        }
    }
        ?>
    </div>
</body>
</html>