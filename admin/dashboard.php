<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    session_start();
    include ("config.php");
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
 <?php
   include "./include/header.php";
 ?>
    <div class="container">
            <div class="cardBox">
                <div class="card" id="card" >
                    <div>
                        <div class="numbers"><?php
                            $sql = "SELECT * FROM user";
                            $result = $con->query($sql);
                            if($result = mysqli_num_rows($result)){
                                echo $result;
                            }
                        ?></div>
                        <div class="cardName">Total Users</div>
                    </div>

                    <div class="iconBox">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
                <div class="card active" id="card">
                    <div>
                        <div class="numbers"><?php
                            $sql = "SELECT * FROM property";
                            $result = $con->query($sql);
                            if($result = mysqli_num_rows($result)){
                                echo $result;
                            ?></div>
                        <div class="cardName">Total Propertie</div>
                    </div>

                    <div class="iconBox">
                        <i class="fa fa-boxes"></i>
                    </div>
                </div>
                <div class="card" id="card">
                    <div>
                        <div class="numbers"><?php
                            echo $result;
                            }

                            ?>
                            </div>
                        <div class="cardName">new properties</div>
                    </div>

                    <div class="iconBox">
                        <i class="fa fa-add"></i>
                    </div>
                </div>
                <div class="card" id="card">
                    <div>
                        <div class="numbers">2</div>
                        <div class="cardName">sold properies</div>
                    </div>

                    <div class="iconBox">
                        <i class="fa fa-sack-dollar"></i>
                    </div>
                </div>

            </div>
            <!-- ================recent messages========== -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Messages</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Subject</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM contact_tb ORDER BY cid DESC LIMIT 5";
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result)){
                    ?>
                            <tr>
                                <td><?php
                                    echo  $row[1];
                                ?></td>
                                <td><?php
                                    echo  $row[2];
                                ?></td>
                                <td><?php
                                    echo  $row[3];
                                ?></td>
                                <td><?php
                                    echo  $row[4];
                                ?></td>
                            </tr>
                    <?php
                        } 
                    ?>
                        </tbody>
                    </table>
                </div>
                <!-- ================recent messages========== -->

                <!-- ==========new customers============-->
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>New Users</h2>
                    </div>

                    <table>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM user ORDER BY uid DESC LIMIT 4";
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result)){
                        ?>
                            <tr>
                                <td>
                                <img src="../upload/<?php
                                    echo  $row[7];
                                ?>" alt="">
                                </td>
                                <td>
                                <?php
                                    echo  $row[1];
                                ?>
                                </td>
                            </tr>
                            <?php
                              }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- ============New custemer ==========-->
            </div>

        </div>
                        
        <!--====================Main================= -->

    </div>
    <script src="./js/custom.js"></script>
</body>
</html>