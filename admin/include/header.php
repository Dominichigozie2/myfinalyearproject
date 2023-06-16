<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
</head>

<body>
    <div class="bord-container">
        <!--=============nav==============-->
        <div class="navigation">
            <ul class="sideNav">
                <li class=""><a href="./dashboard.php" class="nav-link">
                        <span class="icon"><i class="fa fa-home-alt"></i></span>
                        <span class="tittle">DashBoard</span>
                    </a></li>
                <li class="sub-btn"><a>
                        <span class="icon"><i class="fa fa-angle-down change"></i></span>
                        <span class="tittle">Users</span>
                    </a>
                </li>
                <ul class="sub-menu">
                    <li class="">
                        <a href="./users.php" class="nav-link">
                            <span class="icon"><i class="fa fa-user"></i></span>
                            <span class="tittle">Students</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="./propertyowner.php" class="nav-link">
                            <span class="icon"><i class="fa fa-user"></i></span>
                            <span class="tittle">Property Owners</span>
                        </a>
                    </li>
                    <li><a href="./room.php" class="nav-link">
                        <span class="icon"><i class="fa fa-bed"></i></span>
                        <span class="tittle">Room-mates</span>
                    </a></li>
                </ul>
                <li><a href="./contacts.php" class="nav-link">
                        <p class="message-count">
                            <?php
                            $sql = "SELECT * FROM contact_tb ORDER BY cid DESC LIMIT 5";
                            $result = mysqli_query($con, $sql);
                            if ($row = mysqli_num_rows($result)) {
                                echo $row;
                            }
                            ?>
                        </p>
                        <span class="icon">
                            <i class="fa fa-message"></i>
                        </span>
                        <span class="tittle">massage</span>
                    </a></li>
                    <li class="sub-btn2"><a>
                        <span class="icon"><i class="fa fa-angle-down change2"></i></span>
                        <span class="tittle">Property</span>
                    </a>
                </li>
                <ul class="sub-menu2">
                    <li class="">  
                        <a href="addproperty" class="nav-link">
                            <span class="icon"><i class="fa fa-plus"></i></span>
                            <span class="tittle">Add Property</span>
                        </a>
                    </li>
                    <li><a href="./property.php" class="nav-link">
                        <span class="icon"><i class="fa fa-box"></i></span>
                        <span class="tittle">property</span>
                    </a></li>
                </ul>
                <li><a href="./propose.php" class="nav-link">
                    <span class="icon"><i class="fa fa-box"></i></span>
                    <span class="tittle">proposals</span>
                </a></li>
                <li><a href="logout.php">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                        <span class="tittle">Logoout</span>
                    </a>
                </li>
            </ul>
        </div>


        <!--====================Main================= -->
        <div class="main">
            <div class="topbar">
                <div class="toggler">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="search">
                    <label>
                        <!-- <input type="text" placeholder="search here" 
                        name="search">
                        <i class="fa fa-search"></i> -->
                        <form action="./search.php" method="GET">
                            <input type="text" name="query" placeholder="Search...">
                            <select name="table">
                            <option value="">choose table</option>
                            <option value="user">User Table</option>
                            <option value="property">Property Table</option>
                            <option value="feed">Feed Table</option>
                            </select>
                            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </label>
                </div>
                <div class="user">
                    <?php
                    $id = $_SESSION['amail'];

                    $sql = "SELECT * FROM admin_tb WHERE amail = '$id'";
                    $query = mysqli_query($con, $sql);
                    if ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="imgae-box">
                            <img src="./user/<?php
                                                echo $row[5];
                                                ?>" alt="" />
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <ul class="sub-account">
                    <li><a href="./profile.php">Profile</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                    <li><a href="" class="danger">Delete account</a></li>
                </ul>
            </div>
        <!-- </div> -->
        <script src="./js/custom.js"></script>
</body>

</html>