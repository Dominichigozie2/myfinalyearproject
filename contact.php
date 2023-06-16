<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
$error= " ";
$msg= "";


if(isset($_POST['send']))
{
    $name=$_POST['Pname'];
    $mail=$_POST['Pmail'];
    $phone=$_POST['Pphone'];
    $sub=$_POST['Psub'];
    $comment=$_POST['textarea'];
     
    if(!empty($name) && !empty($mail) && !empty($phone) && !empty($sub) && !empty($comment))
    {
        $sql="INSERT INTO contact_tb (cname,cmail,cphone,csubject,ccomment) VALUES ('$name','$mail','$phone','$sub','$comment')";		
        $result=mysqli_query($con, $sql);
        if($result){
            echo "<script>alert('Message Sent Successfully')</script>";
            header("location:contact.php");
        }
        else{
            echo "<script>alert('Message not Sent')</script>";
        }
     }else{
        echo "<script>alert('Please fill the fields ')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>

<body>
   <?php
       include "./include/nav.php";
   ?>


    <!-- loader -->
     <div class="loader"></div>
    <!-- loader -->


    <section class="contact">
        <div class="container">
            <div class="contact-row">
                <div class="col">
                    <h4>contact</h4>
                    <div class="contact-details">
                        <div class="contact-box">
                            <h5>Our Address:</h5>
                            <ul>
                                <li><i class="fa fa-location-pin"></i> 27 Ibolo, Obosi</li>
                                <li><i class="fa fa-location-pin"></i> 27 Ibolo, Obosi</li>
                            </ul>
                        </div>
                        <div class="contact-box">
                            <h5>Call Us:</h5>
                            <ul>
                                <li><i class="fa fa-phone"></i> +234 9014-0950-07</li>
                                <li><i class="fa fa-phone"></i> +234 9014-0950-07</li>
                            </ul>
                        </div>
                        <div class="contact-box">
                            <h5>EMail Address</h5>
                            <ul>
                                <li><i class="fa fa-envelope"></i> chigoziedomnic@gmail.com</li>
                                 <li><i class="fa fa-envelope"></i> chigoziedomnic@gmail.com</li>
                            </ul>
                        </div>
                        <div class="contact-media">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="spanTwo">
                    <h4>Get in touch</h4>
                    <div class="form-group">
                        <form method="post" action="#">
                            <div class="input-box">
                                <input type="text" name="Pname" id="Pname" required>
                                <label>Name</label>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <div class="input-box">
                                <input type="email" name="Pmail" id="Pmail" required>
                                <label>Email</label>
                                <span><i class="fa fa-envelope"></i></span>
                            </div>
                            <div class="input-box">
                                <input type="tel" name="Pphone" id="Pphone" required>
                                <label>Phone</label>
                                <span><i class="fa fa-phone-flip"></i></span>
                            </div>
                            <div class="input-box">
                                <input type="text" name="Psub" id="Psub" required>
                                <label>Subject</label>
                                <span><i class="fa fa-pen-clip"></i></span>
                            </div>
                            <div class="textarea-box span-2">
                                <textarea name="textarea" id="textarea" required></textarea>
                                <label>Write a comment</label>
                            </div>
                            <button type="submit" name="send" class="contact-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1889775960003!2d6.800578774478352!3d6.105236927883617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104395a1247eabf7%3A0xcfcff05361e919f9!2sDon%20Bosco%20Technical%20Institue!5e0!3m2!1sen!2sng!4v1681900884770!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <?php
     include ("./include/footer2.php");
    ?>
    <script src="./js/nav.js"></script>
    <script src="./js/loader.js"></script>
</body>

</html>