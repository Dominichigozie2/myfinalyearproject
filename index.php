<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

if(!isset($_SESSION['uemail'])){
    header("location:./signup.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

    <!-- bootstrap link -->
    <!-- <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css"> -->

    <!-- swiper  link -->
    <link rel="stylesheet" href="./css/swiper-element-bundle.min.css">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">

    <!-- css link -->
    <link rel="stylesheet" href="./css/nav.css">

    <link rel="stylesheet" href="./css/style.css">
    <!-- preloader css -->
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



    <!-- home -->
    <div class="home overflow">
    <div class="bg-cloth">
    </div>
        <div class="home-contain">
                <div class="home-container fade-from-left">
                    <div class="home-content">
                        <h2>Find a better <br> <span class="large">Place to live</span><br> </h2>
                    </div>
                    <div class="form-search">
                        <form action="propertysearch.php" method="post">
                            <div class="input-box">
                                <select name="room">
                                    <option value="">select Numer of rooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <select name="price">
                                    <option value="">price</option>
                                    <option value="100000">N100,000.00</option>
                                    <option value="120000">N120,000.00</option>
                                    <option value="180000">N180,000.00</option>
                                    <option value="200000">N200,000.00</option>
                                    <option value="240000">N240,000.00</option>
                                    <option value="260000">N260,000.00</option>
                                    <option value="290000">N290,000.00</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <input type="text" name="name" id="search" placeholder="Search Name">
                            </div>
                            <div class="input-box">
                                <input type="text" name="city" id="search" placeholder="Search Location">
                            </div>
                            <input type="submit" value="Search" name="filter">
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <!-- home -->

    <!-- service -->
    <section class="services overflow">
        <div class="container">
            <h4 class="header">we provide the <span>Best services</span></h2>
                <br>
                <br>
                <div class="service-container">
                    <div class="services-box fade-from-right">
                        <div class="icon warning">
                            <i><img src="./video/9284457.gif" alt=""> </i>
                        </div>
                        <h4><b>lorem</b></h4>
                        <p class="service-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat,
                            debitis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, est?</p>
                        <a href="#" class="color-dark service-link">Read more...</a>
                    </div>
                    <div class="services-box fade-from-right">
                        <div class="icon warning">
                            <i> <img src="./video/info.gif" alt=""> </i>
                        </div>
                        <h4><b>lorem</b></h4>
                        <p class="service-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat,
                            debitis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, est?</p>
                        <a href="#" class="color-dark service-link">Read more...</a>
                    </div>
                    <div class="services-box fade-from-right">
                        <div class="icon warning">
                            <i><img src="./video/roommate.gif" alt=""> </i>
                        </div>
                        <h4><b>lorem</b></h4>
                        <p class="service-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat,
                            debitis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, est?</p>
                        <a href="#" class="color-dark service-link">Read more...</a>
                    </div>
                    <div class="services-box fade-from-right">
                        <div class="icon warning">
                            <i><img src="./video/security.gif" alt=""> </i>
                        </div>
                        <h4><b>lorem</b></h4>
                        <p class="service-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat,
                            debitis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, est?</p>
                        <a href="#" class="color-dark service-link">Read more...</a>
                    </div>
                </div>
        </div>
    </section>
    <!-- service -->

    <!--process -->
    <section class="process overflow">
        <div class="bgd-cloth">
            <div class="process-container">
                <div class="process-image fade-from-left">
                    <img src="./image/Untitled-3.png" alt="" width="100%" height="100%">
                </div>
                <div class="process-content fade-fro-right">
                    <h3>How It Works</h3>
                    <p class="process-text fade-out">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, voluptas
                        architecto. Dolore, ea quis odit a repellendus incidunt eligendi</p>
                    <ol type="1" class="process-list fade-from-right">
                        <li><span><b>Login</b>
                                Lorem ipsum dolor sit Lorem ipsum dolor sit amet. </span>
                        </li>
                        <li><span><b>search for houses</b>
                                Lorem ipsum dolor sit Lorem ipsum dolor sit amet. </span></li>
                        <li><span><b>room-mate(optional)</b>
                                Lorem ipsum dolor sit Lorem ipsum dolor sit amet. </span></li>
                        <li><span><b>sign documents</b>
                                Lorem ipsum dolor sit Lorem ipsum dolor sit amet. </span></li>
                        <li><span><b>payments</b>
                                Lorem ipsum dolor sit Lorem ipsum dolor sit amet. </span></li>
                    </ol>
                    <div class="process-buttons fade-out">
                        <a href="#" class="process-btn-1">Get started</a>
                        <a href="./about.php" class="process-btn-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about us -->

    <div class="about overflow">
        <div class="container about-container">
            <div class="about-contents fade-from-left">
                <h3>Our company</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus voluptas officiis omnis minima
                    consectetur voluptate nostrum autem laudantium quod facilis exercitationem aspernatur eum molestias
                    excepturi voluptatem laboriosam eaque, quaerat expedita.
                    <br>
                    <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsa officiis amet, expedita
                    praesentium eveniet ducimus dicta accusantium quidem corporis culpa maxime fugit, consequuntur
                    doloribus quisquam asperiores ut perferendis natus nobis odit aperiam maiores nulla. Ea beatae,
                    illum sit eligendi deserunt voluptatibus deleniti velit voluptas consequuntur facere neque
                    recusandae facilis?
                </p>
                <a href="./about.php" class="about-btn">Learn more</a>
            </div>
            <div class="about-image fade-from-right">
                <img src="./image/about.png" alt="">
            </div>
        </div>
    </div>
    <!-- about us -->

    <!-- properties -->
    <section class="properties overflow">
        <div class="container">
            <h3 class="header">recent <span>property</span></h3>
            <swiper-container class="mySwiper fade-out" init="false">
                <?php
                $query = "SELECT * FROM property WHERE uid = uid";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $_SESSION["uid"] = $row['uid'];
                ?>
                    <swiper-slide class="box">
                        <div class="box-img">
                            <img src="property/<?php
                                                echo $row['9'];
                                                ?>" alt="pimage" class="box-img-img">
                            <h5 class="status">for rent</h5>
                        </div>
                        <div class="box-description">
                            <div class="box-show">
                                <h5 class="box-name"><?php echo $row[1];
                                                        ?><span class="text-muted"><i class="fa fa-location-pin"></i><?php echo $row[2];
                                                                                            ?></span></h3>
                                    <a href="" class="box-btn"><?php echo $row[3];
                                                                ?></a>
                            </div>
                            <div class="box-hidden">
                                <ul class="hidden-details">
                                    <li><?php echo $row[6];
                                        ?> <span>bath</span></li>
                                    <li><?php echo $row[4];
                                        ?><span>room</span></li>
                                    <li><?php echo $row[5];
                                        ?> <span>Kitchen</span></li>
                                    <li><?php echo $row[14];
                                        ?><span>Water</span></li>
                                </ul>
                                <div class="box-buttons">
                                    <a href="./propertydetails.php?id=<?php
                                    echo $row[0];
                                    ?>" class="info-btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                <?php
                }
                ?>
            </swiper-container>
        </div>
    </section>
    <!-- properties -->

    <!-- Number of available things -->
    <!-- Number of available things -->

    <!-- why choose us -->
    <section class="choose overflow">
        <div class="chosse-container container">
            <div class="choose-img fade-from-left">
                <img src="./image/why.png" alt="">
            </div>
            <div class="choose-content fade-fro-right">
                <h3 class="header">Why choose us</h3>
                <div class="choose-list">
                    <div class="choose-box fade-from-right">
                        <i class="fa fa-check-circle"></i>
                        <p>Top Rated<span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, minus.</span>
                        </p>
                    </div>
                    <div class="choose-box fade-from-right">
                        <i class="fa fa-check-circle"></i>
                        <p>Experience Quality<span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias,
                                minus.</span></p>
                    </div>
                    <div class="choose-box fade-from-right">
                        <i class="fa fa-check-circle"></i>
                        <p>100% Security<span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias,
                                minus.</span></p>
                    </div>
                    <div class="choose-box fade-from-right">
                        <i class="fa fa-check-circle"></i>
                        <p>24/7 Support<span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias,
                                minus.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose us -->

    <!-- testminial -->
    <section class="test overflow">
        <div class="container">
            <h3 class="header"><span>users</span> says</h3>
            <swiper-container class="mySwiper-1 fade-out" init="false">
                <swiper-slide class="test-box">
                    <div class="test-image">
                        <img src="./image/portrait-african-american-man_23-2149072178.webp" alt="">
                    </div>
                    <div class="text-content">
                        <h3 class="heading">a great platform</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cum pariatur labore sunt culpa autem natus earum eum debitis molestiae aliquam laboriosam alias fugiat, eaque voluptate officiis quidem voluptatem sed.</p>
                        <br>
                        <h4 class="clientnamestatus">Dom <span>student</span> </h4>
                    </div>
                </swiper-slide>
                <swiper-slide class="test-box">
                    <div class="test-image">
                        <img src="./image/portrait-african-american-man_23-2149072178.webp" alt="">
                    </div>
                    <div class="text-content">
                        <h3 class="heading">a great platform</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cum pariatur labore sunt culpa autem natus earum eum debitis molestiae aliquam laboriosam alias fugiat, eaque voluptate officiis quidem voluptatem sed.</p>
                        <br>
                        <h4 class="clientnamestatus">Dom <span>student</span> </h4>
                    </div>
                </swiper-slide>
                <swiper-slide class="test-box">
                    <div class="test-image">
                        <img src="./image/portrait-african-american-man_23-2149072178.webp" alt="">
                    </div>
                    <div class="text-content">
                        <h3 class="heading">a great platform</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cum pariatur labore sunt culpa autem natus earum eum debitis molestiae aliquam laboriosam alias fugiat, eaque voluptate officiis quidem voluptatem sed.</p>
                        <br>
                        <h4 class="clientnamestatus">Dom <span>student</span> </h4>
                    </div>
                </swiper-slide>
                <swiper-slide class="test-box">
                    <div class="test-image">
                        <img src="./image/portrait-african-american-man_23-2149072178.webp" alt="">
                    </div>
                    <div class="text-content">
                        <h3 class="heading">a great platform</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cum pariatur labore sunt culpa autem natus earum eum debitis molestiae aliquam laboriosam alias fugiat, eaque voluptate officiis quidem voluptatem sed.</p>
                        <br>
                        <h4 class="clientnamestatus">Dom <span>student</span> </h4>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </section>
    <br>
    <br>
    <br>
    <!-- testminial -->
    <?php
        include ("./include/footer.php");
    ?>

    <script src="./js/swiper-element-bundle.min.js"></script>
    <script>
        const swiperEl = document.querySelector('.mySwiper')
        Object.assign(swiperEl, {
            slidesPerView: 1,
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
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                "@1.50": {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
        swiperEl.initialize();

        const swiperElOne = document.querySelector('.mySwiper-1')
        Object.assign(swiperElOne, {
            slidesPerView: 1,
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
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                "@1.50": {
                    slidesPerView: 2,
                    spaceBetween: 50,
                },
            },
        });
        swiperElOne.initialize();
    </script>
    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>

</html>