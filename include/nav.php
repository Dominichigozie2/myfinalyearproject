<?php
// ini_set('session.cache_limiter','public');
// session_cache_limiter(false);
// session_start();
include("./config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css link -->
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">

</head>

<body>
    <div class="firstnav">
        <div class="nav-view">
          <div class="right">
            <li><i class="fa fa-phone"></i> +234 7046 5860 37</li>
            <li><i class="fa fa-envelope"></i> chigoziedomnic@gmail.com</li>
          </div>    
          <div class="center">
          </div>    
          <div class="left">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-whatsapp"></i>
            <i class=""></i>
            <i class=""></i>
            <br>
            <br>
            <div class="notification">
            <?php
                 if(isset($_SESSION['utype'])){
                    if ($_SESSION['utype'] != 'landlord'){
            ?>
                <i class="fa fa-bell" id="notibtn"></i>
                <label class="sign">
                    <?php
                        $sql = "SELECT * FROM `notifications` LIMIT 3";
                        $query = mysqli_query($con, $sql);
                        if($row = mysqli_num_rows($query)){
                            echo $row;
                        }
                    ?>
                </label>
                <div class="notification-cont">
                <?php
                    $sql = "SELECT * FROM `notifications` LIMIT 4";
                    $query = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
                
                    <a href="notify.php?id=<?php
                        echo $row['0'];
                    ?>"><li>
                        <p class="Name"><?php
                        echo $row['5'];
                    ?></p>
                        <small><?php
                        echo $row['4'];
                    ?></small>
                    </li></a>
                <?php
                    }
                }
                ?>
                </div>
                <?php
                }
                ?>
            </div>
          </div>    
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="nav">

                <div class="logo">
                    <img src="./image/logo.png" alt="">
                </div>
                <?php
                    if (isset($_SESSION['utype'])) {
                    ?>
                <ul class="nav-list">
                    <a href="./index.php" class="nav-link" id="nav-link">
                        <li>Home</li>
                    </a>
                    <a href="./about.php" class="nav-link" id="nav-link">
                        <li>about</li>
                    </a>
                    <a href="./properties.php" class="nav-link" id="nav-link">
                        <li>properties</li>
                    </a>
                    <a href="./contact.php" class="nav-link" id="nav-link">
                        <li>contact</li>
                    </a>
                    <button id="parent-menu" class="nav-link" id="nav-link">
                        <li id="btn">Account
                        <?php
                    if (isset($_SESSION['utype'])) {
                    ?>
                            <ul class="sub-menu">
                                <?php
                                    if ($_SESSION['utype'] != 'landlord') {
                                ?>
                                <a href="./profile.php" class="nav-link"id="nav-link">
                                    <li>Profile</li>
                                </a>
                                <a href="./studentpropose.php?id=<?php
                                    echo $_SESSION['user_id'];
                                ?>" class="nav-link"id="nav-link">
                                    <li>Hostel Proposal</li>
                                </a>
                                <?php
                                    }else{
                                ?>
                                <a href="./profile.php" class="nav-link"id="nav-link">
                                    <li>Profile</li>
                                </a>
                                <a href="./propertyowned.php?id=<?php
                                    echo $_SESSION["user_id"];
                                ?>" class="nav-link"id="nav-link">
                                    <li>Your property</li>
                                </a>
                                <?php
                                    }
                                ?>
                            </ul>
                            <?php
                        }
                    ?>
                        </li>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>
                    <?php
                    if (isset($_SESSION['utype'])) {
                        if ($_SESSION['utype'] == 'landlord') {
                    ?>
                            <a href="addproperty.php" class="nav-link"id="nav-link">
                                <li>Submit property</li>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </ul>
                <?php
                    }else{
                ?>
                
                <ul class="nav-list">
                    <a href="./index.php" class="nav-link" id="nav-link">
                        <li>Home</li>
                    </a>
                    <a href="./about.php" class="nav-link" id="nav-link">
                        <li>about</li>
                    </a>
                    <a href="./properties.php" class="nav-link" id="nav-link">
                        <li>properties</li>
                    </a>
                    <a href="./contact.php" class="nav-link" id="nav-link">
                        <li>contact</li>
                    </a>
                    <!-- <a href="#" class="nav-link" id="nav-link">
                        <li>Pages</li>
                    </a> -->
                    <button id="parent-menu" class="nav-link" id="nav-link">
                        <li id="btn">Account
                        <?php
                    if (isset($_SESSION['utype'])) {
                    ?>
                            <ul class="sub-menu">
                                <?php
                                    if ($_SESSION['utype'] != 'landlord') {
                                ?>
                                <a href="./signup.php" class="nav-link"id="nav-link">
                                    <li>Profile</li>
                                </a>
                                <?php
                                    }else{
                                ?>
                                <a href="" class="nav-link"id="nav-link">
                                    <li>Your property</li>
                                </a>
                                <?php
                                    }
                                ?>
                            </ul>
                            <?php
                        }
                    ?>
                        </li>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>
                    <?php
                    if (isset($_SESSION['utype'])) {
                        if ($_SESSION['utype'] == 'landlord') {
                    ?>
                            <a href="addproperty.php" class="nav-link"id="nav-link">
                                <li>Submit property</li>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </ul>
                <?php
                    }
                ?>
                <?php
                if (isset($_SESSION['uemail'])) {
                ?>
                    <a href="./logout.php" class="nav-btn">Logout</a>
                <?php } else { ?>
                    <a href="./signup.php" class="nav-btn">Login/Register</a>
                <?php
                } ?>
            </div>
        </div>
        <div class="bars">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
    <!-- nav -->

    <!-- ..................side nav..............-->
    <aside class="side-bar">
        <div class="close">
            <i class="fa fa-times"></i>
        </div>
        <ul class="sidenav-list">
            <a href="./index.php" class="sidenav-link">
                <li>Home</li>
            </a>
            <a href="./about.php" class="sidenav-link">
                <li>about</li>
            </a>
            <a href="./properties.php" class="sidenav-link">
                <li>properties</li>
            </a>
            <a href="./contact.php" class="sidenav-link">
                <li>contact</li>
            </a>
            <a href="#" class="sidenav-link">
                <li>Pages</li>
            </a>
            <button class="sidenav-link sub-btn">
                <li>Account</li>
            </button>
            <ul class="smenu">
                <a href="#" class="sidenav-link">
                    <li>Profle</li>
                </a>
                <br>
                <a href="#" class="sidenav-link">
                    <li>Your Property</li>
                </a>
            </ul>
            <?php
            if ($_SESSION['utype'] == 'landlord') {

            ?>
                <a href="addproperty.php" class="nav-link">
                    <li>Submit property</li>
                </a>
            <?php
            }
            ?>
        <?php
        if (isset($_SESSION['uemail'])) {
            ?>
            <a href="./logout.php" class="sidenav-btn">Logout</a>
            <?php } else { ?>
                <a href="./signup.php" class="sidenav-btn">Login/Register</a>
                <?php
        } ?>
        </ul>
    </aside>
    <!-- ..................side nav..............-->


    <script src="../js/nav.js"></script>
    <script src="../js/loader.js"></script>
</body>

</html>