<?php

//session_start();
//xdebug_info();
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
            <form action="" method="POST">
                <div>
                    <label for="location">Location</label>
                    <select name="location" id="location">
                        <?php

                        //if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                        //    $idLocation = isset($_GET['id_location']) ? $_GET['id_location'] : null;
                        //    global $pdo;
                        //    $stmt = $pdo->prepare("SELECT * FROM location");
                        //    $stmt->execute();
                        //    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        //    $c = 1;
                        //    while ($row = $stmt->fetch()) {
                        //        echo "<option value=\"$c\">$row[adress]</option> ";
                        //        $c++;
                        //    }
                        //}
                        ?>
                    </select>
                </div>
                <input type="submit" name="reserv" value="Reserv">
                </select>
            </form>
        </div>

    </div>
</div>
<script src="main.js"></script>
</body>
</html>
