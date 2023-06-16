<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
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
            <?php
            if (isset($_GET['msg']))
                echo $_GET['msg'];
            ?>
            <caption>Property List</caption>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>rooms</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $sql = "SELECT * FROM `property`";
                $result = mysqli_query($con, $sql);

                $num = mysqli_num_rows($result);
                $numberPages = 10;
                $totalPages = ceil($num / $numberPages);
                for ($btn = 1; $btn <= $totalPages; $btn++) {
                    echo '<button class="btn-b"><a href="property.php?page=' . $btn . '">' . $btn . '</a></button>';
                }
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $startinglimit = ($page - 1) * $numberPages;
                $sql = "SELECT * FROM property WHERE uid = uid LIMIT ".$startinglimit.','.$numberPages;
                $query = mysqli_query($con, $sql);
                // $_SESSION['uid'];
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td data-cell="Title"><?php
                                                echo $row[1];
                                                ?></td>
                        <td data-cell="Location"><?php
                                                    echo $row[2];
                                                    ?></td>
                        <td data-cell="Price"><?php
                                                echo $row[3];
                                                ?></td>
                        <td data-cell="Rooms"><?php
                                                echo $row[4];
                                                ?></td>
                        <td data-cell="Duration"><?php
                                                    echo $row[15];
                                                    ?></td>
                        <td data-cell="Action" class="prop-btn"><a href="propertyupdate.php?id=<?php
                                                                                echo $row[0];
                                                                                ?>><button class=" action">Update</button></a><a href="propertydelete.php?id=<?php
                                                                                echo $row[0];
                                                                                ?>><button class=" action">Delete</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
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