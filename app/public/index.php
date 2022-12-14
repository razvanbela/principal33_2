<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <link href="main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
<div class="container">
    <div class="calendar">
        <div class="month">
            <div class="prev"><</div>
            <div class="date">
                <h1></h1>
                <p></p>
            </div>
            <div class="next">></div>
        </div>
        <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>
        <div class="days">
        </div>
    </div>
    <div class="reservation">
        <h1>Reservation</h1>
        <div>
            <?php
            include "reserv.php";
            ?>
        </div>

    </div>
    <div>
        <?php
        include "insert_data_login.php";
        echo '<a href="logout.php">LOGOUT</a>';
        ?>

    </div>
</div>
<script src="main.js"></script>
</body>
</html>
