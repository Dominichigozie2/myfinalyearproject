


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
            <caption>Student Proposal List</caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gnder</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $sql = "SELECT * FROM `hostelproposal`";
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

                $sql = "SELECT * FROM hostelproposal WHERE prop_id = prop_id LIMIT ".$startinglimit.','.$numberPages;
                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query)) {

                    $name = $row['5'];
                ?>
                    <tr>
                        <td data-cell="Name">
                        <?php
                            $sq = "SELECT * FROM user WHERE user_id = '$name'";
                            $query_run = mysqli_query($con, $sq);
                            if($roll = mysqli_fetch_array($query_run)) {
                                echo $roll['1'];                                       
                            }
                        ?>
                                                </td>
                        <td data-cell="Gender"><?php
                                                    echo $row[1];
                                                    ?></td>
                        <td data-cell="Price"><?php
                                                echo $row[2];
                                                ?></td>
                        <td data-cell="Department"><?php
                                                echo $row[4];
                                                ?></td>
                        <td data-cell="Action" class="prop-btn"><a href="action.php?id=<?php
                                                                                echo $row[0];
                                                                                ?>"><button class="action">Add</button></a><a href="propdelete.php?id=<?php
                                                                                echo $row[0];
                                                                                ?>"><button class="action">Delete</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

