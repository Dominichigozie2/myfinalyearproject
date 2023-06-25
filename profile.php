
<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    session_start();
    include ("config.php");
    $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>property page</title>
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/nav.css">
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
    <section class="profile">
        <?php
          $sql = "SELECT * FROM user WHERE user_id = $user_id";
          $query = mysqli_query($con, $sql);
          if($row = mysqli_fetch_array($query)){
        ?>
        <div class="upper">
            <div class="profile-container">
                <div class="presonal-details">
                    <a class="image" href="editimage.php?id=<?php
                        echo $row['6'];
                    ?>">
                        <img src="./upload/<?php
                            echo $row['7'];
                        ?>" alt="">
                    </a>
                    <div class="content">
                        <h1 class="name"><?php
                            echo $row['1'];
                        ?></h1>
                        <h2 class="email"><?php
                            echo $row['2'];
                        ?></h2>
                        <h2 class="number"><?php
                            echo $row['4'];
                        ?></h2>
                    </div>
                </div>
               <a href="editprofile.php?uid=<?php
                   echo $row['6'];
               ?> 
               " class="profile-btn">Edit</a>
            </div>
        </div>
        <div class="profile-cont">
            <div class="container">
    <?php
        if($_SESSION['utype'] == "student"){
    ?>
                <div class="payment-content">
                    <br>
                    <br>
                    <br>
                    <h1>Details</h1>
                    <ul class="payment-menu">
                        <li>Name:<span><?php
                            echo $row['1'];
                        ?></span></li>
                        <li>Email<span><?php
                            echo $row['2'];
                        ?></span></li>
                        <li>Role<span><?php
                            echo $row['5'];
                        ?></span></li>
                        <li>Role_id<span><?php
                            echo $row['6'];
                        ?></span></li>
                        <li>Phone<span><?php
                            echo $row['4'];
                        ?></span></li>
                        <li>Gender<span><?php
                            echo $row['8'];
                        ?></span></li>
                        <li>Location<span><?php
                            echo $row['9'];
                        ?></span></li>
                        <li>Department<span><?php
                            echo $row['11'];
                        ?></span></li>
                    </ul>
                </div>
                <?php
          }
                ?>
                <br>
                <?php
          }
                ?>

                <br>
                <br>
                <div class="feed">
                    <h1>FeedBack</h1>
<?php
  if(isset($_REQUEST['feed'])){
    $name = $_REQUEST['fname'];
    $mail = $_REQUEST['fmail'];
    $sub = $_REQUEST['fsub'];
    $phone = $_REQUEST['fphone'];
    $text = $_REQUEST['ftext'];

    if(!empty($name) && !empty($mail) && !empty($sub)&& !empty($phone) && !empty($text)){
      $sql = "INSERT INTO feed_db (cname, cmail, cphone, csubject, ccomment) VALUES ('$name', '$mail', '$phone', '$sub', '$text')";
      $query = mysqli_query($con, $sql);
      if($query){
        echo "<script> alert('Feedback Sent')</script>"; 
      }else{
        echo "<script> alert('Feedback Not Sent')</script>";
      }
    }else{
        echo "<script> alert('Please fill the neccessary fields')</script>";
    }
  }
?>
                    <form action="#" method="post">
                        <div class="input-box">
                            <input type="text" name="fname" id="" placeholder="your Name" required>
                        </div>
                        <div class="input-box">
                            <input type="email" name="fmail" id="" placeholder="your email" required>
                        </div>
                        <div class="input-box">
                            <input type="text" name="fphone" id="" placeholder="your Phone Number" required>
                        </div>
                        <div class="input-box">
                            <input type="text" name="fsub" id="" placeholder="subject (Topic)" required>
                        </div>
                        <textarea name="ftext" id="" cols="30" rows="10" class="span-2" placeholder="message Us">
                        </textarea>
                        <input type="submit" class="feed-btn" name="feed" value="Send">
                    </form>
                </div>
                <?php
        if($_SESSION['utype'] == "student"){
    ?>
                <div class="down">

                    <div class="room-mate-details">
                        <h1>Room Mates</h1>
                        <div class="room-mate">
                            <div class="roommate-image">
                                <img src="./image/senior-man-face-portrait-wearing-bowler-hat_53876-148154.webp" alt="">
                            </div>
                            <div class="roommate-content">
                                <h1>Dominic</h1>
                                <h3>Dom@gmail.com</h3>
                                <h5>07046586037</h5>
                            </div>
                        </div>
                        <div class="room-mate">
                            <div class="roommate-image">
                                <img src="./image/senior-man-face-portrait-wearing-bowler-hat_53876-148154.webp" alt="">
                            </div>
                            <div class="roommate-content">
                                <h1>Dominic</h1>
                                <h3>Dom@gmail.com</h3>
                                <h5>07046586037</h5>
                            </div>
                        </div>
                        <div class="room-mate">
                            <div class="roommate-image">
                                <img src="./image/senior-man-face-portrait-wearing-bowler-hat_53876-148154.webp" alt="">
                            </div>
                            <div class="roommate-content">
                                <h1>Dominic</h1>
                                <h3>Dom@gmail.com</h3>
                                <h5>07046586037</h5>
                            </div>
                        </div>
                    </div>
                    <div class="cart">
                        <h1>About Me</h1>
                        <br>
                        <br>
                        <div class="about-content">
                            <?php
                                $sql ="SELECT * FROM user WHERE user_id = $user_id";
                                $query_run = mysqli_query($con, $sql);
                                if($row = mysqli_fetch_array($query_run)){
                                    
                            ?>
                            <p class="content-about">
                                <?php
                                echo $row[10];
                                ?>
                            </p>
                            <?php
                                }
                            ?>
                            <h1>Hobbies</h1>
                            <?php
                                $sql ="SELECT * FROM hubby_tb WHERE `ename` = '$user_id'";
                                $run = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_array($run)){
                            ?>
                            <ul class="hobby-list">
                            <li><?php
                                echo $row[2];
                                ?></li>
                            </ul>
                        <?php
                                }
                        ?>
                        </div>
                    </div>
                </div>
                <?php
        }
    ?>
            </div>
        </div>
    </section>
    
    <?php
     include ("./include/footer2.php");
    ?>
    <script src="./js/loader.js"></script>
    <script src="./js/nav.js"></script>
</body>

</html>