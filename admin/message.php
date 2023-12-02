
<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    session_start();
    include ("config.php");
    $msg = "";
    $error = "";
    if(isset($_POST['send'])){
     $name = $_POST['msub'];
     $text = $_POST['mtext'];
     $sender_id = $_SESSION["id"];
     $sdate = date("Y-m-d H:i:s");
     if(!empty($name) && !empty($text) && !empty($sender_id)){
        $sql = "INSERT INTO notifications(sender_id, msg, Heading, sdate) VALUES ('$sender_id', '$text','$name','$sdate')";
        $result = mysqli_query($con, $sql);
        if ($result){
            $msg = "Sent Successfully";
        }else{
            $error = "Declined";
        }
     }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/message.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web (1)/fontawesome-free-6.1.1-web/css/all.css">
    <!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
</head>
<body>
        <?php
            include "./include/header.php";
        ?>


<section class="contact">
            <div class="contact-row">
                <div class="spanTwo">
                    <h4>Send Messages</h4>
                    <?php echo $error; ?>
                    <?php echo $msg; ?>
                    <br>
                    <div class="form-group">
                    <form method="post" enctype="multipart/form-data">
                            <div class="input-box span-2">
                                <input type="text" name="msub" id="Pname" required>
                                <label>Subject</label>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <div class="textarea-box span-2">
                                <textarea name="mtext" id="textarea" required></textarea>
                                <label>Write a comment</label>
                            </div>
                            <button type="submit" name="send" class="contact-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
</body>
</html>