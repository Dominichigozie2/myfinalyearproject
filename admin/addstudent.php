
<?php
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    session_start();
    include ("config.php");


    if(isset($_POST["submit"])){
        $uid = $_GET["id"];
        $id = $_REQUEST["uid"];

        
        $query = "SELECT * FROM allocation_tb WHERE name_id = '$id'";
        $res = mysqli_query($con, $query);
        $num = mysqli_num_rows($res);
    if($num >= 1){
         echo "<script> alert ('User_Id Already exit' )</script>";
    }else{
        $sql = "INSERT INTO allocation_tb(property_id, name_id) values('$uid', '$id')";
        $result=mysqli_query($con, $sql);
        if($result){
            echo "<script>alert('successful')</script>";
            header("Location:room.php");
        }
        else{
            echo "<script>alert('Not successful')</script>";
            header("Location:room.php");
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
    <link rel="stylesheet" href="./css/user.css">
    <link rel="stylesheet" href="./css/room.css">
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

        <div class="users-table">
        <?php
                    $que = "SELECT * FROM `user` WHERE utype = 'student'";
                    $result = mysqli_query($con,$que);

                    $num = mysqli_num_rows($result);
                    $numberPages= 10;
                     $totalPages = ceil($num/$numberPages);
                    for($btn=1;$btn<= $totalPages; $btn++){
                        echo '<button class="btn-b"><a href="addstudent.php?page='.$btn.'">'.$btn.'</a></button>';
                    }
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        // echo $page;
                    }else{
                        $page = 1;
                    }
                    $startinglimit = ($page-1)*$numberPages;
                    $sql = "SELECT * FROM user WHERE utype = 'student' LIMIT ".$startinglimit.','.$numberPages;
                    $query = mysqli_query($con, $sql);
                    while( $row = mysqli_fetch_array($query)){
                    ?>


                    <form method="post" class="form-group">
                        <input class="form-control" type="text" name="name" value="<?php
                            echo $row['1'];
                        ?>">        
                        <input class="form-control" type="text" name="mail" value="<?php
                            echo $row['2'];
                        ?>">        
                        <input class="form-control" type="text" name="pass" value="<?php
                            echo $row['3'];
                        ?>">        
                        <input class="form-control" type="text" name="uid" value="<?php
                            echo $row['6'];
                        ?>">        
                        <input type="submit" value="Add" name="submit">        
                    </form>
                <?php
            }
                ?>
    </div>


        
        <!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
		

<!-- ====================custom js======================== -->
        <script src="./js/custom.js"></script>
<!-- ====================custom js======================== -->


</body>
</html>