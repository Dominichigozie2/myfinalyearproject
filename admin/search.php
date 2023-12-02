<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
include("config.php");

  $query = $_GET['query']; // Get the search query
  $table = $_GET['table'];

  // Perform the search based on the selected table
$result = '';
if ($table === 'user') {
    // Search in the user table using "uname"
    $result = searchUser($query);
} else if ($table === 'property') {
    // Search in the property table using "utitle"
    $result = searchProperty($query);
} else if ($table === 'feed') {
    // Search in the feed table using "u=cname"
    $result = searchFeed($query);
} else {
    $result = 'Invalid table selected.';
}

echo $result;

function searchUser($query) {
    global $con;
    // Perform search in the "user" table using "uname"
    // Replace this with your actual database query
    $sql = "SELECT * FROM user WHERE uname LIKE '%$query%'";
    $result = $con->query($sql);

    // Process the search result
    $output = "Searching in user table for uname: $query\n";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $output .= "User ID: " . $row["uid"] . ", Username: " . $row["uname"] . "\n";
        }
    } else {
        $output .= "No results found.";
    }

    return $output;
}
function searchProperty($query) {
    global $con;
    // Perform search in the "property" table using "utitle"
    // Replace this with your actual database query
    $sql = "SELECT * FROM property WHERE utitle LIKE '%$query%'";
    $result = $con->query($sql);

    // Process the search result
    $output = "Searching in property table for utitle: $query\n";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $output .= "Property ID: " . $row["pid"] . ", Title: " . $row["utitle"] . "\n";
        }
    } else {
        $output .= "No results found.";
    }

    return $output;
}
function searchFeed($query) {
    global $con;
    $sql = "SELECT * FROM feed_tb WHERE cname LIKE '%$query%'";
    $result = $con->query($sql);

    // Process the search result
    $output = "Searching in feed table for cname: $query\n";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $output .= "Feed ID: " . $row["cid"] . ", Cname: " . $row["cname"] . "\n";
        }
    } else {
        $output .= "No results found.";
    }

    return $output;
}
// Close the database connection
$con->close();
?>

















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