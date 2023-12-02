
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
    <link rel="stylesheet" href="./css/user.css">
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
            <table class="table table-striped table-responsive">
              <caption>Users List</caption>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>User_id</th>
                  <th>Gender</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $que = "SELECT * FROM `user` WHERE utype = 'student'";
                    $result = mysqli_query($con,$que);

                    $num = mysqli_num_rows($result);
                    $numberPages= 10;
                     $totalPages = ceil($num/$numberPages);
                    for($btn=1;$btn<= $totalPages; $btn++){
                        echo '<button class="btn-b"><a href="users.php?page='.$btn.'">'.$btn.'</a></button>';
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
                    <tr>
                    <td data-cell="name"><?php
                        echo $row[1]; echo " "; echo $row[12];
                    ?></td>
                    <td data-cell="Mail">
                    <?php
                        echo $row[2];
                    ?>    
                        </td>
                    <td data-cell="Phone"><?php
                        echo $row[4];
                    ?></td>
                    <td data-cell="user_id"><?php
                        echo $row[6];
                    ?></td>
                    <td data-cell="Gender"><?php
                        echo $row[8];
                    ?></td>
                    <td data-cell="Action"><a href="userdelete.php?uid=<?php
                        echo $row['0'];
                    ?>"><button class="action">Delete</button></a>
                    </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
       <div class="buttons">
       <button onclick="window.print()" type="button" class="p-btn">Print !</button>
        <br>
        <a href="message.php" class="p-btn">Message</a>
       </div>
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