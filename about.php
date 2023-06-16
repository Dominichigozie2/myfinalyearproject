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
    <title>About Page</title>
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <?php
    include "./include/nav.php";
    ?>


    <!-- loader -->
    <div class="loader"></div>
    <!-- loader -->


    <section class="about">
        <div class="container">
            <div class="banner"></div>
            <h1>About Us</h1>
            <div class="about-container">
                <div class="about-content">
                    <p>
                        Welcome to [Company Name], a leading provider of student hostel management solutions. We specialize in innovative software designed to streamline the allocation process, enhance operational efficiency, and prioritize student safety. With customizable solutions, seamless integration, and dedicated support, we empower educational institutions to optimize resources and create an exceptional living experience for students. Join us as we transform the way hostels are managed, ensuring student success and satisfaction.</p>
                    <div class="about-image">
                        <img src="./image/mul.svg" alt="" srcset="">
                    </div>
                </div>
            </div>

            <!-- service -->
            <section class="services overflow">
                <div class="ser-container">
                    <h4 class="header">we provide the <span>Best services</span></h2>
                        <br>
                        <br>
                        <div class="service-container">
                            <div class="services-box fade-from-right">
                                <div class="icon warning">
                                    <i><img src="./video/roommate.gif" alt=""> </i>
                                </div>
                                <h4><b>Booking and Reservation Management</b></h4>
                                <p class="service-text"> The system handles the booking and reservation process for students, allowing them to check the availability of rooms, make reservations, and view their booking details. It manages the allocation of rooms, tracks reservations, and handles cancellations or modifications when necessary. The system also provides notifications to students regarding their booking status and any updates related to their accommodation.</p>
                            </div>
                            <div class="services-box fade-from-right">
                                <div class="icon warning">
                                    <i><img src="./video/9284457.gif" alt=""> </i>
                                </div>
                                <h4><b>Room Assignment and Allocation</b></h4>
                                <p class="service-text">The system automates the process of assigning rooms to students based on their preferences, availability, and any specific requirements. It considers factors such as room types (single, double, shared), amenities proximity to facilities, and roommate compatibility. The system ensures fair and efficient room assignments, taking into account student preferences and optimizing occupancy rates. </p>
                            </div>
                            <div class="services-box fade-from-right">
                                <div class="icon warning">
                                    <i><img src="./video/security.gif" alt=""> </i>
                                </div>
                                <h4><b>Incident Reporting and Tracking</b></h4>
                                <p class="service-text"> The system can provide a platform for students, staff, or visitors to report security incidents, suspicious activities, or safety concerns. It can include a dedicated reporting module where users can submit detailed information, attach relevant evidence (such as photos or videos), and track the progress of their reported incidents. This helps ensure that security-related issues are promptly addressed and properly documented.</p>
                            </div>
                            <div class="services-box fade-from-right">
                                <div class="icon warning">
                                    <i> <img src="./video/info.gif" alt=""> </i>
                                </div>
                                <h4><b>Communication and Feedback</b></h4>
                                <p class="service-text">The system facilitates communication between students and hostel administrators. It provides a platform for students to submit inquiries, request maintenance services, or report any issues related to their accommodation. Additionally, the system can gather feedback from students regarding their living experience, enabling administrators to address concerns and make improvements based on student input. </p>
                            </div>
                        </div>
                </div>
            </section>
        </section>
            <?php
            include("./include/footer.php");
            ?>

            <script src="./js/nav.js"></script>
            <script src="./js/loader.js"></script>
</body>

</html>